<?php /* Smarty version 3.1.24, created on 2016-04-23 19:26:48
         compiled from "D:/amp/Apache/htdocs/yt/application/views/project/project_deal_execute.html" */ ?>
<?php
/*%%SmartyHeaderCode:25025571b5bf80f2d34_91193830%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77fdc7870224311fd96ddabdaa8685d24068c020' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/project/project_deal_execute.html',
      1 => 1461326671,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25025571b5bf80f2d34_91193830',
  'variables' => 
  array (
    'lastnews' => 0,
    'data' => 0,
    'foo' => 0,
    'cid' => 0,
    'pid' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_571b5bf81e6939_95124785',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571b5bf81e6939_95124785')) {
function content_571b5bf81e6939_95124785 ($_smarty_tpl) {
if (!is_callable('smarty_function_site_url')) require_once 'D:/amp/Apache/htdocs/yt/application/libraries/smarty/plugins/function.site_url.php';

$_smarty_tpl->properties['nocache_hash'] = '25025571b5bf80f2d34_91193830';
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
        <i class="material-icons"></i> <span>合约执行</span>
      </h2>
      <div class="form_card_box">      

				<div class="col-md-6 col-sm-12">
					<form id="save_form" class="form-horizontal" method="post" action="<?php echo smarty_function_site_url(array('url'=>'project/deal/save_execute'),$_smarty_tpl);?>
">
						<div class="form-group">
							<div class="col-sm-2 col-sm-offset-2">
								<button type="submit" class="btn btn-primary btn-raised" >导出数据</button>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">执行合约</label>
							<div class="col-sm-9">
								<p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['data']->value['ex_title'];?>
</p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">合约编号</label>
							<div class="col-sm-9">
                                <p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['data']->value['ex_num'];?>
</p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">供应商</label>
							<div class="col-sm-9">
                                <p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['data']->value['ex_sup_name'];?>
</p>
							</div>
						</div>

						<div class="form-group">
							<label for="material"  class="col-sm-2 control-label">材料名称</label>
							<div class="col-sm-3">
								<select class="form-control" name="material" id="material">
                                    <option value="">-类别-</option>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['data']->value['details'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['foo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
$foreach_foo_Sav = $_smarty_tpl->tpl_vars['foo'];
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['de_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value['de_name'];?>
</option>
                                    <?php
$_smarty_tpl->tpl_vars['foo'] = $foreach_foo_Sav;
}
?>
								</select>
							</div>
							<label for="date"  class="col-sm-3 control-label">进货时间</label>
							<div class="col-sm-3">
                                <input  class="form-control" id="date" name="date" type="text"
                                        style="background:#fff url(/res/js/My97DatePicker/skin/datePicker.gif) no-repeat right;"
                                        onfocus="WdatePicker({isShowClear:false,readOnly:true,dateFmt:'yyyy-MM-dd'})">
							</div>
						</div>
						<div class="form-group">
							<label for="num"  class="col-sm-2 control-label">采购数量</label>
							<div class="col-sm-3">
                                <input type="text" class="form-control" id="num" name="num" >
							</div>
							<label for="price"  class="col-sm-3 control-label">材料单价</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="price" id="price" >
							</div>
						</div>

						<div class="form-group">
							<label for="desc" class="col-sm-2 control-label">项目进度说明</label>
							<div class="col-sm-9">
								<textarea class="form-control" rows="8" name="desc" id="desc"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-2"></div>
							<div class="col-sm-9">
								<button type="button" id="save_btn" class="btn btn-primary btn-lg btn-raised btn-block ink">提交</button>
                                <input type="hidden" id="cid" name="cid" value="<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
">
                                <input type="hidden" id="pid" name="pid" value="<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
">
							</div>
						</div>
					</form>
				</div>
          <div class="col-md-5 col-sm-12 pull-right">
              <br/>
              <div class="form-group">
                  <div class="col-sm-3  control-label">
                      <img style="width: 300px" id="imgShow" <?php if ($_smarty_tpl->tpl_vars['data']->value['ex_pic'] != '') {?> src="/uploadimages/<?php echo $_smarty_tpl->tpl_vars['data']->value['ex_pic'];?>
" <?php }?>>

                  </div>
              </div>
          </div>
      </div>
    </div>
  <!---->
  <!---->
    <div class="form_card card z_depth-1">
      <div class="form_card_box">    
		<table class="table_card table table-striped table-hover">
      <thead>
        <tr>

          <th class="">标题</th>
					<th class="">发布时间</th>
          <th class="">操作</th>
        </tr>
      </thead>
      <tbody>

      <?php
$_from = $_smarty_tpl->tpl_vars['data']->value['items'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['foo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
$foreach_foo_Sav = $_smarty_tpl->tpl_vars['foo'];
?>
      <tr>

          <td class="">
              <a href="###" class="table_card_a">
                  <?php echo $_smarty_tpl->tpl_vars['foo']->value['con_title'];?>

              </a>
          </td>
          <td class="small"><?php echo $_smarty_tpl->tpl_vars['foo']->value['ex_cdate'];?>
</td>
          <td class="bloc">
              <?php if ($_smarty_tpl->tpl_vars['foo']->value['ex_status'] == 1) {?>
              <a href="<?php echo smarty_function_site_url(array('url'=>'project/deal/fukuang'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['foo']->value['ex_id'];?>
" class="btn btn-sm btn-danger">申请付款</a>
              <?php }?>

              <a href="<?php echo smarty_function_site_url(array('url'=>'project/deal/get_ex'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['foo']->value['ex_id'];?>
" class="btn btn-sm btn-primary">查看</a>
          </td>

      </tr>
      <?php
$_smarty_tpl->tpl_vars['foo'] = $foreach_foo_Sav;
}
?>

      </tbody>
		</table>
    

      
  <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

      
      </div>
    </div>
  <!---->
    
  </div>
<!-- 主体 end -->
  
</div>
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
 src="/res/js/My97DatePicker/WdatePicker.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>

    $(function () {
        $("#material").change(function () {
            var mid = $(this).val();
            switch (mid){
                case '':
                    $("#price").val('');
                    break;
                <?php
$_from = $_smarty_tpl->tpl_vars['data']->value['details'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['foo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
$foreach_foo_Sav = $_smarty_tpl->tpl_vars['foo'];
?>
                case "<?php echo $_smarty_tpl->tpl_vars['foo']->value['de_id'];?>
":
                    $("#price").val("<?php echo $_smarty_tpl->tpl_vars['foo']->value['de_price'];?>
");
                    break;
                <?php
$_smarty_tpl->tpl_vars['foo'] = $foreach_foo_Sav;
}
?>
                default:
                    $("#price").val('');
            }

        })

        $("#save_btn").click(function(){
            if ($.trim($("#material").val())==""){
                $("#material").focus().parent().addClass("has-error").children(".help-block").html("类别必选");
                return false;
            }else {
                $("#material").parent().removeClass("has-error").children(".help-block").html("");
            }
            if ($.trim($("#date").val())==""){
                $("#date").focus().parent().addClass("has-error").children(".help-block").html("进货时间不能为空");
                return false;
            }else {
                $("#date").parent().removeClass("has-error").children(".help-block").html("");
            }
            if ($.trim($("#num").val())==""){
                $("#num").focus().parent().addClass("has-error").children(".help-block").html("采购数量不能为空");
                return false;
            }else {
                $("#num").parent().removeClass("has-error").children(".help-block").html("");
            }
            if ($.trim($("#price").val())==""){
                $("#price").focus().parent().addClass("has-error").children(".help-block").html("材料单价不能为空");
                return false;
            }else {
                $("#price").parent().removeClass("has-error").children(".help-block").html("");
            }
            if ($.trim($("#desc").val())==""){
                $("#desc").focus().parent().addClass("has-error").children(".help-block").html("项目进度说明不能为空");
                return false;
            }else {
                $("#desc").parent().removeClass("has-error").children(".help-block").html("");
            }
            $("#save_form").submit();
        })
    })
<?php echo '</script'; ?>
><?php }
}
?>