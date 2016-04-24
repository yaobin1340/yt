<?php /* Smarty version 3.1.24, created on 2016-04-22 13:16:43
         compiled from "D:/amp/Apache/htdocs/yt/application/views/supplier/supplier_index.html" */ ?>
<?php
/*%%SmartyHeaderCode:10825719b3bb73c051_63673200%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6eee3646eeabae384e7ddb2be468440a609a9643' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/supplier/supplier_index.html',
      1 => 1461294727,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10825719b3bb73c051_63673200',
  'variables' => 
  array (
    'lastnews' => 0,
    'data' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5719b3bb870a59_67392922',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5719b3bb870a59_67392922')) {
function content_5719b3bb870a59_67392922 ($_smarty_tpl) {
if (!is_callable('smarty_function_site_url')) require_once 'D:/amp/Apache/htdocs/yt/application/libraries/smarty/plugins/function.site_url.php';

$_smarty_tpl->properties['nocache_hash'] = '10825719b3bb73c051_63673200';
echo $_smarty_tpl->getSubTemplate ("common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div id="wrap" class="container-fluid">

  <?php echo $_smarty_tpl->getSubTemplate ("supplier/supplier_sider.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  
  
<!-- 主体 -->
  <div id="main">
  
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
          <div class="icon"><i class="material-icons" style="color:#62caec;">&#xe0c6;</i></div>
          <div class="title">有效的需求</div>
          <div class="maincon"><span class="num"><?php echo $_smarty_tpl->tpl_vars['data']->value['r_count'];?>
</span>件</div>
          <div class="extra"><a href="<?php echo smarty_function_site_url(array('url'=>'supplier/demand'),$_smarty_tpl);?>
">查看</a></div>
        </div>
      </div>
    <!-- 仪表盘演示1 end -->
    <!-- 仪表盘演示1 -->
      <div class="dashboard_card_wrap col-xs-6 col-sm-3 clearfix">
        <div class="dashboard_card card z_depth-1" style="border-color:#9f70f4;">
          <div class="icon"><i class="material-icons" style="color:#9f70f4;">&#xe90e;</i></div>
          <div class="title">已签署合约</div>
          <div class="maincon"><span class="num"><?php echo $_smarty_tpl->tpl_vars['data']->value['c_count'];?>
</span>件</div>
          <div class="extra"><a href="<?php echo smarty_function_site_url(array('url'=>'supplier/deal'),$_smarty_tpl);?>
">查看</a></div>
        </div>
      </div>
    <!-- 仪表盘演示1 end -->
    </div>
    <!-- 仪表盘区 end -->


<!---->
    <div class="form_card card z_depth-1">
      <div class="form_card_title">
        <i class="material-icons">&#xe0c6;</i> <span>最新需求信息</span>
         <a href="<?php echo smarty_function_site_url(array('url'=>'supplier/demand'),$_smarty_tpl);?>
" class="btn btn-primary pull-right">更多...</a>
      </div>
      <div class="form_card_box">



		<table class="table_card table table-striped table-hover">
      <thead>
        <tr>
          <th class="">标题</th>
          <th class="">推送时间</th>
        </tr>
      </thead>
      <tbody>
      <?php
$_from = $_smarty_tpl->tpl_vars['data']->value['r_list'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
        <tr>
          <td class="">
            <a href="<?php echo smarty_function_site_url(array('url'=>'supplier/demand/show_demand'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="table_card_a">
              <?php echo $_smarty_tpl->tpl_vars['row']->value['pro_name'];?>
需要<?php echo $_smarty_tpl->tpl_vars['row']->value['m_name'];
echo $_smarty_tpl->tpl_vars['row']->value['num'];
echo $_smarty_tpl->tpl_vars['row']->value['u_name'];?>
,规格为<?php echo $_smarty_tpl->tpl_vars['row']->value['size'];?>

            </a>
          </td>
          <td class="small"><?php echo $_smarty_tpl->tpl_vars['row']->value['cdate'];?>
</td>
        </tr>
      <?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
      </tbody>
		</table>

      </div>
    </div>
<!---->

<!---->
  <div class="index_left col-xs-12 col-sm-6">
    <div class="index_notice form_card card z_depth-1">
      <div class="form_card_title">
        <i class="material-icons">&#xe85a;</i> <span>系统消息</span>
        <a href="<?php echo smarty_function_site_url(array('url'=>'supplier/notice'),$_smarty_tpl);?>
" class="btn btn-primary pull-right">更多...</a>
      </div>
      <div class="form_card_box">
    

      
		<ul>
          <?php
$_from = $_smarty_tpl->tpl_vars['data']->value['n_list'];
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
              <a href="<?php echo smarty_function_site_url(array('url'=>'supplier/notice/show_push'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="">
                  <?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>

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