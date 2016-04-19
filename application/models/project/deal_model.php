<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/18
 * Time: 20:32
 */
class Deal_model extends MY_Model
{

    function __construct(){
        parent::__construct();
    }

    function show_model($id){

    }

    public function list_deal($page){
        $limit=4;
        $data['limit'] = $limit;
        //获取总记录数
        $this->db->select('count(1) num')->from('contract_main');
        if($this->input->post('title')){
            $this->db->like('title',$this->input->post('title'));
        }
        $num = $this->db->get()->row();
        $data['total'] = $num->num;
        //搜索条件
        $data['title'] = $this->input->post('title')?$this->input->post('title'):null;
        //获取详细列
        $this->db->select("a.*,b.name name")->from('contract_main a');
        $this->db->join('supplier_profile b','a.sid=b.id','left');

        if($this->input->post('title')){
            $this->db->like('title',$this->input->post('title'));
        }

        $this->db->order_by('cdate','desc');
        $this->db->limit($limit, $offset = ($page - 1) * $limit);
        $data['items'] = $this->db->get()->result_array();

        return $data;
    }

    function save_deal(){
        $id=$this->input->post('id');
        $masterid=$this->session->userdata('id');
        $sid=$this->input->post('pid');
        $title=$this->input->post('title');
        $num=$this->input->post('num');
        $pay_type=$this->input->post('pay_type');
        $total=$this->input->post('total');
        $pic=$this->input->post('pic');

        $mid=$this->input->post('mid');
        $size=$this->input->post('size');
        $price=$this->input->post('price');
        $line_num=$this->input->post('line_num');
        $unit=$this->input->post('unit');
        /*if (!$masterid || !$sid || !$title || !$total || !$num || !$pic || $pay_type=='0' ){
            return 2;
        }*/
        $data=array(
            'sid'=>$sid,
            'masterid'=>$masterid,
            'title'=>$title,
            'num'=>$num,
            'pay_type'=>$pay_type ? $pay_type : '0',
            'total'=>$total,
            'pic'=>$pic,
            'cdate'=>date("y-m-d H:i:s",time())
        );
        $this->db->trans_start();

        if($id){
            unset($data['cdate']);
            $this->db->where('id',$id)->update('contract_main',$data);
            $this->db->where('pid',$id)->delete('contract_line');
            if ($mid){
                foreach ($mid as $key=>$value){
                    $detail=array(
                        'pid' => $id,
                        'mid' => $value,
                        'price'=>$price[$key],
                        'size'=>$size[$key],
                        'num'=>$line_num[$key],
                        'uid'=>$unit[$key]
                    );
                    $this->db->insert('contract_line',$detail);
                }
            }
        }else{
            $this->db->insert('contract_main',$data);
            $insert_id=$this->db->insert_id();

            $this->db->where('pid',$insert_id)->delete('contract_line');
            if ($mid){
                foreach ($mid as $key=>$value){
                    $detail=array(
                        'pid' => $insert_id,
                        'mid' => $value,
                        'price'=>$price[$key],
                        'size'=>$size[$key],
                        'num'=>$line_num[$key],
                        'uid'=>$unit[$key]
                    );
                    $this->db->insert('contract_line',$detail);
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

    public function get_change($id){
        $data['mian'] = $this->db->select()->from('contract_main')
            ->where('id',$id)->get()->row_array();
        $data['line'] = $this->db->select('a.*,b.name mname,c.name uname')->from('contract_line a')
            ->join('material b','a.mid=b.id','left')
            ->join('unit c','a.uid=c.id','left')
            ->where('pid',$id)->get()->result_array();
        return $data;
    }
}