<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

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
		$this->display('login/login.html');
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
         	redirect('index');

         }
         else{
			 $this->show_message('登陆失败');
			 exit();
         }
	}

	public function supplier_reg(){
		$this->display('login/supplier_reg.html');
	}
}
