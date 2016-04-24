<?php /* Smarty version 3.1.24, created on 2016-04-13 16:33:15
         compiled from "D:/amp/Apache/htdocs/yt/application/views/admin/admin_deal_model_edit.html" */ ?>
<?php
/*%%SmartyHeaderCode:6384570e044b842519_59014413%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2190d9333a2e16faa2f155df1f8a27c48c18cf6a' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/admin/admin_deal_model_edit.html',
      1 => 1460535780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6384570e044b842519_59014413',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_570e044b8abcc2_96585726',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_570e044b8abcc2_96585726')) {
function content_570e044b8abcc2_96585726 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6384570e044b842519_59014413';
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
        <li class="active">合约范本信息</li>
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
        <i class="material-icons"></i> <span>合约范本</span>
      </h2>
      <div class="form_card_box">     
				<form class="form-horizontal">
					<div class="form-group">
						<label for="biaoti" class="col-sm-2 control-label">标题</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" name="biaoti" id="biaoti">
						</div>							
					</div>
					<div class="form-group">
						<label for="tupianshangchuan" class="col-sm-2 control-label">文件上传</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="tupianshangchuan" placeholder="合约范本" >
						</div>
						<div class="col-sm-2  control-label">
							<input type="file" id="exampleInputFile">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"></div>
						<div class="col-sm-6">
							<button type="submit" class="btn btn-primary btn-lg btn-raised btn-block ink" >编辑</button>
						</div>
					</div>
				</form>
      </div>
    </div>
<!---->

  <!---->
    
  </div>
<!-- 主体 end -->
  
</div>
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>