<?php /* Smarty version 3.1.24, created on 2016-04-19 20:15:50
         compiled from "D:/amp/Apache/htdocs/yt/application/views/login/reg.html" */ ?>
<?php
/*%%SmartyHeaderCode:68757162176ae8d89_04843924%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1850dd23191145ba603acfcef90c3fc6cfc13ac' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/login/reg.html',
      1 => 1461068063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68757162176ae8d89_04843924',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_57162176b6daa8_15598702',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57162176b6daa8_15598702')) {
function content_57162176b6daa8_15598702 ($_smarty_tpl) {
if (!is_callable('smarty_function_site_url')) require_once 'D:/amp/Apache/htdocs/yt/application/libraries/smarty/plugins/function.site_url.php';

$_smarty_tpl->properties['nocache_hash'] = '68757162176ae8d89_04843924';
echo $_smarty_tpl->getSubTemplate ("common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div id="wrap" class="container-fluid">
  
  
<!-- 注册框 -->
<div id="reg_box" class="login_card card z_depth-1 container login_form">

  <legend>欢迎注册<div class="pull-right">已有账号？<a href="<?php echo smarty_function_site_url(array('url'=>'login'),$_smarty_tpl);?>
" id="gotoreg" class="btn btn-flat btn-default">立即登录</a></div></legend>

  <div id="reg_step_1">
    <div>注册为：</div>
    <button id="reg_supplier_btn" class="btn btn-success btn-lg" title="注册为供应商"><i class="material-icons">&#xe558;</i><span>供应商</span></button>
    <button id="reg_project_btn" class="btn btn-danger btn-lg" title="注册为项目方"><i class="material-icons">&#xe53f;</i><span>项目方</span></button>
  </div>
  
        <div id="reg_tip_supplier" class="reg_tip">注册为：<b>供应商</b></div>
        <div id="reg_tip_project" class="reg_tip">注册为：<b>项目方</b></div>
        <div id="reg_tip_phone" class="reg_tip">注册手机号：<b>18945456587</b></div>
  
<!--  <form id="reg" class="form-horizontal" action="###" method="post" novalidate="" autocomplete="off">-->
  <form id="save_form" class="form-horizontal" method="post" action="<?php echo smarty_function_site_url(array('url'=>'reg/save_user'),$_smarty_tpl);?>
">
  <div id="reg_step_2">
    <fieldset>

        <!-- 注册用户类型，0 注册为供应商， 1 注册为项目方 -->
        <input id="reg_type" name="reg_type" value="0">

      <label class="form-group">
        <i class="material-icons"></i>
        <input type="text" class="form-control" id="user_name" name="user_name" placeholder="请输入正确的邮箱地址" autocomplete="on" value="">
        <p class="help-block"></p>
      </label>
      <label class="form-group">
        <i class="material-icons"></i>
        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="请设置密码" value="">
        <p class="help-block"></p>
      </label>
      <label class="form-group">
        <i class="material-icons"></i>
        <input type="password" class="form-control" id="pwd_new" name="pwd_new" placeholder="请再次输入密码" value="">
        <p class="help-block"></p>
      </label>
      <div class="form-group">
        <div>
          <button id="save_btn" type="button" class="btn btn-lg btn-primary btn-raised btn-block ink">完成注册</button>
        </div>
      </div>


    </fieldset>
  </div>
  </form>
<!--  </form>-->

    

</div>
    

<!-- 注册框 end -->
  
</div>



<?php echo '<script'; ?>
>

//进入页面，用户名框直接获取焦点
$("#user_name").focus();


$("#reg_step_1 .btn").click(function(){
  if( $(this).attr("id") == "reg_project_btn" ){
    $("#reg_type").val( 3 );//1 注册为项目方
    $("#reg_box").addClass( "reg_project" );
  } else {
    $("#reg_type").val( 2 );//0 注册为供应商
    $("#reg_box").addClass( "reg_supplier" );
  }
  $("#reg_step_1").hide();
  $("#reg_step_2").show();
});


//第一步判断手机号
$("#save_btn").click(function(){

  
  var user_name = $("#user_name").val();
  var szReg=/^[A-Za-zd]+([-_.][A-Za-zd]+)*@([A-Za-zd]+[-.])+[A-Za-zd]{2,5}$/;
  var bChk=szReg.test(user_name);
  var pwd = $("#pwd").val();

  var pwd2= $("#pwd_new").val();
  if ( !user_name ) {
    $("#user_name").focus().parent().addClass("has-error").children(".help-block").html("不能为空");
    return false;
  } else if (!$("#user_name").val().match(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/)) {
    $("#user_name").focus().parent().addClass("has-error").children(".help-block").html("请输入正确的邮箱地址");
    return false;
  } else {
    $("#user_name").parent().removeClass("has-error").children(".help-block").html("");
  }
  if(!pwd){
    $("#pwd").focus().parent().addClass("has-error").children(".help-block").html("密码不能为空");
    return false;
  }else if (!$("#pwd").val().match(/[\w@.]{6,15}/) || pwd.length>15) {
    $("#pwd").focus().parent().addClass("has-error").children(".help-block").html("英文/数字/下划线，6-15个字符");
    return false;
  } else {
    $("#pwd").parent().removeClass("has-error").children(".help-block").html("");
  }
  if(pwd != pwd2){
    $("#pwd_new").focus().parent().addClass("has-error").children(".help-block").html("两次密码不同");
    return false;
  }else {
    $("#pwd_new").parent().removeClass("has-error").children(".help-block").html("");
  }
  $("#save_form").submit();

});



<?php echo '</script'; ?>
>






<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>