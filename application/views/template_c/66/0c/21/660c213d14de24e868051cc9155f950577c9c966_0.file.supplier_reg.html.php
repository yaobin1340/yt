<?php /* Smarty version 3.1.24, created on 2016-04-24 04:06:28
         compiled from "D:/amp/Apache/htdocs/yt/application/views/login/supplier_reg.html" */ ?>
<?php
/*%%SmartyHeaderCode:30111571c464437c4e8_83218371%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '660c213d14de24e868051cc9155f950577c9c966' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/login/supplier_reg.html',
      1 => 1461303069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30111571c464437c4e8_83218371',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_571c46444b4d21_48329446',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571c46444b4d21_48329446')) {
function content_571c46444b4d21_48329446 ($_smarty_tpl) {
if (!is_callable('smarty_function_site_url')) require_once 'D:/amp/Apache/htdocs/yt/application/libraries/smarty/plugins/function.site_url.php';

$_smarty_tpl->properties['nocache_hash'] = '30111571c464437c4e8_83218371';
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

  <title>信息完善</title>


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
  <div class="form_card card z_depth-1">
    <h2 class="form_card_title">
      <i class="material-icons"></i> <span>信息完善</span>
    </h2>
    <div class="form_card_box">
      <div class="col-md-4 col-sm-12 pull-right">
        <div class="form-group">
          <div class="col-sm-3  control-label">


          </div>
          <div class="col-sm-3  control-label">

            <input type="file" id="fileup" style="visibility:hidden;">
          </div>
          <div class="col-sm-4  control-label">
            <button type="button" class="btn btn-primary btn-md btn-raised btn-block ink" id="btnUploadImg">上传</button>

          </div>
        </div>

      </div>

      <div class="col-md-6 col-sm-12">
        <form id="save_form" class="form-horizontal" method="post" action="<?php echo smarty_function_site_url(array('url'=>'supplier/info/save_info'),$_smarty_tpl);?>
">
          <div class="form-group">
            <label for="sup_name" class="col-sm-2 control-label">公司名称</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="sup_name" name="sup_name">
            </div>
          </div>
          <div class="form-group">
            <label for="sup_type"  class="col-sm-2 control-label">公司性质</label>
            <div class="col-sm-10">
              <select class="form-control" id="sup_type" name="sup_type">
                <option value="">请选择</option>
                <option value="1">国有企业</option>
                <option value="2">集体企业</option>
                <option value="3">联营企业</option>
                <option value="4">股份合作制企业</option>
                <option value="5">私营企业</option>
                <option value="6">个体户</option>
                <option value="7">有限责任公司</option>
                <option value="8">股份有限公司</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="sup_total" class="col-sm-2 control-label">注册资金</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="sup_total" name="sup_total">
            </div>
          </div>
          <div class="form-group">
            <label for="sup_allow" class="col-sm-2 control-label">经营范围</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="sup_allow" name="sup_allow" >
            </div>
          </div>
          <div class="form-group">
            <label for="sup_num" class="col-sm-2 control-label">营业执照</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="sup_num" placeholder="营业执照代码输入" name="sup_num">
            </div>
          </div>
          <div class="form-group">
            <label for="sup_card" class="col-sm-2 control-label">单位账号</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="sup_card" name="sup_card" >
            </div>
          </div>
          <div class="form-group">
            <label for="sup_province" class="col-sm-2 control-label">公司地址</label>
            <div class="col-sm-3">
              <select class="form-control" id="sup_province" name="sup_province">
                <option value="">-请选择省份-</option>
              </select>
            </div>
            <div class="col-sm-3">
              <select class="form-control" id="sup_city" name="sup_city">
                <option value="">-请选择城市-</option>
              </select>
            </div>
            <div class="col-sm-3"><input type="text" class="form-control" id="sup_address" placeholder="路牌号" name="sup_address"  value=""></div>
          </div>
          <div class="form-group">
            <label for="sup_person" class="col-sm-2 control-label">联系人</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="sup_person" name="sup_person">
            </div>
          </div>
          <div class="form-group">
            <label for="sup_phone" class="col-sm-2 control-label">电话</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="sup_phone" name="sup_phone">
            </div>
          </div>
          <div class="form-group">
            <label for="sup_desc" class="col-sm-2 control-label">公司简介</label>
            <div class="col-sm-10">
              <textarea class="form-control" rows="8" id="sup_desc" name="sup_desc" ></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
              <button type="button" class="btn btn-primary btn-lg btn-raised btn-block ink" id="save_btn">提交审核</button>
              <input type="hidden" id="hidImgName" name="pic" />
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-5 col-sm-12 pull-right">
        <br/>
        <div class="form-group">
          <div class="col-sm-3  control-label">
            <img style="width: 300px" id="imgShow" >

          </div>
        </div>
      </div>
    </div>
  </div>

<!-- 登陆框 end -->
  
</div>
<?php echo '<script'; ?>
 src="/res/js/ajaxfileupload.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>

  window.onload = function() {
    init();  //初始化
  }

  //初始化
  function init() {
    //初始化图片上传
    var btnImg = document.getElementById("btnUploadImg");
    var img = document.getElementById("imgShow");
    var hidImgName = document.getElementById("hidImgName");
//		document.getElementById("btnDeleteImg").onclick = function() { DelImg(img, hidImgName); };
    g_AjxUploadImg(btnImg, img, hidImgName);
  }

  var g_AjxTempDir = "/uploadimages/";

  //图片上传
  function g_AjxUploadImg(btn, img, hidPut) {
    var button = btn, interval;
    new AjaxUpload(button, {
      action: '/ajax/upload_image',
      data: {},
      name: 'userfile',
      onSubmit: function(file, ext) {
        if (!(ext && /^(jpg|JPG|png|PNG|gif|GIF)$/.test(ext))) {
          alert("您上传的图片格式不对，请重新选择！");
          return false;
        }
      },
      onComplete: function(file, response) {
        flagValue = response;
        if (flagValue == "1") {
          alert("您上传的图片存在错误");
        }
        else {
          hidPut.value = response;
          img.src = g_AjxTempDir + response;

        }
      }
    });
  }

$(function () {
  $.getJSON("<?php echo smarty_function_site_url(array('url'=>'ajax/getprovince'),$_smarty_tpl);?>
",function(data){
    html='<option value="">-请选择省份-</option>';
    data.forEach(function (item) {
      html+='<option value="'+item.code+'">'+item.name+'</option>'
    })

    $("#sup_province").html(html);
  })

  $("#sup_province").change(function() {
    $.getJSON("<?php echo smarty_function_site_url(array('url'=>'ajax/getcity'),$_smarty_tpl);?>
/" + $(this).val(), function (data) {
      html = '<option value="">-请选择城市-</option>';
      data.forEach(function (item) {
        html += '<option value="' + item.code + '">' + item.name + '</option>'
      })
      $("#sup_city").html(html);
    });
  })

  $("#save_btn").click(function (){
    if (!$.trim($("#sup_name").val())){
      $("#sup_name").focus().parent().addClass("has-error")
      return false;
    }else {
      $("#sup_name").parent().removeClass("has-error").children(".help-block").html("");
    }
    if (!$("#sup_type").val()){
      $("#sup_type").focus().parent().addClass("has-error")
      return false;
    }else {
      $("#sup_type").parent().removeClass("has-error").children(".help-block").html("");
    }
    if (!$.trim($("#sup_total").val())){
      $("#sup_total").focus().parent().addClass("has-error")
      return false;
    }else {
      $("#sup_total").parent().removeClass("has-error").children(".help-block").html("");
    }
    if (!$.trim($("#sup_allow").val())){
      $("#sup_allow").focus().parent().addClass("has-error")
      return false;
    }else {
      $("#sup_allow").parent().removeClass("has-error").children(".help-block").html("");
    }
    if (!$.trim($("#sup_num").val())){
      $("#sup_num").focus().parent().addClass("has-error")
      return false;
    }else {
      $("#sup_num").parent().removeClass("has-error").children(".help-block").html("");
    }
    if (!$.trim($("#sup_card").val())){
      $("#sup_card").focus().parent().addClass("has-error")
      return false;
    }else {
      $("#sup_card").parent().removeClass("has-error").children(".help-block").html("");
    }
    if (!$.trim($("#sup_province").val())){
      $("#sup_province").focus().parent().addClass("has-error")
      return false;
    }else {
      $("#sup_province").parent().removeClass("has-error").children(".help-block").html("");
    }
    if (!$.trim($("#sup_city").val())){
      $("#sup_city").focus().parent().addClass("has-error")
      return false;
    }else {
      $("#sup_city").parent().removeClass("has-error").children(".help-block").html("");
    }
    if (!$.trim($("#sup_address").val())){
      $("#sup_address").focus().parent().addClass("has-error")
      return false;
    }else {
      $("#sup_address").parent().removeClass("has-error").children(".help-block").html("");
    }
    if (!$.trim($("#sup_person").val())){
      $("#sup_person").focus().parent().addClass("has-error")
      return false;
    }else {
      $("#sup_person").parent().removeClass("has-error").children(".help-block").html("");
    }
    if (!$.trim($("#sup_phone").val())){
      $("#sup_phone").focus().parent().addClass("has-error")
      return false;
    }else {
      $("#sup_phone").parent().removeClass("has-error").children(".help-block").html("");
    }
    if (!$.trim($("#sup_desc").val())){
      $("#sup_desc").focus().parent().addClass("has-error")
      return false;
    }else {
      $("#sup_desc").parent().removeClass("has-error").children(".help-block").html("");
    }
    if (!$.trim($("#hidImgName").val())){
      $("#btnUploadImg").focus().parent().addClass("has-error")
      alert('需上传图片');
      return false;
    }else {
      $("#btnUploadImg").parent().removeClass("has-error").children(".help-block").html("");
    }
    $("#save_form").submit();
  })

})

<?php echo '</script'; ?>
>




<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>