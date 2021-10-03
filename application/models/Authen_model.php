<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authen_model extends CI_Model
{
    // function check_users($username,$password){
    //     $this->db->select("* ,concat(p.pname,p.fname,' ',p.lname) as fullname");
    //     $this->db->from('accounts');
    //     $this->db->join('profiles p','accounts.profile = p.id','inner');
    //     $this->db->where('username',$username);
    //     $this->db->where('password',md5($password));
    //     $query = $this->db->get();
    //     return $query;

    // }

    public function resolve_admin_login($username, $password) {
       
		
		$this->db->select('password');
		$this->db->from('accounts');
		$this->db->where('username', $username);
		$hash = $this->db->get()->row('password');
		return $this->verify_password_hash($password, $hash);
		
	}

    private function verify_password_hash($password, $hash) {
		return password_verify($password, $hash);
	}


    public function get_admin_from_username($username) {
        $this->db->select("* ,concat(p.pname,p.fname,' ',p.lname) as fullname,ac.id");
        $this->db->from('accounts ac');
        $this->db->join('profiles p','ac.profile = p.id','inner');
        $this->db->join('permissions ps','ac.permission_id = ps.id','inner');
        $this->db->where('ac.username',$username);
        $query = $this->db->get()->row();
        return $query;
		
	}










    // public function auth()
    // {
    //     $check = $this->db->get_where('accounts', ['username' => $this->input->post('username')])->row_array();
    //     var_dump($check);

        
    //     if ($check) {
    //         if ($check['status'] == '1') {
    //             $this->session->set_flashdata('warning', '<div class ="alert alert-danger role=alert">account for you is blocker!!,contact admin plasess.. </div>');
    //             return "fail login";
    //             redirect(base_url());
    //         } else {
    //             // $check_password = $this->db->get_where('account', ['username' => $check['username'], 'password' => $this->input->post('password', true)])->row_array();
    //             $check_password = $this->db->select('p.pn,concat(p.prefix,p.fname," ",p.lname) as fullname,p.address,p.phone,p.email,r.role_name')
    //             ->from('profiles p')->join('account a','a.an = p.account','left')
    //             ->join('role r','r.rn = a.role','left')
    //             ->join('department d','d.dn = p.department','left')
    //             ->join('position ps','ps.pn = p.position','left')
    //             ->where(['a.username'=> $check['username'],'a.password'=>$this->input->post('password',true)])
    //             ->get()->row_array();
    //             if ($check_password) {
    //                 $this->session->success_login = true;
    //                 $this->session->set_userdata(['role'=> $check_password['role_name'],'fullname'=>$check_password['fullname']]);


    //                 $this->db->where('username', $check['username'])->update('account', ['fail_pass' => 0, 'last_login' => date('Y-m-d H:i:s')]);
    //                 return "success login";
    //                 redirect(base_url().'dashboard');
    //             } else {
    //                 $this->db->set('fail_pass', 'fail_pass + 1', false)->where('username', $check['username'])->update('account');
    //                 $check_fail = 2 - $check['fail_pass'];
    //                 if ($check['fail_pass'] == 2) {
    //                     $this->db->where('username', $check['username'])->update('account', ['status' => '1']);
    //                     $this->session->set_flashdata('warning', '<div class ="alert alert-danger role=alert">account for you is blocker!!,contact admin plasess.. </div>');
    //                 } else {
    //                     $this->session->set_flashdata('warning', '<div class ="alert alert-danger role=alert">password for you fail...,plases success' . $check_fail . '</div>');
    //                 }
    //                 return "fail login";
    //                 redirect(base_url());
    //             }
    //         }
    //     } else {      return "test";
    //         $this->session->set_flashdata('warning', 'username or password fail');
    //         return "fail login";
    //         redirect(base_url());
    //     }
    // }
    // public function index_login()
    // {
    //     return 'test2';
    // }
}
