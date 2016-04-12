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
    function check_login()
    {
        $user= $this->input->post('user_name');
        $pwd=$this->input->post('pwd');
        $res=$this->db->select()
            ->from('users')
            ->where('username',$user)
            ->where('password',md5($pwd))
            ->get()->row_array();
        if (!$res) {
            return 1;
        }
        else
        {
            return $res;
        }
    }
}