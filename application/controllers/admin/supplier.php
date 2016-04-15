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
        $this->display('admin/admin_supplier.html');

    }
  

}