<?php /* Smarty version 3.1.24, created on 2016-04-22 05:03:52
         compiled from "D:/amp/Apache/htdocs/yt/application/views/admin/admin_deal_model_info.html" */ ?>
<?php
/*%%SmartyHeaderCode:128805719b0b80945d0_58590552%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '052393f150140345858a7c3df5784476f80c8580' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/admin/admin_deal_model_info.html',
      1 => 1460945880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128805719b0b80945d0_58590552',
  'variables' => 
  array (
    'lastnews' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5719b0b817adb4_19531800',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5719b0b817adb4_19531800')) {
function content_5719b0b817adb4_19531800 ($_smarty_tpl) {
if (!is_callable('smarty_function_site_url')) require_once 'D:/amp/Apache/htdocs/yt/application/libraries/smarty/plugins/function.site_url.php';

$_smarty_tpl->properties['nocache_hash'] = '128805719b0b80945d0_58590552';
echo $_smarty_tpl->getSubTemplate ("common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div id="wrap" class="container-fluid">

	<?php echo $_smarty_tpl->getSubTemplate ("admin/admin_sider.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  
  
<!-- 主体 -->
  <div id="main">
  
    <!-- 面包屑导航 -->
    <div id="breadcrumb">
      <ol class="breadcrumb">
        <li class="active">首页</li>
        <li class="active">合约管理</li>
        <li class="active">合约范本信息</li>
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
        <i class="material-icons"></i> <span>合约范本</span>
      </h2>
      <div class="form_card_box">     
				<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo smarty_function_site_url(array('url'=>'admin/deal_model/save_model'),$_smarty_tpl);?>
">
					<div class="form-group">
						<label for="dealname" class="col-sm-2 control-label">标题</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" required="required" name="dealname" id="dealname">
						</div>

					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">文件上传</label>

						<div class="col-sm-2  control-label">
							<input type="file" id="exampleInputFile" name="Inputfile">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"></div>
						<div class="col-sm-6">
							<button type="submit" class="btn btn-primary btn-lg btn-raised btn-block ink" >提交</button>
						</div>
					</div>
				</form>
      </div>
    </div>
<!---->

  <!---->
    
  </div>
<!-- 主体 end -->
  
</div>
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>