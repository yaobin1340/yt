<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/18
 * Time: 20:28
 */
class Deal extends MY_Controller {


    function __construct(){
        parent::__construct();
        if (!$this->session->userdata('username')){
            redirect('login');
        }
        $this->cismarty->assign('type',4);
        $this->load->model('project/deal_model','deal_model');
    }

    public function index(){
        if ($this->session->userdata('type')==3){
            $path="project/project_deal.html";
            $this->cismarty->display($path);
        }else{
            $this->session->sess_destroy();
            redirect('login');
        }
    }

    public function info(){
        $this->cismarty->assign('data',1);
        $this->cismarty->display("project/project_deal_info.html");
    }

    public function save_deal(){
        $res=$this->deal_model->save_deal();
        if ($res==1){
            $this->show_message('存储成功',site_url('project/deal/index'));
            exit();
        }elseif ($res==2){
            $this->show_message('信息不完整');
            exit();
        }else{
            $this->show_message('存储失败');
            exit();
        }
    }
}