<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/22
 * Time: 13:43
 */
class Schedule_model extends MY_Model
{

    function __construct()
    {
        parent::__construct();
    }

//    public function list_task($page){
//        $limit=4;
//        $data['limit'] = $limit;
//        $offset = ($page - 1) * $limit;
//        $where="";
//        if ($this->input->post('title')){
//            $where=" where aa.pro_name like '%".$this->input->post('title')."%'";
//        }
//        //获取总记录数
//
//        $sqlstr="select count(1) num from ((
//select  a.id ex_id, c.`name` pro_name,d.name sup_name,a.cdate ex_cdate,a.`status` ex_status from `execute` a
//LEFT JOIN contract_main b on b.id = a.pid
//LEFT JOIN project_profile c on b.userid = c.masterid
//LEFT JOIN supplier_profile d on d.id = b.sid
//where a.cid=0
//)
//union(
//select a.id ex_id,d.name pro_name, f.name sup_name,a.cdate ex_cdate,a.`status` ex_status from `execute` a
//LEFT JOIN `change` b on b.id = a.cid
//LEFT JOIN contract_main c on c.id = a.pid
//LEFT JOIN project_profile d on c.userid = d.masterid
//LEFT JOIN supplier_profile f on f.id = b.sid
//where a.cid>0
//)
//) aa {$where} ORDER BY aa.ex_cdate desc";
//        $num=$this->db->query($sqlstr)->row_array();
//        // die(var_dump($num));
//        $data['total'] = $num['num'];
//        $data['title'] = $this->input->post('title')?$this->input->post('title'):null;
//
//        //获取详细列
//        $sqlstr1="select * from ((
//select a.id ex_id, c.`name` pro_name,d.name sup_name,a.cdate ex_cdate,a.`status` ex_status from `execute` a
//LEFT JOIN contract_main b on b.id = a.pid
//LEFT JOIN project_profile c on b.userid = c.masterid
//LEFT JOIN supplier_profile d on d.id = b.sid
//where a.cid=0
//)
//union(
//select a.id ex_id,d.name pro_name, f.name sup_name,a.cdate ex_cdate,a.`status` ex_status from `execute` a
//LEFT JOIN `change` b on b.id = a.cid
//LEFT JOIN contract_main c on c.id = a.pid
//LEFT JOIN project_profile d on c.userid = d.masterid
//LEFT JOIN supplier_profile f on f.id = b.sid
//where a.cid>0
//)
//) aa {$where} ORDER BY aa.ex_cdate desc limit {$offset},{$limit}";
//        $data['items']=$this->db->query($sqlstr1)->result_array();
//
//        //  die(var_dump($data['pro_name']));
//        return $data;
//
//    }

    public function list_task($page){
        $limit=4;
        $data['limit'] = $limit;
        $offset = ($page - 1) * $limit;
        $data['title'] = $this->input->post('title')?$this->input->post('title'):null;

        $this->db->select('count(1) num')->from('users a');
        $this->db->join('project_profile b','a.id=b.masterid','left');
        $this->db->where('a.status',2);
        $this->db->where('a.type',3);
        if($data['title'])
            $this->db->like('b.name',$data['title']);
        $rs = $this->db->get()->row();
        $data['total'] = $rs->num;

        $this->db->select('b.id id,b.name name,a.cdate cdate')->from('users a');
        $this->db->join('project_profile b','a.id=b.masterid','left');
        $this->db->where('a.status',2);
        $this->db->where('a.type',3);

        if($this->input->post('title')){
            $this->db->like('name',$this->input->post('title'));
        }

        $this->db->order_by('a.cdate','desc');
        $this->db->limit($limit, $offset = ($page - 1) * $limit);
        $data['items'] = $this->db->get()->result_array();
        return $data;
    }

    public function show_ex($id){
        $res=$this->db->select('a.*,b.name m_name')->from('execute a')
            ->join('material b','b.id = a.mid','left')
            ->where('a.id',$id)->get()->row_array();
        if(!$res){
            return false;
        }
        $data['ex']=$res;

        if($res['cid']==0){
            $contract=$this->db->select('c.name pro_name,a.*,b.name sup_name')->from('contract_main a')
                ->join('supplier_profile b','a.sid = b.id','left')
                ->join('project_profile c','c.masterid = a.userid','left')
                ->where('a.id',$res['pid'])->get()->row_array();
           // die($this->db->last_query());
            $data['con_title']=$contract['title'];
            $data['num']=$contract['num'];
            $data['pic']=$contract['pic'];
            $data['sup_name']=$contract['sup_name'];
            $data['pro_name']=$contract['pro_name'];

        }else{
            $change=$this->db->select('a.*,b.name sup_name,c.title con_title,d.name pro_name')
                ->from('change a')
                ->join('supplier_profile b','a.sid = b.id','left')
                ->join('contract_main c','c.id = a.pid','left')
                ->join('project_profile d','d.masterid = c.userid','left')
                ->where('a.id',$res['cid'])->get()->row_array();
            $data['con_title']=$change['con_title'];
            $data['num']=$change['num'];
            $data['pic']=$change['pic'];
            $data['sup_name']=$change['sup_name'];
           $data['pro_name']=$change['pro_name'];
        }
        return $data;
    }
}