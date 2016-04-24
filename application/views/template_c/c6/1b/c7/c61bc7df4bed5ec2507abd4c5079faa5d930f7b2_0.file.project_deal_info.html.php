<?php /* Smarty version 3.1.24, created on 2016-04-23 20:10:19
         compiled from "D:/amp/Apache/htdocs/yt/application/views/project/project_deal_info.html" */ ?>
<?php
/*%%SmartyHeaderCode:10222571b662b35b4a9_22621787%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c61bc7df4bed5ec2507abd4c5079faa5d930f7b2' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/project/project_deal_info.html',
      1 => 1461413412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10222571b662b35b4a9_22621787',
  'variables' => 
  array (
    'lastnews' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_571b662b4121a5_87155078',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571b662b4121a5_87155078')) {
function content_571b662b4121a5_87155078 ($_smarty_tpl) {
if (!is_callable('smarty_function_site_url')) require_once 'D:/amp/Apache/htdocs/yt/application/libraries/smarty/plugins/function.site_url.php';

$_smarty_tpl->properties['nocache_hash'] = '10222571b662b35b4a9_22621787';
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
		  <li class="active">合约管理</li>
      </ol>
    </div>
    <!-- 面包屑导航 end -->
  
    <!-- 公告 -->
    <div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>公告</strong> <span><?php echo $_smarty_tpl->tpl_vars['lastnews']->value;?>
</span>
    </div>
    <!-- 公告 end -->
<!---->
    <div class="form_card card z_depth-1">
      <h2 class="form_card_title">
        <i class="material-icons"></i> <span>合约添加</span>
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
					<form class="form-horizontal" id="save_form" method="post" action="<?php echo smarty_function_site_url(array('url'=>'project/deal/save_deal'),$_smarty_tpl);?>
">
						<div class="form-group">
							<label for="title" class="col-sm-2 control-label">合约标题</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="title" name="title">
							</div>
						</div>
						<div class="form-group">
							<label for="num" class="col-sm-2 control-label">合约编号</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="num" id="num" >
							</div>
						</div>
						<div class="form-group">
							<label for="product_search" class="col-sm-2 control-label">供应商</label>
							<div class="col-sm-9 ">
								<input type="text" class="form-control" id="product_search" >
								<input type="hidden" name="pid" id="pid">

							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-1 col-xs-offset-1">
							<button class="btn btn-primary btn-raised" id="addum"  type="button" >增加</button>
						</div>
						</div>
						<div id="line_details">
							<div>
								<div class="form-group">
									<div class="col-sm-2"></div>
									<div class="col-sm-3">
										<select class="form-control" name="mid[]" id="material">
											<option value="0">请选择</option>
										</select>
									</div>
									<div class="col-sm-4 ">
										<input type="text" class="form-control" id="size" name="size[]">
									</div>
									<div class="col-sm-1">
										<button class="btn btn-primary btn-danger"  type="button" >删除</button>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-2"></div>
									<div class="col-sm-3">
										<input type="text" class="form-control" placeholder="材料单价" id="price" name="price[]">
									</div>
									<div class="col-sm-3" style="padding-right:0;">
										<input type="text" class="form-control border_rnone"  placeholder="数字" id="line_num" name="line_num[]"></div>
									<div class="col-sm-3 padd_none">
										<select class="form-control border_lnone"   id="unit" name="unit[]">
											<option value="0">请选择</option>
										</select>
									</div>

								</div>
							</div>

						</div>

						<div class="form-group">
							<label for="pay_type" class="col-sm-2 control-label">付款方式</label>
							<div class="col-sm-9">
								<select class="form-control" name="pay_type" id="pay_type">
									<option value="0">请选择</option>
									<option value="1">现金</option>
									<option value="2">转账</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="total" class="col-sm-2 control-label">总金额</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="total" id="total" >
							</div>
						</div>
					
						<div class="form-group">
							<div class="col-sm-9 col-sm-offset-2">
								<button type="button" id="save_btn" class="btn btn-primary btn-lg btn-raised btn-block ink">提交审核</button>
								<input type="hidden" id="hidImgName" name="pic" value="" />
								<input type="hidden" id="id" name="id"/>
							</div>
						</div>
					</form>
				</div>
		  <div class="col-md-5 col-sm-12 pull-right">
			  <br/>
			  <div class="form-group">
				  <div class="col-sm-3  control-label">
					  <img style="width: 300px" id="imgShow">

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
 src="/res/js/bootstrap-typeahead.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/res/js/underscore-min.js"><?php echo '</script'; ?>
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

		$.getJSON("<?php echo smarty_function_site_url(array('url'=>'ajax/get_supplier'),$_smarty_tpl);?>
",function (data) {
			// Workaround for bug in mouse item selection
			$.fn.typeahead.Constructor.prototype.blur = function () {
				var that = this;
				setTimeout(function () { that.hide() }, 250);
			};

			var products = data;

			var that = this;

			$('#product_search').typeahead({
				source: function (query, process) {
					var results = _.map(products, function (product) {
						return product.name + "";
					});
					process(results);
				},

				matcher: function (item) {
					return true;
				},

				highlighter: function (name) {
					var product = _.find(products, function (p) {
						return p.name == name;
					});
					return product.name;
				},

				updater: function (name) {
					var product = _.find(products, function (p) {
						return p.name == name;
					});
					that.setSelectedProduct(product);
					return product.name;
				}

			});

			this.setSelectedProduct = function (product) {
				$('#pid').val(product.id)
			}


		})



		$("#save_btn").click(function () {

			if ($.trim($("#title").val())==""){
				$("#title").focus().parent().addClass("has-error").children(".help-block").html("合约标题不能为空");
				return false;
			}
			if ($.trim($("#num").val())==""){
				$("#num").focus().parent().addClass("has-error").children(".help-block").html("合约编号不能为空");
				return false;
			}
			if ($.trim($("#pid").val())==""){
				alert($.trim($("#pid").val()));
				$("#product_search").focus().parent().addClass("has-error").children(".help-block").html("供应商必须选择");
				return false;
			}
			if ($("#pay_type").val()=="0" || $("#pay_type").val()==""){
				$("#pay_type").val('0');
				$("#pay_type").focus().parent().addClass("has-error").children(".help-block").html("付款方式必选");
				return false;
			}
			if ($.trim($("#total").val())==""){
				$("#total").focus().parent().addClass("has-error").children(".help-block").html("总金额必须填写");
				return false;
			}
			if ($.trim($("#hidImgName").val())==""){
				alert('需上传图片');
				return false;
			}
			var flag=0;
			$("[name='mid[]']").each(function(){
				if ($(this).val()=='0'){
					//$(this).focus().parent().addClass("has-error").children(".help-block").html("类别必须选择");
					alert('类别必须选择');
					flag=1;
					return false;
				}
			});
			$("[name='size[]']").each(function(){
				if ($(this).val()==""){
					//price   $(this).focus().parent().addClass("has-error").children(".help-block").html("数字必须填写");
					alert('必须填写规格');
					flag=1;
					return false;
				}
			});
			$("[name='price[]']").each(function(){
				if ($(this).val()==""){
					//price   $(this).focus().parent().addClass("has-error").children(".help-block").html("数字必须填写");
					alert('必须填写单价');
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
				if ($(this).val()=='0'){
					//$(this).focus().parent().addClass("has-error").children(".help-block").html("单位必须选择");
					alert('必须选择单位');
					flag=1;
					return false;
				}
			});
			if (flag !=1){
				$('#save_form').submit();
			}

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

		$("#addum").click(function(){
			//解绑事件
			$("#line_details").find("button").off('click');
			divbox=$("#line_details").children().html();
			divbox="<div>"+divbox+"</div>"
			$('#line_details').append(divbox);
			//绑定事件
			$("#line_details").find("button").on('click',function () {
				if($('#line_details').children('div').length <= 1){
					alert('需至少保留一条‘材料与数量’信息');
				}
				else{
					$(this).parent().parent().parent().remove();
				}
			})
		});
	})

<?php echo '</script'; ?>
><?php }
}
?>