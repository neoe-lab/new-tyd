<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Authen_model', 'Authen');
	}
	public function index()
	{
		// $account_session = $this->session->userdata('username');
		// if($account_session){
		// 	redirect('admin');
		// }else{
		// $this->theme->views('auth.login');
		// }
		// echo 'dd'.$this->session->logged_in;
		if($this->session->logged_in == true){
			redirect('home');
		}else{
			$data['flash'] = $this->session->flashdata('item');
			$this->theme->views('auth.login', $data);
		}
		
	}

	/*** Function cek for multiple login ***/
	public function validate()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if ($this->Authen->resolve_admin_login($username, $password)) {
			$data = $this->Authen->get_admin_from_username($username);
			// echo '<pre>';
			// print_r($data);
			// echo '</pre>';

			// exit;

			$setdata = array(
				'admin_login' => ($data->permission_id != 1 ? 3 : 1),
				'id' => (int)$data->id,
				'fullname' => $data->fullname,
				'username' => (string)$data->username,
				'class' => (int)$data->class_id,
				'permissions' => (int)$data->permission_id,
				'logged_in' => (bool)true,
			);
			$this->session->set_userdata($setdata);
			if ($data->permission_id == 1) {
				redirect('home','refresh');
			} else {
				redirect('home','refresh');
			}
		} else {
			$this->session->set_flashdata('error', 'Login error email or password');
			redirect('auth', 'refresh');
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}


	// public function login()
	// {
	// 	$username = $this->input->post('username',TRUE);
	// 	$password = $this->input->post('password',TRUE);
	// 	$result	  = $this->Authen->check_users($username,$password);

	// 	// var_dump($result);
	// 	// die;

	// 	if($result->num_rows() > 0 ){
	// 		$data = $result->row_array();
	// 		$id = $data['id'];
	// 		$username = $data['username'];
	// 		$fullname = $data['fullname'];
	// 		$permissions = $data['permissions'];
	// 		$class = $data['class'];
	// 		$status =$data['status'];
	// 		$setdata = array(
	// 			'id' => $id,
	// 			'username' => $username,
	// 			'fullname' => $fullname,
	// 			'permissions' => $permissions,
	// 			'class' => $class,
	// 			'status' => $status,
	// 			'logged_in'=> TRUE
	// 		);
	// 		$this->session->set_userdata($setdata);
	// 		if($permissions === 'admin'){
	// 			redirect('admin');

	// 		}elseif($permissions === '2'){
	// 			redirect('Admin');


	// 		}elseif($permissions === '3'){
	// 			redirect('Admin');


	// 		}elseif($permissions === '4'){
	// 			redirect('Admin');


	// 		}elseif($permissions === '5'){
	// 			redirect('Admin');


	// 		}elseif($permissions === '6'){
	// 			redirect('Admin');


	// 		}else{
	// 			redirect('User');
	// 		}
	// 	}else{
	// 		// echo "<script>alert('access denied');history.go(-1);</script>";
	// 		$this->session->set_flashdata('item', 'รหัสผิด');
	// 		// $this->theme->views('auth.login');
	// 		redirect('auth');

	// 	}
	// 	$this->theme->views('auth.login');
	// }









}
