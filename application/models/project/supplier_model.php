<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/18
 * Time: 13:21
 */
class Supplier_model extends MY_Model
{

    function __construct(){
        parent::__construct();
    }

    public function list_task($page){
        //$user_info = $this->session->userdata('user_info');
        $limit=4;
        $data['limit'] = $limit;
        //获取总记录数
        $this->db->select('count(1) num')->from('users a')
            ->join('supplier_profile b','a.id = b.masterid')
            ->where('a.status',2);
        if($this->input->post('title')){
            $this->db->like('b.name',$this->input->post('title'));
        }
        $num = $this->db->get()->row();
        $data['total'] = $num->num;
        //搜索条件
        $data['title'] = $this->input->post('title')?$this->input->post('title'):null;
        //获取详细列
        $this->db->select()->from('users a')
            ->join('supplier_profile b','a.id = b.masterid')
            ->where('a.status',2);

        if($this->input->post('title')){
            $this->db->like('b.name',$this->input->post('title'));
        }

        $this->db->order_by('cdate','desc');
        $this->db->limit($limit, $offset = ($page - 1) * $limit);
        $data['items'] = $this->db->get()->result_array();

        return $data;
    }

    function show_supplier($id){
        $data=$this->db->select('a.*,b.name p_name,c.name c_name,d.name a_name')->from('supplier_profile a')
            ->join('province b','b.code = a.province_code','left')
            ->join('city c','c.code = a.city_code','left')
            ->join('area d','d.code = a.area_code','left')
            ->where('a.id',$id)->get()->row_array();
        return $data;
    }

}