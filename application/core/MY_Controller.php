<?php
if (! defined('BASEPATH'))
exit('No direct script access allowed');
/**
 * 扩展业务控制器
 *
 * @package		app
 * @subpackage	Libraries
 * @category	controller
 * @author      yaobin<645894453@qq.com>
 *
 */
class MY_Controller extends CI_Controller
{
	public function __construct ()
	{
		parent::__construct();
		$this->load->model('controller_use');
		$this->load->model('login_model');
		ini_set('date.timezone','Asia/Shanghai');
		$this->cismarty->assign('base_url',base_url());//url路径
		$news=$this->controller_use->get_Latest_News();
		$this->cismarty->assign('lastnews',$news !=1 ? $news['title'] : '无最新公告');
		$this->cismarty->assign('lastnewsid',$news !=1 ? $news['id'] : -1);
		if (!$this->session->userdata('username')){
			redirect('login');
		}
		$rs = $this->login_model->check_profile($this->session->userdata('id'),$this->session->userdata('type'));
		if($rs){
			$name = $this->login_model->get_profile_name($this->session->userdata('id'),$this->session->userdata('type'));
			$name = $name?$name:'管理员';
			$this->assign('head_name',$name);
		}else{
			if($this->session->userdata('type') == 3){
				redirect('login/project_reg');
			}elseif($this->session->userdata('type') == 2){
				redirect('login/supplier_reg');
			}
		}
		$status = $this->login_model->get_status();
		if($status < 2){
			$this->show_message('您好没有通过审核，无权此操作');
		}

	}

	//重载smarty方法assign
	public function assign($key,$val) {
		$this->cismarty->assign($key,$val);
	}

	//重载smarty方法display
	public function display($html) {
		$this->cismarty->display($html);
	}
	
//	//重载smarty方法show
//	public function show($html) {
//		$this->cismarty->show($html);
//	}

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

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */