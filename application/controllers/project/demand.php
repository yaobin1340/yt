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
        $this->load->model('project/demand_model', 'demand_model');
    }

    function index(){
        $this->display('project/project_demand.html');
      //  $this->list_task();
    }

    public  function list_task($page=1){
        $data = $this->demand_model->list_task($page);
        $base_url = "/project/demand/list_task/";
        $pager = $this->pagination->getPageLink($base_url, $data['total'], $data['limit']);
        $this->assign('pager', $pager);
        $this->assign('data', $data);
        $this->display('project/project_demand.html');

    }

    function show_push($id){
        $res = $this->demand_model->show_push($id);
        if ($res){
            $this->assign('data', $res);
            $this->display('project/project_demand_details.html');
        }else{
            $this->show_message('公告内容丢失');
            exit();
        }
    }
    
    public function info(){

        $this->display('project/project_demand_info.html');
    }
}