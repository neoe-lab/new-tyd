<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Questions_model extends CI_Model {

   public function getQuestion(){
       $results =  $this->db->query("SELECT * FROM question_list");
       return $results;
   }
   public function gettitles(){
    $class = $this->session->class_id;
    // $class = 'C0';
    switch($class) {
		// แบบประเมินสมรรถนะ ระบบที่ 1,2,3
		case 'C2' : $results= $this->db->query("SELECT * FROM title_list t where t.type_id = 0 AND t.class_id IN(0,1,2)"); break;
		// แบบประเมินสมรรถนะ ระบบที่ 1,2
		case 'C1' : $results= $this->db->query("SELECT * FROM title_list t where t.type_id = 0 AND t.class_id IN(0,1)"); break;
		// แบบประเมินสมรรถนะ ระบบที่ 1
        case 'C0' : $results= $this->db->query("SELECT * FROM title_list t where t.type_id = 0 AND t.class_id IN(0)"); break;
		// แบบประเมินพฤติกรรม จริยธรรม
        // case 0 : $results= $this->db->query("SELECT * FROM title_list where type_id = 1"); break;
        default : $results= $this->db->query("SELECT * FROM title_list t where t.type_id = 0 AND t.class_id IN(0)"); break;		
	}
    return $results;
    }

    // public function class_title(){
    //     $results= $this->db->query("SELECT * FROM title_list where class_id = 1");
    //     return $results;
    // }
    
    public function gettitle_questionbehavior(){
        $results= $this->db->query("SELECT * FROM title_list where type_id = 1");
        return $results;

    }
         // type_from 0 => สมรรถนะ , 1 => สมรรถภาพ
         // แสดงข้อมูลที่แรมดอม
    public function getrandomPerson($type_from){
        $by_is = $this->session->id;
        $results =  $this->db->query("SELECT rp.id,p1.id as who_id,concat(p1.pname,p1.fname,' ',p1.lname) as who_is,p2.id as by_id,concat(p1.pname,p2.fname,' ',p2.lname) as by_is,ac.class_id,t.year,t.semesters,rp.active FROM random_person rp
        INNER JOIN profiles p1 ON rp.who_id = p1.id
        INNER JOIN profiles p2 ON rp.by_id = p2.id
        INNER JOIN accounts ac ON p2.id = ac.id
        INNER JOIN time_list t ON rp.time_id = t.id
        WHERE rp.by_id = $by_is AND rp.type_id = $type_from");
       return $results->result();
    }

    public function sentanswersbehavior($data,$type_from){
        //  echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        // echo $data[0]['who_is'];
        // exit;
        // $this->db->insert_batch();
        $by_is = $this->session->id;
        $who_is = $data[0]['who_is'];
        $set = $this->db->insert_batch('answers', $data);
        $updata = $this->db->query("UPDATE random_person SET active = '1' WHERE type_id = $type_from AND who_id = $who_is AND by_id = $by_is AND time_id = 1");
        if($set && $updata){
            $results = true;
        }else{
            $results = false;
        }
        return $results;

    }
}

