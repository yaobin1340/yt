<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/20
 * Time: 8:27
 */
class Deal extends MY_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    function __construct(){
        parent::__construct();
        if (!$this->session->userdata('username') && $this->session->userdata('type')==1){
            redirect('login');
        }
        $this->cismarty->assign('type',6);
        $this->load->model('admin/deal_model','deal_model');
    }

    public function index(){
        $this->list_deal();
    }

    public function list_deal($page=1){
        $data = $this->deal_model->list_deal($page);
        $base_url = "/admin/deal/list_deal/";
        $pager = $this->pagination->getPageLink($base_url, $data['total'], $data['limit']);
        $this->assign('pager', $pager);
        $this->assign('data', $data);
        $this->assign('web_title','合约管理');
        $this->display('admin/admin_deal.html');

    }

    public function show_contract($id){
        $data=$this->deal_model->show_contract($id);
        if ($data){
            $this->assign('data', $data);
            $this->assign('web_title','合约查看');
            $this->display('admin/admin_deal_contract_details.html');
        }else{
            $this->show_message('信息丢失');
            exit();
        }
    }

    public function show_change($id){
        $data=$this->deal_model->show_change($id);
        if ($data){
            $this->assign('data', $data);
            $this->assign('web_title','合约变更查看');
            $this->display('admin/admin_deal_change_details.html');
        }else{
            $this->show_message('信息丢失');
            exit();
        }
    }

    public function SH_contract($id){
        $res=$this->deal_model->SH_contract($id);
        if ($res){
            $this->show_message('审核通过');
            exit();
        }else{
            $this->show_message('操作失败');
            exit();
        }
    }

    public function SH_change($id){
        $res=$this->deal_model->SH_change($id);
        if ($res){
            $this->show_message('审核通过');
            exit();
        }else{
            $this->show_message('操作失败');
            exit();
        }
    }

    public function end_change($id){
        $res=$this->deal_model->end_change($id);
        if ($res==1){
            $this->show_message('终止成功');
            exit();
        }else{
            $this->show_message('终止失败');
            exit();
        }
    }

    public function end_contract($id){
        $res=$this->deal_model->end_contract($id);
        if ($res==1){
            $this->show_message('终止成功');
            exit();
        }else{
            $this->show_message('终止失败');
            exit();
        }
    }

    public function end_deal($id){
        $res=$this->deal_model->end_deal($id);
        if ($res==1){
            $this->show_message('终止成功');
            exit();
        }else{
            $this->show_message('终止失败');
            exit();
        }
    }

    public function show_end_details($pid,$cid){
        $data=$this->deal_model->show_end_details($pid,$cid);
        if ($data==-1){
            $this->show_message('未找到终止信息');
            exit();
        }elseif (!$data){
            $this->show_message('信息丢失');
            exit();
        }else{
            $this->assign('data', $data);
            $this->assign('web_title','变更终止信息');
            $this->display('admin/admin_deal_end.html');
            exit();
        }
    }

    public function show_end_all_details($pid){
        $data=$this->deal_model->show_end_all_details($pid);
        if ($data==-1){
            $this->show_message('未找到终止信息');
            exit();
        }elseif (!$data){
            $this->show_message('信息丢失');
            exit();
        }else{
            $this->assign('data', $data);
            $this->assign('web_title','变更终止信息');
            $this->display('admin/admin_deal_all_end.html');
            exit();
        }
    }
    
}