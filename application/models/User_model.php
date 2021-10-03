<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

   private $table = 'profiles';
   
   public function getUsers()
   {
      return $this->db->get($this->table)->result();
   }

}

/* End of file Category_model.php */
