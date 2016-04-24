<?php /* Smarty version 3.1.24, created on 2016-04-16 11:10:30
         compiled from "D:/amp/Apache/htdocs/yt/application/views/admin/admin_push_details.html" */ ?>
<?php
/*%%SmartyHeaderCode:248475711ad2631a053_58579285%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10aec3f6cf6ed16d44742e2fbaba426690366ea3' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/admin/admin_push_details.html',
      1 => 1460775130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '248475711ad2631a053_58579285',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5711ad26393200_02498566',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5711ad26393200_02498566')) {
function content_5711ad26393200_02498566 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '248475711ad2631a053_58579285';
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
        <li class="active">公告信息详情</li>
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
      <div class="form_card_box">
				<h3 class="text-center"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h3>
				<h5 class="text-center"><?php echo $_smarty_tpl->tpl_vars['data']->value['cdate'];?>
</h5>
				<div class="text-left"><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
</div>
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