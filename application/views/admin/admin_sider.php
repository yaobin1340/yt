<!-- 侧栏 -->
  <div id="sider">
    <div id="sider_bg"></div>
    <a class="sider_expand" data-toggle="tooltip" data-placement="right" title="扩展/折叠侧栏"><i class="material-icons">&#xe5dc;</i><span>折叠侧栏</span></a>



<!-- 管理员侧栏 -->
  <div id="sider_scrollbox">
  
    <div class="sider_group on">
      <div class="sider_group_list list-group">
        <a href="{{site_url url='admin/index'}}" class="list-group-item {{if $type==1}}active{{/if}}" data-toggle="tooltip" data-placement="right" title="管理员界面首页"><i class="material-icons">&#xe88a;</i><span>首页</span></a>
      </div>
    </div>
  
    <div class="sider_group on">
      <a class="sider_group_title" data-toggle="tooltip" data-placement="right" title="日常管理"><i class="expand material-icons">&#xe5cf;</i><span>日常管理</span></a>
      <div class="sider_group_list list-group">
        <a href="{{site_url url='admin/supplier'}}" class="list-group-item {{if $type==2}}active{{/if}}" data-toggle="tooltip" data-placement="right" title="供应商"><i class="material-icons">&#xe558;</i><span>供应商</span></a>
        <a href="{{site_url url='admin/project'}}" class="list-group-item {{if $type==3}}active{{/if}}" data-toggle="tooltip" data-placement="right" title="项目"><i class="material-icons">&#xe53f;</i><span>项目</span></a>
        <a href="{{site_url url='admin/payment'}}" class="list-group-item {{if $type==4}}active{{/if}}" data-toggle="tooltip" data-placement="right" title="申请付款"><i class="material-icons">&#xe263;</i><span>申请付款</span></a>
        <a href="{{site_url url='admin/schedule'}}" class="list-group-item {{if $type==5}}active{{/if}}" data-toggle="tooltip" data-placement="right" title="数据导出"><i class="material-icons">&#xe85c;</i><span>数据导出</span></a>
      </div>
    </div>
    
    <div class="sider_group on">
      <a class="sider_group_title" data-toggle="tooltip" data-placement="right" title="合约管理"><i class="expand material-icons">&#xe5cf;</i><span>合约管理</span></a>
      <div class="sider_group_list list-group">
        <a href="{{site_url url='admin/deal'}}" class="list-group-item {{if $type==6}}active{{/if}}" data-toggle="tooltip" data-placement="right" title="合约管理"><i class="material-icons">&#xe90e;</i><span>合约管理</span></a>
        <a href="{{site_url url='admin/deal_model'}}" class="list-group-item {{if $type==7}}active{{/if}}" data-toggle="tooltip" data-placement="right" title="合约范本"><i class="material-icons">&#xe873;</i><span>合约范本</span></a>
      </div>
    </div>
    
    <div class="sider_group on">
      <a class="sider_group_title" data-toggle="tooltip" data-placement="right" title="信息推送"><i class="expand material-icons">&#xe5cf;</i><span>信息推送</span></a>
      <div class="sider_group_list list-group">
        <a href="{{site_url url='admin/push'}}" class="list-group-item {{if $type==8}}active{{/if}}" data-toggle="tooltip" data-placement="right" title="公告信息推送"><i class="material-icons">&#xe0c9;</i><span>公告信息推送</span></a>
      </div>
    </div>
    
    <div class="sider_group on">
      <a class="sider_group_title" data-toggle="tooltip" data-placement="right" title="数据维护"><i class="expand material-icons">&#xe5cf;</i><span>数据维护</span></a>
      <div class="sider_group_list list-group">
        <a href="{{site_url url='admin/unit'}}" class="list-group-item {{if $type==9}}active{{/if}}" data-toggle="tooltip" data-placement="right" title="计量单位"><i class="material-icons">&#xe3de;</i><span>计量单位</span></a>
        <a href="{{site_url url='admin/material'}}" class="list-group-item {{if $type==10}}active{{/if}}" data-toggle="tooltip" data-placement="right" title="材料类别"><i class="material-icons">&#xe918;</i><span>材料类别</span></a>
      </div>
    </div>
    
    <div class="sider_group on">
      <a class="sider_group_title" data-toggle="tooltip" data-placement="right" title="系统功能"><i class="expand material-icons">&#xe5cf;</i><span>系统功能</span></a>
      <div class="sider_group_list list-group">
        <a href="{{site_url url='admin/user'}}" class="list-group-item {{if $type==11}}active{{/if}}" data-toggle="tooltip" data-placement="right" title="用户管理"><i class="material-icons">&#xe7fb;</i><span>用户管理</span></a>
        <a href="{{site_url url='password'}}" class="list-group-item " data-toggle="tooltip" data-placement="right" title="密码修改"><i class="material-icons">&#xe88d;</i><span>密码修改</span></a>
      </div>
    </div>
  </div>
<!-- 管理员侧栏 end -->


  
  </div>
<!-- 侧栏 end -->