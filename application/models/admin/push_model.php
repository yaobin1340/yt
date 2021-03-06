<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/16
 * Time: 9:33
 */
class Push_model extends MY_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function save_push(){
        $data = array(
            'title'=>$this->input->post('title'),
            'content'=>$this->input->post('content'),
            'cdate'=>date("y-m-d H:i:s",time()),
            'mdate'=>date("y-m-d H:i:s",time())
        );
        if($this->input->post('id')!=""){//修改
            unset($data['cdate']);
            $this->db->where('id',$this->input->post('id'));
            $res = $this->db->update('news',$data);
        }else{//新增
            $res = $this->db->insert('news',$data);
        }

        if (!$res){
            return 2;   //存储失败
        }else{
            return 3;   //存储成功
        }
    }

    public function list_task($page){
        $limit=4;
        $data['limit'] = $limit;
        //获取总记录数
        $this->db->select('count(1) num')->from('news');
        if($this->input->post('title')){
            $this->db->like('title',$this->input->post('title'));
        }
        $num = $this->db->get()->row();
        $data['total'] = $num->num;
        //搜索条件
        $data['title'] = $this->input->post('title')?$this->input->post('title'):null;
        //获取详细列
        $this->db->select()->from('news');

        if($this->input->post('title')){
            $this->db->like('title',$this->input->post('title'));
        }

        $this->db->order_by('cdate','desc');
        $this->db->limit($limit, $offset = ($page - 1) * $limit);
        $data['items'] = $this->db->get()->result_array();

        return $data;
    }

    function show_push($id){
       $data=$this->db->select()->from('news')->where('id',$id)->get()->row_array();
        return $data;
    }

    function delete_push($id){
        $data=$this->db->delete('news',array('id'=>$id));
        return $data;
    }
}