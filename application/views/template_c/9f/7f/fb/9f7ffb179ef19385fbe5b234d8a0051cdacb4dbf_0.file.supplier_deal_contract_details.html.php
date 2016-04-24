<?php /* Smarty version 3.1.24, created on 2016-04-21 22:37:27
         compiled from "D:/amp/Apache/htdocs/yt/application/views/supplier/supplier_deal_contract_details.html" */ ?>
<?php
/*%%SmartyHeaderCode:261085718e5a79f7d41_78859484%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f7ffb179ef19385fbe5b234d8a0051cdacb4dbf' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/supplier/supplier_deal_contract_details.html',
      1 => 1461249315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '261085718e5a79f7d41_78859484',
  'variables' => 
  array (
    'lastnews' => 0,
    'data' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5718e5a7aaea41_97001762',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5718e5a7aaea41_97001762')) {
function content_5718e5a7aaea41_97001762 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '261085718e5a79f7d41_78859484';
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
        <i class="material-icons"></i> <span>合约查看</span>
      </h2>
      <div class="form_card_box">

				<div class="col-md-6 col-sm-12">
					<form class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-2 control-label">合约标题</label>
							<div class="col-sm-9">
								<p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['data']->value['main']['title'];?>
</p>

							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">合约编号</label>
							<div class="col-sm-9">
								<p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['data']->value['main']['num'];?>
</p>

							</div>
						</div>
						<div class="form-group">
							<label  class="col-sm-2 control-label">供应商</label>
							<div class="col-sm-9 ">
								<p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['data']->value['main']['pid_name'];?>
</p>
							</div>
						</div>

						<div id="line_details">
							<?php
$_from = $_smarty_tpl->tpl_vars['data']->value['line'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['foo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
$foreach_foo_Sav = $_smarty_tpl->tpl_vars['foo'];
?>
							<div class="form-group">
								<div class="col-sm-2"></div>
								<div class="col-sm-3">
									<p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['foo']->value['m_name'];?>
</p>
								</div>
								<div class="col-sm-3">	<p class="form-control-static">规格为:<?php echo $_smarty_tpl->tpl_vars['foo']->value['size'];?>
</p></div>
							</div>
							<div class="form-group">
								<div class="col-sm-2"></div>
								<div class="col-sm-3">
									<p class="form-control-static">单价:<?php echo $_smarty_tpl->tpl_vars['foo']->value['price'];?>
</p>
								</div>
								<div class="col-sm-3" style="padding-right:0;">
									<p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['foo']->value['num'];?>
 <?php echo $_smarty_tpl->tpl_vars['foo']->value['u_name'];?>
</p></div>


							</div>
							<?php
$_smarty_tpl->tpl_vars['foo'] = $foreach_foo_Sav;
}
?>


						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">付款方式</label>
							<div class="col-sm-9">
								<p class="form-control-static">

									<?php if ($_smarty_tpl->tpl_vars['data']->value['main']['pay_type'] == 1) {?>现金<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['data']->value['main']['pay_type'] == 2) {?>转账<?php }?>
								</p>

							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">总金额</label>
							<div class="col-sm-9">
								<p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['data']->value['main']['total'];?>
</p>

							</div>
						</div>
					

					</form>
				</div>
		  <div class="col-md-5 col-sm-12 pull-right">
			  <br/>
			  <div class="form-group">
				  <div class="col-sm-3  control-label">
					  <img style="width: 300px" id="imgShow" <?php if ($_smarty_tpl->tpl_vars['data']->value['main']['pic'] != '') {?> src="/uploadimages/<?php echo $_smarty_tpl->tpl_vars['data']->value['main']['pic'];?>
" <?php }?>>

				  </div>
			  </div>
		  </div>
      </div>
    </div>
  <!---->
    
  </div>
<!-- 主体 end -->
  
</div>
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
 src="/res/js/ajaxfileupload.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/res/js/bootstrap-typeahead.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/res/js/underscore-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>


<?php echo '</script'; ?>
><?php }
}
?>