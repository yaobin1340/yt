<?php /* Smarty version 3.1.24, created on 2016-04-12 09:11:33
         compiled from "D:/amp/Apache/htdocs/yt/application/views/admin/admin_unit_info.html" */ ?>
<?php
/*%%SmartyHeaderCode:1975570c4b45084175_25692878%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c3f3b41f0dacb0e46508c15e855dcd8d0fe7520' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/admin/admin_unit_info.html',
      1 => 1460423230,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1975570c4b45084175_25692878',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_570c4b451e3ac9_65858876',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_570c4b451e3ac9_65858876')) {
function content_570c4b451e3ac9_65858876 ($_smarty_tpl) {
if (!is_callable('smarty_function_site_url')) require_once 'D:/amp/Apache/htdocs/yt/application/libraries/smarty/plugins/function.site_url.php';

$_smarty_tpl->properties['nocache_hash'] = '1975570c4b45084175_25692878';
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
        <li class="active">数据维护</li>
        <li class="active">计量单位</li>
      </ol>
    </div>
    <!-- 面包屑导航 end -->
  
    <!-- 公告 -->
    <div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>公告</strong> <span>裕腾集团XXX项目材料采购招标正式开始裕腾集团XXX项目材料采购招标正式开始裕腾集团XXX项目材料采购招标正式开始裕腾集团XXX项目材料采购招标正式开始裕腾集团XXX项目材料采购招标正式开始裕腾集团XXX项目材料采购招标正式开始</span>
    </div>
    <!-- 公告 end -->

    
<!---->
   <div class="form_card card z_depth-1">
      <h2 class="form_card_title">
        <i class="material-icons"></i> <span>计量单位</span>
      </h2>
      <div class="form_card_box">    
				<form class="form-horizontal" method="post" action="<?php echo smarty_function_site_url(array('url'=>'admin/unit/add_unit'),$_smarty_tpl);?>
">
					<div class="form-group">			
						<div class="col-sm-6">
							<input type="text" class="form-control" name="unit" id="unit" >
						</div>
						<button type="submit" id="add" class="btn btn-primary btn-raised" for="zengjia">增加</button>
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
?>

<?php }
}
?>