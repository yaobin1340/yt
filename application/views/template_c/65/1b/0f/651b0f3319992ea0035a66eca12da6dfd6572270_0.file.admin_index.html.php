<?php /* Smarty version 3.1.24, created on 2016-04-23 19:58:05
         compiled from "D:/amp/Apache/htdocs/yt/application/views/admin/admin_index.html" */ ?>
<?php
/*%%SmartyHeaderCode:22781571b634dc97895_86116009%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '651b0f3319992ea0035a66eca12da6dfd6572270' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/admin/admin_index.html',
      1 => 1461412680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22781571b634dc97895_86116009',
  'variables' => 
  array (
    'lastnews' => 0,
    'data' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_571b634dd4e593_58835068',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571b634dd4e593_58835068')) {
function content_571b634dd4e593_58835068 ($_smarty_tpl) {
if (!is_callable('smarty_function_site_url')) require_once 'D:/amp/Apache/htdocs/yt/application/libraries/smarty/plugins/function.site_url.php';

$_smarty_tpl->properties['nocache_hash'] = '22781571b634dc97895_86116009';
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

    <!-- 仪表盘区 -->
    <div class="dashboard_area clearfix">
    <!-- 仪表盘演示1 -->
      <div class="dashboard_card_wrap col-xs-6 col-sm-3 clearfix">
        <div class="dashboard_card card z_depth-1" style="border-color:#62caec;">
          <div class="icon"><i class="material-icons" style="color:#62caec;">&#xe263;</i></div>
          <div class="title">申请付款</div>
          <div class="maincon"><span class="num"><?php echo $_smarty_tpl->tpl_vars['data']->value['e_count'];?>
</span>条</div>
          <div class="extra"><a href="./?c=admin_paymentrequest">查看</a></div>
        </div>
      </div>
    <!-- 仪表盘演示1 end -->
    <!-- 仪表盘演示1 -->
      <div class="dashboard_card_wrap col-xs-6 col-sm-3 clearfix">
        <div class="dashboard_card card z_depth-1" style="border-color:#9f70f4;">
          <div class="icon"><i class="material-icons" style="color:#9f70f4;">&#xe558;</i></div>
          <div class="title">新增供应商</div>
          <div class="maincon"><span class="num"><?php echo $_smarty_tpl->tpl_vars['data']->value['s_count'];?>
</span>家</div>
          <div class="extra"><a href="<?php echo smarty_function_site_url(array('url'=>'admin/supplier'),$_smarty_tpl);?>
">查看</a></div>
        </div>
      </div>
    <!-- 仪表盘演示1 end -->
    <!-- 仪表盘演示1 -->
      <div class="dashboard_card_wrap col-xs-6 col-sm-3 clearfix">
        <div class="dashboard_card card z_depth-1" style="border-color:#ff5752;">
          <div class="icon"><i class="material-icons" style="color:#ff5752;">&#xe90e;</i></div>
          <div class="title">合约变更</div>
          <div class="maincon"><span class="num"><?php echo $_smarty_tpl->tpl_vars['data']->value['c_count'];?>
</span>件</div>
          <div class="extra"><a href="<?php echo smarty_function_site_url(array('url'=>'admin/deal'),$_smarty_tpl);?>
">查看</a></div>
        </div>
      </div>
    <!-- 仪表盘演示1 end -->
    <!-- 仪表盘演示1 -->
      <div class="dashboard_card_wrap col-xs-6 col-sm-3 clearfix">
        <div class="dashboard_card card z_depth-1" style="border-color:#f0ad4e;">
          <div class="icon"><i class="material-icons" style="color:#f0ad4e;">&#xe53f;</i></div>
          <div class="title">新增项目</div>
          <div class="maincon"><span class="num"><?php echo $_smarty_tpl->tpl_vars['data']->value['p_count'];?>
</span>件</div>
          <div class="extra"><a href="<?php echo smarty_function_site_url(array('url'=>'admin/project'),$_smarty_tpl);?>
">查看</a></div>
        </div>
      </div>
    <!-- 仪表盘演示1 end -->
    </div>
    <!-- 仪表盘区 end -->

<!---->
  <div class="index_left col-xs-12 col-sm-6">
    <div class="index_notice form_card card z_depth-1">
      <div class="form_card_title">
        <i class="material-icons">&#xe85a;</i> <span>供应商搜索</span>
        <a href="<?php echo smarty_function_site_url(array('url'=>'admin/supplier'),$_smarty_tpl);?>
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
            <a href="<?php echo smarty_function_site_url(array('url'=>'admin/supplier/show_sup'),$_smarty_tpl);?>
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
        <b>技术QQ：</b>	<span>123456789</span>
      </li>
      <li>
        <b>电话联系：</b>	<span>12345678941</span>
      </li>
      <li>
        <b>邮箱：</b>	<span><a href="mail:qqq@qqq.com">qqq@qqq.com</a></span>
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