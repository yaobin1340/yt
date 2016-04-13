<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/13
 * Time: 13:20
 */
class Deal_model extends MY_Controller {
    function __construct(){
        parent::__construct();
//        if (!$this->session->userdata('username')){
//            redirect('login');
//        }

        $this->cismarty->assign('type',7);
        $this->load->model('admin/deal_model_model','deal_model_model');
    }

    function index(){
        $this->list_task();
    }

    function save_unit(){
        $res = $this->unit_model->save_unit();
        if($res == 1){
            $this->show_message('已存在相同的单位');
            exit();
        }
        elseif ($res==3){
            $this->show_message('单位存储成功',site_url('admin/unit/index'));
            exit();
        }
        else{
            $this->show_message('单位存储失败');
            exit();
        }
    }

    public  function list_task($page=1){
        $data = $this->deal_model_model->list_task($page);
        $base_url = "/admin/deal_model/list_task/";
        $pager = $this->pagination->getPageLink($base_url, $data['total'], $data['limit']);
        $this->assign('pager', $pager);
        $this->assign('data', $data);
        $this->assign('base_url', base_url());
        $this->display('admin/admin_deal_model.html');

    }

    public function delete_model($id){
        $res=$this->deal_model_model->delete_model($id);

        if($res){
            $this->show_message('删除成功');
            exit();
        }else{
            $this->show_message('删除失败');
            exit();
        }
    }

    public function add_model(){
        //$this->assign('data',null);
        $this->cismarty->display('admin/admin_deal_model_info.html');
    }

    public function save_model(){
         $res=$this->deal_model_model->save_model();
        if ($res==1){
            $this->show_message('新增成功',site_url('admin/deal_model/index'));
            exit();
        }elseif ($res==2){
            $this->show_message('标题不能为空');
            exit();
        }elseif ($res==3){
            $this->show_message('文件上传失败');
            exit();
        }elseif ($res==5){
            $this->show_message('标题已存在');
            exit();
        }else{
            $this->show_message('新增失败');
            exit();
        }
    }

    public function download($id){
       $this->deal_model_model->download($id);

    }
}