<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/16
 * Time: 9:32
 */
class Push extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
//        if (!$this->session->userdata('username')){
//            redirect('login');
//        }

        $this->cismarty->assign('type', 8);
        $this->load->model('admin/push_model', 'push_model');
    }

    function index(){

        $this->list_task();
    }

    public  function list_task($page=1){
        $data = $this->push_model->list_task($page);
        $base_url = "/admin/push/list_task/";
        $pager = $this->pagination->getPageLink($base_url, $data['total'], $data['limit']);
        $this->assign('pager', $pager);
        $this->assign('data', $data);
        $this->display('admin/admin_push.html');

    }

    public function info(){
        $this->assign('title', "");
        $this->assign('content', "");
        $this->assign('id', "");
        $this->display('admin/admin_push_info.html');
    }

    function save_push(){
        $res = $this->push_model->save_push();
        if ($res==3){
            $this->show_message('公告推送成功',site_url('admin/push/index'));
            exit();
        }
        else{
            $this->show_message('公告推送失败');
            exit();
        }
    }

    function show_push($id){
        $res = $this->push_model->show_push($id);

        if ($res){
            $this->assign('data', $res);
            $this->display('admin/admin_push_details.html');
        }else{
            $this->show_message('公告内容丢失');
            exit();
        }
    }

    public function edit_push($id){
        $res = $this->push_model->show_push($id);
        if ($res){
            $this->assign('title', $res['title']);
            $this->assign('content', $res['content']);
            $this->assign('id', $res['id']);
            $this->display('admin/admin_push_info.html');
        }else{
            $this->show_message('公告内容丢失');
            exit();
        }
    }

    public function delete_push($id){
        $res = $this->push_model->delete_push($id);
        if ($res){
            $this->show_message('删除成功');
            exit();
        }else{
            $this->show_message('删除失败');
            exit();
        }
    }
}