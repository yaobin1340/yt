<?php /* Smarty version 3.1.24, created on 2016-04-27 09:11:14
         compiled from "D:/amp/Apache/htdocs/yt/application/views/admin/admin_supplier.html" */ ?>
<?php
/*%%SmartyHeaderCode:24445572011b2284c83_72923572%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fdf213f054648a64f1c11982157b2b7e65599de' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/admin/admin_supplier.html',
      1 => 1461717326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24445572011b2284c83_72923572',
  'variables' => 
  array (
    'data' => 0,
    'foo' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_572011b241b083_90570187',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572011b241b083_90570187')) {
function content_572011b241b083_90570187 ($_smarty_tpl) {
if (!is_callable('smarty_function_site_url')) require_once 'D:/amp/Apache/htdocs/yt/application/libraries/smarty/plugins/function.site_url.php';

$_smarty_tpl->properties['nocache_hash'] = '24445572011b2284c83_72923572';
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
				<li class="active">供应商</li>
      </ol>
    </div>
    <!-- 面包屑导航 end -->

<!---->
    <div class="form_card card z_depth-1">
      <h2 class="form_card_title">
        <i class="material-icons"></i> <span>供应商</span>
      </h2>
      <div class="form_card_box">
      
		<form id="page_form" class="form-horizontal" method="post" action="<?php echo smarty_function_site_url(array('url'=>'admin/supplier/list_task'),$_smarty_tpl);?>
">
			<div class="form-group">				
				<div class="col-sm-6">
					<input type="text" class="form-control" name="title" id="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
">
				</div>
				<button type="submit" class="btn btn-primary btn-raised" for="title">搜索</button>
			</div>
		</form>
      
      
		<table class="table_card table table-striped table-hover">
      <thead>
        <tr>

          <th class="">名称</th>
            <th class="">注册邮箱</th>
          <th class="">创建时间</th>
          <th class="">操作</th>
        </tr>
      </thead>
      <tbody>
      <?php
$_from = $_smarty_tpl->tpl_vars['data']->value['items'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['foo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
$foreach_foo_Sav = $_smarty_tpl->tpl_vars['foo'];
?>
      <tr>

          <td class="">
              <?php if ($_smarty_tpl->tpl_vars['foo']->value['status'] == 1) {?>
              <span class="label label-default">审核中</span>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['foo']->value['status'] == 2) {?>
              <span class="label label-success">审核通过</span>
              <?php }?>
              <a href="<?php echo smarty_function_site_url(array('url'=>'admin/supplier/show_sup'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
</a>
          </td>
          <td class="small"><?php echo $_smarty_tpl->tpl_vars['foo']->value['username'];?>
</td>
          <td class="small"><?php echo $_smarty_tpl->tpl_vars['foo']->value['cdate'];?>
</td>
          <td class="bloc">
              <a href="<?php echo smarty_function_site_url(array('url'=>'admin/supplier/reset_password'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['foo']->value['userid'];?>
" class="btn btn-sm btn-danger" >密码重置</a>

              <?php if ($_smarty_tpl->tpl_vars['foo']->value['status'] == 1) {?>  <a href="<?php echo smarty_function_site_url(array('url'=>'admin/supplier/chenge_status'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['foo']->value['userid'];?>
" class="btn btn-sm btn-info" >审核</a><?php }?>
              <?php if ($_smarty_tpl->tpl_vars['foo']->value['status'] == 2) {?> <a href="javascript:void(0)" class="btn btn-sm btn-info" >通过</a><?php }?>


          </td>

      </tr>
      <?php
$_smarty_tpl->tpl_vars['foo'] = $foreach_foo_Sav;
}
?>

      </tbody>
		</table>
          <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>


      </div>
    </div>
<!---->

  <!---->
    
  </div>
<!-- 主体 end -->
  
</div>
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
>
    $('.pagination').find('a').click(function(){
        url = $(this).attr('href')
        $('#page_form').attr('action',url)
        $('#page_form').submit()
        return false;
    })

<?php echo '</script'; ?>
><?php }
}
?>