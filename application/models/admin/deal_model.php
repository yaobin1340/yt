<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/20
 * Time: 8:40
 */
class Deal_model extends MY_Model
{

    function __construct(){
        parent::__construct();
    }

    public function list_deal($page){
        $limit=4;
        $data['limit'] = $limit;

        $ids = array();
        //获取总记录数
        $this->db->select('count(1) num')->from('contract_main');
        if($this->input->post('title')){
            $this->db->like('title',$this->input->post('title'));
        }
      //  $this->db->where('userid',$this->session->userdata('id'));
        $num = $this->db->get()->row();
        $data['total'] = $num->num;
        //搜索条件
        $data['title'] = $this->input->post('title')?$this->input->post('title'):null;
        //获取详细列
        $this->db->select("a.*,b.name name")->from('contract_main a');
        $this->db->join('supplier_profile b','a.sid=b.id','left');

        if($this->input->post('title')){
            $this->db->like('title',$this->input->post('title'));
        }
      //  $this->db->where('userid',$this->session->userdata('id'));
        $this->db->order_by('cdate','desc');
        $this->db->limit($limit, $offset = ($page - 1) * $limit);
        $data['items'] = $this->db->get()->result_array();
        foreach($data['items'] as $v){
            $ids[] = $v['id'];
        }

        if($ids){
            $rs = $this->db->select('a.*,b.name name')->from('change a')
                ->join('supplier_profile b','a.sid = b.id','left')->where_in('pid',$ids)->order_by('a.cdate','acs')->get()->result_array();
            $data['change_items'] = $rs;
        }else{
            $data['change_items'] = null;
        }

        return $data;
    }

    public function show_contract($id){
        $row=$this->db->select('a.*,b.name pid_name')->from('contract_main a')
            ->join('supplier_profile b','a.sid = b.id','left')
            ->where('a.id',$id)->get()->row_array();
        if (!$row){
            return false;
        }
        $detail=$this->db->select('a.*,b.name u_name,c.name m_name')->from('contract_line a')
                ->join('unit b','b.id = a.uid','left')
                ->join('material c','c.id = a.mid','left')
                ->where('a.pid',$id)->get()->result_array();
        $data['main']=$row;
        $data['line']=$detail;
        return $data;

    }

    public function show_change($id){
        $row=$this->db->select('a.*,b.name sid_name,c.title p_title')->from('change a')
            ->join('supplier_profile b','a.sid = b.id','left')
            ->join('contract_main c','c.id = a.pid','left')
            ->where('a.id',$id)->get()->row_array();
        if (!$row){
            return false;
        }
        $detail=$this->db->select('a.*,b.name u_name,c.name m_name')->from('change_line a')
            ->join('unit b','b.id = a.uid','left')
            ->join('material c','c.id = a.mid','left')
            ->where('a.pid',$id)->get()->result_array();
        $data['main']=$row;
        $data['line']=$detail;
        return $data;

    }

    public function SH_contract($id){
        return $this->db->where('id',$id)->update('contract_main',array('status'=>2));
    }

    public function SH_change($id){
        return $this->db->where('id',$id)->update('change',array('status'=>2));
    }
}