<?php /* Smarty version 3.1.24, created on 2016-04-23 20:04:39
         compiled from "D:/amp/Apache/htdocs/yt/application/views/admin/admin_project_info.html" */ ?>
<?php
/*%%SmartyHeaderCode:10647571b64d72a25b6_13217154%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4aa33a97dffb801d07e6b4af1eaf8d3306b25bd9' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/admin/admin_project_info.html',
      1 => 1461412980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10647571b64d72a25b6_13217154',
  'variables' => 
  array (
    'lastnews' => 0,
    'pro_name' => 0,
    'pro_address' => 0,
    'pro_total' => 0,
    'pro_manager' => 0,
    'pro_leader' => 0,
    'pro_leader_phone' => 0,
    'pro_contacter' => 0,
    'pro_contacter_phone' => 0,
    'pro_province' => 0,
    'pro_city' => 0,
    'detail' => 0,
    'part_id' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_571b64d73592b5_25186615',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571b64d73592b5_25186615')) {
function content_571b64d73592b5_25186615 ($_smarty_tpl) {
if (!is_callable('smarty_function_site_url')) require_once 'D:/amp/Apache/htdocs/yt/application/libraries/smarty/plugins/function.site_url.php';

$_smarty_tpl->properties['nocache_hash'] = '10647571b64d72a25b6_13217154';
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
		  <li class="active">项目</li>
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
        <i class="material-icons"></i> <span>项目信息</span>
      </h2>
      <div class="form_card_box">
      
        <form class="form-horizontal" style="margin-bottom:40px;">
					<div class="form-group">
						<div class="col-sm-2 col-sm-offset-1">
							<a href="#" class="btn btn-default disabled" role="button" style="color:#333">项目基本信息</a>
						</div>
					</div>				
					<div class="form-group">
						<label for="pro_name" class="col-sm-2 control-label">项目名称</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="pro_name" name="pro_name" value="<?php echo $_smarty_tpl->tpl_vars['pro_name']->value;?>
" disabled>
						</div>
					</div>
					<div class="form-group">
						<label for="pro_province" class="col-sm-2 control-label">项目地址</label>
						<div class="col-sm-3">
							<select class="form-control" id="pro_province" name="pro_province" disabled>
								<option value="00" >请选择</option>
							</select>
						</div>
						<div class="col-sm-3">
							<select class="form-control" id="pro_city" name="pro_city" disabled>
								<option value="00" >请选择</option>
							</select>
						</div>
						<div class="col-sm-3"><input type="text" class="form-control" id="pro_address"  value="<?php echo $_smarty_tpl->tpl_vars['pro_address']->value;?>
" name="pro_address" placeholder="路牌号" disabled></div>
					</div>
					<div class="form-group">
						<label for="pro_total" class="col-sm-2 control-label">项目金额</label>
						<div class="col-sm-9">
							<input type="text" class="form-control"  id="pro_total" name="pro_total" value="<?php echo $_smarty_tpl->tpl_vars['pro_total']->value;?>
" disabled>
						</div>
					</div>
					<div class="form-group">
						<label for="pro_manager" class="col-sm-2 control-label">项目经理</label>
						<div class="col-sm-9">
							<input type="text" class="form-control"id="pro_manager"   name="pro_manager" value="<?php echo $_smarty_tpl->tpl_vars['pro_manager']->value;?>
" disabled>
						</div>
					</div>
					<div class="form-group">
						<label for="pro_leader" class="col-sm-2 control-label">项目负责人</label>
						<div class="col-sm-9">
							<input type="text" class="form-control"  id="pro_leader" name="pro_leader" value="<?php echo $_smarty_tpl->tpl_vars['pro_leader']->value;?>
" disabled>
						</div>
					</div>
					<div class="form-group">
						<label for="pro_leader_phone" class="col-sm-2 control-label">负责人电话</label>
						<div class="col-sm-9">
							<input type="text" class="form-control"  id="pro_leader_phone"  name="pro_leader_phone"  value="<?php echo $_smarty_tpl->tpl_vars['pro_leader_phone']->value;?>
" disabled>
						</div>
					</div>
					<div class="form-group">
						<label for="pro_contacter" class="col-sm-2 control-label">联系人</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="pro_contacter"  name="pro_contacter"  value="<?php echo $_smarty_tpl->tpl_vars['pro_contacter']->value;?>
" disabled>
						</div>
					</div>
					<div class="form-group">
						<label for="pro_contacter_phone" class="col-sm-2 control-label">联系电话</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="pro_contacter_phone" name="pro_contacter_phone"   value="<?php echo $_smarty_tpl->tpl_vars['pro_contacter_phone']->value;?>
" disabled>
						</div>
					</div>
				</form>
				<form class="form-horizontal">
					<div class="form-group">
						<div class="col-sm-2 col-sm-offset-1">
							<a href="#" class="btn btn-default  disabled" role="button" style="color:#333">主要材料和数量</a>
						</div>
						<div class="col-sm-1">
						</div>
					</div>
					<div id="yy_block_um">
						<div class="form-group">
							<div class="col-sm-2"></div>
							<div class="col-sm-3">
								<select class="form-control" name="material[]" id="material" disabled>
									<option value="0">请选择</option>
								</select>
							</div>
							<div class="col-sm-3" ><input type="text" onkeyup="this.value=this.value.replace(/\D/g,'')" onblur = "this.value = this.value.replace(/\D+/g, '')" class="form-control border_rnone" name="num[]" placeholder="数字" disabled></div>
							<div class="col-sm-3" >
								<select class="form-control border_lnone" id="unit" name="unit[]" disabled>
									<option value="0">请选择</option>
								</select>
							</div>

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
?>


<?php echo '<script'; ?>
>

	$(function () {
		$.getJSON("<?php echo smarty_function_site_url(array('url'=>'ajax/getprovince'),$_smarty_tpl);?>
",function(data){
			html='<option value="00" selected = "selected">请选择</option>';
			if (data!=1){
				data.forEach(function (item) {
					html+='<option value="'+item.code+'">'+item.name+'</option>'
				})
			}else{
				alert('NG');
			}

			$("#pro_province").html(html);
			<?php if ($_smarty_tpl->tpl_vars['pro_province']->value != '00') {?>
			$("#pro_province").val('<?php echo $_smarty_tpl->tpl_vars['pro_province']->value;?>
');
			$.getJSON("<?php echo smarty_function_site_url(array('url'=>'ajax/getcity'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['pro_province']->value;?>
",function(data){
				html='<option value="00">请选择</option>';
				if (data!=1){
					data.forEach(function (item) {
						html+='<option value="'+item.code+'">'+item.name+'</option>'
					})
				}else{

				}
				$("#pro_city").html(html);
				$("#pro_city").val('<?php echo $_smarty_tpl->tpl_vars['pro_city']->value;?>
');
			});
			<?php }?>
		})

		$.getJSON("<?php echo smarty_function_site_url(array('url'=>'ajax/getunit'),$_smarty_tpl);?>
",function(data){
			html='<option value="0">请选择</option>'
			if (data!=1){
				data.forEach(function (item) {
					html+='<option value="'+item.id+'">'+item.name+'</option>'
				})
			}else{

			}
			$("#unit").html(html);
			$.getJSON("<?php echo smarty_function_site_url(array('url'=>'ajax/getmaterial'),$_smarty_tpl);?>
",function(data){
				html='<option value="0">请选择</option>'
				if (data!=1){
					data.forEach(function (item) {
						html+='<option value="'+item.id+'">'+item.name+'</option>'
					})
				}else{

				}
				$("#material").html(html);
				//这里进行明细的载人
				<?php if ($_smarty_tpl->tpl_vars['detail']->value != 1) {?>
				<?php
$_from = $_smarty_tpl->tpl_vars['detail']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['foo']->_loop = false;
$_smarty_tpl->tpl_vars['part_id'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['part_id']->value => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
$foreach_foo_Sav = $_smarty_tpl->tpl_vars['foo'];
?>

				<?php if ($_smarty_tpl->tpl_vars['part_id']->value != 0) {?>
				divbox=$("#yy_block_um").children().html();
				divbox="<div class='form-group'>"+divbox+"</div>";
				$('#yy_block_um').prepend(divbox);
				<?php }?>
				$("#yy_block_um").find("div").eq(0).find("[name='unit[]']").eq(0).val("<?php echo $_smarty_tpl->tpl_vars['foo']->value['unit'];?>
");
				$("#yy_block_um").find("div").eq(0).find("[name='num[]']").eq(0).val("<?php echo $_smarty_tpl->tpl_vars['foo']->value['num'];?>
");
				$("#yy_block_um").find("div").eq(0).find("[name='material[]']").eq(0).val("<?php echo $_smarty_tpl->tpl_vars['foo']->value['m_id'];?>
");

				<?php
$_smarty_tpl->tpl_vars['foo'] = $foreach_foo_Sav;
}
?>

				<?php }?>
			})
		});
	})
<?php echo '</script'; ?>
><?php }
}
?>