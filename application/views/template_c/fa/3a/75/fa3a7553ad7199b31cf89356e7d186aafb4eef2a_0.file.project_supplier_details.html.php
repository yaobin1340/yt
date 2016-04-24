<?php /* Smarty version 3.1.24, created on 2016-04-18 19:53:05
         compiled from "D:/amp/Apache/htdocs/yt/application/views/project/project_supplier_details.html" */ ?>
<?php
/*%%SmartyHeaderCode:83985714caa1b33188_01563084%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa3a7553ad7199b31cf89356e7d186aafb4eef2a' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/project/project_supplier_details.html',
      1 => 1460980381,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83985714caa1b33188_01563084',
  'variables' => 
  array (
    'lastnews' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5714caa1c19943_00916528',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5714caa1c19943_00916528')) {
function content_5714caa1c19943_00916528 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '83985714caa1b33188_01563084';
echo $_smarty_tpl->getSubTemplate ("common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div id="wrap" class="container-fluid">

	<?php echo $_smarty_tpl->getSubTemplate ("project/project_sider.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
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
<!---->
    <div class="form_card card z_depth-1">
      <h2 class="form_card_title">
        <i class="material-icons"></i> <span>供应商详情</span>
      </h2>
      <div class="form_card_box">

		  <div class="col-md-5 col-sm-12 pull-right">
			  <br/>
			  <div class="form-group">
				  <div class="col-sm-3  control-label">
					  <img style="width: 300px" id="imgShow" <?php if ($_smarty_tpl->tpl_vars['data']->value['pic'] != '') {?>  src="/uploadimages/<?php echo $_smarty_tpl->tpl_vars['data']->value['pic'];?>
"<?php }?>>

				  </div>
			  </div>
		  </div>
				<div class="col-md-6 col-sm-12">
					<form class="form-horizontal" >
					<H4><strong><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</strong></H4>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">发布时间</label>
						<div class="col-sm-10">
							<p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</p>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">经营材料	</label>
						<div class="col-sm-10">
							<p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</p>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">公司性质</label>
						<div class="col-sm-10">
							<p class="form-control-static">
								<?php if ($_smarty_tpl->tpl_vars['data']->value['type'] == 0) {?>  <?php }?>
								<?php if ($_smarty_tpl->tpl_vars['data']->value['type'] == 1) {?>国有企业<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['data']->value['type'] == 2) {?>集体企业<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['data']->value['type'] == 3) {?>联营企业<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['data']->value['type'] == 4) {?>股份合作制企业<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['data']->value['type'] == 5) {?>私营企业<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['data']->value['type'] == 6) {?>个体户<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['data']->value['type'] == 7) {?>有限责任公司<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['data']->value['type'] == 8) {?>股份有限公司<?php }?>

							</p>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">注册资金</label>
						<div class="col-sm-10">
							<p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['data']->value['total'];?>
</p>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">联系人</label>
						<div class="col-sm-10">
							<p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['data']->value['person'];?>
</p>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">联系电话</label>
						<div class="col-sm-10">
							<p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['data']->value['phone'];?>
</p>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">联系地址</label>
						<div class="col-sm-10">
							<p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['data']->value['p_name'];
echo $_smarty_tpl->tpl_vars['data']->value['c_name'];
echo $_smarty_tpl->tpl_vars['data']->value['address'];?>
</p>
						</div>
					</div>
					<div class="form-group p_top" >
						<label class="col-sm-2 control-label">需求详情</label>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
								<p>
									<?php echo $_smarty_tpl->tpl_vars['data']->value['desc'];?>
</p>
						</div>
					</div>
				</form>
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