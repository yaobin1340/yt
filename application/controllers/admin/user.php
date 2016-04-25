<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/12
 * Time: 19:09
 */
class User extends MY_Controller {
    function __construct(){
        parent::__construct();
//        if (!$this->session->userdata('username')){
//            redirect('login');
//        }

        $this->cismarty->assign('type',11);
        $this->load->model('admin/user_model','user_model');
    }

    function index(){
        $this->list_task();
    }

    function save_user(){
        $res = $this->user_model->save_user();
        if($res == -1){
            $this->show_message('只有admin管理员可以新增用户');
            exit();
        }
        elseif ($res==3){
            $this->show_message('账号注册成功',site_url('admin/user/index'));
            exit();
        }elseif ($res==1){
            $this->show_message('手机已注册！');
            exit();
        }else{
            $this->show_message('账号注册失败');
            exit();
        }
    }

    public  function list_task($page=1){
        $data = $this->user_model->list_task($page);
        $base_url = "/admin/user/list_task/";
        $pager = $this->pagination->getPageLink($base_url, $data['total'], $data['limit']);
        $this->assign('pager', $pager);
        $this->assign('data', $data);
        $this->assign('web_title','用户管理');
        $this->display('admin/admin_user.html');

    }


    public function add_user()
    {

        //$this->assign('data',null);
        $this->assign('web_title','新增用户');
        $this->cismarty->display('admin/admin_user_info.html');
    }

    public function change()
    {
        
        $res = $this->user_model->change();
        
        if($res==3){
            $this->show_message('操作成功');
            exit();
        }elseif($res==2){
            $this->show_message('只有admin管理员可以此操作');
            exit();
        }else{
            $this->show_message('操作失败');
            exit();
        }
    }

    public function reset_password($id){
        $res = $this->user_model->reset_password($id);
        if($res == -1){
            $this->show_message('只有admin管理员可以重置密码');
            exit();
        } elseif ($res==1){
            $this->show_message('密码重置成功！');
            exit();
        }else{
            $this->show_message('密码重置失败');
            exit();
        }
    }
}