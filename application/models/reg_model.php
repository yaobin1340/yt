<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/19
 * Time: 19:20
 */
class Reg_model extends MY_Model
{

    function __construct(){
        parent::__construct();
    }

    function save_user(){
       if(!$this->input->post('user_name') || !$this->input->post('pwd')){
           return -1;
       }
        if(!in_array($this->input->post('reg_type'),array(2,3))){
            return -1;
        }

        $row=$this->db->select()->from('users')->where('username',$this->input->post('user_name'))->get()->row_array();
        if ($row){
            return -2;
        }

        $data=array(
            'username'=>$this->input->post('user_name'),
            'password'=>sha1($this->input->post('pwd')),
            'type'=>$this->input->post('reg_type'),
            'status'=>1,
            'cdate'=>date("y-m-d H:i:s",time())
        );
        $res=$this->db->insert('users',$data);

        if ($res){
            return $this->db->insert_id();
        }else{
            return -1;
        }

    }
}