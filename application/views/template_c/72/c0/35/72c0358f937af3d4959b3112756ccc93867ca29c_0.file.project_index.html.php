<?php /* Smarty version 3.1.24, created on 2016-04-27 09:11:49
         compiled from "D:/amp/Apache/htdocs/yt/application/views/project/project_index.html" */ ?>
<?php
/*%%SmartyHeaderCode:434572011d5d37105_16871859%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72c0358f937af3d4959b3112756ccc93867ca29c' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/project/project_index.html',
      1 => 1461717328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '434572011d5d37105_16871859',
  'variables' => 
  array (
    'lastnewsid' => 0,
    'lastnews' => 0,
    'data' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_572011d67d4283_66112484',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572011d67d4283_66112484')) {
function content_572011d67d4283_66112484 ($_smarty_tpl) {
if (!is_callable('smarty_function_site_url')) require_once 'D:/amp/Apache/htdocs/yt/application/libraries/smarty/plugins/function.site_url.php';

$_smarty_tpl->properties['nocache_hash'] = '434572011d5d37105_16871859';
echo $_smarty_tpl->getSubTemplate ("common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div id="wrap" class="container-fluid">

  <?php echo $_smarty_tpl->getSubTemplate ("project/project_sider.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  
  
<!-- 主体 -->
  <div id="main">
  
    <!-- 公告 -->
    <div class="alert alert-warning alert-dismissible" role="alert">
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
    </div>
    <!-- 公告 end -->


<!---->
  <div class="index_left col-xs-12 col-sm-6">
    <div class="index_notice form_card card z_depth-1">
      <div class="form_card_title">
        <i class="material-icons">&#xe85a;</i> <span>供应商搜索</span>
        <a href="<?php echo smarty_function_site_url(array('url'=>'project/supplier'),$_smarty_tpl);?>
" class="btn btn-primary pull-right">更多...</a>
      </div>
      <div class="form_card_box">
    

      
		<ul>
          <?php
$_from = $_smarty_tpl->tpl_vars['data']->value['s_list'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
          <li>
            <a href="<?php echo smarty_function_site_url(array('url'=>'project/supplier/show_supplier'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="">
              <?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>

            </a>
          </li>
          <?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
		</ul>
      
      </div>
    </div>
  </div>
<!---->

<!---->
  <div class="index_right col-xs-12 col-sm-6">
    <div class="index_support form_card card z_depth-1">
      <div class="form_card_title">
        <i class="material-icons">&#xe869;</i> <span>技术支持</span>
        <a href="./?c=supplier_notice" class="btn btn-primary pull-right">更多...</a>
      </div>
      <div class="form_card_box">
    

      
		<ul>
      <li>
        <b>技术QQ：</b>	<span>949037358</span>
      </li>
      <li>
        <b>电话联系：</b>	<span>0512-57908655</span>
      </li>
      <li>
        <b>邮箱：</b>	<span><a href="mail:qqq@qqq.com">949037358@qq.com</a></span>
      </li>
		</ul>
      
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