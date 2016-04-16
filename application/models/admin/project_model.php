<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/16
 * Time: 8:52
 */
class Project_model extends MY_Model
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
            ->join('project_profile b','a.id = b.masterid')
            ->where('a.status !=',-1);
        if($this->input->post('title')){
            $this->db->like('b.name',$this->input->post('title'));
        }
        $num = $this->db->get()->row();
        $data['total'] = $num->num;
        //搜索条件
        $data['title'] = $this->input->post('title')?$this->input->post('title'):null;
        //获取详细列

        $this->db->select('b.id id,a.id userid,b.name name,a.status,a.cdate',false)
            ->from('users a')
            ->join('project_profile b','a.id = b.masterid')
            ->where('a.status !=',-1);
        if($this->input->post('title')){
            $this->db->like('name',$this->input->post('title'));
        }

        $this->db->order_by('cdate','desc');
        $this->db->limit($limit, $offset = ($page - 1) * $limit);
        $data['items'] = $this->db->get()->result_array();
        return $data;
    }

    public function show_pro($id){
            
            $row=$this->db->select()->from('project_profile')->where('id',$id)->get()->row_array();
            if (!$row){
                return 1;
            }
            $data['row']=$row;
            $detail=$this->db->select()->from('project_material')->where('pid',$row['id'])->order_by('id','desc')->get()->result_array();
            if (!$detail){
                $data['detail']=1;
            }else{
                $data['detail']=$detail;
            }
            return $data;
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