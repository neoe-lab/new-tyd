<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Titles_Model extends CI_Model {

    public function Getdata(){
        $this->db->query('SELECT * FROM tilte_list');
    }
}