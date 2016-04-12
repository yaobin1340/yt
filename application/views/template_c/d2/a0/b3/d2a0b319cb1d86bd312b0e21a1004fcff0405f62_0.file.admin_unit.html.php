<?php /* Smarty version 3.1.24, created on 2016-04-12 11:35:28
         compiled from "D:/amp/Apache/htdocs/yt/application/views/admin/admin_unit.html" */ ?>
<?php
/*%%SmartyHeaderCode:31997570c6d002f6e56_71768668%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2a0b319cb1d86bd312b0e21a1004fcff0405f62' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/admin/admin_unit.html',
      1 => 1460432059,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31997570c6d002f6e56_71768668',
  'variables' => 
  array (
    'data' => 0,
    'foo' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_570c6d0037f9d2_27250873',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_570c6d0037f9d2_27250873')) {
function content_570c6d0037f9d2_27250873 ($_smarty_tpl) {
if (!is_callable('smarty_function_site_url')) require_once 'D:/amp/Apache/htdocs/yt/application/libraries/smarty/plugins/function.site_url.php';

$_smarty_tpl->properties['nocache_hash'] = '31997570c6d002f6e56_71768668';
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
      
		<form class="form-horizontal" method="post" action="<?php echo smarty_function_site_url(array('url'=>'admin/unit/select_unit'),$_smarty_tpl);?>
">
			<div class="form-group">
				<div class="col-sm-1">
					<a href="<?php echo smarty_function_site_url(array('url'=>'admin/add_unit'),$_smarty_tpl);?>
" class="btn btn-primary btn-raised">新增</a>
				</div>				
				<div class="col-sm-6">
					<input type="text" class="form-control" name="sousuo" id="sousuo" value="" >
                     <input type="hidden" name="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
">
				</div>
				<button type="submit" name="select_unit" class="btn btn-primary btn-raised" for="sousuo">搜索</button>
			</div>
		</form>
      
      <form id="delete_form" method="post" action="<?php echo smarty_function_site_url(array('url'=>'admin/unit/delete_unit'),$_smarty_tpl);?>
">
		<table class="table_card table table-striped table-hover">
      <thead>
        <tr>
          <th class=""></th>
          <th class="">标题</th>
					<th class="">推送时间</th>
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
                  <div class="check">
                      <input type="checkbox" name="CB[]" id="CB[]" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
">
                  </div>
              </td>
              <td class=""><input type="hidden" name="unitname[]" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
</td>
              <td class="small"><?php echo $_smarty_tpl->tpl_vars['foo']->value['cdate'];?>
</td>
              <td class="">
                  <button type="submit" name="delete[]" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
" class="btn btn-sm btn-danger">删除</button>
              </td>
          </tr>
      <?php
$_smarty_tpl->tpl_vars['foo'] = $foreach_foo_Sav;
}
?>
      </tbody>
		</table>
		<div class="btn-group" role="group">
					<button type="button" class="btn btn-default check" id="allc">全选</button>
					<button type="button" class="btn btn-danger" name="allD" id="allD">删除</button>
				</div>
          </form>
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
 language="JavaScript">
$(function(){
    $("#allD").click(function () {
                 var check=false;
               $("[name='CB[]']").each(function () {

                   if($(this).is(':checked'))
                   {
                       check=true;
                   }
                })
                if(!check){
                    alert('请先选择需要删除的单位！');
                }
        else
                {
                    $("#delete_form").submit();
                }
            });
    $("#allc").click(function () {

        $("[name='CB[]']").each(function () {
                    $(this).attr("checked",'true');
                })
    });
    $("#page_id").click(function () {
        
    })
})
<?php echo '</script'; ?>
><?php }
}
?>