<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Questions extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
		$this->load->model('Questions_model','questions');


    }

    public function index(){
        $data['title'] = 'Proforments';
        $this->theme->views('back.pages.questions.list-person',$data);
    }

    public function questionsbehavior($type){
        // $class = $this->session->userdata('class');
        // รูปแบบแบบประเมิน
        // if($class == 1){
        //  $type = 2;
        // }elseif($class == 2){
        //  $type = 3;

        // }
        $data['title'] = 'Questions';
        $data['title_list'] = $this->questions->gettitles($type);
        $data['questions'] = $this->questions->getQuestion();
        $this->theme->views('back.pages.questions.questions',$data);
    }

    public function questionsperformance($type){
        // $class = $this->session->userdata('class');
        // รูปแบบแบบประเมิน
        // if($class == 1){
        //  $type = 2;
        // }elseif($class == 2){
        //  $type = 3;
        // }
        $data['title'] = 'Questions';
        $data['title_list'] = $this->questions->gettitles($type);
        $data['questions'] = $this->questions->getQuestion();
        $this->theme->views('back.pages.questions.questions',$data);
    }



    public function answers(){
        // เอาเช็คว่าถ้าตอบไม่หมดไม่สามารถส่งคำตอบได้
        // $answers = $this->input->post('answers');
        // if(isset($answers)){
        // echo count($answers);
        // }
        // foreach($answers as $ind){
        //     $ch_ans = $answers[$ind];
        //     $this->form_validation->set_rules("answers[".$ind."]", 'Answers', 'required');
            
        // } 
        // if ($this->form_validation->run() == FALSE)
        // {
        //         echo 'false';
        // }
        // else
        // {
        //         echo 'true';
        // }
        $who_is = $this->input->post('who_is');
        $by_is = $this->input->post('by_is');
        $answers = $this->input->post('answers');
        $questions_no = $this->input->post('question_number');
        // $type_form = $this->input->post('type_form');
        // var_dump($answers);
        for($i = 1;$i<=count($answers);$i++){
            // echo $i.'>'.$answers[$i].'</br>';
            $data[] = [
                // 'type_id' =>$type_form[$i],
                'question_id' => $questions_no[$i],
                'time_id' => 1,
                // 'score' => ($answers[$i] != null) ? $answers[$i] : 0,
                'score' => $answers[$i],// ปัญหานี้แก้โดนเราให้ตอบทุกข้อถ้าไม่ตอบให้แจ้งเตือน
                'who_is' => $who_is, // id ว่าประเมินให้ใคร
                'by_is' => $by_is, //id ว่าใครประเมินให้
                'updated_time' => date('Y-m-d H:i:s')
            ];
            // ($result['permissions'] == 'admin') ? true : false;
            
        }
        // insert data to answers table
        $result = $this->db->insert_batch('answers',$data);
        
    }
    // ---------------------------------- Show เพื่อนที่ต้องประเมินแบบสมมรรถนะ ---------------------------------
    // Show เพื่อนที่ต้องประเมินแบบสมมรรถนะ
    public function random_performance_person(){
        // $by_is = $this->;
        $data['title'] = 'Person_performance';
        $data['person'] = $this->questions->getrandomPerson(0);
        $this->theme->views('back.pages.questions.random-performance-person',$data);

    }
    // show เเบประเมินสมถรรนะ
    public function questions_performance_person($who_is,$by_is,$classperson){
        // echo $who_is;
        // echo $by_is;
        // echo $classperson;
        // $classperson = 2;
        $data['title'] = 'Questions';
        $data['title_list'] = $this->questions->gettitles($classperson);
        $data['questions'] = $this->questions->getQuestion();
        $this->theme->views('back.pages.questions.performance-questions',$data);
    }
    // --------------------- end Show เพื่อนที่ต้องประเมินแบบสมมรรถนะ ---------------------------
    // -------------------------- Show เพื่อนที่ต้องประเมินแบบสมมรรภภาพ ---------------------------
    // Show เพื่อนที่ต้องประเมินแบบสมมรรภภาพ
    public function random_behavior_person(){
    $data['title'] = 'Person_behavior';
    $data['person'] = $this->questions->getrandomPerson(1);
    $this->theme->views('back.pages.questions.random-behavior-person',$data);

    }
    public function questions_behavior_person($who_is){

        $data['title'] = 'Questions';
        $data['who_is'] = $who_is;
        // $data['by_is'] = $this->session->id;
        $data['title_list'] = $this->questions->gettitle_questionbehavior();
        $data['questions'] = $this->questions->getQuestion();
        $this->theme->views('back.pages.questions.behavior-questions',$data);
    }
    public function answersbehavior(){
        $type_form = 1; //แบบประเมินสมรรภนะ
        $who_is = $this->input->post('who_is');
        $by_is = $this->session->id;
        $answers = $this->input->post('answers');
        $questions_no = $this->input->post('question_number');
        for($i = 0;$i<count($answers);$i++){
            $data[] = [
                'type_id' =>$type_form,
                'question_id' => $questions_no[$i],
                'time_id' => 1,
                'score' => $answers[$i],// ปัญหานี้แก้โดนเราให้ตอบทุกข้อถ้าไม่ตอบให้แจ้งเตือน
                'who_is' => $who_is[$i], // id ว่าประเมินให้ใคร
                'by_is' => $by_is, //id ว่าใครประเมินให้
                'updated_time' => date('Y-m-d H:i:s')
            ];         
        }
        $this->questions->sentanswersbehavior($data);
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
    }
}