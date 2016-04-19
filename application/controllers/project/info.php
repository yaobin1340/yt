<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/14
 * Time: 8:23
 */
class Info extends MY_Controller {


    function __construct(){
        parent::__construct();
        if (!$this->session->userdata('username')){
            redirect('login');
        }
        $this->cismarty->assign('type',0);
        $this->load->model('project/info_model','info_model');
    }

    public function index(){
        if ($this->session->userdata('type')==3){

            $name="";
            $total="";
            $address="";
            $manager="";
            $leader="";
            $leader_phone="";
            $contacter="";
            $contacter_phone="";
            $province_code="";
            $city_code="";
            $detail=1;
            $profile=$this->info_model->getpro();
           
            if ($profile!=1){
                $name = $profile['row']['name'];
                $total = $profile['row']['total'];
                $address = $profile['row']['address'];
                $manager = $profile['row']['manager'];
                $leader = $profile['row']['leader'];
                $leader_phone = $profile['row']['leader_phone'];
                $contacter = $profile['row']['contacter'];
                $contacter_phone = $profile['row']['contacter_phone'];
                $province_code = $profile['row']['province_code'];
                $city_code = $profile['row']['city_code'];
                $detail=$profile['detail'];
            }
            $this->cismarty->assign('pro_name',$name);
            $this->cismarty->assign('pro_total',$total);
            $this->cismarty->assign('pro_address',$address);
            $this->cismarty->assign('pro_manager',$manager);
            $this->cismarty->assign('pro_leader',$leader);
            $this->cismarty->assign('pro_leader_phone',$leader_phone);
            $this->cismarty->assign('pro_contacter',$contacter);
            $this->cismarty->assign('pro_contacter_phone',$contacter_phone);
            $this->cismarty->assign('pro_province',$province_code);
            $this->cismarty->assign('pro_city',$city_code);
            $this->cismarty->assign('detail',$detail);
            $path="project/project_info.html";
            $this->cismarty->display($path);
        }else{
            $this->session->sess_destroy();
            redirect('login');
        }
    }
    
    public function save_info(){
        //die(var_dump($this->input->post('num')));
        $res=$this->info_model->save_info();
        if ($res==2){
            $this->show_message('信息不完整');
            exit();
        }elseif($res==1){
            $this->show_message('存储成功',site_url('project/index'));
            exit();
        }else{
            $this->show_message('存储失败');
            exit();
        }
    }
}