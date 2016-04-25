<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/15
 * Time: 20:09
 */
class Supplier_model extends MY_Model
{

    function __construct()
    {
        parent::__construct();
    }
    
    public function list_task($page)
    {
        //$user_info = $this->session->userdata('user_info');
        $limit=4;
        $data['limit'] = $limit;
        //获取总记录数
        $this->db->select('count(1) num')
            ->from('users a')
            ->join('supplier_profile b','a.id = b.masterid')
            ->where('a.status !=',-1);
        if($this->input->post('title')){
            $this->db->like('b.name',$this->input->post('title'));
        }
        $num = $this->db->get()->row();
        $data['total'] = $num->num;
        //搜索条件
        $data['title'] = $this->input->post('title')?$this->input->post('title'):null;
        //获取详细列

        $this->db->select('b.id id,a.id userid,a.username,b.name name,a.status,a.cdate',false)
            ->from('users a')
            ->join('supplier_profile b','a.id = b.masterid')
            ->where('a.status !=',-1);
        if($this->input->post('title')){
            $this->db->like('name',$this->input->post('title'));
        }

        $this->db->order_by('cdate','desc');
        $this->db->limit($limit, $offset = ($page - 1) * $limit);
        $data['items'] = $this->db->get()->result_array();
        return $data;
    }

    public function show_sup($id){
        return $this->db->select()->from('supplier_profile')->where('id',$id)->get()->row_array();
    }

    public function reset_password($id){
        $res=$this->db->where('id',$id)->update('users',array('password'=>sha1('888888')));
        return $res;
    }

    public function chenge_status($id){
        $res=$this->db->where('id',$id)->update('users',array('status'=>2));
        return $res;
    }
}