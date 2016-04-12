<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/12
 * Time: 15:25
 */
class Material extends MY_Controller {
    function __construct(){
        parent::__construct();
//        if (!$this->session->userdata('username')){
//            redirect('login');
//        }

        $this->cismarty->assign('type',10);
        $this->load->model('admin/material_model','material_model');
    }

    function index(){
        $this->list_task();
    }

    function save_material(){
        $res = $this->material_model->save_material();
        if($res == 1){
            $this->show_message('已存在相同的类别');
            exit();
        }
        elseif ($res==3){
            $this->show_message('类别存储成功',site_url('admin/material/index'));
            exit();
        }
        else{
            $this->show_message('类别存储失败');
            exit();
        }
    }

    public  function list_task($page=1){
        $data = $this->material_model->list_task($page);
        $base_url = "/admin/material/list_task/";
        $pager = $this->pagination->getPageLink($base_url, $data['total'], $data['limit']);
        $this->assign('pager', $pager);
        $this->assign('data', $data);
        $this->display('admin/admin_material.html');

    }

    public function delete_material()
    {
        $res=$this->material_model->delete_material();
        if($res){
            $this->show_message('删除成功');
            exit();
        }else{
            $this->show_message('删除失败');
            exit();
        }
    }

    public function add_material()
    {
        $this->assign('data',null);
        $this->cismarty->display('admin/admin_material_info.html');
    }

    public function edit_material($id)
    {
        $data = $this->material_model->get_material($id);
        $this->assign('data',$data);
        $this->cismarty->display('admin/admin_material_info.html');
    }

}