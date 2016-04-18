<?php /* Smarty version 3.1.24, created on 2016-04-18 10:23:41
         compiled from "D:/amp/Apache/htdocs/yt/application/views/admin/admin_index.html" */ ?>
<?php
/*%%SmartyHeaderCode:266575714452d3f64e2_57196312%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '651b0f3319992ea0035a66eca12da6dfd6572270' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/admin/admin_index.html',
      1 => 1460945880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '266575714452d3f64e2_57196312',
  'variables' => 
  array (
    'lastnews' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5714452d457f91_66721655',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5714452d457f91_66721655')) {
function content_5714452d457f91_66721655 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '266575714452d3f64e2_57196312';
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
        <li><a href="#">Home</a></li>
        <li><a href="#">Library</a></li>
        <li class="active">Data</li>
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
          <div class="maincon"><span class="num">125</span>条</div>
          <div class="extra"><a href="./?c=admin_paymentrequest">查看</a></div>
        </div>
      </div>
    <!-- 仪表盘演示1 end -->
    <!-- 仪表盘演示1 -->
      <div class="dashboard_card_wrap col-xs-6 col-sm-3 clearfix">
        <div class="dashboard_card card z_depth-1" style="border-color:#9f70f4;">
          <div class="icon"><i class="material-icons" style="color:#9f70f4;">&#xe558;</i></div>
          <div class="title">新增供应商</div>
          <div class="maincon"><span class="num">15</span>家</div>
          <div class="extra"><a href="./?c=admin_project">查看</a></div>
        </div>
      </div>
    <!-- 仪表盘演示1 end -->
    <!-- 仪表盘演示1 -->
      <div class="dashboard_card_wrap col-xs-6 col-sm-3 clearfix">
        <div class="dashboard_card card z_depth-1" style="border-color:#ff5752;">
          <div class="icon"><i class="material-icons" style="color:#ff5752;">&#xe90e;</i></div>
          <div class="title">合约变更</div>
          <div class="maincon"><span class="num">125</span>件</div>
          <div class="extra"><a href="./?c=admin_supplier">查看</a></div>
        </div>
      </div>
    <!-- 仪表盘演示1 end -->
    <!-- 仪表盘演示1 -->
      <div class="dashboard_card_wrap col-xs-6 col-sm-3 clearfix">
        <div class="dashboard_card card z_depth-1" style="border-color:#f0ad4e;">
          <div class="icon"><i class="material-icons" style="color:#f0ad4e;">&#xe53f;</i></div>
          <div class="title">新增项目</div>
          <div class="maincon"><span class="num">125</span>件</div>
          <div class="extra"><a href="./?c=admin_project">查看</a></div>
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
        <a href="./?c=supplier_notice" class="btn btn-primary pull-right">更多...</a>
      </div>
      <div class="form_card_box">
    

      
		<ul>
      <li>
        <a href="###" class="">
            裕腾集团XXX项目材料采购招标正式开始裕腾集团XXX项目材料采购招标正式开始裕腾集团XXX项目材料采购招标正式开始
        </a>		
      </li>
      <li>
        <a href="###" class="">
            裕腾集团XXX项目材料采购招标正式开始裕腾集团XXX项目材料采购招标正式开始裕腾集团XXX项目材料采购招标正式开始
        </a>		
      </li>
      <li>
        <a href="###" class="">
            裕腾集团XXX项目材料采购招标正式开始裕腾集团XXX项目材料采购招标正式开始裕腾集团XXX项目材料采购招标正式开始
        </a>		
      </li>
      <li>
        <a href="###" class="">
            裕腾集团XXX项目材料采购招标正式开始裕腾集团XXX项目材料采购招标正式开始裕腾集团XXX项目材料采购招标正式开始
        </a>		
      </li>
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