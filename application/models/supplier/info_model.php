<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/15
 * Time: 9:12
 */
class Info_model extends MY_Model
{

    function __construct(){
        parent::__construct();
    }

    public function getprovince(){
        $data=$this->db->select()->from('province')->get()->result_array();
        if (!$data){
            return 1;
        }else{
            return $data;
        }
    }

    public function getcity($code){
        $data=$this->db->select()->from('city')->where('provincecode',$code)->get()->result_array();
        if (!$data){
            return 1;
        }else{
            return $data;
        }
    }

    public function saveimg(){
        $config['upload_path']="./imgs/";
        $config['allowed_types']="jpg|gif|png|jpeg";
        $config['file_name']=uniqid();
        //$config['encrypt_name']=true;
        $this->load->library('upload',$config);
        if( !$this->upload->do_upload('file')){
            return 3;  //文件上传失败
        }
        $data=$this->upload->data();
    }

}