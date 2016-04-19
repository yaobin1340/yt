<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/19
 * Time: 19:17
 */
class Reg extends MY_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('reg_model');
    }

    public function index(){
        $this->display('login/reg.html');
    }

    public function save_user(){
        $res=$this->reg_model->save_user();
        if ($res==3) {
            $this->show_message('账户已被使用');
            exit();
        }elseif($res==1){
            $this->session->sess_destroy();
            $this->show_message('注册成功',site_url('login'));
            exit();
        } else{
            $this->show_message('注册失败');
            exit();
        }
    }
}