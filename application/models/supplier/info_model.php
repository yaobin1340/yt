<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/15
 * Time: 9:12
 */
class Info_model extends MY_Model
{

    function __construct(){
        parent::__construct();
    }

    public function getinfo(){
        return $this->db->select()->from('supplier_profile')->where('masterid',$this->session->userdata('id'))->get()->row_array();
    }

    public function save_info(){
        $masterid=$this->session->userdata('id');
        if (!$masterid){
            var_dump($this->session->all_userdata('id'));
            die('bbb');
            return 2;
        }
        $name=$this->input->post('sup_name');
        $type=$this->input->post('sup_type');
        $total=$this->input->post('sup_total');
        $allow=$this->input->post('sup_allow');
        $num=$this->input->post('sup_num');
        $bank=$this->input->post('sup_bank');
        $card=$this->input->post('sup_card');
        $province_code=$this->input->post('sup_province');
        $city_code=$this->input->post('sup_city');
        $area_code=$this->input->post('sup_area');
        $address=$this->input->post('sup_address');
        $person=$this->input->post('sup_person');
        $phone=$this->input->post('sup_phone');
        $desc=$this->input->post('sup_desc');
        $pic=$this->input->post('pic');
        if (!$name || !$bank || $type==0 || !$total || !$allow || !$num || !$card || !$address || !$person || !$phone || !$desc || !$pic || !$area_code || !$province_code || !$city_code){
            return 2;
        }
        $data=array(
            'name' => $name,
            'masterid'=>$masterid,
            'type'=>$type,
            'total'=>$total,
            'allow'=>$allow,
            'num'=>$num,
            'bank'=>$bank,
            'card'=>$card,
            'province_code'=>$province_code,
            'city_code'=>$city_code,
            'area_code'=>$area_code,
            'address'=>$address,
            'person'=>$person,
            'phone'=>$phone,
            'desc'=>$desc,
            'pic'=>$pic
        );
        $row=$this->db->select('id')->from('supplier_profile')->where('masterid',$masterid)->get()->row_array();
        if ($row){
            $res=$this->db->where('masterid',$masterid)->update('supplier_profile',$data);
            if ($res){
                return 1;
            }else{
                return 3;
            }
        }else{
            $res=$this->db->insert('supplier_profile',$data);
            if ($res){
                return 1;
            }else{
                return 3;
            }
        }
        
    }

}