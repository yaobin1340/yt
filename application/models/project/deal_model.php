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

        $ids = array();
        //获取总记录数
        $this->db->select('count(1) num')->from('contract_main');
        if($this->input->post('title')){
            $this->db->like('title',$this->input->post('title'));
        }
        $this->db->where('userid',$this->session->userdata('id'));
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
        $this->db->where('userid',$this->session->userdata('id'));
        $this->db->order_by('cdate','desc');
        $this->db->limit($limit, $offset = ($page - 1) * $limit);
        $data['items'] = $this->db->get()->result_array();
        foreach($data['items'] as $v){
            $ids[] = $v['id'];
        }

        if($ids){
            $rs = $this->db->select('a.*,b.name name')->from('change a')
                ->join('supplier_profile b','a.sid = b.id','left')->where_in('pid',$ids)->order_by('a.cdate','acs')->get()->result_array();
            $data['change_items'] = $rs;
        }else{
            $data['change_items'] = null;
        }

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
            'userid'=>$masterid,
            'title'=>$title,
            'num'=>$num,
            'pay_type'=>$pay_type ? $pay_type : '0',
            'total'=>$total,
            'pic'=>$pic,
            'cdate'=>date("y-m-d H:i:s",time()),
            'userid'=>$this->session->userdata('id')
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
            ->where('a.pid',$id)->get()->result_array();
        return $data;
    }

    function save_change(){
        $data=array(
            'num'=>$this->input->post('num'),
            'desc'=>$this->input->post('desc'),
            'pic'=>$this->input->post('pic'),
            'pid'=>$this->input->post('pid'),
            'sid'=>$this->input->post('sid'),
            'cdate'=>date("y-m-d H:i:s",time())
        );

        $uids = $this->input->post('uid');
        $nums = $this->input->post('qty');
        $mids = $this->input->post('mid');
        $this->db->trans_start();

        $this->db->insert('change',$data);
        $insert_id=$this->db->insert_id();

        foreach ($uids as $key=>$value){
            $detail=array(
                'pid' => $insert_id,
                'mid' => $mids[$key],
                'uid'=>$value,
                'num'=>$nums[$key],
            );
            $this->db->insert('change_line',$detail);
        }

        $this->db->trans_complete();//------结束事务
        if ($this->db->trans_status() === FALSE) {
            return -1;
        } else {
            return 1;
        }

    }

    public function show_contract($id){
        $row=$this->db->select('a.*,b.name pid_name')->from('contract_main a')
            ->join('supplier_profile b','a.sid = b.id','left')
            ->where('a.id',$id)->get()->row_array();
        if (!$row){
            return false;
        }
        $detail=$this->db->select('a.*,b.name u_name,c.name m_name')->from('contract_line a')
            ->join('unit b','b.id = a.uid','left')
            ->join('material c','c.id = a.mid','left')
            ->where('a.pid',$id)->get()->result_array();
        $data['main']=$row;
        $data['line']=$detail;
        return $data;

    }

    public function show_change($id){
        $row=$this->db->select('a.*,b.name sid_name,c.title p_title')->from('change a')
            ->join('supplier_profile b','a.sid = b.id','left')
            ->join('contract_main c','c.id = a.pid','left')
            ->where('a.id',$id)->get()->row_array();
        if (!$row){
            return false;
        }
        $detail=$this->db->select('a.*,b.name u_name,c.name m_name')->from('change_line a')
            ->join('unit b','b.id = a.uid','left')
            ->join('material c','c.id = a.mid','left')
            ->where('a.pid',$id)->get()->result_array();
        $data['main']=$row;
        $data['line']=$detail;
        return $data;

    }

    public function show_execute($pid,$cid,$page){
       if ($cid==0){
           $res=$this->db->select('a.*,b.name sup_name')
               ->from('contract_main a')
               ->join('supplier_profile b','a.sid = b.id','left')
               ->where('a.id',$pid)->get()->row_array();
           if (!$res){
               return false;
           }
           $data['ex_title']=$res['title'];
           $data['ex_num']=$res['num'];
           $data['ex_pic']=$res['pic'];
           $data['ex_sup_name']=$res['sup_name'];
           $details=$this->db->select('a.price de_price,b.name de_name,b.id de_id')
               ->from('contract_line a')
               ->join('material b','b.id = a.mid','left')
               ->where('a.pid',$pid)->get()->result_array();
           $data['details']=$details;
       }else{
           $res=$this->db->select('a.*,b.name sup_name,c.title con_title')
               ->from('change a')
               ->join('supplier_profile b','a.sid = b.id','left')
               ->join('contract_main c','c.id = a.pid','left')
               ->where('a.id',$cid)->get()->row_array();
           if (!$res){
               return false;
           }
           $data['ex_title']=$res['con_title'];
           $data['ex_num']=$res['num'];
           $data['ex_pic']=$res['pic'];
           $data['ex_sup_name']=$res['sup_name'];
           $details=$this->db->select('b.price de_price,c.name de_name,c.id de_id')->from('change_line a')
               ->join('contract_line b','a.mid = b.mid')
               ->join('material c','c.id = a.mid','left')
               ->where('a.pid',$cid)
               ->where('b.pid',$pid)
               ->get()->result_array();
           $data['details']=$details;
       }
        //分页信息
        $limit=3;
        $data['limit'] = $limit;

        //获取总记录数
        $num=$this->db->select('count(1) num')
            ->from('execute a')
            ->join('contract_main b','a.pid = b.id','left')
            ->where('cid',$cid)
            ->where('pid',$pid)->get()->row();
        $data['total'] = $num->num;
        //搜索条件

        //获取详细列
        $this->db->select('a.id ex_id,b.title con_title,a.cdate ex_cdate,a.status ex_status')
            ->from('execute a')
            ->join('contract_main b','a.pid = b.id','left')
            ->where('cid',$cid)
            ->where('pid',$pid);



        $this->db->order_by('a.cdate','desc');
        $this->db->limit($limit, $offset = ($page - 1) * $limit);
        $data['items'] = $this->db->get()->result_array();
        return $data;

        
    }

    public function save_execute(){
      if (!$this->input->post('pid')){
          return false;
      }
        $data=array(
            'pid'=>$this->input->post('pid'),
            'cid'=>$this->input->post('cid'),
            'mid'=>$this->input->post('material'),
            'date'=>$this->input->post('date'),
            'num'=>$this->input->post('num'),
            'price'=>$this->input->post('price'),
            'desc'=>$this->input->post('desc'),
            'cdate'=>date("y-m-d H:i:s",time())
        );
        $res=$this->db->insert('execute',$data);
        return $res;
    }

    public function get_ex($id){
       $res=$this->db->select('a.*,b.name m_name')->from('execute a')
           ->join('material b','b.id = a.mid','left')
           ->where('a.id',$id)->get()->row_array();
        if(!$res){
            return false;
        }
        $data['ex']=$res;

        if($res['cid']==0){
            $contract=$this->db->select('a.*,b.name sup_name')->from('contract_main a')
                ->join('supplier_profile b','a.sid = b.id','left')
                ->where('a.id',$res['pid'])->get()->row_array();
            $data['con_title']=$contract['title'];
            $data['num']=$contract['num'];
            $data['pic']=$contract['pic'];
            $data['sup_name']=$contract['sup_name'];
        }else{
            $change=$this->db->select('a.*,b.name sup_name,c.title con_title')
                ->from('change a')
                ->join('supplier_profile b','a.sid = b.id','left')
                ->join('contract_main c','c.id = a.pid','left')
                ->where('a.id',$res['cid'])->get()->row_array();
            $data['con_title']=$change['con_title'];
            $data['num']=$change['num'];
            $data['pic']=$change['pic'];
            $data['sup_name']=$change['sup_name'];
        }
       return $data;
    }

    public function fukuang($id){
       $res=$this->db->where('id',$id)->update('execute',array('status'=>2));
        return $res;
    }
}