<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/11
 * Time: 21:11
 */
class Unit extends MY_Controller {
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')){
            redirect('login');
        }
        else
        {
            $this->cismarty->assign('type',9);
        }
         $this->load->model('admin/unit_model','unit_model');
    }
    function index()
    {
        /*$path="admin/admin_unit.html";
        $this->cismarty->display($path);*/
        $this->list_task();
    }
    function add_unit(){
        $res=$this->unit_model->add_unit();
        if($res==1){
            echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'><script>alert('已存在相同的单位');history.back();</script>";
            exit();
        }
        elseif ($res==3){
            echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'><script>alert('单位存储成功！');history.back();</script>";
            exit();
        }
        else
        {
            echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'><script>alert('单位存储失败');history.back();</script>";
            exit();
        }
    }
    public function select_unit()
    {
            
    }
     public  function list_task($page=1)
    {
        $data = $this->unit_model->list_task($page);
        $base_url = "/admin/unit/list_task";
        $pager = $this->pagination->getPageLink($base_url, $data['total'], $data['limit']);
        $this->assign('pager', $pager);
        $this->assign('data', $data);
        $this->display('admin/admin_unit.html');

    }
}