<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/16
 * Time: 13:14
 */
class Notice extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
//        if (!$this->session->userdata('username')){
//            redirect('login');
//        }

        $this->cismarty->assign('type', 5);
        $this->load->model('project/notice_model', 'notice_model');
    }

    function index(){

        $this->list_task();
    }

    public  function list_task($page=1){
        $data = $this->notice_model->list_task($page);
        $base_url = "/project/notice/list_task/";
        $pager = $this->pagination->getPageLink($base_url, $data['total'], $data['limit']);
        $this->assign('pager', $pager);
        $this->assign('data', $data);
        $this->display('project/project_notice.html');

    }

    function show_push($id){
        $res = $this->notice_model->show_push($id);

        if ($res){
            $this->assign('data', $res);
            $this->display('project/project_notice_details.html');
        }else{
            $this->show_message('公告内容丢失');
            exit();
        }
    }

}