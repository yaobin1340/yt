<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/11
 * Time: 21:31
 */
class Unit_model extends MY_Model
{

    function __construct()
    {
        parent::__construct();
    }
    function delete_unit()
    {
        $unit='';

        $res=$this->db->where('name',$unit)->delete('unit');
        return $res;
    }
    function add_unit()
    {

         $unit=$this->input->post('unit');


        $data= $this->db->select()->from('unit')->where('name',$unit)->get()->row_array();
        if ($data)
        {
            return 1;    //已经存在相同的单位
        }
        $time=time();
        $add=array(
            'name'=>$unit,
            'cdate'=>date("y-m-d h:m:s",$time)
        );
        $res=$this->db->insert('unit',$add);
        if (!$res)
        {
            return 2;   //存储失败
        }
        else
        {
            return 3;   //存储成功
        }
    }
    public function list_task($page)
    {
        //$user_info = $this->session->userdata('user_info');
        $limit=4;
        $data['limit'] = 4;
        //获取总记录数
        $this->db->select('count(1) num')->from('unit');
        if($this->input->post('title')){
            $this->db->like('name',$this->input->post('title'));
        }
        $num = $this->db->get()->row();
        $data['total'] = $num->num;
        //搜索条件
        $data['title'] = null;
        //获取详细列
        $this->db->select()->from('unit');

        if($this->input->post('title')){
            $this->db->like('name',$this->input->post('title'));
            $data['title'] = $this->input->post('title');
        }

        $this->db->order_by('cdate','desc');
        $this->db->limit($limit, $offset = ($page - 1) * $limit);
        $data['items'] = $this->db->get()->result_array();

        return $data;
    }

}