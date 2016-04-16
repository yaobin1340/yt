<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/16
 * Time: 9:32
 */
class Push extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
//        if (!$this->session->userdata('username')){
//            redirect('login');
//        }

        $this->cismarty->assign('type', 8);
        $this->load->model('admin/push_model', 'push_model');
    }

    function index(){
        $this->display('admin/admin_push.html');
       // $this->list_task();
    }

    public  function list_task($page=1){
        $data = $this->push_model->list_task($page);
        $base_url = "/admin/push/list_task/";
        $pager = $this->pagination->getPageLink($base_url, $data['total'], $data['limit']);
        $this->assign('pager', $pager);
        $this->assign('data', $data);
        $this->display('admin/admin_push.html');

    }
    
    public function info(){
        $this->display('admin/admin_push_info.html');
    }
}