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
        //  $this->load->model('login_model');
    }
    function index()
    {
        $path="admin/admin_unit.html";
        $this->cismarty->display($path);
    }
    function add_select()
    {
        if ($this->input->post('add_unit')){
            $this->add_unit();
        }
    }
    function add_unit(){
        
    }
}