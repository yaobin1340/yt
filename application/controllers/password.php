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

    public function check_login(){
        $res= $this->login_model->check_login();
        if ($res!=1) {
            if($res['status']==-1){
                $this->show_message('账户已被停用！');
                exit();
            }
            $this->session->set_userdata('username',$res['username']);
            $this->session->set_userdata('type',$res['type']);
            redirect('index');

        }
        else{
            $this->show_message('登陆失败');
            exit();
        }

    }
}
