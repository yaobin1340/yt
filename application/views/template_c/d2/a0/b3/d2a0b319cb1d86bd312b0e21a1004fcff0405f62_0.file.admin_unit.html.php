<?php /* Smarty version 3.1.24, created on 2016-04-11 21:41:27
         compiled from "D:/amp/Apache/htdocs/yt/application/views/admin/admin_unit.html" */ ?>
<?php
/*%%SmartyHeaderCode:26940570ba98744b960_24140571%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2a0b319cb1d86bd312b0e21a1004fcff0405f62' => 
    array (
      0 => 'D:/amp/Apache/htdocs/yt/application/views/admin/admin_unit.html',
      1 => 1460381918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26940570ba98744b960_24140571',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_570ba987502665_42961103',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_570ba987502665_42961103')) {
function content_570ba987502665_42961103 ($_smarty_tpl) {
if (!is_callable('smarty_function_site_url')) require_once 'D:/amp/Apache/htdocs/yt/application/libraries/smarty/plugins/function.site_url.php';

$_smarty_tpl->properties['nocache_hash'] = '26940570ba98744b960_24140571';
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
        <li class="active">数据维护</li>
        <li class="active">计量单位</li>
      </ol>
    </div>
    <!-- 面包屑导航 end -->
  
    <!-- 公告 -->
    <div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>公告</strong> <span>裕腾集团XXX项目材料采购招标正式开始裕腾集团XXX项目材料采购招标正式开始裕腾集团XXX项目材料采购招标正式开始裕腾集团XXX项目材料采购招标正式开始裕腾集团XXX项目材料采购招标正式开始裕腾集团XXX项目材料采购招标正式开始</span>
    </div>
    <!-- 公告 end -->

    
<!---->
   <div class="form_card card z_depth-1">
      <h2 class="form_card_title">
        <i class="material-icons"></i> <span>计量单位</span>
      </h2>
      <div class="form_card_box">
      
		<form class="form-horizontal" action="<?php echo smarty_function_site_url(array('url'=>'admin/unit/select'),$_smarty_tpl);?>
">
			<div class="form-group">
				<div class="col-sm-1">
					<a href="<?php echo smarty_function_site_url(array('url'=>'admin/add_unit'),$_smarty_tpl);?>
" class="btn btn-primary btn-raised">新增</a>
				</div>				
				<div class="col-sm-6">
					<input type="text" class="form-control" name="sousuo" id="sousuo" >
				</div>
				<button type="submit" name="select_unit" class="btn btn-primary btn-raised" for="sousuo">搜索</button>
			</div>
		</form>
      
      
		<table class="table_card table table-striped table-hover">
      <thead>
        <tr>
          <th class=""></th>
          <th class="">标题</th>
					<th class="">推送时间</th>
          <th class="">操作</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="">
            <div class="check">
              <input type="checkbox" value="">
            </div>		
          </td>
          <td class="">吨</td>
          <td class="small">2016-03-10 15:39:33</td>
          <td class="">
						<button type="button" class="btn btn-sm btn-danger">删除</button>
					</td>
        </tr>
        <tr>
          <td class="">
            <div class="check">
              <input type="checkbox" value="">
            </div>		
          </td>
          <td class="">斤</td>
          <td class="small">2016-03-10 15:39:33</td>
          <td class="">
						<button type="button" class="btn btn-sm btn-danger">删除</button>
					</td>
        </tr>
        <tr>
          <td class="">
            <div class="check">
              <input type="checkbox" value="">
            </div>		
          </td>
          <td class="">公斤</td>
          <td class="small">2016-03-10 15:39:33</td>
          <td class="">
						<button type="button" class="btn btn-sm btn-danger">删除</button>
					</td>
        </tr>
				<tr>
          <td class="">
            <div class="check">
              <input type="checkbox" value="">
            </div>		
          </td>
          <td class="">桶</td>
          <td class="small">2016-03-10 15:39:33</td>
          <td class="">
						<button type="button" class="btn btn-sm btn-danger">删除</button>
					</td>
        </tr>
      </tbody>
		</table>
		<div class="btn-group" role="group">
					<button type="button" class="btn btn-default check">全选</button>
					<button type="button" class="btn btn-danger">删除</button>
				</div>   
    <nav class="page clearfix">
      <ul class="pagination pull-right">
        <li class="firstpage hidden-xs disabled"><a href="##"><span class="ink ink-dark">首页</span></a></li>
        <li class="previous disabled">
          <a href="##" class="ink ink-dark"><span><</span></a>
        </li>
        <li class="active"><a href="##" class="ink ink-dark"><span>1</span></a></li>
        <li><a href="##" class="ink ink-dark"><span>2</span></a></li>
        <li><a href="##" class="ink ink-dark"><span>3</span></a></li>
        <li class="next">
          <a href="##" class="ink ink-dark"><em class="ripple ripple-effect" style="width: 46px; height: 46px; top: 1px; left: 4.5px;"></em><span>></span></a>
        </li>
        <li class="firstpage hidden-xs"><a href="##"><span class="ink ink-dark">尾页</span></a></li>
      </ul>
    </nav>
      
      </div>
    </div>
<!---->

  <!---->
    
  </div>
<!-- 主体 end -->
  
</div>
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>