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
        if (!$this->session->userdata('username')){
            redirect('login');
        }
        $this->cismarty->assign('type',1);
        $this->load->model('supplier/index_model','index_model');
    }

    public function index(){
        if ($this->session->userdata('type')==2){
            $path="supplier/supplier_index.html";
            $this->cismarty->display($path);
        }else{
            $this->session->sess_destroy();
            redirect('login');
        }
    }
}