<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yangyang
 * Date: 2016/4/15
 * Time: 9:10
 */
class Info extends CI_Controller {


    function __construct(){
        parent::__construct();
        if (!$this->session->userdata('username')){
            var_dump($this->session->all_userdata());
            redirect('login');
        }
        $this->cismarty->assign('type',0);
        $this->load->model('supplier/info_model','info_model');
    }

    public function index(){
        if ($this->session->userdata('type')==2){
            $data=array();
            $name="";
            $res=$this->info_model->getinfo();
            if ($res){
                 $data=$res;
                 $name=$res['name'];
            }
            $this->cismarty->assign('data',$data);
            $this->cismarty->assign('web_title','基本信息');
            $this->cismarty->assign('head_name',$name);
            $path="supplier/supplier_info.html";
            $this->cismarty->display($path);
        }else{
            redirect('login');
        }
    }

    public function save_info(){
        $res=$this->info_model->save_info();
        if ($res==2){
            $this->show_message('信息不完整');
            exit();
        }elseif($res==1){
            $this->show_message('存储成功',site_url('supplier/info'));
            exit();
        }else{
            $this->show_message('存储失败');
            exit();
        }
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