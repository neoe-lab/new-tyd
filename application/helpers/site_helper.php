<?php

if(!function_exists('check_active_login')){
    function check_active_login(){
        $ci = get_instance();
        if (!$ci->session->logged_in){
            // $this->session->set_flashdata('error', 'ไม่สิทธิการเข้าถึง');
            redirect('auth', 'refresh');
            return false;
        }
    }
}

if(!function_exists('check_access_user')){
    function check_access_user(){
        $ci = get_instance();
        $check = $ci->db->select('*')->from('access acs')
        ->join('menu m','m.id = acs.menu_id','left')
        ->where(['acs.permission_id'=> $ci->session->permissions] )
        ->get()->row_array();

        if(!$check){
            // echo "Access denied";
            // return false;
            redirect('Unauthorized');
        }
        // return $check;
        // echo "Access denieds";

    }

}

function main_menu(){
    $ci = get_instance();
    $main_menu = $ci->db->select('m.*,acs.access,acs.create,acs.edit,acs.delete')
    ->from('menu m')
    ->join('access acs','acs.menu_id = m.id','left')
    ->where(['acs.permission_id' => $ci->session->permissions,'m.active'=> '1','parent_id' => 0])
    ->order_by('m.order_by','parent_id')
    ->get()->result();

    return $main_menu;
}

function sub_menu($main_id){
    $ci = get_instance();
    $sub_menu = $ci->db->select('m.*,acs.access,acs.create,acs.edit,acs.delete')
    ->from('menu m')
    ->join('access acs','acs.menu_id = m.id','left')
    ->where(['acs.permission_id' => $ci->session->permissions,'m.active'=> '1','parent_id ' => $main_id ])
    ->get()->result();
    return $sub_menu;
}