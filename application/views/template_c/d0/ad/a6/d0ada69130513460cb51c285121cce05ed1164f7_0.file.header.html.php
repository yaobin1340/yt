<?php /* Smarty version 3.1.24, created on 2016-04-27 08:57:52
         compiled from "D:/amp/Apache/htdocs/yt/application/views/common/header.html" */ ?>
<?php
/*%%SmartyHeaderCode:1460157200e9079aa25_40025323%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0ada69130513460cb51c285121cce05ed1164f7' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/common/header.html',
      1 => 1461717326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1460157200e9079aa25_40025323',
  'variables' => 
  array (
    'web_title' => 0,
    'head_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_57200e9095be50_00332133',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57200e9095be50_00332133')) {
function content_57200e9095be50_00332133 ($_smarty_tpl) {
if (!is_callable('smarty_function_site_url')) require_once 'D:/amp/Apache/htdocs/yt/application/libraries/smarty/plugins/function.site_url.php';

$_smarty_tpl->properties['nocache_hash'] = '1460157200e9079aa25_40025323';
?>
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

<title><?php echo $_smarty_tpl->tpl_vars['web_title']->value;?>
</title>


<link href="/res/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="/res/css/material-icons.css" rel="stylesheet">
<link href="/res/css/base.css" rel="stylesheet">
<link href="/res/css/style.css" rel="stylesheet">

<link href="/res/css/ys.css" rel="stylesheet">

<?php echo '<script'; ?>
 src="/res/js/jquery.min.js?v=1.12.1"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 async="async" src="/res/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>


<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="/res/js/html5shiv.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/res/js/respond.min.js"><?php echo '</script'; ?>
>
<![endif]-->
</head>

<div id="loader"></div>

<!-- 头部 -->
<header id="header" class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="./" style="background-image: url(/tmp_res/img/header_logo.png);" ><i class="material-icons"></i></a>
    </div>

    <ul id="header_userarea" class="pull-right">
      <li id="scroll_to_top"><a class="header_btn" data-toggle="tooltip" data-placement="bottom" title="返回顶部"><i class="material-icons">&#xe255;</i></a></li>
      <li id="header_user">
        <a class="header_btn" data-toggle="dropdown"><?php if ($_smarty_tpl->tpl_vars['head_name']->value != '') {?><img id="header_avatar" class="img-circle" src="/tmp_res/img/avatar_demo02.jpg" alt="帅气的梦田君"> <?php }
echo $_smarty_tpl->tpl_vars['head_name']->value;?>
</a>
        <ul class="dropdown-menu">
          <!--<li><a href="#"><i class="material-icons">&#xe85d;</i>详细资料</a></li>
          <li role="separator" class="divider"></li>-->
          <li><a href="<?php echo smarty_function_site_url(array('url'=>'index/logout'),$_smarty_tpl);?>
"><i class="material-icons">&#xe879;</i>退出</a></li>
        </ul>
      </li>

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
<!-- 头部 end --><?php }
}
?>