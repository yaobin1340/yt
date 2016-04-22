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

	public function check_profile($id,$type){
		if($type == 1){
			return true;
		}
		$rs1 = $this->db->select('count(1) num')->from('project_profile')->where('masterid',$id)->get()->row();
		$rs2 = $this->db->select('count(1) num')->from('supplier_profile')->where('masterid',$id)->get()->row();
		if($rs1->num + $rs2->num > 0){
			return true;
		}else{
			return false;
		}
	}

	public function get_profile_name($id,$type){
		if($type == 1){
			return '管理员';
		}
		if($type == 2){//供应商
			$rs = $this->db->select('name')->from('supplier_profile')->where('masterid',$id)->get()->row();
		}
		if($type == 3){//项目
			$rs = $this->db->select('name')->from('project_profile')->where('masterid',$id)->get()->row();
		}
		return $rs->name;

	}
}