<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/14
 * Time: 8:15
 */
class Index_model extends MY_Model
{

    function __construct(){
        parent::__construct();
    }

    public function get_index_info(){
        $rs1 = $this->db->select('count(1) num')->from('execute')->where('status',2)->get()->row();
        $rs2 = $this->db->select('count(1) num')->from('users')->where('type',2)->where('status',2)->get()->row();
        $rs3 = $this->db->select('count(1) num')->from('users')->where('type',3)->where('status',2)->get()->row();
        $rs4 = $this->db->select('count(1) num')->from('change')->where('status',2)->get()->row();

        $rs5 = $this->db->select('a.id id,name')->from('supplier_profile a')
            ->join('users b','a.masterid=b.id','left')
            ->where('status',2)->order_by('cdate','desc')->limit(4)->get()->result_array();

        $data['e_count'] = $rs1->num;
        $data['s_count'] = $rs2->num;
        $data['p_count'] = $rs3->num;
        $data['c_count'] = $rs4->num;
        $data['s_list'] = $rs5;
        return $data;

    }

}