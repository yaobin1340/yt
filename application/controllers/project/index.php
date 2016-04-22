<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/14
 * Time: 8:12
 */
class Index extends MY_Controller {


    function __construct(){
        parent::__construct();
        if (!$this->session->userdata('username') && $this->session->userdata('type')!=3){
            redirect('login');
        }
        $this->cismarty->assign('type',1);
        $this->load->model('project/index_model','index_model');
    }

    public function index(){
        $data = $this->index_model->get_index_info();
        $this->assign('web_title','项目管理首页');
        $this->assign('data', $data);
        $this->cismarty->display("project/project_index.html");
    }
}
