<?php /* Smarty version 3.1.24, created on 2016-04-27 01:06:29
         compiled from "D:/amp/Apache/htdocs/yt/application/views/login/login.html" */ ?>
<?php
/*%%SmartyHeaderCode:1385057201095943436_26677783%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce2983a8b9bc6f01acf42c105a4c4bf0719698a3' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/login/login.html',
      1 => 1461717328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1385057201095943436_26677783',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5720109669fce6_19356095',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5720109669fce6_19356095')) {
function content_5720109669fce6_19356095 ($_smarty_tpl) {
if (!is_callable('smarty_function_site_url')) require_once 'D:/amp/Apache/htdocs/yt/application/libraries/smarty/plugins/function.site_url.php';

$_smarty_tpl->properties['nocache_hash'] = '1385057201095943436_26677783';
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

  <title>登陆</title>


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
<div id="wrap" class="container-fluid">


<!-- 登陆框1212 -->
<div class="login_card card z_depth-1 container login_form">



    <form id="login" class="form-horizontal" action="<?php echo smarty_function_site_url(array('url'=>'login/check_login'),$_smarty_tpl);?>
" method="post" novalidate="" autocomplete="off">
        <fieldset>
          <legend>欢迎登录<div class="pull-right">没有账号？<a href="<?php echo smarty_function_site_url(array('url'=>'reg/index'),$_smarty_tpl);?>
" id="gotoreg" class="btn btn-flat btn-default">立即注册</a></div></legend>

          <label class="form-group">
            <i class="material-icons"></i>
            <input type="text"  class="form-control" style="color: #0f0f0f" id="user_name" name="user_name" placeholder="请输入邮箱地址" autocomplete="on" value="">
            <!--<button class="btn cancel"><i class="material-icons"></i></button>-->
            <p class="help-block"></p>
          </label>
          <label class="form-group">
            <i class="material-icons"></i>
            <input type="password" class="form-control" style="color: #0f0f0f" id="pwd" name="pwd" placeholder="请输入密码" value="">
            <p class="help-block"></p>
          </label>
          <label id="captchas_part" class="captcha form-group input-group" style="display: none;">
            <i class="material-icons"></i>
            <input type="text" id="captchas" name="captchas" class="form-control" placeholder="验证码" autocomplete="off" require_onced="">
            <a class="change_captchas input-group-addon" title="换一张" href="javascript:void(0)"><img class="verifyimg change_code" alt="点击显示" src="./skin/res/img/captcha.png"></a>
            <p class="help-block"></p>
          </label>
          <div class="form-group">
            <label class="check"><input id="user_remember" name="user_remember" type="checkbox"> 记住我</label>
            <!--<a href="./?c=resetpassword" class="btn btn-flat btn-default pull-right">忘记密码</a>-->
          </div>

          <div class="form-group">
              <div>
                  <button id="btn-login" type="submit" class="btn btn-lg btn-primary btn-raised btn-block ink">登录</button>
              </div>
          </div>
        </fieldset>
    </form>



</div>
    

<!-- 登陆框 end -->
  
</div>





<?php echo '<script'; ?>
>

//进入页面，用户名框直接获取焦点
$("#user_name").focus();


//登陆
$("#login").submit( function() {

  var user_name = $("#user_name").val();
  var pwd = $("#pwd").val();
  
  if ( !user_name ) {
    $("#user_name").focus().parent().addClass("has-error").children(".help-block").html("不能为空，请输入邮箱地址");
    return false;

  } else {
    $("#user_name").parent().removeClass("has-error").children(".help-block").html("");
  }
  
  if ( !pwd ) {
    $("#pwd").focus().parent().addClass("has-error").children(".help-block").html("密码不能为空");
    return false;
  } else if ( !$("#pwd").val().match(/[\w@.]{6,15}/) ) {
    $("#pwd").focus().parent().addClass("has-error").children(".help-block").html("英文/数字/下划线，6-15个字符");
    return false;
  } else {
    $("#pwd").parent().removeClass("has-error").children(".help-block").html("");
  }
  
  
  /*
  完成登陆
  */
  

});
//登陆 end


<?php echo '</script'; ?>
>



<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>