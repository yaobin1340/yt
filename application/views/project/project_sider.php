<!-- 侧栏 -->
  <div id="sider">
    <div id="sider_bg"></div>
    <a class="sider_expand" data-toggle="tooltip" data-placement="right" title="扩展/折叠侧栏"><i class="material-icons">&#xe5dc;</i><span>折叠侧栏</span></a>



<!-- 项目方侧栏 -->
  <div class="sider_topbox">
    <div class="sider_topbox_btngroup">
      <a href="{{site_url url='project/info'}}" type="button" class="btn btn-default " data-toggle="tooltip" data-placement="right" title="基本信息"><i class="material-icons">&#xe85d;</i><span>基本信息</span></a>
    </div>
  </div>


  <div id="sider_scrollbox">

    <div class="sider_group on">
      <div class="sider_group_list list-group">
        <a href="{{site_url url='project/index'}}" class="list-group-item {{if $type==1}}active{{/if}}" data-toggle="tooltip" data-placement="right" title="项目方界面首页"><i class="material-icons">&#xe88a;</i><span>首页</span></a>
      </div>
    </div>
  
    <div class="sider_group on">
      <a class="sider_group_title" data-toggle="tooltip" data-placement="right" title="项目"><i class="expand material-icons">&#xe5cf;</i><span>项目</span></a>
      <div class="sider_group_list list-group">
        <a href="{{site_url url='project/supplier'}}" class="list-group-item {{if $type==2}}active{{/if}}" data-toggle="tooltip" data-placement="right" title="供应商查询"><i class="material-icons">&#xe558;</i><span>供应商查询</span></a>
        <a href="{{site_url url='project/demand'}}" class="list-group-item {{if $type==3}}active{{/if}}" data-toggle="tooltip" data-placement="right" title="需求信息管理"><i class="material-icons">&#xe0c6;</i><span>需求信息管理</span></a>
        <a href="{{site_url url='project/deal'}}" class="list-group-item {{if $type==4}}active{{/if}}" data-toggle="tooltip" data-placement="right" title="合约管理"><i class="material-icons">&#xe90e;</i><span>合约管理</span></a>
        <a href="{{site_url url='project/notice'}}" class="list-group-item {{if $type==5}}active{{/if}}" data-toggle="tooltip" data-placement="right" title="系统公告"><i class="material-icons">&#xe85a;</i><span>系统公告</span></a>
      </div>
    </div>
    <div class="sider_group on">
      <a class="sider_group_title" data-toggle="tooltip" data-placement="right" title="系统功能"><i class="expand material-icons">&#xe5cf;</i><span>系统功能</span></a>
      <div class="sider_group_list list-group">
        <a href="{{site_url url='password'}}" class="list-group-item " data-toggle="tooltip" data-placement="right" title="密码修改"><i class="material-icons">&#xe88d;</i><span>密码修改</span></a>
      </div>
    </div>
  </div>
<!-- 项目方侧栏 end -->


  
  </div>
<!-- 侧栏 end -->