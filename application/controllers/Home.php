<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


    public function __construct()
    {
        parent::__construct();
		$this->load->model('menu_model','menu');
		check_active_login();
		// check_access_user();
    }

	public function index()
	{
		// if ($this->session->userdata('admin_login') != 1){
		// 	$this->session->set_flashdata('error', 'ไม่สิทธิการเข้าถึง');
        //     redirect('auth', 'refresh');
		// }
		// echo '<pre>';
		// var_dump(check_access_user());
		// echo '</pre>';
		// exit;
		// $data['main_menu'] = main_menu();
		// $data['sub_menu'] = sub_menu();
		$data['title'] = 'Home';
		$this->theme->views('back.pages.home',$data);
		
	}
}
