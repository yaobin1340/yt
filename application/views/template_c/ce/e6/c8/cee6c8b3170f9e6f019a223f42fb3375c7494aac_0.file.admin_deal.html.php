<?php /* Smarty version 3.1.24, created on 2016-04-23 20:04:21
         compiled from "D:/amp/Apache/htdocs/yt/application/views/admin/admin_deal.html" */ ?>
<?php
/*%%SmartyHeaderCode:29502571b64c5b98c47_89699144%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cee6c8b3170f9e6f019a223f42fb3375c7494aac' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/admin/admin_deal.html',
      1 => 1461412660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29502571b64c5b98c47_89699144',
  'variables' => 
  array (
    'lastnews' => 0,
    'data' => 0,
    'foo' => 0,
    'row' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_571b64c5cc9744_71315505',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571b64c5cc9744_71315505')) {
function content_571b64c5cc9744_71315505 ($_smarty_tpl) {
if (!is_callable('smarty_function_site_url')) require_once 'D:/amp/Apache/htdocs/yt/application/libraries/smarty/plugins/function.site_url.php';

$_smarty_tpl->properties['nocache_hash'] = '29502571b64c5b98c47_89699144';
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
        <li class="active">合约管理</li>
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
        <i class="material-icons"></i> <span>合约管理</span>
      </h2>
      <div class="form_card_box">
      
		<form id="page_form" class="form-horizontal" method="post" action="<?php echo smarty_function_site_url(array('url'=>'admin/deal/list_deal'),$_smarty_tpl);?>
">
			<div class="form-group">			
				<div class="col-sm-6">
					<input type="text" class="form-control" id="sousuo" name="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
">
				</div>
				<button type="submit" class="btn btn-primary btn-raised" for="sousuo">搜索</button>
			</div>
		</form>
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
          <table class="table_card table table-striped table-hover">
              <caption>
                  <tr>
                      <th class="">
                      </th>
                      <th class="">标题</th>
                      <th class="">供应商</th>
                      <th class="">发布时间</th>
                      <th class="">操作</th>
                  </tr>
              </caption>

              <thead class="backbg">
              <tr>
                  <th class=""></th>
                  <th class=""><?php echo $_smarty_tpl->tpl_vars['foo']->value['title'];?>
</th>
                  <th class=""></th>
                  <th class=""></th>
                  <th class="">

                      <a href="<?php echo smarty_function_site_url(array('url'=>'admin/deal/end_deal'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
" class="btn btn-sm btn-danger"  >合约终止</a></th>
              </tr>
              </thead>

              <tbody>
              <tr>
                  <td class="">

                  </td>
                  <td class="">
                      <?php if ($_smarty_tpl->tpl_vars['foo']->value['status'] == 1) {?>
                      <a href="<?php echo smarty_function_site_url(array('url'=>'admin/deal/show_contract'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
" class="table_card_a"><span class="label label-default">审核中</span>
                          <?php echo $_smarty_tpl->tpl_vars['foo']->value['title'];?>

                      </a>
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['foo']->value['status'] == 2) {?>
                      <a href="<?php echo smarty_function_site_url(array('url'=>'admin/deal/show_contract'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
" class="table_card_a"><span class="label label-success">审核通过</span>
                          <?php echo $_smarty_tpl->tpl_vars['foo']->value['title'];?>

                      </a>
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['foo']->value['status'] == 3) {?>
                      <a href="<?php echo smarty_function_site_url(array('url'=>'admin/deal/show_contract'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
" class="table_card_a"><span class="label label-danger">待终止</span>
                          <?php echo $_smarty_tpl->tpl_vars['foo']->value['title'];?>

                      </a>
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['foo']->value['status'] == 4) {?>
                      <a href="<?php echo smarty_function_site_url(array('url'=>'admin/deal/show_contract'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
" class="table_card_a"><span class="label label-primary">已终止</span>
                          <?php echo $_smarty_tpl->tpl_vars['foo']->value['title'];?>

                      </a>
                      <?php }?>
                  </td>
                  <td class="small"><?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
</td>
                  <td class="small"><?php echo $_smarty_tpl->tpl_vars['foo']->value['cdate'];?>
</td>
                  <td class="bloc">
                      <?php if ($_smarty_tpl->tpl_vars['foo']->value['status'] > 2) {?>
                      <a href="<?php echo smarty_function_site_url(array('url'=>'admin/deal/show_end_details'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
/0" class="btn btn-sm btn-info">变更终止信息</a>
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['foo']->value['status'] == 1) {?>
                      <a href="<?php echo smarty_function_site_url(array('url'=>'admin/deal/SH_contract'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
" class="btn btn-sm btn-primary">确认审核</a>
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['foo']->value['status'] == 3) {?>
                      <a href="<?php echo smarty_function_site_url(array('url'=>'admin/deal/end_contract'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
" class="btn btn-sm btn-danger"  >确认终止</a>
                      <?php }?>
                  </td>
              </tr>


              <?php
$_from = $_smarty_tpl->tpl_vars['data']->value['change_items'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
              <?php if ($_smarty_tpl->tpl_vars['foo']->value['id'] == $_smarty_tpl->tpl_vars['row']->value['pid']) {?>
              <tr>
                  <td class="">

                  </td>
                  <td class="">
                      <?php if ($_smarty_tpl->tpl_vars['row']->value['status'] == 1) {?>
                      <a href="<?php echo smarty_function_site_url(array('url'=>'admin/deal/show_change'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="table_card_a"><span class="label label-default">审核中</span>
                          <?php echo $_smarty_tpl->tpl_vars['foo']->value['title'];?>

                      </a>
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['row']->value['status'] == 2) {?>
                      <a href="<?php echo smarty_function_site_url(array('url'=>'admin/deal/show_change'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="table_card_a"><span class="label label-success">审核通过</span>
                          <?php echo $_smarty_tpl->tpl_vars['foo']->value['title'];?>

                      </a>
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['row']->value['status'] == 3) {?>
                      <a href="<?php echo smarty_function_site_url(array('url'=>'admin/deal/show_change'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="table_card_a"><span class="label label-danger">待终止</span>
                          <?php echo $_smarty_tpl->tpl_vars['foo']->value['title'];?>

                      </a>
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['row']->value['status'] == 4) {?>
                      <a href="<?php echo smarty_function_site_url(array('url'=>'admin/deal/show_change'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="table_card_a"><span class="label label-primary">已终止</span>
                          <?php echo $_smarty_tpl->tpl_vars['foo']->value['title'];?>

                      </a>
                      <?php }?>
                  </td>
                  <td class="small"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
                  <td class="small"><?php echo $_smarty_tpl->tpl_vars['row']->value['cdate'];?>
</td>
                  <td class="bloc">
                      <?php if ($_smarty_tpl->tpl_vars['row']->value['status'] > 2) {?>
                      <a href="<?php echo smarty_function_site_url(array('url'=>'admin/deal/show_end_details'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-sm btn-info">变更终止信息</a>
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['row']->value['status'] == 3) {?>
                      <a href="<?php echo smarty_function_site_url(array('url'=>'admin/deal/end_change'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-sm btn-danger"  >确认终止</a>
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['row']->value['status'] == 1) {?>
                      <a href="<?php echo smarty_function_site_url(array('url'=>'admin/deal/SH_change'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-sm btn-primary">确认审核</a>
                      <?php }?>


                  </td>
              </tr>
              <?php }?>
              <?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
              </tbody>
          </table>
          <hr>
          <?php
$_smarty_tpl->tpl_vars['foo'] = $foreach_foo_Sav;
}
?>
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