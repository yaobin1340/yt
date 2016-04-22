<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/15
 * Time: 9:00
 */
class Index_model extends MY_Model
{

    function __construct(){
        parent::__construct();
    }

    public function get_index_info(){
        $rs1 = $this->db->select('count(1) num')->from('require')->get()->row();
        $profiel_id = $this->db->select('id')->from('supplier_profile')->where('masterid',$this->session->userdata('id'))->get()->row();
        $rs2 = $this->db->select('count(1) num')->from('contract_main')->where('sid',$profiel_id->id)->where('status',2)->get()->row();
        $rs3 = $this->db->select('count(1) num')->from('change')->where('sid',$profiel_id->id)->where('status',2)->get()->row();
        $rs4 = $this->db->select('d.name pro_name,a.id,b.name u_name,c.name m_name,a.cdate,a.size,a.num')->from('require a')
            ->join('unit b','b.id = a.unit','left')
            ->join('material c','c.id = a.m_id','left')
            ->join('project_profile d','d.masterid = a.masterid')
            ->order_by('a.cdate','desc')
            ->limit(3)
            ->get()->result_array();

        $rs5 = $this->db->select()->from('news')->order_by('cdate','desc')->limit(4)->get()->result_array();
        $data['r_count'] = $rs1->num;
        $data['c_count'] = $rs2->num+$rs3->num;
        $data['r_list'] = $rs4;
        $data['n_list'] = $rs5;
        return $data;
    }

}