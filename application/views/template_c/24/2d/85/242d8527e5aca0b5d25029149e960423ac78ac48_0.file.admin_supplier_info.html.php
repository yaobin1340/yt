<?php /* Smarty version 3.1.24, created on 2016-04-27 09:11:19
         compiled from "D:/amp/Apache/htdocs/yt/application/views/admin/admin_supplier_info.html" */ ?>
<?php
/*%%SmartyHeaderCode:28274572011b7252002_61825891%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '242d8527e5aca0b5d25029149e960423ac78ac48' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/admin/admin_supplier_info.html',
      1 => 1461717326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28274572011b7252002_61825891',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_572011b744dd01_78253245',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572011b744dd01_78253245')) {
function content_572011b744dd01_78253245 ($_smarty_tpl) {
if (!is_callable('smarty_function_site_url')) require_once 'D:/amp/Apache/htdocs/yt/application/libraries/smarty/plugins/function.site_url.php';

$_smarty_tpl->properties['nocache_hash'] = '28274572011b7252002_61825891';
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

    <!-- 返回栏 -->
    <div class="pagetool form_card card z_depth-1">
        <a href="javascript:history.go(-1)" class="goback btn btn-primary btn-raised ink">返回</a><span class="title">供应商</span>
    </div>
    <!-- 返回栏 end -->
    
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
								<input type="text" class="form-control"  value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['name'];
}?>" name="sup_name" id="sup_name"  disabled>
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
							<div class="col-sm-9">
								<input type="text" class="form-control" id="sup_total" name="sup_total" value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['total'];
}?>" disabled>
							</div>
							<label class="col-sm-1 control-label" style="font-weight:lighter; text-align:left;">万元</label>
						</div>
						<div class="form-group">
							<label for="sup_allow" class="col-sm-2 control-label">经营范围</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="sup_allow" name="sup_allow"  value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['allow'];
}?>" disabled>
							</div>
						</div>
						<div class="form-group">
							<label for="sup_num" class="col-sm-2 control-label">营业执照</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="sup_num" name="sup_num"  value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['num'];
}?>" placeholder="营业执照代码输入" disabled>
							</div>
						</div>
						<div class="form-group">
							<label for="sup_bank" class="col-sm-2 control-label">开户银行</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="sup_bank" name="sup_bank"  value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['bank'];
}?>" disabled>
							</div>
						</div>
						<div class="form-group">
							<label for="sup_card" class="col-sm-2 control-label">开户账号</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="sup_card" name="sup_card"  value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['card'];
}?>" disabled>
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
							<div class="col-sm-4">
								<select class="form-control" id="sup_area" name="sup_area" disabled>
									<option value="">-请选择区域-</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="sup_address" class="col-sm-2 control-label"></label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="sup_address" placeholder="路牌号" name="sup_address"  value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['address'];
}?>" disabled>
							</div>
						</div>
						<div class="form-group">
							<label for="sup_person" class="col-sm-2 control-label">联系人</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="lianxiren"  id="sup_person" name="sup_person" value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['person'];
}?>" disabled>
							</div>
						</div>
						<div class="form-group">
							<label for="sup_phone" class="col-sm-2 control-label">电话</label>
							<div class="col-sm-10">
								<input type="text" class="form-control"id="sup_phone" name="sup_phone" value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['phone'];
}?>" disabled>
							</div>
						</div>
						<div class="form-group">
							<label for="sup_desc" class="col-sm-2 control-label">公司简介</label>
							<div class="col-sm-10">
								<textarea class="form-control" rows="8" id="sup_desc" name="sup_desc" disabled><?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['desc'];
}?></textarea>
							</div>
						</div>
					</form>
				</div>
		  <div class="col-md-5 col-sm-12 pull-right">
			  <br/>
			  <div class="form-group">
				  <div class="col-sm-3  control-label">
					  <img style="width: 300px" id="imgShow"  <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>  src="/uploadimages/<?php echo $_smarty_tpl->tpl_vars['data']->value['pic'];?>
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
		$("#sup_type").val("<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['type'];
}?>")
		$.getJSON("<?php echo smarty_function_site_url(array('url'=>'ajax/getprovince'),$_smarty_tpl);?>
",function(data){
			html='<option value="" selected = "selected">-请选择省份-</option>';
			if (data!=1){
				data.forEach(function (item) {
					html+='<option value="'+item.code+'">'+item.name+'</option>'
				})
			}else{
				alert('NG');
			}

			$("#sup_province").html(html);
			<?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
			$("#sup_province").val("<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['province_code'];
}?>");
			$.getJSON("<?php echo smarty_function_site_url(array('url'=>'ajax/getcity'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['province_code'];?>
",function(data){
				html='<option value="">-请选择城市-</option>';
				if (data!=1){
					data.forEach(function (item) {
						html+='<option value="'+item.code+'">'+item.name+'</option>'
					})
				}else{

				}
				$("#sup_city").html(html);
				$("#sup_city").val("<?php echo $_smarty_tpl->tpl_vars['data']->value['city_code'];?>
");
			});
			$.getJSON("<?php echo smarty_function_site_url(array('url'=>'ajax/getarea'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['city_code'];?>
",function(data){
				html='<option value="">-请选择区域-</option>';
				if (data!=1){
					data.forEach(function (item) {
						html+='<option value="'+item.code+'">'+item.name+'</option>'
					})
				}else{

				}
				$("#sup_area").html(html);
				$("#sup_area").val("<?php echo $_smarty_tpl->tpl_vars['data']->value['area_code'];?>
");
			});
			<?php }?>
		})
	})
<?php echo '</script'; ?>
><?php }
}
?>