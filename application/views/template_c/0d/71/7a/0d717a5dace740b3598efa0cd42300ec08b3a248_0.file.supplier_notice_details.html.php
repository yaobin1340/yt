<?php /* Smarty version 3.1.24, created on 2016-04-23 20:12:19
         compiled from "D:/amp/Apache/htdocs/yt/application/views/supplier/supplier_notice_details.html" */ ?>
<?php
/*%%SmartyHeaderCode:15449571b66a31ffbe4_25169720%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d717a5dace740b3598efa0cd42300ec08b3a248' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/supplier/supplier_notice_details.html',
      1 => 1461413494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15449571b66a31ffbe4_25169720',
  'variables' => 
  array (
    'lastnews' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_571b66a323cae1_69135360',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571b66a323cae1_69135360')) {
function content_571b66a323cae1_69135360 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15449571b66a31ffbe4_25169720';
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
        <li class="active">系统公告</li>
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
    
  </div>
<!-- 主体 end -->
  
</div>
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>