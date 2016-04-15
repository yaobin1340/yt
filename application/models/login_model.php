<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

/**
* 
*/
class Login_model extends MY_Model
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
                      ->where('password',sha1($pwd))
                      ->where('status >',0)
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