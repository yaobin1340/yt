<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/16
 * Time: 15:20
 */
class Demand_model extends MY_Model
{

    function __construct(){
        parent::__construct();
    }

    public function list_task($page){
        //$user_info = $this->session->userdata('user_info');
        $limit=4;
        $data['limit'] = $limit;
        //获取总记录数
        $this->db->select('count(1) num')->from('require')->where('masterid',$this->session->userdata('id'));
        if($this->input->post('title')){
            $this->db->like('size',$this->input->post('title'));
        }
        $num = $this->db->get()->row();
        $data['total'] = $num->num;
        //搜索条件
        $data['title'] = $this->input->post('title')?$this->input->post('title'):null;
        //获取详细列
        $this->db->select('a.id,b.name u_name,c.name m_name,a.cdate,a.size,a.num',false)->from('require a')
            ->join('unit b','b.id = a.unit','left')
            ->join('material c','c.id = a.m_id','left')
            ->where('masterid',$this->session->userdata('id'));

        if($this->input->post('title')){
            $this->db->like('size',$this->input->post('title'));
        }

        $this->db->order_by('cdate','desc');
        $this->db->limit($limit, $offset = ($page - 1) * $limit);

        $data['items'] = $this->db->get()->result_array();

        $res_row=$this->db->select('name')->from('project_profile')->where('masterid',$this->session->userdata('id'))->get()->row_array();
        $data['pro_name']=$res_row['name'];
        //  die(var_dump($data['pro_name']));
        return $data;
    }

    function show_demand($id){
        $data['item']=$this->db->select('a.*,b.name u_name,c.name m_name',false)->from('require a')
            ->join('unit b','b.id = a.unit','left')
            ->join('material c','c.id = a.m_id','left')
            ->where('a.id',$id)
            ->get()->row_array();
        if (!$data['item']){
        return false;
        }
        $res_row=$this->db->select('a.name name,b.name p_name,c.name c_name,a.address')
            ->from('project_profile a')
            ->join('province b','b.code = a.province_code','left')
            ->join('city c','c.code = a.city_code','left')
            ->where('masterid',$this->session->userdata('id'))
            ->get()->row_array();
        $data['pro_name']=$res_row['name'];
        $data['p_name']=$res_row['p_name'];
        $data['c_name']=$res_row['c_name'];
        $data['address']=$res_row['address'];
        return $data;
    }

    public function save_demand(){
        if($this->session->userdata('status')!=2){
            return 5;
        }
        
        $masterid=$this->session->userdata('id');
        if (!$masterid){
            return 2;
        }
        $unit=$this->input->post('unit');
        $m_id=$this->input->post('material');
        $size=$this->input->post('size');
        $num=$this->input->post('num');
        $unit_id=$this->input->post('unit_id');
        $s_date=$this->input->post('s_date');
        $e_date=$this->input->post('e_date');
        $person=$this->input->post('person');
        $phone=$this->input->post('phone');
        $pic=$this->input->post('pic');
        $desc=$this->input->post('desc');
        if ($m_id=='0' || !$size || $unit=='0'|| !$num || !$unit_id || !$s_date || !$e_date || !$person || !$phone || !$pic || !$desc ){
           return 3;
       }
        $data=array(
            'masterid'=>$masterid,
            'unit'=>$unit,
            'm_id'=>$m_id,
            'size'=>$size,
            'num'=>$num,
            'unit_id'=>$unit_id,
            's_date'=>$s_date,
            'e_date'=>$e_date,
            'person'=>$person,
            'phone'=>$phone,
            'pic'=>$pic,
            'desc'=>$desc,
            'cdate'=>date("y-m-d H:i:s",time())
        );
        if ($this->input->post('id')){
            unset($data['cdate']);
            $res=$this->db->where('id',$this->input->post('id'))->update('require',$data);
            if ($res){
                return 1;
            }else{
                return 4;
            }
        }else{
            $res=$this->db->insert('require',$data);
            if ($res){
                return 1;
            }else{
                return 4;
            }
        }
    }

    function delete_demand($id){
        return $this->db->where('id',$id)->delete('require');
    }
}