<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/18
 * Time: 20:28
 */
class Deal extends MY_Controller {


    function __construct(){
        parent::__construct();
        if (!$this->session->userdata('username') && $this->session->userdata('type')!=3){
            redirect('login');
        }
        $this->cismarty->assign('type',4);
        $this->load->model('project/deal_model','deal_model');
    }

    public function index(){
        $this->list_deal();
    }

    public function list_deal($page=1){
        $data = $this->deal_model->list_deal($page);
        $base_url = "/project/deal/list_deal/";
        $pager = $this->pagination->getPageLink($base_url, $data['total'], $data['limit']);
        $this->assign('pager', $pager);
        $this->assign('data', $data);
        $this->assign('web_title','合约管理');
        $this->display('project/project_deal.html');

    }

    public function change($id){
        $data = $this->deal_model->get_change($id);
        $this->cismarty->assign('data',$data);
        $this->assign('web_title','合约变更');
        $this->display('project/project_deal_change.html');
    }

    public function save_change(){
        $res=$this->deal_model->save_change();
        if ($res==1){
            $this->show_message('存储成功',site_url('project/deal/index'));
            exit();
        }else{
            $this->show_message('存储失败');
            exit();
        }
    }

    public function info(){
        $this->cismarty->assign('data',1);
        $this->assign('web_title','合约添加');
        $this->cismarty->display("project/project_deal_info.html");
    }

    public function save_deal(){
        $res=$this->deal_model->save_deal();
        if ($res==1){
            $this->show_message('存储成功',site_url('project/deal/index'));
            exit();
        }elseif ($res==2){
            $this->show_message('信息不完整');
            exit();
        }else{
            $this->show_message('存储失败');
            exit();
        }
    }

    public function show_contract($id){
        $data=$this->deal_model->show_contract($id);
        if ($data){
            $this->assign('data', $data);
            $this->assign('web_title','合约详情');
            $this->display('project/project_deal_contract_details.html');
        }else{
            $this->show_message('信息丢失');
            exit();
        }
    }

    public function show_change($id){
        $data=$this->deal_model->show_change($id);
        if ($data){
            $this->assign('data', $data);
            $this->assign('web_title','合约变更详情');
            $this->display('project/project_deal_change_details.html');
        }else{
            $this->show_message('信息丢失');
            exit();
        }
    }

    public function show_execute($pid,$cid=0,$page=1){
        $data = $this->deal_model->show_execute($pid,$cid,$page);
        $base_url = "/project/deal/show_execute/".$pid.'/'.$cid;
        $pager = $this->pagination->getPageLink($base_url, $data['total'], $data['limit']);
        $this->assign('pager', $pager);
        $this->assign('data', $data);
        $this->assign('pid', $pid);
        $this->assign('cid', $cid);
        $this->assign('web_title','合约执行');
        $this->display('project/project_deal_execute.html');

    }

    public function save_execute(){
        $data=$this->deal_model->save_execute();
        if ($data == 1){
            $this->show_message('提交成功');
            exit();
        }elseif ($data == -2){
            $this->show_message('存在未申请的付款');
            exit();
        }else{
            $this->show_message('提交失败');
            exit();
        }
    }
    
    public function get_ex($id){
        $data=$this->deal_model->get_ex($id);
        if ($data){
            $this->assign('data', $data);
            $this->assign('web_title','合约执行详情');
            $this->display('project/project_deal_execute_details.html');
        }else{
            $this->show_message('信息丢失');
            exit();
        }
    }

    public function fukuang($id){
        $data=$this->deal_model->fukuang($id);
        if ($data){
            $this->show_message('申请成功');
            exit();
        }else{
            $this->show_message('申请失败');
            exit();
        }
    }

    public function end_deal($pid,$cid){
        $data=$this->deal_model->end_deal($pid,$cid);
        if ($data){
            $this->assign('data', $data);
            $this->assign('web_title','合约终止');
            $this->display('project/project_deal_finish_end.html');
        }else{
            $this->show_message('信息丢失');
            exit();
        }
    }
    
    public function save_end(){
        $data=$this->deal_model->save_end();
        if ($data==1){
            $this->show_message('合同终止申请成功',site_url('project/deal/index'));
            exit();
        }else{
            $this->show_message('合同终止申请失败');
            exit();
        }
    }

    public function end_all_deal($id){
        $data=$this->deal_model->end_all_deal($id);
        if ($data){
            $this->assign('data', $data);
            $this->assign('web_title','合约终止');
            $this->display('project/project_deal_all_end.html');
        }else{
            $this->show_message('信息丢失');
            exit();
        }
    }

    public function save_all_end(){
        $data=$this->deal_model->save_all_end();
        if ($data==1){
            $this->show_message('合同终止申请成功',site_url('project/deal/index'));
            exit();
        }else{
            $this->show_message('合同终止申请失败');
            exit();
        }
    }

    public function download($id){
        $this->deal_model->download($id);
    }
}