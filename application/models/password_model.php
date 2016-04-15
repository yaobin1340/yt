<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/12
 * Time: 22:24
 */
class Password_model extends MY_Model
{

    function __construct()
    {
        parent::__construct();
    }
    function reset_password()
    {
        $pwd=$this->input->post('pwd_now');
        $newpwd=$this->input->post('pwd');
        $username=$this->session->userdata('username');
        $data=$this->db->select()->from('users')->where('username',$username)->where('password',sha1($pwd))->get()->row_array();

        if (!$data){
            return 3;
        }
        if (strlen($newpwd) < 6 || strlen($newpwd) > 15){
            return 2;
        }
        $res=$this->db->where('username',$username)->update('users',array('password'=>sha1($newpwd)));
        if ($res){
            return 1;
        }else{
            return 2;
        }

    }
}