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
        $this->cismarty->assign('sup_name',$data['name'] ? $data['name'] : "");
        $this->cismarty->assign('sup_type',$data['type'] ? $data['type'] : 0);
        $this->cismarty->assign('sup_total',$data['total'] ? $data['total'] : "");
        $this->cismarty->assign('sup_allow',$data['allow'] ? $data['allow'] : "");
        $this->cismarty->assign('sup_num',$data['num'] ? $data['num'] : "");
        $this->cismarty->assign('sup_card',$data['card'] ? $data['card'] : "");
        $this->cismarty->assign('sup_province',$data['province_code'] ? $data['province_code'] : "00");
        $this->cismarty->assign('sup_city',$data['city_code'] ? $data['city_code'] : "00");
        $this->cismarty->assign('sup_address',$data['address'] ? $data['address'] : "");
        $this->cismarty->assign('sup_person',$data['person'] ? $data['person'] : "");
        $this->cismarty->assign('sup_phone',$data['phone'] ? $data['phone'] : "");
        $this->cismarty->assign('sup_desc',$data['desc'] ? $data['desc'] : "");
        $this->cismarty->assign('pic',$data['pic'] ? $data['pic'] : "");
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