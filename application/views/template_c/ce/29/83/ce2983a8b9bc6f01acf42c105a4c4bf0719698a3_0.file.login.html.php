<?php /* Smarty version 3.1.24, created on 2016-04-11 11:26:46
         compiled from "D:/amp/Apache/htdocs/yt/application/views/login/login.html" */ ?>
<?php
/*%%SmartyHeaderCode:29454570b1976dd3573_68929891%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce2983a8b9bc6f01acf42c105a4c4bf0719698a3' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/login/login.html',
      1 => 1460345201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29454570b1976dd3573_68929891',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_570b1976e488a8_90338514',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_570b1976e488a8_90338514')) {
function content_570b1976e488a8_90338514 ($_smarty_tpl) {
if (!is_callable('smarty_function_site_url')) require_once 'D:/amp/Apache/htdocs/yt/application/libraries/smarty/plugins/function.site_url.php';

$_smarty_tpl->properties['nocache_hash'] = '29454570b1976dd3573_68929891';
echo $_smarty_tpl->getSubTemplate ("common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div id="wrap" class="container-fluid">
  

<!-- 登陆框1212 -->
<div class="login_card card z_depth-1 container login_form">


  
    <form id="login" class="form-horizontal" action="<?php echo smarty_function_site_url(array('url'=>'login/check_login'),$_smarty_tpl);?>
" method="post" novalidate="" autocomplete="off">
        <fieldset>
          <legend>欢迎登录<div class="pull-right">没有账号？<a href="./?c=reg" id="gotoreg" class="btn btn-flat btn-default">立即注册</a></div></legend>

          <label class="form-group">
            <i class="material-icons"></i>
            <input type="text"  class="form-control" id="user_name" name="user_name" placeholder="请输入手机号" autocomplete="on" value="11111111111">
            <!--<button class="btn cancel"><i class="material-icons"></i></button>-->
            <p class="help-block"></p>
          </label>
          <label class="form-group">
            <i class="material-icons"></i>
            <input type="password" class="form-control" id="pwd" name="pwd" placeholder="请输入密码" value="123456">
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
            <a href="./?c=resetpassword" class="btn btn-flat btn-default pull-right">忘记密码</a>
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
    $("#user_name").focus().parent().addClass("has-error").children(".help-block").html("不能为空，请输入11位手机号");
    return false;
  } else if ( !$("#user_name").val().match(/1\d{10,10}$/) ) {
    $("#user_name").focus().parent().addClass("has-error").children(".help-block").html("请输入11位手机号");
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