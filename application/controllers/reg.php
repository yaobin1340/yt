<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/19
 * Time: 19:17
 */
class Reg extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('reg_model');
    }

    public function index(){
       
        $this->cismarty->assign('head_name','');
        $this->cismarty->assign('web_title','注册');
        $this->cismarty->display('login/reg.html');
    }

    public function save_user(){
        $res=$this->reg_model->save_user();
        if ($res==3) {
            $this->show_message('账户已被使用');
            exit();
        }elseif($res==1){
//            $this->session->sess_destroy();
            $this->session->set_userdata('username',$this->input->post('user_name'));
            $this->session->set_userdata('status',1);
            $this->session->set_userdata('type',$this->input->post('reg_type'));
            if($this->input->post('reg_type') == 2)
                $this->show_message('注册成功',site_url('login/supplier_reg'));
            else
                $this->show_message('注册成功',site_url('login/project_reg'));

            exit();
        } else{
            $this->show_message('注册失败');
            exit();
        }
    }

    public function show_message($message,$url=null,$type = 1){
        if($url){
            $js = "location.href='".$url."';";
        }else{
            $js = "history.back();";
        }

        if($type=='1'){
            echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
				<html xmlns='http://www.w3.org/1999/xhtml'>
				<head>
				<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
				<meta name='viewport' content='width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes' />
				<title>".$message."</title>
				<script src='/static/js/jquery.min.js'></script>
				<link rel='stylesheet' href='/res/css/dialog.css'>
				</head>
				<body>
				<script src='/res/js/easydialog.min.js'></script>
				<script>
				var callFn = function(){
				  ".$js."
				};
				easyDialog.open({
					container : {
						content : '".$message."'
					},
					autoClose : 2000,
					callback : callFn

				});

				</script>
				</body>
				</html>";
        }
        exit;
    }
}