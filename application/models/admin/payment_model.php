<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/21
 * Time: 19:33
 */
class Payment_model extends MY_Model
{

    function __construct(){
        parent::__construct();
    }

    public function list_task($page)
    {
        //$user_info = $this->session->userdata('user_info');
        $limit=4;
        $data['limit'] = $limit;
        //获取总记录数
        $this->db->select('count(1) num')->from('execute a')
        ->join('contract_main b','b.id = a.pid')
        ->join('users c','c.id = b.userid')
        ->join('project_profile d','d.masterid = b.userid')
        ->where('a.status',2)
        ->where('c.status',2);

        if($this->input->post('pro_name')){
            $this->db->where('d.id',$this->input->post('pro_name'));
        }
        if($this->input->post('title')){
            $this->db->like('b.title',$this->input->post('title'));
        }


        $num = $this->db->get()->row();
        $data['total'] = $num->num;
        //搜索条件
        $data['title'] = $this->input->post('title')?$this->input->post('title'):null;
        $data['pro_name'] = $this->input->post('pro_name')?$this->input->post('pro_name'):"";
        //获取详细列
        $this->db->select('b.title con_title,d.name pro_name,a.id ex_id')->from('execute a')
            ->join('contract_main b','b.id = a.pid')
            ->join('users c','c.id = b.userid')
            ->join('project_profile d','d.masterid = b.userid')
            ->where('a.status',2)
            ->where('c.status',2);

        if($this->input->post('pro_name')){
            $this->db->where('d.id',$this->input->post('pro_name'));
        }
        if($this->input->post('title')){
            $this->db->like('b.title',$this->input->post('title'));
        }

        $this->db->order_by('a.cdate','desc');
        $this->db->limit($limit, $offset = ($page - 1) * $limit);
        $data['items'] = $this->db->get()->result_array();

        return $data;
    }

    public function get_ex($id){
        $res=$this->db->select('a.*,b.name m_name,d.name u_name')->from('execute a')
            ->join('material b','b.id = a.mid','left')
            ->join('unit d','d.id = a.uid','left')
            ->where('a.id',$id)->get()->row_array();
        if(!$res){
            return false;
        }
        $data['ex']=$res;

        if($res['cid']==0){
            $contract=$this->db->select('a.*,b.name sup_name')->from('contract_main a')
                ->join('supplier_profile b','a.sid = b.id','left')
                ->where('a.id',$res['pid'])->get()->row_array();
            $data['con_title']=$contract['title'];
            $data['num']=$contract['num'];
            $data['pic']=$contract['pic'];
            $data['sup_name']=$contract['sup_name'];
        }else{
            $change=$this->db->select('a.*,b.name sup_name,c.title con_title')
                ->from('change a')
                ->join('supplier_profile b','a.sid = b.id','left')
                ->join('contract_main c','c.id = a.pid','left')
                ->where('a.id',$res['cid'])->get()->row_array();
            $data['con_title']=$change['con_title'];
            $data['num']=$change['num'];
            $data['pic']=$change['pic'];
            $data['sup_name']=$change['sup_name'];
        }
        return $data;
    }

    public function QRfukuang($id){
        $res = $this->db->where('id',$id)->update('execute',array('status'=>3));
        return $res;
    }

}