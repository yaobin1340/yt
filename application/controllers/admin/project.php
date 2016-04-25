<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/16
 * Time: 8:50
 */
class Project extends MY_Controller {
    function __construct(){
        parent::__construct();
//        if (!$this->session->userdata('username')){
//            redirect('login');
//        }

        $this->cismarty->assign('type',3);
        $this->load->model('admin/project_model','project_model');
    }

    function index(){
        $this->list_task();
    }

    public  function list_task($page=1){
        $data = $this->project_model->list_task($page);
        $base_url = "/admin/project/list_task/";
        $pager = $this->pagination->getPageLink($base_url, $data['total'], $data['limit']);
        $this->assign('pager', $pager);
        $this->assign('data', $data);
        $this->assign('web_title','项目列表');
        $this->display('admin/admin_project.html');

    }

    public function show_pro($id){
        $profile=$this->project_model->show_pro($id);
        $data=array();
        $detail=1;
        if ($profile!=1){
            $data=$profile['row'];
            $detail=$profile['detail'];
        }
        $this->cismarty->assign('data',$data);
        $this->cismarty->assign('detail',$detail);
        $this->assign('web_title','项目基本信息');
        $path="admin/admin_project_info.html";
        $this->cismarty->display($path);
    }

    public function reset_password($id){
        $res = $this->project_model->reset_password($id);
        if($res){
            $this->show_message('密码重置成功');
            exit();
        }else{
            $this->show_message('密码重置失败');
            exit();
        }
    }

    public function chenge_status($id){
        $res = $this->project_model->chenge_status($id);
        if($res){
            $this->show_message('审核通过成功');
            exit();
        }else{
            $this->show_message('操作失败');
            exit();
        }
    }
}