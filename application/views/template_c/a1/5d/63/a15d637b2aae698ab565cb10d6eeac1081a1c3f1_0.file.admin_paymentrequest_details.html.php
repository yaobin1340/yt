<?php /* Smarty version 3.1.24, created on 2016-04-21 19:55:29
         compiled from "D:/amp/Apache/htdocs/yt/application/views/admin/admin_paymentrequest_details.html" */ ?>
<?php
/*%%SmartyHeaderCode:8725718bfb1526092_37620711%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a15d637b2aae698ab565cb10d6eeac1081a1c3f1' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/admin/admin_paymentrequest_details.html',
      1 => 1461239695,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8725718bfb1526092_37620711',
  'variables' => 
  array (
    'lastnews' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5718bfb15dcd98_80932043',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5718bfb15dcd98_80932043')) {
function content_5718bfb15dcd98_80932043 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8725718bfb1526092_37620711';
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
<!---->
    <div class="form_card card z_depth-1">
      <h2 class="form_card_title">
        <i class="material-icons"></i> <span>合约执行</span>
      </h2>
      <div class="form_card_box">      

				<div class="col-md-6 col-sm-12">
					<form class="form-horizontal">

						<div class="form-group">
							<label class="col-sm-2 control-label">执行合约</label>
							<div class="col-sm-9">
								<p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['data']->value['con_title'];?>
</p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">合约编号</label>
							<div class="col-sm-9">
                                <p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['data']->value['num'];?>
</p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">供应商</label>
							<div class="col-sm-9">
                                <p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['data']->value['sup_name'];?>
</p>
							</div>
						</div>

						<div class="form-group">
							<label  class="col-sm-2 control-label">材料名称</label>
							<div class="col-sm-3">
                                <p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['data']->value['ex']['m_name'];?>
</p>

							</div>
							<label class="col-sm-3 control-label">进货时间</label>
							<div class="col-sm-3">
                                <p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['data']->value['ex']['date'];?>
</p>
							</div>
						</div>
						<div class="form-group">
							<label  class="col-sm-2 control-label">采购数量</label>
							<div class="col-sm-3">
                                <p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['data']->value['ex']['num'];?>
</p>
							</div>
							<label  class="col-sm-3 control-label">材料单价</label>
							<div class="col-sm-3">
                                <p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['data']->value['ex']['price'];?>
</p>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">项目进度说明</label>
							<div class="col-sm-9">
                                <?php echo $_smarty_tpl->tpl_vars['data']->value['ex']['desc'];?>

							</div>
						</div>

					</form>
				</div>
          <div class="col-md-5 col-sm-12 pull-right">
              <br/>
              <div class="form-group">
                  <div class="col-sm-3  control-label">
                      <img style="width: 300px" id="imgShow" <?php if ($_smarty_tpl->tpl_vars['data']->value['pic'] != '') {?> src="/uploadimages/<?php echo $_smarty_tpl->tpl_vars['data']->value['pic'];?>
" <?php }?>>

                  </div>
              </div>
          </div>
      </div>
    </div>
  <!---->
  <!---->

  <!---->
    
  </div>
<!-- 主体 end -->
  
</div>
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<?php echo '<script'; ?>
>


<?php echo '</script'; ?>
><?php }
}
?>