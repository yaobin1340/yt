<?php /* Smarty version 3.1.24, created on 2016-04-24 04:07:33
         compiled from "D:/amp/Apache/htdocs/yt/application/views/login/project_reg.html" */ ?>
<?php
/*%%SmartyHeaderCode:14060571c4685a39dd0_35611433%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19ae201d7a10595c9a8046ecf5348be8c431b865' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/login/project_reg.html',
      1 => 1461303069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14060571c4685a39dd0_35611433',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_571c4685ba1421_50352171',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571c4685ba1421_50352171')) {
function content_571c4685ba1421_50352171 ($_smarty_tpl) {
if (!is_callable('smarty_function_site_url')) require_once 'D:/amp/Apache/htdocs/yt/application/libraries/smarty/plugins/function.site_url.php';

$_smarty_tpl->properties['nocache_hash'] = '14060571c4685a39dd0_35611433';
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

  
  



<!---->
    <div class="form_card card z_depth-1">
      <h2 class="form_card_title">
        <i class="material-icons"></i> <span>信息完善</span>
      </h2>
      <div class="form_card_box">
      
        <form id="save_form" class="form-horizontal" style="margin-bottom:40px;" method="post" action="<?php echo smarty_function_site_url(array('url'=>'project/info/save_info'),$_smarty_tpl);?>
">
					<div class="form-group">
						<div class="col-sm-2 col-sm-offset-1">
							<a href="#" class="btn btn-default disabled" role="button" style="color:#333">项目基本信息</a>
						</div>
						<div class="col-sm-2">
							<button type="submit" class="btn btn-primary btn-raised" >导出数据</button>
						</div>
					</div>				
					<div class="form-group">
						<label for="pro_name" class="col-sm-2 control-label">项目名称</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="pro_name" name="pro_name"  >
						</div>
					</div>
					<div class="form-group">
						<label for="pro_province" class="col-sm-2 control-label">项目地址</label>
						<div class="col-sm-3">
							<select class="form-control" id="pro_province" name="pro_province">
								<option value="" >-请选择省份-</option>
							</select>
						</div>
						<div class="col-sm-3">
							<select class="form-control" id="pro_city" name="pro_city">
								<option value="">-请选择城市-</option>
							</select>
						</div>
						<div class="col-sm-3"><input type="text" class="form-control" id="pro_address" name="pro_address" placeholder="路牌号"></div>
					</div>
					<div class="form-group">
						<label for="pro_total" class="col-sm-2 control-label">项目金额</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="pro_total" name="pro_total" >
						</div>
					</div>
					<div class="form-group">
						<label for="pro_manager" class="col-sm-2 control-label">项目经理</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="pro_manager"   name="pro_manager">
						</div>
					</div>
					<div class="form-group">
						<label for="pro_leader" class="col-sm-2 control-label">项目负责人</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="pro_leader" name="pro_leader">
						</div>
					</div>
					<div class="form-group">
						<label for="pro_leader_phone" class="col-sm-2 control-label">负责人电话</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="pro_leader_phone"  name="pro_leader_phone"  >
						</div>
					</div>
					<div class="form-group">
						<label for="pro_contacter" class="col-sm-2 control-label">联系人</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="pro_contacter"  name="pro_contacter"  >
						</div>
					</div>
					<div class="form-group">
						<label for="pro_contacter_phone" class="col-sm-2 control-label">联系电话</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="pro_contacter_phone" name="pro_contacter_phone"  >
						</div>
					</div>


					<div class="form-group">
						<div class="col-sm-2 col-sm-offset-1">
							<a href="#" class="btn btn-default  disabled" role="button" style="color:#333">主要材料和数量</a>
						</div>
						<div class="col-sm-1">
							<button class="btn btn-primary btn-raised"  type="button" id="addum">增加</button>
						</div>
					</div>

			<div id="yy_block_um">
				<div class="form-group">
					<div class="col-sm-2"></div>
					<div class="col-sm-3">
						<select class="form-control" name="material[]" id="material">
							<option value="">-类别-</option>
						</select>
					</div>
					<div class="col-sm-3" ><input type="text" onkeyup="this.value=this.value.replace(/\D/g,'')" onblur = "this.value = this.value.replace(/\D+/g, '')" class="form-control border_rnone" name="num[]" placeholder="数字"></div>
					<div class="col-sm-3" >
						<select class="form-control border_lnone" id="unit" name="unit[]">
							<option value="">-单位-</option>
						</select>
					</div>
					<div class="col-sm-1">
						<button class="btn btn-primary btn-raised"  type="button" name="delete_div[]">删除</button>
					</div>
				</div>
			</div>
					<div class="form-group" style="margin-right:0;">
						<div class="col-sm-9 col-sm-offset-2">
							<button type="button" id="save_btn" class="btn btn-primary btn-lg btn-raised btn-block ink" >完成</button>
						</div>
					</div>
				</form>
      </div>
    </div>
  <!---->
    

  
</div>
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo '<script'; ?>
>

	$(function(){

		$.getJSON("<?php echo smarty_function_site_url(array('url'=>'ajax/getprovince'),$_smarty_tpl);?>
",function(data){
			html='<option value="" selected = "selected">-请选择省份-</option>';
             if (data!=1){
                 data.forEach(function (item) {
					 html+='<option value="'+item.code+'">'+item.name+'</option>'
				 })
			 }else{
				 alert('NG');
			 }

			$("#pro_province").html(html);



			//$("#pro_province").val('00');
		})

		$.getJSON("<?php echo smarty_function_site_url(array('url'=>'ajax/getunit'),$_smarty_tpl);?>
",function(data){
			html='<option value="">-单位-</option>'
			if (data!=1){
				data.forEach(function (item) {
					html+='<option value="'+item.id+'">'+item.name+'</option>'
				})
			}else{

			}
			$("#unit").html(html);
			$.getJSON("<?php echo smarty_function_site_url(array('url'=>'ajax/getmaterial'),$_smarty_tpl);?>
",function(data){
				html='<option value="">-类别-</option>'
				if (data!=1){
					data.forEach(function (item) {
						html+='<option value="'+item.id+'">'+item.name+'</option>'
					})
				}else{

				}
				$("#material").html(html);
                 //这里进行明细的载人

				$("#yy_block_um").find("button").on('click',function () {
					if($('#yy_block_um').children('div').length <= 1){
						alert('需至少保留一条‘材料与数量’信息');
					}
					else{
						$(this).parent().parent().remove();
					}
				})
			})
		});

		$("#pro_province").change(function(){
			$.getJSON("<?php echo smarty_function_site_url(array('url'=>'ajax/getcity'),$_smarty_tpl);?>
/"+$("#pro_province").val(),function(data){
				html='<option value="">-请选择城市-</option>';
				if (data!=1){
					data.forEach(function (item) {
						html+='<option value="'+item.code+'">'+item.name+'</option>'
					})
				}else{

				}
				$("#pro_city").html(html);
			});
		});

		$("#addum").click(function(){
			//解绑事件
			$("#yy_block_um").find("button").off('click');
			divbox=$("#yy_block_um").children().html();
			divbox="<div class='form-group'>"+divbox+"</div>"
			$('#yy_block_um').append(divbox);
			//绑定事件
			$("#yy_block_um").find("button").on('click',function () {
				if($('#yy_block_um').children('div').length <= 1){
					alert('需至少保留一条‘材料与数量’信息');
				}
				else{
					$(this).parent().parent().remove();
				}
			})
		});



        $("#save_btn").click(function () {
			if ($.trim($("#pro_name").val())==""){
				$("#pro_name").focus().parent().addClass("has-error").children(".help-block").html("项目名称不能为空");
				return false;
			} else {
				$("#pro_name").parent().removeClass("has-error").children(".help-block").html("");
			}
			if ($("#pro_province").val()==""){
				$("#pro_province").focus().parent().addClass("has-error").children(".help-block").html("省份必选");
				return false;
			}else {
				$("#pro_province").parent().removeClass("has-error").children(".help-block").html("");
			}
			if ($("#pro_city").val()=="00" || $("#pro_city").val()==""){
				$("#pro_city").val('');
				$("#pro_city").focus().parent().addClass("has-error").children(".help-block").html("城市必选");
				return false;
			}else {
				$("#pro_city").parent().removeClass("has-error").children(".help-block").html("");
			}
			if ($.trim($("#pro_address").val())==""){
				$("#pro_address").focus().parent().addClass("has-error").children(".help-block").html("地址不能为空");
				return false;
			}else {
				$("#pro_address").parent().removeClass("has-error").children(".help-block").html("");
			}
			if ($.trim($("#pro_total").val())==""){
				$("#pro_total").focus().parent().addClass("has-error").children(".help-block").html("金额不能为空");
				return false;
			}else {
				$("#pro_total").parent().removeClass("has-error").children(".help-block").html("");
			}
			if ($.trim($("#pro_manager").val())==""){
				$("#pro_manager").focus().parent().addClass("has-error").children(".help-block").html("项目经理不能为空");
				return false;
			}else {
				$("#pro_manager").parent().removeClass("has-error").children(".help-block").html("");
			}
			if ($.trim($("#pro_leader").val())==""){
				$("#pro_leader").focus().parent().addClass("has-error").children(".help-block").html("项目负责人不能为空");
				return false;
			}else {
				$("#pro_leader").parent().removeClass("has-error").children(".help-block").html("");
			}
			if ($.trim($("#pro_leader_phone").val())==""){
				$("#pro_leader_phone").focus().parent().addClass("has-error").children(".help-block").html("负责人电话不能为空");
				return false;
			}else {
				$("#pro_leader_phone").parent().removeClass("has-error").children(".help-block").html("");
			}
			if ($.trim($("#pro_contacter").val())==""){
				$("#pro_contacter").focus().parent().addClass("has-error").children(".help-block").html("联系人不能为空");
				return false;
			}else {
				$("#pro_contacter").parent().removeClass("has-error").children(".help-block").html("");
			}
			if ($.trim($("#pro_contacter_phone").val())==""){
				$("#pro_contacter_phone").focus().parent().addClass("has-error").children(".help-block").html("联系电话不能为空");
				return false;
			}else {
				$("#pro_contacter_phone").parent().removeClass("has-error").children(".help-block").html("");
			}
			var flag=0;
			$("[name='material[]']").each(function(){
				if ($(this).val()==''){
					//$(this).focus().parent().addClass("has-error").children(".help-block").html("单位必须选择");
					alert('类别必须选择');
					flag=1;
					return false;
				}
			});
			$("[name='num[]']").each(function(){
				if ($(this).val()==""){
					//$(this).focus().parent().addClass("has-error").children(".help-block").html("数字必须填写");
					alert('必须填写数字');
					flag=1;
					return false;
				}
			});
			$("[name='unit[]']").each(function(){
				if ($(this).val()==''){
					//$(this).focus().parent().addClass("has-error").children(".help-block").html("类别必须选择");
					alert('必须选择单位');
					flag=1;
					return false;
				}
			});
			if (flag !=1){
				$('#save_form').submit();
			}

		})
	})
<?php echo '</script'; ?>
><?php }
}
?>