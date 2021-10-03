<?php
// header('Access-Control-Allow-Origin: *');
// header("Access-Control-Allow-Methods: GET, OPTIONS");
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		check_active_login();
		check_access_user();
    }
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
	public function index()
	{
		// echo '<pre>';
		// var_dump(check_access_user());
		// echo '</pre>';
		// exit;
		// $this->load->view('test');
		// $this->theme->views('back.pages.dashboard');
	}


	// public function __construct()
    // {
    //     parent::__construct();
	// 	$this->load->model('behavior_model','behavior');
    // }
	// public function index()
	// {
	// 	$data['username'] = 'นายอิควรรณ หะยีดือราเฮง';
    //     $data['title'] = 'โรงพยาบาลทุ่งยางแดง';
	// 	$data['test'] = $this->behavior->rowdata();
		
	// 	//  var_dump($data);
	// 	// print_r($data);
	// 	$this->theme->views('back.pages.behavior',$data);
	// 	// $query = $this->behavior->rowData();

	// 	// foreach ($query->result() as $row)
	// 	// {
	// 	// 		echo $row->bn.' '.$row->detail.'<br>';
	// 	// }

	// }
}
