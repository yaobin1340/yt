<?php /* Smarty version 3.1.24, created on 2016-04-27 09:13:24
         compiled from "D:/amp/Apache/htdocs/yt/application/views/project/project_demand_info.html" */ ?>
<?php
/*%%SmartyHeaderCode:17905720123483da02_54161029%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ec10d09988dab291a1753c19c52cc88b3e30d86' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/project/project_demand_info.html',
      1 => 1461717328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17905720123483da02_54161029',
  'variables' => 
  array (
    'lastnewsid' => 0,
    'lastnews' => 0,
    'size' => 0,
    'num' => 0,
    's_date' => 0,
    'e_date' => 0,
    'person' => 0,
    'phone' => 0,
    'desc' => 0,
    'pic' => 0,
    'id' => 0,
    'm_id' => 0,
    'unit' => 0,
    'unit_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5720123495eb06_40836202',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5720123495eb06_40836202')) {
function content_5720123495eb06_40836202 ($_smarty_tpl) {
if (!is_callable('smarty_function_site_url')) require_once 'D:/amp/Apache/htdocs/yt/application/libraries/smarty/plugins/function.site_url.php';

$_smarty_tpl->properties['nocache_hash'] = '17905720123483da02_54161029';
echo $_smarty_tpl->getSubTemplate ("common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div id="wrap" class="container-fluid">

	<?php echo $_smarty_tpl->getSubTemplate ("project/project_sider.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  
  
<!-- 主体 -->
  <div id="main">
  
    <!-- 面包屑导航 -->
    <div id="breadcrumb">
      <ol class="breadcrumb">
		  <li class="active">首页</li>
		  <li class="active">需求信息管理</li>
      </ol>
    </div>
    <!-- 面包屑导航 end -->
  
    <!-- 公告 -->
<!--    <div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>公告</strong> <span>
		<?php if ($_smarty_tpl->tpl_vars['lastnewsid']->value != -1) {?>
      <a href="<?php echo smarty_function_site_url(array('url'=>'project/notice/show_push'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['lastnewsid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lastnews']->value;?>
</a>
      <?php } else { ?>
      <?php echo $_smarty_tpl->tpl_vars['lastnews']->value;?>

      <?php }?>
	</span>
    </div>-->
    <!-- 公告 end -->
<!-- 返回栏 -->
    <div class="pagetool form_card card z_depth-1">
        <a href="javascript:history.go(-1)" class="goback btn btn-primary btn-raised ink">返回</a><span class="title">信息列表</span>
    </div>
<!-- 返回栏 end -->
<!---->
    <div class="form_card card z_depth-1">
      <h2 class="form_card_title">
        <i class="material-icons"></i> <span>发布需求信息</span>
      </h2>
      <div class="form_card_box">
      
        <form id="save_form" class="form-horizontal" method="post" action="<?php echo smarty_function_site_url(array('url'=>'project/demand/save_demand'),$_smarty_tpl);?>
">

					<div class="form-group">
						<label for="material"  class="col-sm-2 control-label">所需材料</label>
						<div class="col-sm-9">
							<select class="form-control" name="material" id="material">
								<option value="0">请选择</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="size" class="col-sm-2 control-label">规格要求</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="size" name="size" value="<?php echo $_smarty_tpl->tpl_vars['size']->value;?>
">
						</div>
					</div>
					<div class="form-group">
						<label for="num" class="col-sm-2 control-label">材料数量</label>
						<div class="col-sm-4">
							<input type="text" class="form-control"
								   onkeyup="this.value=this.value.replace(/\D/g,'')" onblur = "this.value = this.value.replace(/\D+/g, '')"
								   id="num" name="num" value="<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
">
						</div>
						<label for="unit" class="col-sm-1 control-label" style="text-align:center;">单位</label>
						<div class="col-sm-4">
							<select class="form-control" name="unit" id="unit">
								<option value="0">请选择</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="s_date" class="col-sm-2 control-label">供货期限</label>
						<div class="col-sm-4">
							<input  class="form-control" id="s_date" name="s_date" type="text" value="<?php echo $_smarty_tpl->tpl_vars['s_date']->value;?>
"
									style="background:#fff url(/res/js/My97DatePicker/skin/datePicker.gif) no-repeat right;"
									onfocus="WdatePicker({isShowClear:false,readOnly:true,dateFmt:'yyyy-MM-dd'})">
						</div>
						<div class="col-sm-1">
							<label  class="col-sm-7 control-label">至</label>
						</div>
						<div class="col-sm-4">
							<input  class="form-control" id="e_date" name="e_date" type="text" value="<?php echo $_smarty_tpl->tpl_vars['e_date']->value;?>
"
									style="background:#fff url(/res/js/My97DatePicker/skin/datePicker.gif) no-repeat right;"
									onfocus="WdatePicker({isShowClear:false,readOnly:true,dateFmt:'yyyy-MM-dd'})">
						</div>
					</div>
					<div class="form-group">
						<label for="unit_id"  class="col-sm-2 control-label">信息类别</label>
						<div class="col-sm-9">
							<select class="form-control" id="unit_id" name="unit_id">
								<option value="1">紧急</option>
								<option value="2">正常</option>
								<option value="3">预期</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="person" class="col-sm-2 control-label">联系人</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="person" name="person" value="<?php echo $_smarty_tpl->tpl_vars['person']->value;?>
">
						</div>
					</div>
					<div class="form-group">
						<label for="phone" class="col-sm-2 control-label">联系电话</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="phone" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
">
						</div>
					</div>

					<div class="form-group">
						<label for="desc" class="col-sm-2 control-label">需求详情</label>
						<div class="col-sm-9">
							<textarea class="form-control" rows="8" id="desc" name="desc"><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</textarea>
						</div>
					</div>
			<div class="form-group">
				<label for="btnUploadImg" class="col-sm-2 control-label">图片上传</label>
				<div class="col-sm-2">
					<button type="button" id="btnUploadImg"  class="btn btn-primary btn-md btn-raised btn-block ink">上传</button>
					<input type="hidden" id="hidImgName" name="pic" value="<?php echo $_smarty_tpl->tpl_vars['pic']->value;?>
" />
				</div>
				<label class="col-sm-2 control-label" style="font-weight:lighter;text-align:left;">（图片格式jpg）</label>
				<div class="col-sm-4  control-label">
					<img style="width: 250px" id="imgShow" <?php if ($_smarty_tpl->tpl_vars['pic']->value != '') {?>  src="/uploadimages/<?php echo $_smarty_tpl->tpl_vars['pic']->value;?>
"<?php }?>>
				</div>
			</div>
			<div class="form-group" style="margin-right:0;">
				<div class="col-sm-9 col-sm-offset-2">
					<button type="button" id="save_btn" class="btn btn-primary btn-lg btn-raised btn-block ink" >提交</button>
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
				</div>
			</div>
				</form>
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
 src="/res/js/My97DatePicker/WdatePicker.js"><?php echo '</script'; ?>
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
		$.getJSON("<?php echo smarty_function_site_url(array('url'=>'ajax/getmaterial'),$_smarty_tpl);?>
",function(data){
			html='<option value="0">请选择</option>'
			if (data!=1){
				data.forEach(function (item) {
					html+='<option value="'+item.id+'">'+item.name+'</option>'
				})
			}else{

			}
			$("#material").html(html);
			//这里进行明细的载人
			$("#material").val(<?php echo $_smarty_tpl->tpl_vars['m_id']->value;?>
);
		})

		$.getJSON("<?php echo smarty_function_site_url(array('url'=>'ajax/getunit'),$_smarty_tpl);?>
",function(data){
			html='<option value="0">请选择</option>'
			if (data!=1){
				data.forEach(function (item) {
					html+='<option value="'+item.id+'">'+item.name+'</option>'
				})
			}else{

			}
			$("#unit").html(html);
			$("#unit").val(<?php echo $_smarty_tpl->tpl_vars['unit']->value;?>
);
		});

           $("#unit_id").val(<?php echo $_smarty_tpl->tpl_vars['unit_id']->value;?>
);

		$("#save_btn").click(function () {
			if ($("#material").val()=="0" || $("#pro_city").val()==""){
				$("#material").val('0');
				$("#material").focus().parent().addClass("has-error").children(".help-block").html("类别必选");
				return false;
			}
			if ($.trim($("#size").val())==""){
				$("#size").focus().parent().addClass("has-error").children(".help-block").html("规格要求不能为空");
				return false;
			}

			if ($("#unit").val()=="0" || $("#pro_city").val()==""){
				$("#unit").val('0');
				$("#unit").focus().parent().addClass("has-error").children(".help-block").html("单位必选");
				return false;
			}
			if ($.trim($("#num").val())==""){
				$("#num").focus().parent().addClass("has-error").children(".help-block").html("数量不能为空");
				return false;
			}
			if ($.trim($("#s_date").val())==""){
				$("#s_date").focus().parent().addClass("has-error").children(".help-block").html("开始日期不能为空");
				return false;
			}
			if ($.trim($("#e_date").val())==""){
				$("#e_date").focus().parent().addClass("has-error").children(".help-block").html("截止日期不能为空");
				return false;
			}
			if ($.trim($("#person").val())==""){
				$("#person").focus().parent().addClass("has-error").children(".help-block").html("联系人不能为空");
				return false;
			}
			if ($.trim($("#phone").val())==""){
				$("#phone").focus().parent().addClass("has-error").children(".help-block").html("联系电话不能为空");
				return false;
			}
			if ($.trim($("#desc").val())==""){
				$("#desc").focus().parent().addClass("has-error").children(".help-block").html("详情不能为空");
				return false;
			}
			if ($.trim($("#hidImgName").val())==""){
				alert('请上传图片')
				return false;
			}

				$('#save_form').submit();


		})
	})
<?php echo '</script'; ?>
><?php }
}
?>