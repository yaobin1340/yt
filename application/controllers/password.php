<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/12
 * Time: 22:21
 */
class Password extends CI_Controller {


    function __construct()
    {
        parent::__construct();
        $this->load->model('password_model');
    }
    public function index(){
        $this->cismarty->assign('web_title','修改密码');
        $this->cismarty->assign('username',$this->session->userdata('username'));
        $this->cismarty->display('login/password.html');
//		$this->load->view('base_data');
    }

    public function reset_password(){
        
        $res= $this->password_model->reset_password();
        if ($res==3) {
            $this->show_message('密码错误');
            exit();
        }elseif($res==1){
            $this->session->sess_destroy();
            $this->show_message('修改成功',site_url('login'));
            exit();
        } else{
            $this->show_message('修改失败');
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
