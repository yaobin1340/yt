<?php /* Smarty version 3.1.24, created on 2016-04-24 03:50:00
         compiled from "D:/amp/Apache/htdocs/yt/application/views/project/project_info.html" */ ?>
<?php
/*%%SmartyHeaderCode:5908571c42687e7307_97805126%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c4400924e33b11be291cd6fb25603de06cdbe25' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/project/project_info.html',
      1 => 1461469797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5908571c42687e7307_97805126',
  'variables' => 
  array (
    'data' => 0,
    'detail' => 0,
    'part_id' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_571c4268a29594_13120282',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571c4268a29594_13120282')) {
function content_571c4268a29594_13120282 ($_smarty_tpl) {
if (!is_callable('smarty_function_site_url')) require_once 'D:/amp/Apache/htdocs/yt/application/libraries/smarty/plugins/function.site_url.php';

$_smarty_tpl->properties['nocache_hash'] = '5908571c42687e7307_97805126';
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
		  <li class="active">首页</li>
		  <li class="active">基本信息</li>
      </ol>
    </div>
    <!-- 面包屑导航 end -->

<!---->
    <div class="form_card card z_depth-1">
      <h2 class="form_card_title">
        <i class="material-icons"></i> <span>信息完善</span>
      </h2>
      <div class="form_card_box">
      
        <form id="save_form" class="form-horizontal" style="margin-bottom:40px;" method="post" action="<?php echo smarty_function_site_url(array('url'=>'project/info/save_info'),$_smarty_tpl);?>
">
					<div class="form-group">
						<div class="col-sm-2 col-sm-offset-1">
							<a href="#" class="btn btn-default disabled" role="button" style="color:#333">项目基本信息</a>
						</div>
						<div class="col-sm-2">
							<button type="submit" class="btn btn-primary btn-raised" >导出数据</button>
						</div>
					</div>				
					<div class="form-group">
						<label for="pro_name" class="col-sm-2 control-label">项目名称</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="pro_name" name="pro_name" value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['name'];
}?>" >
						</div>
					</div>
					<div class="form-group">
						<label for="pro_province" class="col-sm-2 control-label">项目地址</label>
						<div class="col-sm-3">
							<select class="form-control" id="pro_province" name="pro_province">
								<option value="" >-请选择省份-</option>
							</select>
						</div>
						<div class="col-sm-3">
							<select class="form-control" id="pro_city" name="pro_city">
								<option value="">-请选择城市-</option>
							</select>
						</div>
						<div class="col-sm-3"><input type="text" class="form-control" id="pro_address" name="pro_address" placeholder="路牌号" value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['address'];
}?>"></div>
					</div>
					<div class="form-group">
						<label for="pro_total" class="col-sm-2 control-label">项目金额</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="pro_total" name="pro_total" value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['total'];
}?>">
						</div>
					</div>
					<div class="form-group">
						<label for="pro_manager" class="col-sm-2 control-label">项目经理</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="pro_manager"   name="pro_manager" value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['manager'];
}?>">
						</div>
					</div>
					<div class="form-group">
						<label for="pro_leader" class="col-sm-2 control-label">项目负责人</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="pro_leader" name="pro_leader" value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['leader'];
}?>">
						</div>
					</div>
					<div class="form-group">
						<label for="pro_leader_phone" class="col-sm-2 control-label">负责人电话</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="pro_leader_phone"  name="pro_leader_phone"  value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['leader_phone'];
}?>" >
						</div>
					</div>
					<div class="form-group">
						<label for="pro_contacter" class="col-sm-2 control-label">联系人</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="pro_contacter"  name="pro_contacter"  value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['contacter'];
}?>">
						</div>
					</div>
					<div class="form-group">
						<label for="pro_contacter_phone" class="col-sm-2 control-label">联系电话</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="pro_contacter_phone" name="pro_contacter_phone"   value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['contacter_phone'];
}?>">
						</div>
					</div>


					<div class="form-group">
						<div class="col-sm-2 col-sm-offset-1">
							<a href="#" class="btn btn-default  disabled" role="button" style="color:#333">主要材料和数量</a>
						</div>
						<div class="col-sm-1">
							<button class="btn btn-primary btn-raised"  type="button" id="addum">增加</button>
						</div>
					</div>

			<div id="yy_block_um">
				<div class="form-group">
					<div class="col-sm-2"></div>
					<div class="col-sm-3">
						<select class="form-control" name="material[]" id="material">
							<option value="">-类别-</option>
						</select>
					</div>
					<div class="col-sm-3" ><input type="text" onkeyup="this.value=this.value.replace(/\D/g,'')" onblur = "this.value = this.value.replace(/\D+/g, '')" class="form-control border_rnone" name="num[]" placeholder="数字"></div>
					<div class="col-sm-3" >
						<select class="form-control border_lnone" id="unit" name="unit[]">
							<option value="">-单位-</option>
						</select>
					</div>
					<div class="col-sm-1">
						<button class="btn btn-primary btn-raised"  type="button" name="delete_div[]">删除</button>
					</div>
				</div>
			</div>
					<div class="form-group" style="margin-right:0;">
						<div class="col-sm-9 col-sm-offset-2">
							<button type="button" id="save_btn" class="btn btn-primary btn-lg btn-raised btn-block ink" >完成</button>
						</div>
					</div>
				</form>
      </div>
    </div>
  <!---->
    
  </div>
<!-- 主体 end -->
  
</div>
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo '<script'; ?>
>

	$(function(){

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

			$("#pro_province").html(html);
			<?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
			$("#pro_province").val('<?php echo $_smarty_tpl->tpl_vars['data']->value["province_code"];?>
');
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
				$("#pro_city").html(html);
				$("#pro_city").val('<?php echo $_smarty_tpl->tpl_vars['data']->value["city_code"];?>
');
			});
			<?php }?>


			//$("#pro_province").val('00');
		})

		$.getJSON("<?php echo smarty_function_site_url(array('url'=>'ajax/getunit'),$_smarty_tpl);?>
",function(data){
			html='<option value="">-单位-</option>'
			if (data!=1){
				data.forEach(function (item) {
					html+='<option value="'+item.id+'">'+item.name+'</option>'
				})
			}else{

			}
			$("#unit").html(html);
			$.getJSON("<?php echo smarty_function_site_url(array('url'=>'ajax/getmaterial'),$_smarty_tpl);?>
",function(data){
				html='<option value="">-类别-</option>'
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
				$("#yy_block_um").find("button").on('click',function () {
					if($('#yy_block_um').children('div').length <= 1){
						alert('需至少保留一条‘材料与数量’信息');
					}
					else{
						$(this).parent().parent().remove();
					}
				})
			})
		});

		$("#pro_province").change(function(){
			$.getJSON("<?php echo smarty_function_site_url(array('url'=>'ajax/getcity'),$_smarty_tpl);?>
/"+$("#pro_province").val(),function(data){
				html='<option value="">-请选择城市-</option>';
				if (data!=1){
					data.forEach(function (item) {
						html+='<option value="'+item.code+'">'+item.name+'</option>'
					})
				}else{

				}
				$("#pro_city").html(html);
			});
		});

		$("#addum").click(function(){
			//解绑事件
			$("#yy_block_um").find("button").off('click');
			divbox=$("#yy_block_um").children().html();
			divbox="<div class='form-group'>"+divbox+"</div>"
			$('#yy_block_um').append(divbox);
			//绑定事件
			$("#yy_block_um").find("button").on('click',function () {
				if($('#yy_block_um').children('div').length <= 1){
					alert('需至少保留一条‘材料与数量’信息');
				}
				else{
					$(this).parent().parent().remove();
				}
			})
		});



        $("#save_btn").click(function () {
			if ($.trim($("#pro_name").val())==""){
				$("#pro_name").focus().parent().addClass("has-error").children(".help-block").html("项目名称不能为空");
				return false;
			}else {
				$("#pro_name").parent().removeClass("has-error").children(".help-block").html("");
			}
			if ($("#pro_province").val()==""){
				$("#pro_province").focus().parent().addClass("has-error").children(".help-block").html("省份必选");
				return false;
			}else {
				$("#pro_province").parent().removeClass("has-error").children(".help-block").html("");
			}
			if ($("#pro_city").val()=="00" || $("#pro_city").val()==""){
				$("#pro_city").val('');
				$("#pro_city").focus().parent().addClass("has-error").children(".help-block").html("城市必选");
				return false;
			}else {
				$("#pro_city").parent().removeClass("has-error").children(".help-block").html("");
			}
			if ($.trim($("#pro_address").val())==""){
				$("#pro_address").focus().parent().addClass("has-error").children(".help-block").html("地址不能为空");
				return false;
			}else {
				$("#pro_address").parent().removeClass("has-error").children(".help-block").html("");
			}
			if ($.trim($("#pro_total").val())==""){
				$("#pro_total").focus().parent().addClass("has-error").children(".help-block").html("金额不能为空");
				return false;
			}else {
				$("#pro_total").parent().removeClass("has-error").children(".help-block").html("");
			}
			if ($.trim($("#pro_manager").val())==""){
				$("#pro_manager").focus().parent().addClass("has-error").children(".help-block").html("项目经理不能为空");
				return false;
			}else {
				$("#pro_manager").parent().removeClass("has-error").children(".help-block").html("");
			}
			if ($.trim($("#pro_leader").val())==""){
				$("#pro_leader").focus().parent().addClass("has-error").children(".help-block").html("项目负责人不能为空");
				return false;
			}else {
				$("#pro_leader").parent().removeClass("has-error").children(".help-block").html("");
			}
			if ($.trim($("#pro_leader_phone").val())==""){
				$("#pro_leader_phone").focus().parent().addClass("has-error").children(".help-block").html("负责人电话不能为空");
				return false;
			}else {
				$("#pro_leader_phone").parent().removeClass("has-error").children(".help-block").html("");
			}
			if ($.trim($("#pro_contacter").val())==""){
				$("#pro_contacter").focus().parent().addClass("has-error").children(".help-block").html("联系人不能为空");
				return false;
			}else {
				$("#pro_contacter").parent().removeClass("has-error").children(".help-block").html("");
			}
			if ($.trim($("#pro_contacter_phone").val())==""){
				$("#pro_contacter_phone").focus().parent().addClass("has-error").children(".help-block").html("联系电话不能为空");
				return false;
			}else {
				$("#pro_contacter_phone").parent().removeClass("has-error").children(".help-block").html("");
			}
			var flag=0;
			$("[name='material[]']").each(function(){
				if ($(this).val()==''){
					//$(this).focus().parent().addClass("has-error").children(".help-block").html("单位必须选择");
					alert('类别必须选择');
					flag=1;
					return false;
				}
			});
			$("[name='num[]']").each(function(){
				if ($(this).val()==""){
					//$(this).focus().parent().addClass("has-error").children(".help-block").html("数字必须填写");
					alert('必须填写数字');
					flag=1;
					return false;
				}
			});
			$("[name='unit[]']").each(function(){
				if ($(this).val()==''){
					//$(this).focus().parent().addClass("has-error").children(".help-block").html("类别必须选择");
					alert('必须选择单位');
					flag=1;
					return false;
				}
			});
			if (flag !=1){
				$('#save_form').submit();
			}

		})
	})
<?php echo '</script'; ?>
><?php }
}
?>