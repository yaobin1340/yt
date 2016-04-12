<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/12
 * Time: 15:27
 */
class Material_model extends MY_Model
{

    function __construct()
    {
        parent::__construct();
    }
    function delete_material()
    {

        if ($this->input->post('delete'))
        {
            $id=$this->input->post('delete');
            $res=$this->db->delete('material',array('id' => $id[0]));
            return $res;
        }
        else
        {
            if ($this->input->post('CB')){
                $id=$this->input->post('CB');
                foreach ($id as $item)
                {
                    $res=$this->db->delete('material',array('id' => $id));
                }
                return true;
            }
            else
            {
                return false;
            }

        }


    }

    function save_material(){
        $data = array(
            'name'=>$this->input->post('name'),
            'cdate'=>date("y-m-d H:i:s",time())
        );
        if($this->input->post('id')){//修改
            $this->db->where('id',$this->input->post('id'));
            $res = $this->db->update('material',$data);
        }else{//新增
            $check=$this->db->select()->from('material')->where('name',$this->input->post('name'))->get()->row_array();
            if($check){
                return 1;
            }
            $res = $this->db->insert('material',$data);
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
        $this->db->select('count(1) num')->from('material');
        if($this->input->post('title')){
            $this->db->like('name',$this->input->post('title'));
        }
        $num = $this->db->get()->row();
        $data['total'] = $num->num;
        //搜索条件
        $data['title'] = $this->input->post('title')?$this->input->post('title'):null;
        //获取详细列
        $this->db->select()->from('material');

        if($this->input->post('title')){
            $this->db->like('name',$this->input->post('title'));
        }

        $this->db->order_by('cdate','desc');
        $this->db->limit($limit, $offset = ($page - 1) * $limit);
        $data['items'] = $this->db->get()->result_array();

        return $data;
    }

    public function get_material($id){
        return $this->db->select()->from('material')->where('id',$id)->get()->row();
    }

}