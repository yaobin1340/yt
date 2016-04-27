<?php /* Smarty version 3.1.24, created on 2016-04-27 09:09:51
         compiled from "D:/amp/Apache/htdocs/yt/application/views/admin/admin_paymentrequest_details.html" */ ?>
<?php
/*%%SmartyHeaderCode:45645720115f668e00_00017997%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a15d637b2aae698ab565cb10d6eeac1081a1c3f1' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/admin/admin_paymentrequest_details.html',
      1 => 1461719382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45645720115f668e00_00017997',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5720115f6f1982_22736605',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5720115f6f1982_22736605')) {
function content_5720115f6f1982_22736605 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '45645720115f668e00_00017997';
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
		  <li class="active">申请付款</li>
      </ol>
    </div>
    <!-- 面包屑导航 end -->
  
    <!-- 返回栏 -->
    <div class="pagetool form_card card z_depth-1">
        <a href="javascript:history.go(-1)" class="goback btn btn-primary btn-raised ink">返回</a><span class="title">申请付款</span>
    </div>
    <!-- 返回栏 end -->
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
							<div class="col-sm-2">
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
                                <p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['data']->value['ex']['num'];
echo $_smarty_tpl->tpl_vars['data']->value['ex']['u_name'];?>
</p>
							</div>
							<label  class="col-sm-2 control-label">材料单价</label>
							<div class="col-sm-2">
                                <p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['data']->value['ex']['price'];?>
元</p>
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