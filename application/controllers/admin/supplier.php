<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/15
 * Time: 20:06
 */
class Supplier extends MY_Controller {
    function __construct(){
        parent::__construct();
//        if (!$this->session->userdata('username')){
//            redirect('login');
//        }

        $this->cismarty->assign('type',2);
        $this->load->model('admin/supplier_model','supplier_model');
    }

    function index(){
        $this->list_task();
    }
    
    public  function list_task($page=1){
        $data = $this->supplier_model->list_task($page);
        $base_url = "/admin/supplier/list_task/";
        $pager = $this->pagination->getPageLink($base_url, $data['total'], $data['limit']);
        $this->assign('pager', $pager);
        $this->assign('data', $data);
        $this->assign('web_title','供应商列表');
        $this->display('admin/admin_supplier.html');

    }

    public function show_sup($id){
        $data=$this->supplier_model->show_sup($id);
        $this->cismarty->assign('data',$data);
        $this->assign('web_title','供应商基本信息');
        $path="admin/admin_supplier_info.html";
        $this->cismarty->display($path);
    }

    public function reset_password($id){
        $res = $this->supplier_model->reset_password($id);
        if($res){
            $this->show_message('密码重置成功');
            exit();
        }else{
            $this->show_message('密码重置失败');
            exit();
        }
    }

    public function chenge_status($id){
        $res = $this->supplier_model->chenge_status($id);
        if($res){
            $this->show_message('审核通过成功');
            exit();
        }else{
            $this->show_message('操作失败');
            exit();
        }
    }
}