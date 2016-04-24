<?php /* Smarty version 3.1.24, created on 2016-04-23 20:12:14
         compiled from "D:/amp/Apache/htdocs/yt/application/views/supplier/supplier_demand.html" */ ?>
<?php
/*%%SmartyHeaderCode:1885571b669eba4762_30056061%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf8a39e3b8f0c689fe52948750a0704c2ebab707' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/supplier/supplier_demand.html',
      1 => 1461413531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1885571b669eba4762_30056061',
  'variables' => 
  array (
    'lastnews' => 0,
    'data' => 0,
    'foo' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_571b669ec1e567_58366103',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571b669ec1e567_58366103')) {
function content_571b669ec1e567_58366103 ($_smarty_tpl) {
if (!is_callable('smarty_function_site_url')) require_once 'D:/amp/Apache/htdocs/yt/application/libraries/smarty/plugins/function.site_url.php';

$_smarty_tpl->properties['nocache_hash'] = '1885571b669eba4762_30056061';
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
          <li class="active">首页</li>
          <li class="active">需求信息</li>
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
     <form id="page_form" class="form-horizontal m_top" method="post" action="<?php echo smarty_function_site_url(array('url'=>'supplier/demand/list_task'),$_smarty_tpl);?>
">
			<div class="form-group">
                <div class="col-sm-2">
                    <select class="form-control" id="pro_province" name="pro_province">
                        <option value="00" >省份</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select class="form-control" id="pro_city" name="pro_city">
                        <option value="00">城市</option>
                    </select>
                </div>
				<div class="col-sm-2">
                    <select class="form-control" name="material" id="material">
                        <option value="0">材料</option>
                    </select>
				</div>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="title" name="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
" placeholder="其它关键字">
				</div>
				<button type="submit" class="btn btn-primary btn-raised">搜索</button>
			</div>
		</form> 
		<table class="table_card table table-striped table-hover">
      <thead>
        <tr>

          <th class="">标题</th>
          <th class="">推送时间</th>
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

                  <?php echo $_smarty_tpl->tpl_vars['foo']->value['pro_name'];?>
需要<?php echo $_smarty_tpl->tpl_vars['foo']->value['m_name'];
echo $_smarty_tpl->tpl_vars['foo']->value['num'];
echo $_smarty_tpl->tpl_vars['foo']->value['u_name'];?>
,规格为<?php echo $_smarty_tpl->tpl_vars['foo']->value['size'];?>

              </td>
          <td class="small"><?php echo $_smarty_tpl->tpl_vars['foo']->value['cdate'];?>
</td>
          <td class="bloc">
              <a href="<?php echo smarty_function_site_url(array('url'=>'supplier/demand/show_demand'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
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
>
    $('.pagination').find('a').click(function(){
        url = $(this).attr('href')
        $('#page_form').attr('action',url)
        $('#page_form').submit()
        return false;
    })

    $(function () {

        $.getJSON("<?php echo smarty_function_site_url(array('url'=>'ajax/getprovince'),$_smarty_tpl);?>
",function(data){
            html='<option value="00" selected = "selected">省份</option>';
            if (data!=1){
                data.forEach(function (item) {
                    html+='<option value="'+item.code+'">'+item.name+'</option>'
                })
            }else{
                alert('NG');
            }
            $("#pro_province").html(html);

            <?php if ($_smarty_tpl->tpl_vars['data']->value['pro_province'] != '00') {?>
            $("#pro_province").val("<?php echo $_smarty_tpl->tpl_vars['data']->value['pro_province'];?>
");
            $.getJSON("<?php echo smarty_function_site_url(array('url'=>'ajax/getcity'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['pro_province'];?>
",function(data){
                html='<option value="00">城市</option>';
                if (data!=1){
                    data.forEach(function (item) {
                        html+='<option value="'+item.code+'">'+item.name+'</option>'
                    })
                }else{

                }
                $("#pro_city").html(html);

                $("#pro_city").val("<?php echo $_smarty_tpl->tpl_vars['data']->value['pro_city'];?>
");
            });
            <?php }?>
        })

        $.getJSON("<?php echo smarty_function_site_url(array('url'=>'ajax/getmaterial'),$_smarty_tpl);?>
",function(data){
            html='<option value="0">材料</option>'
            if (data!=1){
                data.forEach(function (item) {
                    html+='<option value="'+item.id+'">'+item.name+'</option>'
                })
            }else{

            }
            $("#material").html(html);
            $("#material").val(<?php echo $_smarty_tpl->tpl_vars['data']->value['material'];?>
);
            //这里进行明细的载人

        })

        $("#pro_province").change(function(){
            $.getJSON("<?php echo smarty_function_site_url(array('url'=>'ajax/getcity'),$_smarty_tpl);?>
/"+$("#pro_province").val(),function(data){
                html='<option value="00">城市</option>';
                if (data!=1){
                    data.forEach(function (item) {
                        html+='<option value="'+item.code+'">'+item.name+'</option>'
                    })
                }else{

                }
                $("#pro_city").html(html);
            });
        });
    })
<?php echo '</script'; ?>
><?php }
}
?>