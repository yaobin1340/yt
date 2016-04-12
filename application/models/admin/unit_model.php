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

    function save_unit(){
        $data = array(
            'name'=>$this->input->post('name'),
            'cdate'=>date("y-m-d h:m:s",time())
        );
        if($this->input->post('id')){//修改
            $this->db->where('id',$this->input->post('id'));
            $res = $this->db->update('unit',$data);
        }else{//新增
            $res = $this->db->insert('unit',$data);
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
        $limit=1;
        $data['limit'] = $limit;
        //获取总记录数
        $this->db->select('count(1) num')->from('unit');
        if($this->input->post('title')){
            $this->db->like('name',$this->input->post('title'));
        }
        $num = $this->db->get()->row();
        $data['total'] = $num->num;
        //搜索条件
        $data['title'] = $this->input->post('title')?$this->input->post('title'):null;
        //获取详细列
        $this->db->select()->from('unit');

        if($this->input->post('title')){
            $this->db->like('name',$this->input->post('title'));
        }

        $this->db->order_by('cdate','desc');
        $this->db->limit($limit, $offset = ($page - 1) * $limit);
        $data['items'] = $this->db->get()->result_array();

        return $data;
    }

    public function get_unit($id){
        return $this->db->select()->from('unit')->where('id',$id)->get()->row();
    }

}