<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
   
   public function __construct()
   {
      parent::__construct();
      if($this->session->userdata('logged_in' !== TRUE)){
         redirect('auth');
      }
   }
   
   public function index()
   {
      if($this->session->userdata('permissions') === 'admin'){
         $data['title'] = 'Dashboard';
         $data['title'] = $this->session->userdata('fullname');
         $page = 'dashboard';
         $this->theme->views('back.pages.'.$page,$data);
      }else{
         echo "Access Denied!";
         
      }         
   }
   public function users()
   {
      // $data['title'] = 'manang user';
    //   $data['page'] = 'web/identity';
      $data['title'] = 'Users';
      $page = 'users.list-user';
      $data['datatable'] = 'users.user-datatable';
      $this->theme->views('back.pages.'.$page,$data);

   }

   public function titles(){
      $data['title'] = "Titles";
      $page = 'titles.data-title';
      $this->theme->views('back.pages.'.$page,$data);

   }

   public function departments(){
      $data['title'] = "Departments";
      $page = 'departments.list-departments';
      $this->theme->views('back.pages.'.$page,$data);
   }
}

/* End of file Admin.php */
