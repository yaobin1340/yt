<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/12
 * Time: 22:21
 */
class Password extends MY_Controller {


    function __construct()
    {
        parent::__construct();
        $this->load->model('password_model');
    }
    public function index(){
        $this->assign('username',$this->session->userdata('username'));
        $this->display('login/password.html');
//		$this->load->view('base_data');
    }

    public function reset_password(){
        
        $res= $this->password_model->reset_password();
        if ($res==3) {
            $this->show_message('密码错误');
            exit();
        }elseif($res==1){
            $this->session->sess_destroy();
            $this->show_message('修改成功',site_url('login'));
            exit();
        } else{
            $this->show_message('修改失败');
            exit();
        }

    }
}
