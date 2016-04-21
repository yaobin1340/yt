<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/21
 * Time: 19:31
 */
class Payment extends MY_Controller {

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
        if (!$this->session->userdata('username') && $this->session->userdata('type')!=1){
            redirect('login');
        }
        $this->cismarty->assign('type',4);
        $this->load->model('admin/payment_model','payment_model');
    }

    function index(){
        $this->list_task();
    }

    public  function list_task($page=1){
        $data = $this->payment_model->list_task($page);
        $base_url = "/admin/payment/list_task/";
        $pager = $this->pagination->getPageLink($base_url, $data['total'], $data['limit']);
        $this->assign('pager', $pager);
        $this->assign('data', $data);
        $this->display('admin/admin_paymentrequest.html');

    }

    public function get_ex($id){
        $data=$this->payment_model->get_ex($id);
        if ($data){
            $this->assign('data', $data);
            $this->display('admin/admin_paymentrequest_details.html');
        }else{
            $this->show_message('信息丢失');
            exit();
        }
    }
}