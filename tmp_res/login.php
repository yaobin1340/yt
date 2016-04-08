<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();

$act = $_REQUEST['action'];
if ($act == 'login') {  //登录
	@$user = stripslashes(trim($_REQUEST['user_name']));
	@$pass = stripslashes(trim($_REQUEST['pwd']));
	
	if (empty ($user)) {
		//echo '用户名不能为空';
		echo '{"success":0, "msg":"用户名不能为空"}';
		exit;
	}
	if (empty ($pass)) {
		//echo '密码不能为空';
		echo '{"success":0, "msg":"密码不能为空"}';
		exit;
	}
	$md5pass = md5($pass);

$hhhhh=0;
if( $user=="17000000001" && $pass=="123456" ) $hhhhh=1;


	if ($hhhhh) {
		
		//if ($rs) {

			$arr['success'] = 1;
			$arr['msg'] = '登录成功！';
			
			setcookie("login", 1, time()+86400, "/");
			
		/*} else {
			$arr['success'] = 0;
			$arr['msg'] = '登录失败';
		}*/
	} else {
		$arr['success'] = 0;
	    $arr['msg'] = '用户名或密码不正确！';
	}
	echo json_encode($arr);
}
elseif ($act == 'logout') {  //退出
	setcookie("login", "", time() - 3600);
	header("Location: ./?c=login");
}

?>
