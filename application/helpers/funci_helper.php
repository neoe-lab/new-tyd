<?php

function check_already_login(){
    $ci =& get_instance();
    $account_session = $ci->session->userdata('username');
    if($account_session){
        redirect('admin');
    }
}

function check_not_login(){
    $ci =& get_instance();
    $account_session = $ci->session->userdata('username');
    if(!$account_session){
        redirect('auth.login');
    }
 
}

function check_admin(){
    $ci =& get_instance();
    $ci->load->library('fungsi');
    if($ci->fungsi->user_login()->level != 1){
        redirect('index.php/profiles');
    }
}