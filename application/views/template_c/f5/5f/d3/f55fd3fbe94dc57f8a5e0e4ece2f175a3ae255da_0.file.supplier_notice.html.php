<?php /* Smarty version 3.1.24, created on 2016-04-23 20:12:17
         compiled from "D:/amp/Apache/htdocs/yt/application/views/supplier/supplier_notice.html" */ ?>
<?php
/*%%SmartyHeaderCode:10400571b66a17c2bb0_20630873%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f55fd3fbe94dc57f8a5e0e4ece2f175a3ae255da' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/supplier/supplier_notice.html',
      1 => 1461413494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10400571b66a17c2bb0_20630873',
  'variables' => 
  array (
    'lastnews' => 0,
    'data' => 0,
    'foo' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_571b66a183c9b4_31854827',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571b66a183c9b4_31854827')) {
function content_571b66a183c9b4_31854827 ($_smarty_tpl) {
if (!is_callable('smarty_function_site_url')) require_once 'D:/amp/Apache/htdocs/yt/application/libraries/smarty/plugins/function.site_url.php';

$_smarty_tpl->properties['nocache_hash'] = '10400571b66a17c2bb0_20630873';
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
      <h2 class="form_card_title">
        <i class="material-icons"></i> <span>系统信息</span>
      </h2>
      <div class="form_card_box">
      
		<form class="form-horizontal"  id="page_form" method="post" action="<?php echo smarty_function_site_url(array('url'=>'supplier/notice/list_task'),$_smarty_tpl);?>
">
			<div class="form-group">				
				<div class="col-sm-6">
					<input type="text" class="form-control"  id="title" name="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
" >
				</div>
				<button type="submit" class="btn btn-primary btn-raised" for="title">搜索</button>
			</div>
		</form>				
			<table class="table_card table table-striped table-hover">
				<thead>
					<tr>

						<th class="">标题</th>
						<th class="">推送时间</th>

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

					<td class=""><a href="<?php echo smarty_function_site_url(array('url'=>'supplier/notice/show_push'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
" class="table_card_a"><?php echo $_smarty_tpl->tpl_vars['foo']->value['title'];?>
</a></td>
					<td class="small"><?php echo $_smarty_tpl->tpl_vars['foo']->value['cdate'];?>
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