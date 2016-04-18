<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/15
 * Time: 16:02
 */
class Ajax_model extends MY_Model
{

    function __construct()
    {
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


    public function getmaterial(){
        $data=$this->db->select()->from('material')->get()->result_array();
        if (!$data){
            return 1;
        }else{
            return $data;
        }
    }

    public function getunit(){
        $data=$this->db->select()->from('unit')->get()->result_array();
        if (!$data){
            return 1;
        }else{
            return $data;
        }
    }

    public function get_supplier(){
        $data=$this->db->select('b.id,b.name')
            ->from('users a')
            ->join('supplier_profile b','b.masterid = a.id')
            ->where('a.status',2)
            ->get()->result_object();
        return $data;
    }

}
