<?php /* Smarty version 3.1.24, created on 2016-04-19 10:43:49
         compiled from "D:/amp/Apache/htdocs/yt/application/views/login/password.html" */ ?>
<?php
/*%%SmartyHeaderCode:521957159b65a92888_87149147%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '548867f0365d1dce7e9132c62275ebbbc6d368ba' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/login/password.html',
      1 => 1461033818,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '521957159b65a92888_87149147',
  'variables' => 
  array (
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_57159b65b0f880_33522213',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57159b65b0f880_33522213')) {
function content_57159b65b0f880_33522213 ($_smarty_tpl) {
if (!is_callable('smarty_function_site_url')) require_once 'D:/amp/Apache/htdocs/yt/application/libraries/smarty/plugins/function.site_url.php';

$_smarty_tpl->properties['nocache_hash'] = '521957159b65a92888_87149147';
echo $_smarty_tpl->getSubTemplate ("common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div id="wrap" class="container-fluid">
  
  
<!-- 修改密码框 -->
<div id="password_box" class="login_card card z_depth-1 container login_form">

  <legend>修改密码<div class="pull-right"><a href="<?php echo smarty_function_site_url(array('url'=>'index/index'),$_smarty_tpl);?>
" class="btn btn-flat btn-default">返回首页</a></div></legend>
  
  <div id="password_tip_phone" class="reg_tip">当前手机号：<b><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</b></div>
  
  <form id="resetpassword" class="form-horizontal" action="<?php echo smarty_function_site_url(array('url'=>'password/reset_password'),$_smarty_tpl);?>
" method="post" novalidate="" autocomplete="off">
  <div id="password_step_1">

    <fieldset>

      <label class="form-group">
        <i class="material-icons"></i>
        <input type="password" class="form-control" id="pwd_now" name="pwd_now" placeholder="请输入当前密码" value="">
        <p class="help-block"></p>
      </label>
      <label class="form-group">
        输入新密码：
      </label>
      <label class="form-group">
        <i class="material-icons"></i>
        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="请输入新密码" value="">
        <p class="help-block"></p>
      </label>
      <label class="form-group">
        <i class="material-icons"></i>
        <input type="password" class="form-control" id="pwd_new" name="pwd_new" placeholder="请再次输入新密码" value="">
        <p class="help-block"></p>
      </label>

      <div class="form-group">
          <div>
              <button id="btn_password_submit" type="button" class="btn btn-lg btn-primary btn-raised btn-block ink">修改密码</button>
          </div>
      </div>

    </fieldset>

  </div>

  </form>

    

</div>
    

<!-- 修改密码框 end -->
  
</div>



<?php echo '<script'; ?>
>

//进入页面，用户名框直接获取焦点
$("#user_name").focus();


//获取验证码
$(".get_smscaptchas").click(function () {
  //$(this).html("验证码已发送");
});
//获取验证码 end






//第二步完成重置密码。（此步仅在服务器端判断手机号，前端就不再判断了）
//$("#resetpassword").submit( function() {
$("#btn_password_submit").click(function() {


  var pwd = $("#pwd").val();

  var pwd2= $("#pwd_new").val();
  if ( !pwd ) {
    $("#pwd").focus().parent().addClass("has-error").children(".help-block").html("密码不能为空");
    return false;
  } else if ( !$("#pwd").val().match(/[\w@.]{6,15}/) || pwd.length>15) {
    $("#pwd").focus().parent().addClass("has-error").children(".help-block").html("英文/数字/下划线，6-15个字符");
    return false;
  } else {
    $("#pwd").parent().removeClass("has-error").children(".help-block").html("");
  }
  if(!pwd2){
    $("#pwd_new").focus().parent().addClass("has-error").children(".help-block").html("密码不能为空");
    return false;
  } else if (pwd != pwd2) {
    $("#pwd_new").focus().parent().addClass("has-error").children(".help-block").html("两次密码不同");
    return false;
  } else {
    $("#pwd_new").parent().removeClass("has-error").children(".help-block").html("");
  }
  $("#resetpassword").submit();
  /*
  完成重置密码
  */
  

});
//第二步完成重置密码 end


<?php echo '</script'; ?>
>






<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>