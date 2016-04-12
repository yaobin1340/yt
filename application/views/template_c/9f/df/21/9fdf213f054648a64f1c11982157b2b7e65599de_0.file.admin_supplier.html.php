<?php /* Smarty version 3.1.24, created on 2016-04-11 15:26:36
         compiled from "D:/amp/Apache/htdocs/yt/application/views/admin/admin_supplier.html" */ ?>
<?php
/*%%SmartyHeaderCode:25032570b51acdd6dc1_28961403%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fdf213f054648a64f1c11982157b2b7e65599de' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/admin/admin_supplier.html',
      1 => 1460127311,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25032570b51acdd6dc1_28961403',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_570b51acec13c7_90643999',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_570b51acec13c7_90643999')) {
function content_570b51acec13c7_90643999 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '25032570b51acdd6dc1_28961403';
echo '<?php ';?>if( !defined("TEMPLATE") ) exit; require_once TEMPLATE."/common/header.php";<?php echo '?>';?>
<div id="wrap" class="container-fluid">

<?php echo '<?php ';?>require_once TEMPLATE."/admin/admin_sider.php";<?php echo '?>';?>
  
  
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
      <strong>公告</strong> <span>裕腾集团XXX项目材料采购招标正式开始裕腾集团XXX项目材料采购招标正式开始裕腾集团XXX项目材料采购招标正式开始裕腾集团XXX项目材料采购招标正式开始裕腾集团XXX项目材料采购招标正式开始裕腾集团XXX项目材料采购招标正式开始</span>
    </div>
    <!-- 公告 end -->

    
<!---->
    <div class="form_card card z_depth-1">
      <h2 class="form_card_title">
        <i class="material-icons"></i> <span>供应商</span>
      </h2>
      <div class="form_card_box">
      
		<form class="form-horizontal">
			<div class="form-group">				
				<div class="col-sm-6">
					<input type="text" class="form-control" name="sousuo" id="sousuo" >
				</div>
				<button type="submit" class="btn btn-primary btn-raised" for="sousuo">搜索</button>
			</div>
		</form>
      
      
		<table class="table_card table table-striped table-hover">
      <thead>
        <tr>
          <th class=""></th>
          <th class="">名称</th>
          <th class="">创建时间</th>
          <th class="">操作</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="">
            <div class="check">
              <input type="checkbox" value="">
            </div>		
          </td>
          <td class="">
            <a href="###" class="table_card_a">
                昆山正元贸易有限公司
            </a>		
          </td>
          <td class="small">2016-03-10 15:39:33</td>
          <td class="bloc">
						<a href="###" class="btn btn-sm btn-danger" >密码重置</a>
						<a href="###" class="btn btn-sm btn-primary"  >查看</a>
						<a href="###" class="btn btn-sm btn-info" >审核</a>
					</td>
        </tr>
        <tr>
          <td class="">
            <div class="check">
              <input type="checkbox" value="">
            </div>		
          </td>
          <td class="">
            <a href="###" class="table_card_a">
                admin_user
            </a>		
          </td>
          <td class="small">2016-03-10 15:39:33</td>
          <td class="bloc">
						<a href="###" class="btn btn-sm btn-danger" >密码重置</a>
						<a href="###" class="btn btn-sm btn-primary"  >查看</a>
						<a href="###" class="btn btn-sm btn-info" >通过</a>
					</td>
        </tr>
        <tr>
          <td class="">
            <div class="check">
              <input type="checkbox" value="">
            </div>		
          </td>
          <td class="">
            <a href="###" class="table_card_a">
                admin_user
            </a>		
          </td>
          <td class="small">2016-03-10 15:39:33</td>
          <td class="bloc">
						<a href="###" class="btn btn-sm btn-danger" >密码重置</a>
						<a href="###" class="btn btn-sm btn-primary"  >查看</a>
						<a href="###" class="btn btn-sm btn-info" >审核</a>
					</td>
        </tr>

      </tbody>
		</table>      
    <nav class="page clearfix">
      <ul class="pagination pull-right">
        <li class="firstpage hidden-xs disabled"><a href="##"><span class="ink ink-dark">首页</span></a></li>
        <li class="previous disabled">
          <a href="##" class="ink ink-dark"><span><</span></a>
        </li>
        <li class="active"><a href="##" class="ink ink-dark"><span>1</span></a></li>
        <li><a href="##" class="ink ink-dark"><span>2</span></a></li>
        <li><a href="##" class="ink ink-dark"><span>3</span></a></li>
        <li class="next">
          <a href="##" class="ink ink-dark"><em class="ripple ripple-effect" style="width: 46px; height: 46px; top: 1px; left: 4.5px;"></em><span>></span></a>
        </li>
        <li class="firstpage hidden-xs"><a href="##"><span class="ink ink-dark">尾页</span></a></li>
      </ul>
    </nav>
      
      </div>
    </div>
<!---->

  <!---->
    
  </div>
<!-- 主体 end -->
  
</div>
<?php echo '<?php ';?>require_once TEMPLATE."/common/footer.php";<?php echo '?>';
}
}
?>