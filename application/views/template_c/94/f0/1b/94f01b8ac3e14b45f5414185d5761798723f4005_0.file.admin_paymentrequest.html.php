<?php /* Smarty version 3.1.24, created on 2016-04-23 19:58:28
         compiled from "D:/amp/Apache/htdocs/yt/application/views/admin/admin_paymentrequest.html" */ ?>
<?php
/*%%SmartyHeaderCode:10738571b6364ae8378_83936373%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94f01b8ac3e14b45f5414185d5761798723f4005' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/admin/admin_paymentrequest.html',
      1 => 1461412705,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10738571b6364ae8378_83936373',
  'variables' => 
  array (
    'lastnews' => 0,
    'data' => 0,
    'foo' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_571b6364b62179_49619455',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571b6364b62179_49619455')) {
function content_571b6364b62179_49619455 ($_smarty_tpl) {
if (!is_callable('smarty_function_site_url')) require_once 'D:/amp/Apache/htdocs/yt/application/libraries/smarty/plugins/function.site_url.php';

$_smarty_tpl->properties['nocache_hash'] = '10738571b6364ae8378_83936373';
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
        <i class="material-icons"></i> <span>申请支付</span>
      </h2>
      <div class="form_card_box">
      
		<form id="page_form" class="form-horizontal" method="post" action="<?php echo smarty_function_site_url(array('url'=>'admin/payment/list_task'),$_smarty_tpl);?>
">
			<div class="form-group">				
				<div class="col-sm-7">
					<input type="text" class="form-control" id="title" name="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
">
				</div>

			</div>
            <div class="form-group">
                <div class="col-sm-4">
                    <select class="form-control" id="pro_name" name="pro_name" >
                        <option value="">-全部-</option>

                    </select>
                </div>
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-primary btn-raised" for="sousuo">搜索</button>
                </div>
                <div class="col-lg-3" style="margin-top:5px;">（搜索可以按合约或者项目）</div>
            </div>
        </form>
      
      
		<table class="table_card table table-striped table-hover">
      <thead>
        <tr>

          <th class="">合约标题</th>
          <th class="">所属项目</th>
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
              <a href="<?php echo smarty_function_site_url(array('url'=>'admin/payment/get_ex'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['foo']->value['ex_id'];?>
" class="btn btn-sm btn-default"><?php echo $_smarty_tpl->tpl_vars['foo']->value['con_title'];?>
</a>
          </td>
          <td class="small"><?php echo $_smarty_tpl->tpl_vars['foo']->value['pro_name'];?>
</td>
          <td class="bloc">

              <a href="<?php echo smarty_function_site_url(array('url'=>'admin/payment/QRfukuang'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['foo']->value['ex_id'];?>
" class="btn btn-sm btn-info">确认申请</a>
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

  <!---->
    
  </div>
<!-- 主体 end -->
  
</div>
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo '<script'; ?>
>



    $(function () {
        $('.pagination').find('a').click(function(){
            url = $(this).attr('href')
            $('#page_form').attr('action',url)
            $('#page_form').submit()
            return false;
        })

        $.getJSON("<?php echo smarty_function_site_url(array('url'=>'ajax/get_pro'),$_smarty_tpl);?>
",function(data){
            html='<option value="" selected = "selected">-全部-</option>';
            if (data!=1){
                data.forEach(function (item) {
                    html+='<option value="'+item.id+'">'+item.name+'</option>'
                })
            }else{
                alert('NG');
            }

            $("#pro_name").html(html);
            $("#pro_name").val("<?php echo $_smarty_tpl->tpl_vars['data']->value['pro_name'];?>
");
        })

    })
<?php echo '</script'; ?>
><?php }
}
?>