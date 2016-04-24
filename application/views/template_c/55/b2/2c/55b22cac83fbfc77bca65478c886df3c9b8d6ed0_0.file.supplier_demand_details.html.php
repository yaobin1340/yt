<?php /* Smarty version 3.1.24, created on 2016-04-18 10:11:23
         compiled from "D:/amp/Apache/htdocs/yt/application/views/supplier/supplier_demand_details.html" */ ?>
<?php
/*%%SmartyHeaderCode:46515714424b9a2ef6_85634018%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55b22cac83fbfc77bca65478c886df3c9b8d6ed0' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/supplier/supplier_demand_details.html',
      1 => 1460945376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46515714424b9a2ef6_85634018',
  'variables' => 
  array (
    'lastnews' => 0,
    'pro_name' => 0,
    'data' => 0,
    'p_name' => 0,
    'c_name' => 0,
    'address' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5714424ba3f2f7_29930618',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5714424ba3f2f7_29930618')) {
function content_5714424ba3f2f7_29930618 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '46515714424b9a2ef6_85634018';
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
        <i class="material-icons"></i> <span>需求信息</span>
      </h2>
      <div class="form_card_box">

				<div class="col-md-6 col-sm-12">
					<form class="form-horizontal" >
						<div class="form-group">
							<div class="col-sm-12 ">
								<H4><strong> <?php echo $_smarty_tpl->tpl_vars['pro_name']->value;?>
需要<?php echo $_smarty_tpl->tpl_vars['data']->value['m_name'];
echo $_smarty_tpl->tpl_vars['data']->value['num'];
echo $_smarty_tpl->tpl_vars['data']->value['u_name'];?>
</strong></H4>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">发布时间</label>
							<div class="col-sm-10">
								<p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['data']->value['cdate'];?>
</p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">有效期限</label>
							<div class="col-sm-10">
								<p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['data']->value['s_date'];?>
 至  <?php echo $_smarty_tpl->tpl_vars['data']->value['e_date'];?>
</p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">所属项目</label>
							<div class="col-sm-10">
								<p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['pro_name']->value;?>
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
								<p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['p_name']->value;
echo $_smarty_tpl->tpl_vars['c_name']->value;
echo $_smarty_tpl->tpl_vars['address']->value;?>
</p>
							</div>
						</div>
						<div class="form-group" >
							<label class="col-sm-2 control-label">需求详情</label>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<p>
									<?php echo $_smarty_tpl->tpl_vars['data']->value['desc'];?>
</p>
							</div>
						</div>
						<div class="form-group">
							<label for="imgShow" class="col-sm-2 control-label">图片上传</label>

							<div class="col-sm-4  control-label">
								<img style="width: 250px" id="imgShow" <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value['pic'];
$_tmp1=ob_get_clean();
if ($_tmp1 != '') {?>  src="/uploadimages/<?php echo $_smarty_tpl->tpl_vars['data']->value['pic'];?>
"<?php }?>>
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