<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}
	public function index()
	{

		//$this->assign('web_title', '登陆');
		$this->cismarty->display('login/login.html');
//		$this->load->view('base_data');
	}
	public function check_login()
	{
         $res= $this->login_model->check_login();
         if ($res!=1) {
			 if($res['status']==-1){
				 $this->show_message('账户已被停用！');
				 exit();
			 }

			$this->session->set_userdata('username',$res['username']);
			$this->session->set_userdata('id',$res['id']);
			$this->session->set_userdata('status',$res['status']);
			$this->session->set_userdata('type',$res['type']);
			$rs = $this->login_model->check_profile($res['id'],$res['type']);
			 if($rs){
				 $status = $this->login_model->get_status();
				 if($status < 2){
					 if($res['type'] == 3){
						 redirect(site_url('project/info/index'));
					 }else{
						 redirect(site_url('supplier/info/index'));
					 }
				 }
				 redirect('index');
			 }else{
				 if($res['type'] == 3){
					 redirect('login/project_reg');
				 }elseif($res['type'] == 2){
					 redirect('login/supplier_reg');
				 }else{
					 redirect('index');
				 }
			 }
         }
         else{
			 $this->show_message('登陆失败');
			 exit();
         }
	}

	public function supplier_reg(){
		//$this->assign('web_title','基本信息');
		$this->cismarty->display('login/supplier_reg.html');
	}
	
	public function project_reg(){
		//$this->assign('web_title','基本信息');
		$this->cismarty->display('login/project_reg.html');
	}

	/**
	 * 提示信息
	 * @param varchar $message 提示信息
	 * @param varchar $url 跳转页面，如果为空则后退
	 * @param int $type 提示类型，1是自动关闭的提示框，2是错误提示框
	 * @return array 显示页码的数组
	 **/
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
