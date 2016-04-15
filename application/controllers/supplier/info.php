<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/15
 * Time: 9:10
 */
class Info extends MY_Controller {


    function __construct(){
        parent::__construct();
        if (!$this->session->userdata('username')){
            redirect('login');
        }
        $this->cismarty->assign('type',0);
        $this->load->model('supplier/info_model','info_model');
    }

    public function index(){
        if ($this->session->userdata('type')==2){
            $name="";
            $type=0;
            $total="";
            $allow="";
            $num="";
            $card="";
            $province_code="00";
            $city_code="00";
            $address="";
            $person="";
            $phone="";
            $desc="";
            $pic="";
            $res=$this->info_model->getinfo();
            if ($res){
                $name=$res['name'];
                $type=$res['type'];
                $total=$res['total'];
                $allow=$res['allow'];
                $num=$res['num'];
                $card=$res['card'];
                $province_code=$res['province_code'];
                $city_code=$res['city_code'];
                $address=$res['address'];
                $person=$res['person'];
                $phone=$res['phone'];
                $desc=$res['desc'];
                $pic=$res['pic'];
            }
            $this->cismarty->assign('sup_name',$name);
            $this->cismarty->assign('sup_type',$type);
            $this->cismarty->assign('sup_total',$total);
            $this->cismarty->assign('sup_allow',$allow);
            $this->cismarty->assign('sup_num',$num);
            $this->cismarty->assign('sup_card',$card);
            $this->cismarty->assign('sup_province',$province_code);
            $this->cismarty->assign('sup_city',$city_code);
            $this->cismarty->assign('sup_address',$address);
            $this->cismarty->assign('sup_person',$person);
            $this->cismarty->assign('sup_phone',$phone);
            $this->cismarty->assign('sup_desc',$desc);
            $this->cismarty->assign('pic',$pic);
            $path="supplier/supplier_info.html";
            $this->cismarty->display($path);
        }else{
            $this->session->sess_destroy();
            redirect('login');
        }
    }

    public function save_info(){
        $res=$this->info_model->save_info();
        if ($res==2){
            $this->show_message('信息不完整');
            exit();
        }elseif($res==1){
            $this->show_message('存储成功',site_url('supplier/index'));
            exit();
        }else{
            $this->show_message('存储失败');
            exit();
        }
    }
}