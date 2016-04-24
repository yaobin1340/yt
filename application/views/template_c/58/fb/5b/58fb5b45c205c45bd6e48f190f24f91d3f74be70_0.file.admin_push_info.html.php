<?php /* Smarty version 3.1.24, created on 2016-04-18 10:25:08
         compiled from "D:/amp/Apache/htdocs/yt/application/views/admin/admin_push_info.html" */ ?>
<?php
/*%%SmartyHeaderCode:1198657144584139d75_81127605%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58fb5b45c205c45bd6e48f190f24f91d3f74be70' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/admin/admin_push_info.html',
      1 => 1460945881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1198657144584139d75_81127605',
  'variables' => 
  array (
    'lastnews' => 0,
    'title' => 0,
    'content' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_571445841b2f22_03860348',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571445841b2f22_03860348')) {
function content_571445841b2f22_03860348 ($_smarty_tpl) {
if (!is_callable('smarty_function_site_url')) require_once 'D:/amp/Apache/htdocs/yt/application/libraries/smarty/plugins/function.site_url.php';

$_smarty_tpl->properties['nocache_hash'] = '1198657144584139d75_81127605';
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
        <li class="active">信息推送</li>
        <li class="active">公告信息推送</li>
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
        <i class="material-icons"></i> <span>信息推送</span>
      </h2>
      <div class="form_card_box">     
				<form class="form-horizontal" method="post" action="<?php echo smarty_function_site_url(array('url'=>'admin/push/save_push'),$_smarty_tpl);?>
">
					<div class="form-group">
						<label for="title" class="col-sm-2 control-label">标题</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="title" id="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" >
						</div>
					</div>
					<div class="form-group">
						<label for="content" class="col-sm-2 control-label">内容</label>
						<div class="col-sm-8">
							<textarea class="form-control" rows="12" name="content" id="content"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"></div>
						<div class="col-sm-8">
							<button type="submit" class="btn btn-primary btn-lg btn-raised btn-block ink" >提交</button>

						</div>
					</div>
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
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