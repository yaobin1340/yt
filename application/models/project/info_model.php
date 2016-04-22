<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/14
 * Time: 8:25
 */
class Info_model extends MY_Model
{

    function __construct(){
        parent::__construct();
    }
    
    public function save_info(){
        $masterid=$this->session->userdata('id');
        $name=$this->input->post('pro_name');
        $total=$this->input->post('pro_total');
        $address=$this->input->post('pro_address');
        $manager=$this->input->post('pro_manager');
        $leader=$this->input->post('pro_leader');
        $leader_phone=$this->input->post('pro_leader_phone');
        $contacter=$this->input->post('pro_contacter');
        $contacter_phone=$this->input->post('pro_contacter');
        $province_code=$this->input->post('pro_province');
        $city_code=$this->input->post('pro_city');
        $m_id=$this->input->post('material');
        $unit=$this->input->post('unit');
        $num=$this->input->post('num');
//        if (!$masterid || !$name || !$total || !$address || !$manager || !$leader || !$leader_phone || !$contacter || !$contacter_phone || !$province_code || !$city_code){
//            return 2;
//        }
        $data=array(
            'masterid'=>$masterid,
            'name'=>$name,
            'total'=>$total,
            'address'=>$address,
            'manager'=>$manager,
            'leader'=>$leader,
            'leader_phone'=>$leader_phone,
            'contacter'=>$contacter,
            'contacter_phone'=>$contacter_phone,
            'province_code'=>$province_code,
            'city_code'=>$city_code
        );
        $this->db->trans_start();
        $row=$this->db->select()->from('project_profile')->where('masterid',$masterid)->get()->row_array();
        if($row){
             $this->db->where('masterid',$masterid)->update('project_profile',$data);
             $this->db->where('pid',$row['id'])->delete('project_material');
            if ($m_id){
                foreach ($m_id as $key=>$value){
                    $detail=array(
                        'pid' => $row['id'],
                        'm_id' => $value,
                         'num'=>$num[$key],
                        'unit'=>$unit[$key]
                    );
                    $this->db->insert('project_material',$detail);
                }
            }
        }else{
             $this->db->insert('project_profile',$data);
            $insert_id=$this->db->insert_id();

             $this->db->where('pid',$insert_id)->delete('project_material');
            if ($m_id){
                foreach ($m_id as $key=>$value){
                    $detail=array(
                        'pid' => $insert_id,
                        'm_id' => $value,
                        'num'=>$num[$key],
                        'unit'=>$unit[$key]
                    );
                    $this->db->insert('project_material',$detail);
                }
            }
        }
        $this->db->trans_complete();//------结束事务
        if ($this->db->trans_status() === FALSE) {
            return -1;
        } else {
            return 1;
        }
    }

    public function getpro(){
        $masterid=$this->session->userdata('id');
        $row=$this->db->select()->from('project_profile')->where('masterid',$masterid)->get()->row_array();
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

    public  function getdetail(){

    }
}