<?php /* Smarty version 3.1.24, created on 2016-04-27 08:57:52
         compiled from "D:/amp/Apache/htdocs/yt/application/views/project/project_sider.php" */ ?>
<?php
/*%%SmartyHeaderCode:1409457200e90b09a04_16119502%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1055717593f5deeb29653078b63c34e1c366d899' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/project/project_sider.php',
      1 => 1461717328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1409457200e90b09a04_16119502',
  'variables' => 
  array (
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_57200e90c26cf0_39494477',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57200e90c26cf0_39494477')) {
function content_57200e90c26cf0_39494477 ($_smarty_tpl) {
if (!is_callable('smarty_function_site_url')) require_once 'D:/amp/Apache/htdocs/yt/application/libraries/smarty/plugins/function.site_url.php';

$_smarty_tpl->properties['nocache_hash'] = '1409457200e90b09a04_16119502';
?>
<!-- 侧栏 -->
  <div id="sider">
    <div id="sider_bg"></div>
    <a class="sider_expand" data-toggle="tooltip" data-placement="right" title="扩展/折叠侧栏"><i class="material-icons">&#xe5dc;</i><span>折叠侧栏</span></a>



<!-- 项目方侧栏 -->
  <div class="sider_topbox">
    <div class="sider_topbox_btngroup">
      <a href="<?php echo smarty_function_site_url(array('url'=>'project/info'),$_smarty_tpl);?>
" type="button" class="btn btn-default " data-toggle="tooltip" data-placement="right" title="基本信息"><i class="material-icons">&#xe85d;</i><span>基本信息</span></a>
    </div>
  </div>


  <div id="sider_scrollbox">

    <div class="sider_group on">
      <div class="sider_group_list list-group">
        <a href="<?php echo smarty_function_site_url(array('url'=>'project/index'),$_smarty_tpl);?>
" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['type']->value == 1) {?>active<?php }?>" data-toggle="tooltip" data-placement="right" title="项目方界面首页"><i class="material-icons">&#xe88a;</i><span>首页</span></a>
      </div>
    </div>
  
    <div class="sider_group on">
      <a class="sider_group_title" data-toggle="tooltip" data-placement="right" title="项目"><i class="expand material-icons">&#xe5cf;</i><span>项目</span></a>
      <div class="sider_group_list list-group">
        <a href="<?php echo smarty_function_site_url(array('url'=>'project/supplier'),$_smarty_tpl);?>
" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['type']->value == 2) {?>active<?php }?>" data-toggle="tooltip" data-placement="right" title="供应商查询"><i class="material-icons">&#xe558;</i><span>供应商查询</span></a>
        <a href="<?php echo smarty_function_site_url(array('url'=>'project/demand'),$_smarty_tpl);?>
" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['type']->value == 3) {?>active<?php }?>" data-toggle="tooltip" data-placement="right" title="需求信息管理"><i class="material-icons">&#xe0c6;</i><span>需求信息管理</span></a>
        <a href="<?php echo smarty_function_site_url(array('url'=>'project/deal'),$_smarty_tpl);?>
" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['type']->value == 4) {?>active<?php }?>" data-toggle="tooltip" data-placement="right" title="合约管理"><i class="material-icons">&#xe90e;</i><span>合约管理</span></a>
        <a href="<?php echo smarty_function_site_url(array('url'=>'project/notice'),$_smarty_tpl);?>
" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['type']->value == 5) {?>active<?php }?>" data-toggle="tooltip" data-placement="right" title="系统公告"><i class="material-icons">&#xe85a;</i><span>系统公告</span></a>
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
<!-- 项目方侧栏 end -->


  
  </div>
<!-- 侧栏 end --><?php }
}
?>