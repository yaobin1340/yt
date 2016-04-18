<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/16
 * Time: 15:20
 */
class Demand_model extends MY_Model
{

    function __construct(){
        parent::__construct();
    }

    public function list_task($page){
        //$user_info = $this->session->userdata('user_info');
        $limit=4;
        $data['limit'] = $limit;
        //获取总记录数
        $this->db->select('count(1) num')->from('require a')
            ->join('project_profile d','d.masterid = a.masterid');
        if($this->input->post('title')){
            $this->db->like('a.size',$this->input->post('title'));
        }
        if($this->input->post('pro_province') != '00' && $this->input->post('pro_province') != ''){
            $this->db->where('d.province_code',$this->input->post('pro_province'));
        }
        if($this->input->post('pro_city') != '00' && $this->input->post('pro_city') != ''){
            $this->db->where('d.city_code',$this->input->post('pro_city'));
        }
        if($this->input->post('material') != '0' && $this->input->post('material') != ''){
            $this->db->where('a.m_id',$this->input->post('material'));
        }
        $num = $this->db->get()->row();
       // die(var_dump($this->db->last_query()));
        $data['total'] = $num->num;
        //搜索条件
        $data['title'] = $this->input->post('title')?$this->input->post('title'):null;
        $data['pro_province']= $this->input->post('pro_province')?$this->input->post('pro_province'):'00';
        $data['pro_city']= $this->input->post('pro_province')?$this->input->post('pro_city'):'00';
        $data['material']= $this->input->post('material')?$this->input->post('material'):'0';
        //获取详细列
        $this->db->select('d.name pro_name,a.id,b.name u_name,c.name m_name,a.cdate,a.size,a.num',false)->from('require a')
            ->join('unit b','b.id = a.unit','left')
            ->join('material c','c.id = a.m_id','left')
           ->join('project_profile d','d.masterid = a.masterid');

        if($this->input->post('title')){
            $this->db->like('a.size',$this->input->post('title'));
        }
        if($this->input->post('pro_province') != '00' && $this->input->post('pro_province') != ''){
            $this->db->where('d.province_code',$this->input->post('pro_province'));
        }
        if($this->input->post('pro_city') != '00' && $this->input->post('pro_city') != ''){
            $this->db->where('d.city_code',$this->input->post('pro_city'));
        }
        if($this->input->post('material') != '0' && $this->input->post('material') != ''){
            $this->db->where('a.m_id',$this->input->post('material'));
        }

        $this->db->order_by('cdate','desc');
        $this->db->limit($limit, $offset = ($page - 1) * $limit);

        $data['items'] = $this->db->get()->result_array();
        //  die(var_dump($data['pro_name']));
        return $data;
    }

    function show_demand($id){
        $data['item']=$this->db->select('a.*,b.name u_name,c.name m_name,d.id pro_id',false)->from('require a')
            ->join('unit b','b.id = a.unit','left')
            ->join('material c','c.id = a.m_id','left')
            ->join('project_profile d','d.masterid = a.masterid')
            ->where('a.id',$id)
            ->get()->row_array();
        if (!$data['item']){
        return false;
        }
        $res_row=$this->db->select('a.name name,b.name p_name,c.name c_name,a.address')
            ->from('project_profile a')
            ->join('province b','b.code = a.province_code')
            ->join('city c','c.code = a.city_code')
            ->where('a.id',$data['item']['pro_id'])
            ->get()->row_array();
        $data['pro_name']=$res_row['name'];
        $data['p_name']=$res_row['p_name'];
        $data['c_name']=$res_row['c_name'];
        $data['address']=$res_row['address'];
        return $data;
    }
}