<?php /* Smarty version 3.1.24, created on 2016-04-18 11:28:54
         compiled from "D:/amp/Apache/htdocs/yt/application/views/project/project_notice_details.html" */ ?>
<?php
/*%%SmartyHeaderCode:1974571454768b2759_34951162%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61500891c5cae60d7e823d1de994be8f332f1448' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/project/project_notice_details.html',
      1 => 1460945394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1974571454768b2759_34951162',
  'variables' => 
  array (
    'lastnews' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_571454769a0c38_89001759',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571454769a0c38_89001759')) {
function content_571454769a0c38_89001759 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1974571454768b2759_34951162';
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