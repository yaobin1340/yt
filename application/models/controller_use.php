<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/18
 * Time: 9:50
 */
class Controller_use extends MY_Model
{

    function __construct(){
        parent::__construct();
    }
    
    public function get_Latest_News(){
        $data=$this->db->select()->from('news')->order_by('id','desc')->get()->row_array();
        if (!$data){
            return 1;
        }else{
            return $data;
        }
    }
}