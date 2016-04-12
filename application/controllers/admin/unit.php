<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/11
 * Time: 21:11
 */
class Unit extends MY_Controller {
    function __construct(){
        parent::__construct();
//        if (!$this->session->userdata('username')){
//            redirect('login');
//        }

        $this->cismarty->assign('type',9);
        $this->load->model('admin/unit_model','unit_model');
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
        $data = $this->unit_model->list_task($page);
        $base_url = "/admin/unit/list_task/";
        $pager = $this->pagination->getPageLink($base_url, $data['total'], $data['limit']);
        $this->assign('pager', $pager);
        $this->assign('data', $data);
        $this->display('admin/admin_unit.html');

    }

    public function delete_unit()
    {
        $res=$this->unit_model->delete_unit();
        if($res){
            $this->show_message('删除成功');
            exit();
        }else{
            $this->show_message('删除失败');
            exit();
        }
    }

    public function add_unit()
    {
        $this->assign('data',null);
        $this->cismarty->display('admin/admin_unit_info.html');
    }

    public function edit_unit($id)
    {
        $data = $this->unit_model->get_unit($id);
        $this->assign('data',$data);
        $this->cismarty->display('admin/admin_unit_info.html');
    }

}