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
       $this->list_task();
    }

    public  function list_task($page=1){
        $data = $this->demand_model->list_task($page);
        $base_url = "/project/demand/list_task/";
        $pager = $this->pagination->getPageLink($base_url, $data['total'], $data['limit']);
        $this->assign('pager', $pager);
        $this->assign('data', $data);
        $this->display('project/project_demand.html');

    }

    function show_demand($id){
        $res = $this->demand_model->show_demand($id);
        if ($res){
            $this->assign('data', $res['item']);
            $this->assign('pro_name', $res['pro_name']);
            $this->display('project/project_demand_details.html');
        }else{
            $this->show_message('公告内容丢失');
            exit();
        }
    }
    
    public function info(){
        $this->assign('m_id', '0');
        $this->assign('size', '');
        $this->assign('num', '');
        $this->assign('unit_id', '1');
        $this->assign('s_date', '');
        $this->assign('e_date', '');
        $this->assign('person', '');
        $this->assign('phone', '');
        $this->assign('pic', '');
        $this->assign('desc', '');
        $this->assign('unit', '0');
        $this->assign('id', '');
        $this->display('project/project_demand_info.html');
    }
    
    public function save_demand(){
        $res=$this->demand_model->save_demand();
        if($res == 5){
            $this->show_message('账号审核未通过');
            exit();
        }elseif ($res==3){
            $this->show_message('信息不完整');
            exit();
        } elseif ($res==1){
            $this->show_message('单位存储成功',site_url('project/demand/index'));
            exit();
        }
        else{
            $this->show_message('保存失败');
            exit();
        }
    }

    function edit_demand($id){
        $res=$this->demand_model->show_demand($id);
        if ($res){
            $this->assign('m_id', $res['m_id']?$res['m_id']:'00');
            $this->assign('size', $res['size']);
            $this->assign('num', $res['num']);
            $this->assign('unit_id',$res['unit_id']?$res['unit_id']: 1);
            $this->assign('s_date', $res['s_date']);
            $this->assign('e_date', $res['e_date']);
            $this->assign('person', $res['person']);
            $this->assign('phone', $res['phone']);
            $this->assign('pic', $res['pic']);
            $this->assign('desc', $res['desc']);
            $this->assign('unit', $res['unit']);
            $this->assign('id', $res['id']);
            $this->display('project/project_demand_info.html');
        }
        else{
            $this->show_message('资料丢失');
            exit();
        }
    }

    function delete_demand($id){
        $res=$this->demand_model->delete_demand($id);
        if ($res){
            $this->show_message('删除成功');
            exit();
        }
        else{
            $this->show_message('删除失败');
            exit();
        }
    }
}