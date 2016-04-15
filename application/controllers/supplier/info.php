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
            $type="A01";
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

    public function getprovince(){
        $data=$this->info_model->getprovince();
        echo json_encode($data);
    }

    public function getcity($code){
        $data=$this->info_model->getcity($code);
        echo json_encode($data);
    }

    public function saveimg(){
        $this->deal_model_model->saveimg();

    }
}