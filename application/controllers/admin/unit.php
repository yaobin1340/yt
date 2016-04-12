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
            $this->show_message('已存在相同的单位');

            exit();
        }
        elseif ($res==3){
            $this->show_message('单位存储成功');

            exit();
        }
        else
        {
            $this->show_message('单位存储失败');

            exit();
        }
    }
    public function select_unit()
    {
      //  $title=$this->input->post('sousuo');
        $this->list_task(1);
    }
     public  function list_task($page=1)
    {
        $data = $this->unit_model->list_task($page);
        $base_url = "/admin/unit/list_task/";
        $pager = $this->pagination->getPageLink($base_url, $data['total'], $data['limit']);
        $this->assign('pager', $pager);
        $this->assign('data', $data);
        $this->display('admin/admin_unit.html');

    }
    public function delete_unit()
    {
       // die(var_dump($this->input->post('CB')));
        $res=$this->unit_model->delete_unit();
        if($res){
            $this->show_message('删除成功');

            exit();
        }
        else
        {
            $this->show_message('删除失败');

            exit();
        }
    }

}