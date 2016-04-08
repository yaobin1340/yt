<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="zh-CN" />
<!--<meta content="all" name="robots" />
<meta content="all" name="googlebot" />-->
<meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<meta name="author" content="Dline" />
<meta name="Copyright" content="不以学习为目的的分享就是耍流氓" />
<meta name="keywords" content="没有关键词" />
<meta name="description" content="不以学习为目的的分享就是耍流氓" />

<title><?php echo $title; ?></title>

<!-- <base href="/" /> 
<link rel="apple-touch-icon-precomposed" href="appIcon.png">
<link rel="icon" href="favicon.ico" />
<link rel="shortcut icon" href="favicon.ico" />-->






<link href="./res/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="./res/css/material-icons.css" rel="stylesheet">
<link href="./res/css/base.css" rel="stylesheet">
<link href="./res/css/style.css" rel="stylesheet">

<link href="./res/css/ys.css" rel="stylesheet">

<script src="./res/js/jquery.min.js?v=1.12.1"></script>
<script async="async" src="./res/bootstrap/js/bootstrap.min.js"></script>


<!--[if lt IE 9]>
<script src="./res/js/html5shiv.min.js"></script>
<script src="./res/js/respond.min.js"></script>
<![endif]-->
</head>


<?php if( $c=="login" || $c=="reg" || $c=="reg_supplier" || $c=="reg_project" || $c=="resetpassword" ) { ?>
<body class="fixed_header login" style="background-image:url(./tmp_res/img/login_bg.jpg);background-color: #01375d;" >
<?php } else { ?>
<body class="fixed_header"  >
<?php } ?>

<div id="loader"></div>

<!-- 头部 -->
<header id="header" class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="./" style="background-image: url(./tmp_res/img/header_logo.png);" ><i class="material-icons"></i></a>
    </div>

    <ul id="header_userarea" class="pull-right">
      <li id="scroll_to_top"><a class="header_btn" data-toggle="tooltip" data-placement="bottom" title="返回顶部"><i class="material-icons">&#xe255;</i></a></li>
      
<?php if( !$islogin ) { ?>
      <li><a href="./?c=login" class="header_btn">登录</a></li>
      <li id="header_reg"><a href="./?c=reg" class="header_btn">注册</a></li>
<?php } else { ?>
      
      <li id="header_user">
        <a class="header_btn" data-toggle="dropdown"><img id="header_avatar" class="img-circle" src="./tmp_res/img/avatar_demo02.jpg" alt="帅气的梦田君"> Admin</a>
        <ul class="dropdown-menu">
          <!--<li><a href="#"><i class="material-icons">&#xe85d;</i>详细资料</a></li>
          <li role="separator" class="divider"></li>-->
          <li><a href="./?c=logout"><i class="material-icons">&#xe879;</i>退出</a></li>
        </ul>
      </li>
      
<?php } ?>
      
      <!--<li class="divider"></li>-->
      <li>
        <a href="#" class="header_btn" data-toggle="dropdown"><i class="material-icons">&#xe8b8;</i></a>
        <ul class="dropdown-menu dropdown-menu-right">
          <li><a id="header_btn_fullscreen"><i class="material-icons">&#xe5d0;</i>切换全屏</a></li>
          <li><a id="header_btn_fixed"><i class="material-icons">&#xe250;</i>锁定顶栏</a></li>
        </ul>
      </li>
      <li><a href="#" class="header_btn"><i class="material-icons">&#xe887;</i></a></li>
    </ul>

  </div>
</header>
<!-- 头部 end -->