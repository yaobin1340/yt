<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/21
 * Time: 21:21
 */
class Deal_model extends MY_Model
{

    function __construct(){
        parent::__construct();
    }

    public function list_task($page){
        //$user_info = $this->session->userdata('user_info');
        $limit=4;
        $data['limit'] = $limit;
        $offset = ($page - 1) * $limit;
        $where="";
        if ($this->input->post('title')){
            $where=" where aa.title like '%".$this->input->post('title')."%'";
        }
        //获取总记录数
        $row=$this->db->select('id')->from('supplier_profile')->where('masterid',$this->session->userdata('id'))->get()->row_array();
        $sqlstr="select count(1) num from (
                       (
                            select  id,status,title,cdate,'1' as flag from `contract_main` a 
                            where a.sid = {$row['id']} and status > 1
                        )
                     UNION
                     (
                          select c.id,c.status,a.title,c.cdate,'2' as flag from `contract_main` a 
                      JOIN `change` c on c.pid = a.id
                   where c.sid = {$row['id']} and c.status > 1
                 )
              ) as aa {$where} ORDER BY aa.cdate desc";
        $num=$this->db->query($sqlstr)->row_array();
       // die(var_dump($num));
        $data['total'] = $num['num'];
        $data['title'] = $this->input->post('title')?$this->input->post('title'):null;
        $sqlstr1="select * from (
                       (
                            select id,status,title,cdate,'1' as flag from `contract_main` a 
                            where a.sid = {$row['id']} and status > 1
                        )
                     UNION
                     (
                          select c.id,c.status, a.title,c.cdate,'2' as flag from `contract_main` a 
                      JOIN `change` c on c.pid = a.id
                   where c.sid = {$row['id']}  and c.status > 1
                 )
              ) as aa {$where} ORDER BY aa.cdate desc limit {$offset},{$limit}";
        $data['items']=$this->db->query($sqlstr1)->result_array();

        //  die(var_dump($data['pro_name']));
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

}