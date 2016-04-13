<?php /* Smarty version 3.1.24, created on 2016-04-13 13:24:45
         compiled from "D:/amp/Apache/htdocs/yt/application/views/admin/admin_sider.php" */ ?>
<?php
/*%%SmartyHeaderCode:743570dd81d169f69_25321692%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95ae4f681b2cef530b27f2b224b55d1da3b778aa' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/admin/admin_sider.php',
      1 => 1460524816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '743570dd81d169f69_25321692',
  'variables' => 
  array (
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_570dd81d296be9_98341389',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_570dd81d296be9_98341389')) {
function content_570dd81d296be9_98341389 ($_smarty_tpl) {
if (!is_callable('smarty_function_site_url')) require_once 'D:/amp/Apache/htdocs/yt/application/libraries/smarty/plugins/function.site_url.php';

$_smarty_tpl->properties['nocache_hash'] = '743570dd81d169f69_25321692';
?>
<!-- 侧栏 -->
  <div id="sider">
    <div id="sider_bg"></div>
    <a class="sider_expand" data-toggle="tooltip" data-placement="right" title="扩展/折叠侧栏"><i class="material-icons">&#xe5dc;</i><span>折叠侧栏</span></a>



<!-- 管理员侧栏 -->
  <div id="sider_scrollbox">
  
    <div class="sider_group on">
      <div class="sider_group_list list-group">
        <a href="<?php echo smarty_function_site_url(array('url'=>'index'),$_smarty_tpl);?>
" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['type']->value == 1) {?>active<?php }?>" data-toggle="tooltip" data-placement="right" title="管理员界面首页"><i class="material-icons">&#xe88a;</i><span>首页</span></a>
      </div>
    </div>
  
    <div class="sider_group on">
      <a class="sider_group_title" data-toggle="tooltip" data-placement="right" title="日常管理"><i class="expand material-icons">&#xe5cf;</i><span>日常管理</span></a>
      <div class="sider_group_list list-group">
        <a href="?c=admin_supplier" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['type']->value == 'admin_supplier') {?>active<?php }?>" data-toggle="tooltip" data-placement="right" title="供应商"><i class="material-icons">&#xe558;</i><span>供应商</span><em class="badge">14</em></a>
        <a href="?c=admin_project" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['type']->value == 'admin_project') {?>active<?php }?>" data-toggle="tooltip" data-placement="right" title="项目"><i class="material-icons">&#xe53f;</i><span>项目</span><em class="badge">2</em></a>
        <a href="?c=admin_paymentrequest" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['type']->value == 'admin_paymentrequest') {?>active<?php }?>" data-toggle="tooltip" data-placement="right" title="申请付款"><i class="material-icons">&#xe263;</i><span>申请付款</span><em class="badge">2</em></a>
        <a href="?c=admin_schedule" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['type']->value == 'admin_schedule') {?>active<?php }?>" data-toggle="tooltip" data-placement="right" title="进度数据"><i class="material-icons">&#xe85c;</i><span>进度数据</span></a>
      </div>
    </div>
    
    <div class="sider_group on">
      <a class="sider_group_title" data-toggle="tooltip" data-placement="right" title="合约管理"><i class="expand material-icons">&#xe5cf;</i><span>合约管理</span></a>
      <div class="sider_group_list list-group">
        <a href="?c=admin_deal" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['type']->value == 'admin_deal') {?>active<?php }?>" data-toggle="tooltip" data-placement="right" title="合约管理"><i class="material-icons">&#xe90e;</i><span>合约管理</span></a>
        <a href="<?php echo smarty_function_site_url(array('url'=>'admin/deal_model'),$_smarty_tpl);?>
" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['type']->value == 7) {?>active<?php }?>" data-toggle="tooltip" data-placement="right" title="合约范本"><i class="material-icons">&#xe873;</i><span>合约范本</span></a>
      </div>
    </div>
    
    <div class="sider_group on">
      <a class="sider_group_title" data-toggle="tooltip" data-placement="right" title="信息推送"><i class="expand material-icons">&#xe5cf;</i><span>信息推送</span></a>
      <div class="sider_group_list list-group">
        <a href="?c=admin_push" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['type']->value == 8) {?>active<?php }?>" data-toggle="tooltip" data-placement="right" title="公告信息推送"><i class="material-icons">&#xe0c9;</i><span>公告信息推送</span></a>
      </div>
    </div>
    
    <div class="sider_group">
      <a class="sider_group_title" data-toggle="tooltip" data-placement="right" title="数据维护"><i class="expand material-icons">&#xe5cf;</i><span>数据维护</span></a>
      <div class="sider_group_list list-group">
        <a href="<?php echo smarty_function_site_url(array('url'=>'admin/unit'),$_smarty_tpl);?>
" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['type']->value == 9) {?>active<?php }?>" data-toggle="tooltip" data-placement="right" title="计量单位"><i class="material-icons">&#xe3de;</i><span>计量单位</span></a>
        <a href="<?php echo smarty_function_site_url(array('url'=>'admin/material'),$_smarty_tpl);?>
" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['type']->value == 10) {?>active<?php }?>" data-toggle="tooltip" data-placement="right" title="材料类别"><i class="material-icons">&#xe918;</i><span>材料类别</span></a>
      </div>
    </div>
    
    <div class="sider_group">
      <a class="sider_group_title" data-toggle="tooltip" data-placement="right" title="系统功能"><i class="expand material-icons">&#xe5cf;</i><span>系统功能</span></a>
      <div class="sider_group_list list-group">
        <a href="<?php echo smarty_function_site_url(array('url'=>'admin/user'),$_smarty_tpl);?>
" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['type']->value == 11) {?>active<?php }?>" data-toggle="tooltip" data-placement="right" title="用户管理"><i class="material-icons">&#xe7fb;</i><span>用户管理</span></a>
        <a href="<?php echo smarty_function_site_url(array('url'=>'password'),$_smarty_tpl);?>
" class="list-group-item " data-toggle="tooltip" data-placement="right" title="密码修改"><i class="material-icons">&#xe88d;</i><span>密码修改</span></a>
      </div>
    </div>
  </div>
<!-- 管理员侧栏 end -->


  
  </div>
<!-- 侧栏 end --><?php }
}
?>