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
        if ($this->input->post('delete'))
        {
            $unit=$this->input->post('delete');
            $res=$this->db->delete('unit',array('name' => $unit[0]));
            return $res;
        }
        else
        {
            if ($this->input->post('CB')){
                $unit=$this->input->post('CB');
                foreach ($unit as $item)
                {
                    $res=$this->db->delete('unit',array('name' => $item));
                }
                return true;
            }
            else
            {
                return false;
            }

        }


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
        $title=$this->input->post('sousuo');
        //$user_info = $this->session->userdata('user_info');
        $limit=4;
        $data['limit'] = 4;
        //获取总记录数
        $this->db->select('count(1) num')->from('unit');
        if($title!=''){
            $this->db->like('name',$title);
        }
        $num = $this->db->get()->row();
        $data['total'] = $num->num;
        //搜索条件
        $data['title'] = null;
        //获取详细列
        $this->db->select()->from('unit');

        if($title!=''){
            $this->db->like('name',$title);
            $data['title'] = $title;
        }

        $this->db->order_by('cdate','desc');
        $this->db->limit($limit, $offset = ($page - 1) * $limit);
        $data['items'] = $this->db->get()->result_array();

        return $data;
    }

}