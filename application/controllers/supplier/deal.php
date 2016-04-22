<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/21
 * Time: 21:18
 */
class Deal extends MY_Controller {


    function __construct(){
        parent::__construct();
        if (!$this->session->userdata('username') && $this->session->userdata('type')!=2){
            redirect('login');
        }
        $this->cismarty->assign('type',2);
        $this->load->model('supplier/deal_model','deal_model');
    }

    function index(){
        $this->list_task();
    }

    public  function list_task($page=1){
        $data = $this->deal_model->list_task($page);
        $base_url = "/supplier/deal/list_task/";
        $pager = $this->pagination->getPageLink($base_url, $data['total'], $data['limit']);
        $this->assign('pager', $pager);
        $this->assign('data', $data);
        $this->assign('web_title','合约查看列表');
        $this->display('supplier/supplier_deal.html');

    }

    public function showdetails($flag,$id){

        if ($flag==1){
            $res = $this->deal_model->show_contract($id);
            if ($res){
                $this->assign('data', $res);
                $this->assign('web_title','合约详情');
                $this->display('supplier/supplier_deal_contract_details.html');
            }else{
                $this->show_message('公告内容丢失');
                exit();
            }
        }elseif ($flag==2){
            $res = $this->deal_model->show_change($id);
            if ($res){
                $this->assign('data', $res);
                $this->assign('web_title','合约变更详情');
                $this->display('supplier/supplier_deal_change_details.html');
            }else{
                $this->show_message('公告内容丢失');
                exit();
            }
        }

    }
}