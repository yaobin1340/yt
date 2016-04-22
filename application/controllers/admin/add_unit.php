<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/11
 * Time: 21:38
 */
class Add_unit extends MY_Controller {
    function __construct(){
        parent::__construct();
        $this->cismarty->assign('type',9);
        $this->load->model('admin/add_unit_model','add_unit_model');
    }

    function index(){
        $this->cismarty->assign('flag',0);
        $path="admin/admin_unit_info.html";
        $this->cismarty->display($path);
    }

    function add($unit){
        $res=$this->add_unit_model->add($unit);
        echo $res;
    }

}