<?php /* Smarty version 3.1.24, created on 2016-04-20 10:55:27
         compiled from "D:/amp/Apache/htdocs/yt/application/views/project/project_deal_change.html" */ ?>
<?php
/*%%SmartyHeaderCode:85415716ef9f1e91c5_25968815%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb2a3a937f785d3841510583a66b029ad00d3a4c' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/project/project_deal_change.html',
      1 => 1461115903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85415716ef9f1e91c5_25968815',
  'variables' => 
  array (
    'lastnews' => 0,
    'data' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5716ef9f285609_17848568',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5716ef9f285609_17848568')) {
function content_5716ef9f285609_17848568 ($_smarty_tpl) {
if (!is_callable('smarty_function_site_url')) require_once 'D:/amp/Apache/htdocs/yt/application/libraries/smarty/plugins/function.site_url.php';

$_smarty_tpl->properties['nocache_hash'] = '85415716ef9f1e91c5_25968815';
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
        <li><a href="#">Home</a></li>
        <li><a href="#">Library</a></li>
        <li class="active">Data</li>
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
        <i class="material-icons"></i> <span>合约变更</span>
      </h2>
      <div class="form_card_box">     
        <form class="form-horizontal" method="post" action="<?php echo smarty_function_site_url(array('url'=>'project/deal/save_change'),$_smarty_tpl);?>
">
					<div class="form-group">
						<label for="heyuebianhao" class="col-sm-2 control-label">变更合约编号</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="num" >
						</div>
					</div>
					<div class="form-group">
						<label for="heyuebiaoti" class="col-sm-2 control-label">合约标题</label>
						<div class="col-sm-9">
							<?php echo $_smarty_tpl->tpl_vars['data']->value['mian']['title'];?>

							<input type="hidden" name="pid" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['mian']['id'];?>
">
						</div>					
					</div>
					<div class="form-group">
						<label for="biangenggys" class="col-sm-2 control-label">变更供应商</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="product_search" >
							<input type="hidden" name="sid" id="sid">
						</div>
					</div>
					<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['line'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['foo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
$foreach_foo_Sav = $_smarty_tpl->tpl_vars['foo'];
?>
					<div class="form-group">
						<div class="col-sm-2"></div>			
						<div class="col-sm-3">
							<?php echo $_smarty_tpl->tpl_vars['foo']->value['mname'];?>

							<input type="hidden" name="mid[]" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['mid'];?>
">
						</div>
						<div class="col-sm-3"><input type="text" class="form-control " name="qty[]"  placeholder="数字"></div>
						<div class="col-sm-3">
							<input type="hidden" name="uid[]" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['uid'];?>
">
							<?php echo $_smarty_tpl->tpl_vars['foo']->value['uname'];?>

						</div>				
					</div>
					<?php
$_smarty_tpl->tpl_vars['foo'] = $foreach_foo_Sav;
}
?>
					<div class="form-group">
						<label for="biangengshuoming" class="col-sm-2 control-label">变更说明</label>
						<div class="col-sm-9">
							<textarea class="form-control" rows="6" name="desc" id="biangengshuoming"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="tupianshangchuan" class="col-sm-2 control-label">传变更合约</label>
						<div class="col-sm-1">
							<button type="button" class="btn btn-primary btn-md btn-raised btn-block ink" id="btnUploadImg">上传</button>
						</div>
						<div class="col-sm-4">
							<input type="text" name="pic" id="hidImgName" class="form-control" readonly>
						</div>

					</div>
					<div class="form-group" style="margin-right:0;">
						<div class="col-sm-9 col-sm-offset-2">
							<button type="submit" class="btn btn-primary btn-lg btn-raised btn-block ink" >提交审核</button>
						</div>
					</div>
			</form>
      </div>
    </div>
  <!---->
    
  </div>
<!-- 主体 end -->
  
</div>
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
//					img.src = g_AjxTempDir + response;

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
				$('#sid').val(product.id)
			}


		})
	})

<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>