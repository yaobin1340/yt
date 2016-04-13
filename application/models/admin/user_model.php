<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/12
 * Time: 19:12
 */
class User_model extends MY_Model
{

    function __construct(){
        parent::__construct();
    }

    function change(){
        $id='';
        if ($this->input->post('open')){
            $id=$this->input->post('open');
        }
        if ($this->input->post('close')){
            $id=$this->input->post('close');
        }
        $data=$this->get_user($id);
        if (!$data){
            return 1; //未找到账号
        }

        if ($data->type==1){
            return 2; //管理员账号不能进行修改
        }
        $status=1;
        if ($data->status==1){
            $status=-1;
        }

        $changedata=array(
            'status'=>$status
        );
        $this->db->where('id',$id);
        $res = $this->db->update('users',$changedata);
        if ($res){
            return 3; //修改成功
        }
        else {
            return 4; //修改失败
        }

    }

    function save_user(){
        
        $data = array(
            'username'=>$this->input->post('name'),
            'type'=>$this->input->post('sel'),
            'password'=>md5('888888'),
            'cdate'=>date("y-m-d H:i:s",time())
        );
        if($this->input->post('id')){//修改
            $this->db->where('id',$this->input->post('id'));
            $res = $this->db->update('user',$data);
        }else{//新增
            $check=$this->db->select()->from('users')->where('username',$this->input->post('name'))->get()->row_array();
            if($check){
                return 1;
            }
            $res = $this->db->insert('users',$data);
        }

        if (!$res){
            return 2;   //存储失败
        }else{
            return 3;   //存储成功
        }
    }

    public function list_task($page)
    {
        //$user_info = $this->session->userdata('user_info');
        $limit=4;
        $data['limit'] = $limit;
        //获取总记录数
        $this->db->select('count(1) num')->from('users');
        if($this->input->post('title')){
            $this->db->like('username',$this->input->post('title'));
        }
        $num = $this->db->get()->row();
        $data['total'] = $num->num;
        //搜索条件
        $data['title'] = $this->input->post('title')?$this->input->post('title'):null;
        //获取详细列
        $this->db->select('id,username,cdate,STATUS, REPLACE(REPLACE(REPLACE(type,1,\'管理员\'),2,\'供应商\'),3,\'项目方\') type')->from('users');

        if($this->input->post('title')){
            $this->db->like('username',$this->input->post('title'));
        }

        $this->db->order_by('cdate','desc');
        $this->db->limit($limit, $offset = ($page - 1) * $limit);
        $data['items'] = $this->db->get()->result_array();

        return $data;
    }

    public function get_user($id){
        return $this->db->select()->from('users')->where('id',$id)->get()->row();
    }

    public function reset_password($id){
        $res=$this->db->where('id',$id)->update('users',array('password'=>md5('888888')));
        return $res;
    }
}