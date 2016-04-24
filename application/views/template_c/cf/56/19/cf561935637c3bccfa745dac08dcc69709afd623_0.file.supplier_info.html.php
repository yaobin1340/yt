<?php /* Smarty version 3.1.24, created on 2016-04-24 04:05:11
         compiled from "D:/amp/Apache/htdocs/yt/application/views/supplier/supplier_info.html" */ ?>
<?php
/*%%SmartyHeaderCode:830571c45f775ee01_49073829%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf561935637c3bccfa745dac08dcc69709afd623' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/supplier/supplier_info.html',
      1 => 1461470628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '830571c45f775ee01_49073829',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_571c45f7835bb4_14326942',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571c45f7835bb4_14326942')) {
function content_571c45f7835bb4_14326942 ($_smarty_tpl) {
if (!is_callable('smarty_function_site_url')) require_once 'D:/amp/Apache/htdocs/yt/application/libraries/smarty/plugins/function.site_url.php';

$_smarty_tpl->properties['nocache_hash'] = '830571c45f775ee01_49073829';
echo $_smarty_tpl->getSubTemplate ("common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div id="wrap" class="container-fluid">

	<?php echo $_smarty_tpl->getSubTemplate ("supplier/supplier_sider.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  
  
<!-- 主体 -->
  <div id="main">
  
    <!-- 面包屑导航 -->
    <div id="breadcrumb">
      <ol class="breadcrumb">
		  <li class="active">首页</li>
		  <li class="active">基本信息</li>
      </ol>
    </div>
    <!-- 面包屑导航 end -->


<!---->
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
								<input type="text" class="form-control" id="sup_name" name="sup_name" value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['name'];
}?>">
							</div>
						</div>
						<div class="form-group">
							<label for="sup_type"  class="col-sm-2 control-label">公司性质</label>
							<div class="col-sm-10">
								<select class="form-control" id="sup_type" name="sup_type">
									<option value="0">请选择</option>
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
								<input type="text" class="form-control" id="sup_total" name="sup_total" value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['total'];
}?>">
							</div>
						</div>
						<div class="form-group">
							<label for="sup_allow" class="col-sm-2 control-label">经营范围</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="sup_allow" name="sup_allow"  value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['allow'];
}?>">
							</div>
						</div>
						<div class="form-group">
							<label for="sup_num" class="col-sm-2 control-label">营业执照</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="sup_num" placeholder="营业执照代码输入" name="sup_num"  value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['num'];
}?>">
							</div>
						</div>
						<div class="form-group">
							<label for="sup_card" class="col-sm-2 control-label">单位账号</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="sup_card" name="sup_card"  value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['card'];
}?>">
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
							<div class="col-sm-3"><input type="text" class="form-control" id="sup_address" placeholder="路牌号" name="sup_address"  value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['address'];
}?>"></div>
						</div>
						<div class="form-group">
							<label for="sup_person" class="col-sm-2 control-label">联系人</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="sup_person" name="sup_person" value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['person'];
}?>">
							</div>
						</div>
						<div class="form-group">
							<label for="sup_phone" class="col-sm-2 control-label">电话</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="sup_phone" name="sup_phone" value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['phone'];
}?>">
							</div>
						</div>
						<div class="form-group">
							<label for="sup_desc" class="col-sm-2 control-label">公司简介</label>
							<div class="col-sm-10">
								<textarea class="form-control" rows="8" id="sup_desc" name="sup_desc" ><?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['desc'];
}?></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10 col-sm-offset-2">
								<button type="button" class="btn btn-primary btn-lg btn-raised btn-block ink" id="save_btn">提交审核</button>
								<input type="hidden" id="hidImgName" name="pic" value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['pic'];
}?>" />
							</div>
						</div>
					</form>
				</div>
		  <div class="col-md-5 col-sm-12 pull-right">
			  <br/>
			  <div class="form-group">
				  <div class="col-sm-3  control-label">
					  <img style="width: 300px" id="imgShow" <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>  src="/uploadimages/<?php echo $_smarty_tpl->tpl_vars['data']->value['pic'];?>
"<?php }?>>

				  </div>
			  </div>
		  </div>
      </div>
    </div>
  <!---->
  </div>
<!-- 主体 end -->
  
</div>
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

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
        $("#sup_type").val("<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['type'];
} else { ?>0<?php }?>")
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

			$("#sup_province").html(html);
			<?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
			$("#sup_province").val("<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['province_code'];
}?>");
			$.getJSON("<?php echo smarty_function_site_url(array('url'=>'ajax/getcity'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['province_code'];?>
",function(data){
				html='<option value="">-请选择城市-</option>';
				if (data!=1){
					data.forEach(function (item) {
						html+='<option value="'+item.code+'">'+item.name+'</option>'
					})
				}else{

				}
				$("#sup_city").html(html);
				$("#sup_city").val("<?php echo $_smarty_tpl->tpl_vars['data']->value['city_code'];?>
");
			});
			<?php }?>
		})

		$("#sup_province").change(function(){
			$.getJSON("<?php echo smarty_function_site_url(array('url'=>'ajax/getcity'),$_smarty_tpl);?>
/"+$("#sup_province").val(),function(data){
				html='<option value="">-请选择城市-</option>';
				if (data!=1){
					data.forEach(function (item) {
						html+='<option value="'+item.code+'">'+item.name+'</option>'
					})
				}else{

				}
				$("#sup_city").html(html);
			});
		});

        $("#save_btn").click(function (){
			if ($.trim($("#sup_name").val())==""){
				$("#sup_name").focus().parent().addClass("has-error").children(".help-block").html("公司名称不能为空");
				return false;
			}else {
				$("#sup_name").parent().removeClass("has-error").children(".help-block").html("");
			}
			if ($("#sup_type").val()=="0"){
				$("#sup_type").focus().parent().addClass("has-error").children(".help-block").html("公司性质必选");
				return false;
			}else {
				$("#sup_type").parent().removeClass("has-error").children(".help-block").html("");
			}
			if ($.trim($("#sup_total").val())==""){
				$("#sup_total").focus().parent().addClass("has-error").children(".help-block").html("注册资金不能为空");
				return false;
			}else {
				$("#sup_total").parent().removeClass("has-error").children(".help-block").html("");
			}
			if ($.trim($("#sup_allow").val())==""){
				$("#sup_allow").focus().parent().addClass("has-error").children(".help-block").html("经营范围不能为空");
				return false;
			}else {
				$("#sup_allow").parent().removeClass("has-error").children(".help-block").html("");
			}
			if ($.trim($("#sup_num").val())==""){
				$("#sup_num").focus().parent().addClass("has-error").children(".help-block").html("营业执照不能为空");
				return false;
			}else {
				$("#sup_num").parent().removeClass("has-error").children(".help-block").html("");
			}
			if ($.trim($("#sup_card").val())==""){
				$("#sup_card").focus().parent().addClass("has-error").children(".help-block").html("单位账号不能为空");
				return false;
			}else {
				$("#sup_card").parent().removeClass("has-error").children(".help-block").html("");
			}
			if ($.trim($("#sup_province").val())=="00" || $("#sup_province").val()==""){
				$("#sup_province").focus().parent().addClass("has-error").children(".help-block").html("省份必选");
				return false;
			}else {
				$("#sup_province").parent().removeClass("has-error").children(".help-block").html("");
			}
			if ($.trim($("#sup_city").val())=="00" || $("#sup_city").val()==""){
				$("#sup_city").val('');
				$("#sup_city").focus().parent().addClass("has-error").children(".help-block").html("城市必选");
				return false;
			}else {
				$("#sup_city").parent().removeClass("has-error").children(".help-block").html("");
			}
			if ($.trim($("#sup_address").val())==""){
				$("#sup_address").focus().parent().addClass("has-error").children(".help-block").html("公司地址不能为空");
				return false;
			}else {
				$("#sup_address").parent().removeClass("has-error").children(".help-block").html("");
			}
			if ($.trim($("#sup_person").val())==""){
				$("#sup_person").focus().parent().addClass("has-error").children(".help-block").html("联系人不能为空");
				return false;
			}else {
				$("#sup_person").parent().removeClass("has-error").children(".help-block").html("");
			}
			if ($.trim($("#sup_phone").val())==""){
				$("#sup_phone").focus().parent().addClass("has-error").children(".help-block").html("电话不能为空");
				return false;
			}else {
				$("#sup_phone").parent().removeClass("has-error").children(".help-block").html("");
			}
			if ($.trim($("#sup_desc").val())==""){
				$("#sup_desc").focus().parent().addClass("has-error").children(".help-block").html("公司简介不能为空");
				return false;
			}else {
				$("#sup_desc").parent().removeClass("has-error").children(".help-block").html("");
			}
			if ($.trim($("#hidImgName").val())==""){
				$("#btnUploadImg").focus().parent().addClass("has-error").children(".help-block").html("需上传图片");
				alert('需上传图片');
				return false;
			}else {
				$("#btnUploadImg").parent().removeClass("has-error").children(".help-block").html("");
			}
			$("#save_form").submit();
		})
	})

<?php echo '</script'; ?>
><?php }
}
?>