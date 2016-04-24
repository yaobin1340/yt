<?php /* Smarty version 3.1.24, created on 2016-04-23 20:04:34
         compiled from "D:/amp/Apache/htdocs/yt/application/views/admin/admin_user_info.html" */ ?>
<?php
/*%%SmartyHeaderCode:11286571b64d273baa6_38403631%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b22e11c917522c8ef9256a17016c4bcf23e8f7c5' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/admin/admin_user_info.html',
      1 => 1461412980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11286571b64d273baa6_38403631',
  'variables' => 
  array (
    'lastnews' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_571b64d27b58a6_72657094',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571b64d27b58a6_72657094')) {
function content_571b64d27b58a6_72657094 ($_smarty_tpl) {
if (!is_callable('smarty_function_site_url')) require_once 'D:/amp/Apache/htdocs/yt/application/libraries/smarty/plugins/function.site_url.php';

$_smarty_tpl->properties['nocache_hash'] = '11286571b64d273baa6_38403631';
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
          <li class="active">用户管理</li>
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
        <i class="material-icons"></i> <span>用户管理</span>
      </h2>
      <div class="form_card_box">    
				<form id="user_form" class="form-horizontal" method="post" action="<?php echo smarty_function_site_url(array('url'=>'admin/user/save_user'),$_smarty_tpl);?>
">
					<div class="form-group">			
						<div class="col-sm-5">

							<input type="text" required="required" class="form-control" name="name" id="name" >
						</div>
                        <div class="col-sm-2" >
                            <select name="sel" class="form-control">
                                <option value="2">供应商</option>
                                <option value="3">项目方</option>

                            </select>
                        </div>
                        <div class="col-sm-1">

						<button type="submit" id="add" class="btn btn-primary btn-raised" for="zengjia">增加</button>
                        </div>
                        <div class="col-lg-3" style="margin-top:5px;">（请使用正确的邮箱地址注册）</div>
					</div>
				</form>
      </div>
    </div>
<!---->

  <!---->
    
  </div>
<!-- 主体 end -->

</div>
<?php echo '<script'; ?>
 language="JavaScript">
    $("#user_form").submit(function () {
        if(!$("#name").val().match(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/)){
            alert("请使用正确的邮箱地址进行注册");
            $("#name").focus().parent().addClass("has-error").children(".help-block").html("请使用正确的邮箱地址进行注册");
            return false;
        } else {
            $("#name").parent().removeClass("has-error").children(".help-block").html("");
        }
    })
<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>