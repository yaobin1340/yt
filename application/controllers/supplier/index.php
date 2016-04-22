<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/15
 * Time: 8:55
 */
class Index extends MY_Controller {


    function __construct(){
        parent::__construct();
        if (!$this->session->userdata('username') && $this->session->userdata('type')!=2){
            redirect('login');
        }
        $this->cismarty->assign('type',1);
        $this->load->model('supplier/index_model','index_model');
    }

    public function index(){
        $data = $this->index_model->get_index_info();
        $this->assign('data', $data);
        $this->assign('web_title','供应商首页');
        $this->cismarty->display("supplier/supplier_index.html");
    }
}