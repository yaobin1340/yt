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
        $this->display('admin/admin_deal.html');

    }

    public function show_contract($id){
        $data=$this->deal_model->show_contract($id);
        if ($data){
            $this->assign('data', $data);
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

}