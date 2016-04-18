<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/16
 * Time: 15:15
 */
class Demand extends MY_Controller
{


    function __construct(){
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('login');
        }
        $this->cismarty->assign('type', 3);
        $this->load->model('supplier/demand_model', 'demand_model');
    }

    function index(){
       $this->list_task();
    }

    public  function list_task($page=1){
        $data = $this->demand_model->list_task($page);
        $base_url = "/supplier/demand/list_task/";
        $pager = $this->pagination->getPageLink($base_url, $data['total'], $data['limit']);
        $this->assign('pager', $pager);
        $this->assign('data', $data);
        $this->display('supplier/supplier_demand.html');

    }

    function show_demand($id){
        $res = $this->demand_model->show_demand($id);
        if ($res){
            $this->assign('data', $res['item']);
            $this->assign('pro_name', $res['pro_name']);
            $this->assign('p_name', $res['p_name']);
            $this->assign('c_name', $res['c_name']);
            $this->assign('address', $res['address']);
            $this->display('supplier/supplier_demand_details.html');
        }else{
            $this->show_message('公告内容丢失');
            exit();
        }
    }
}