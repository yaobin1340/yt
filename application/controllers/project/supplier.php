<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/18
 * Time: 13:18
 */
class Supplier extends MY_Controller
{
    function __construct(){
        parent::__construct();
        if (!$this->session->userdata('username')){
            redirect('login');
        }

        $this->cismarty->assign('type', 2);
        $this->load->model('project/supplier_model', 'supplier_model');
    }

    function index(){

        $this->list_task();
    }

    public  function list_task($page=1){
        $data = $this->supplier_model->list_task($page);
        $base_url = "/project/supplier/list_task/";
        $pager = $this->pagination->getPageLink($base_url, $data['total'], $data['limit']);
        $this->assign('pager', $pager);
        $this->assign('data', $data);
        $this->display('project/project_supplier.html');

    }

    function show_supplier($id){
        $res = $this->supplier_model->show_supplier($id);

        if ($res){
            $this->assign('data', $res);
            $this->display('project/project_supplier_details.html');
        }else{
            $this->show_message('公告内容丢失');
            exit();
        }
    }

}