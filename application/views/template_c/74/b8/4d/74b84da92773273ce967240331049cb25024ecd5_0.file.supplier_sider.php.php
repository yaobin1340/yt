<?php /* Smarty version 3.1.24, created on 2016-04-23 20:12:14
         compiled from "D:/amp/Apache/htdocs/yt/application/views/supplier/supplier_sider.php" */ ?>
<?php
/*%%SmartyHeaderCode:10450571b669ec5b461_56048038%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74b84da92773273ce967240331049cb25024ecd5' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/supplier/supplier_sider.php',
      1 => 1461413469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10450571b669ec5b461_56048038',
  'variables' => 
  array (
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_571b669ec98363_34788318',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571b669ec98363_34788318')) {
function content_571b669ec98363_34788318 ($_smarty_tpl) {
if (!is_callable('smarty_function_site_url')) require_once 'D:/amp/Apache/htdocs/yt/application/libraries/smarty/plugins/function.site_url.php';

$_smarty_tpl->properties['nocache_hash'] = '10450571b669ec5b461_56048038';
?>
<!-- 侧栏 -->
  <div id="sider">
    <div id="sider_bg"></div>
    <a class="sider_expand" data-toggle="tooltip" data-placement="right" title="扩展/折叠侧栏"><i class="material-icons">&#xe5dc;</i><span>折叠侧栏</span></a>

    
<!-- 供应商侧栏 -->
  <div class="sider_topbox">
    <div class="sider_topbox_btngroup">
      <a href="<?php echo smarty_function_site_url(array('url'=>'supplier/info'),$_smarty_tpl);?>
" type="button" class="btn btn-default " data-toggle="tooltip" data-placement="right" title="基本信息"><i class="material-icons">&#xe85d;</i><span>基本信息</span></a>
    </div>
  </div>

  <div id="sider_scrollbox">
  
    <div class="sider_group on">
      <div class="sider_group_list list-group">
        <a href="<?php echo smarty_function_site_url(array('url'=>'supplier/index'),$_smarty_tpl);?>
" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['type']->value == 1) {?>active<?php }?>" data-toggle="tooltip" data-placement="right" title="供应商界面首页"><i class="material-icons">&#xe88a;</i><span>首页</span></a>
      </div>
    </div>
  
    <div class="sider_group on">
      <a class="sider_group_title" data-toggle="tooltip" data-placement="right" title="供应商"><i class="expand material-icons">&#xe5cf;</i><span>供应商</span></a>
      <div class="sider_group_list list-group">
        <a href="<?php echo smarty_function_site_url(array('url'=>'supplier/deal'),$_smarty_tpl);?>
" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['type']->value == 2) {?>active<?php }?>" data-toggle="tooltip" data-placement="right" title="合约列表"><i class="material-icons">&#xe90e;</i><span>合约列表</span></a>
        <a href="<?php echo smarty_function_site_url(array('url'=>'supplier/demand'),$_smarty_tpl);?>
" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['type']->value == 3) {?>active<?php }?>" data-toggle="tooltip" data-placement="right" title="需求信息"><i class="material-icons">&#xe0c6;</i><span>需求信息</span></a>
        <a href="<?php echo smarty_function_site_url(array('url'=>'supplier/notice'),$_smarty_tpl);?>
" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['type']->value == 4) {?>active<?php }?>" data-toggle="tooltip" data-placement="right" title="系统公告"><i class="material-icons">&#xe85a;</i><span>系统公告</span></a>
      </div>
    </div>
    <div class="sider_group on">
      <a class="sider_group_title" data-toggle="tooltip" data-placement="right" title="系统功能"><i class="expand material-icons">&#xe5cf;</i><span>系统功能</span></a>
      <div class="sider_group_list list-group">
        <a href="<?php echo smarty_function_site_url(array('url'=>'password'),$_smarty_tpl);?>
" class="list-group-item " data-toggle="tooltip" data-placement="right" title="密码修改"><i class="material-icons">&#xe88d;</i><span>密码修改</span></a>
      </div>
    </div>
  </div>
<!-- 供应商侧栏 end -->

  
  </div>
<!-- 侧栏 end --><?php }
}
?>