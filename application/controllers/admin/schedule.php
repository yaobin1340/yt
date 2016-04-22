<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/22
 * Time: 13:41
 */
class Schedule extends MY_Controller {
    function __construct(){
        parent::__construct();
//        if (!$this->session->userdata('username')){
//            redirect('login');
//        }

        $this->cismarty->assign('type',5);
        $this->load->model('admin/schedule_model','schedule_model');
    }

    function index(){
        $this->list_task();
    }


    public  function list_task($page=1){
        $data = $this->schedule_model->list_task($page);
        $base_url = "/admin/schedule/list_task/";
        $pager = $this->pagination->getPageLink($base_url, $data['total'], $data['limit']);
        $this->assign('pager', $pager);
        $this->assign('data', $data);
        $this->assign('web_title','进度数据');
        $this->display('admin/admin_schedule.html');

    }

    function show_ex($id){
        $data=$this->schedule_model->show_ex($id);
        if ($data){
            $this->assign('data', $data);
            $this->assign('web_title','进度详情');
            $this->display('admin/admin_schedule_details.html');
        }else{
            $this->show_message('信息丢失');
            exit();
        }
    }
}