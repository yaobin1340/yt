<?php /* Smarty version 3.1.24, created on 2016-04-23 20:14:28
         compiled from "D:/amp/Apache/htdocs/yt/application/views/admin/admin_supplier_info.html" */ ?>
<?php
/*%%SmartyHeaderCode:30571b67249e8ff7_51606454%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '242d8527e5aca0b5d25029149e960423ac78ac48' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/admin/admin_supplier_info.html',
      1 => 1461412979,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30571b67249e8ff7_51606454',
  'variables' => 
  array (
    'lastnews' => 0,
    'sup_name' => 0,
    'sup_total' => 0,
    'sup_allow' => 0,
    'sup_num' => 0,
    'sup_card' => 0,
    'sup_address' => 0,
    'sup_person' => 0,
    'sup_phone' => 0,
    'sup_desc' => 0,
    'pic' => 0,
    'sup_type' => 0,
    'sup_province' => 0,
    'sup_city' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_571b6724a9fcf3_93711924',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571b6724a9fcf3_93711924')) {
function content_571b6724a9fcf3_93711924 ($_smarty_tpl) {
if (!is_callable('smarty_function_site_url')) require_once 'D:/amp/Apache/htdocs/yt/application/libraries/smarty/plugins/function.site_url.php';

$_smarty_tpl->properties['nocache_hash'] = '30571b67249e8ff7_51606454';
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
		  <li class="active">供应商</li>
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
        <i class="material-icons"></i> <span>供应商信息</span>
      </h2>
      <div class="form_card_box">      
        <div class="col-md-4 col-sm-12 pull-right">
				</div>
				<div class="col-md-6 col-sm-12">
					<form class="form-horizontal">
						<div class="form-group">
							<label for="sup_name" class="col-sm-2 control-label">公司名称</label>
							<div class="col-sm-10">
								<input type="text" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['sup_name']->value;?>
" name="sup_name" id="sup_name"  disabled>
							</div>
						</div>
						<div class="form-group">
							<label for="sup_type"  class="col-sm-2 control-label">公司性质</label>
							<div class="col-sm-10">
								<select class="form-control" id="sup_type" name="sup_type" disabled>
									<option value="0">请选择</option>
									<option value="1">国有企业</option>
									<option value="2">集体企业</option>
									<option value="3">联营企业</option>
									<option value="4">股份合作制企业</option>
									<option value="5">私营企业</option>
									<option value="6">个体户</option>
									<option value="7">有限责任公司</option>
									<option value="8">股份有限公司</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="sup_total" class="col-sm-2 control-label">注册资金</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="sup_total" name="sup_total" value="<?php echo $_smarty_tpl->tpl_vars['sup_total']->value;?>
" disabled>
							</div>
						</div>
						<div class="form-group">
							<label for="sup_allow" class="col-sm-2 control-label">经营范围</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="sup_allow" name="sup_allow"  value="<?php echo $_smarty_tpl->tpl_vars['sup_allow']->value;?>
" disabled>
							</div>
						</div>
						<div class="form-group">
							<label for="sup_num" class="col-sm-2 control-label">营业执照</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="sup_num" name="sup_num"  value="<?php echo $_smarty_tpl->tpl_vars['sup_num']->value;?>
" placeholder="营业执照代码输入" disabled>
							</div>
						</div>
						<div class="form-group">
							<label for="sup_card" class="col-sm-2 control-label">单位账号</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="sup_card" name="sup_card"  value="<?php echo $_smarty_tpl->tpl_vars['sup_card']->value;?>
" disabled>
							</div>
						</div>
						<div class="form-group">
							<label for="sup_province" class="col-sm-2 control-label">公司地址</label>
							<div class="col-sm-3">
								<select class="form-control" id="sup_province" name="sup_province" disabled>
									<option value="00">请选择</option>
								</select>
							</div>
							<div class="col-sm-3">
								<select class="form-control" id="sup_city" name="sup_city" disabled>
									<option value="00">请选择</option>
								</select>
							</div>
							<div class="col-sm-3"><input type="text" class="form-control" id="sup_address" placeholder="路牌号"  name="sup_address"  value="<?php echo $_smarty_tpl->tpl_vars['sup_address']->value;?>
" disabled></div>
						</div>
						<div class="form-group">
							<label for="sup_person" class="col-sm-2 control-label">联系人</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="lianxiren"  id="sup_person" name="sup_person" value="<?php echo $_smarty_tpl->tpl_vars['sup_person']->value;?>
" disabled>
							</div>
						</div>
						<div class="form-group">
							<label for="sup_phone" class="col-sm-2 control-label">电话</label>
							<div class="col-sm-10">
								<input type="text" class="form-control"id="sup_phone" name="sup_phone" value="<?php echo $_smarty_tpl->tpl_vars['sup_phone']->value;?>
" disabled>
							</div>
						</div>
						<div class="form-group">
							<label for="sup_desc" class="col-sm-2 control-label">公司简介</label>
							<div class="col-sm-10">
								<textarea class="form-control" rows="8" id="sup_desc" name="sup_desc" disabled><?php echo $_smarty_tpl->tpl_vars['sup_desc']->value;?>
</textarea>
							</div>
						</div>
					</form>
				</div>
		  <div class="col-md-5 col-sm-12 pull-right">
			  <br/>
			  <div class="form-group">
				  <div class="col-sm-3  control-label">
					  <img style="width: 300px" id="imgShow" <?php if ($_smarty_tpl->tpl_vars['pic']->value != '') {?>  src="/uploadimages/<?php echo $_smarty_tpl->tpl_vars['pic']->value;?>
"<?php }?>>

				  </div>
			  </div>
		  </div>
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

	$(function(){
		$("#sup_type").val("<?php echo $_smarty_tpl->tpl_vars['sup_type']->value;?>
")
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

			$("#sup_province").html(html);
			<?php if ($_smarty_tpl->tpl_vars['sup_province']->value != '00') {?>
			$("#sup_province").val('<?php echo $_smarty_tpl->tpl_vars['sup_province']->value;?>
');
			$.getJSON("<?php echo smarty_function_site_url(array('url'=>'ajax/getcity'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['sup_province']->value;?>
",function(data){
				html='<option value="00">请选择</option>';
				if (data!=1){
					data.forEach(function (item) {
						html+='<option value="'+item.code+'">'+item.name+'</option>'
					})
				}else{

				}
				$("#sup_city").html(html);
				$("#sup_city").val('<?php echo $_smarty_tpl->tpl_vars['sup_city']->value;?>
');
			});
			<?php }?>
		})
	})
<?php echo '</script'; ?>
><?php }
}
?>