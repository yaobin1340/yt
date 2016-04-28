





//调整页面

function adjust(obj){
  
  //$("#sider_scrollbox").height( $(window).height() - $("#sider_scrollbox").offset().top );
  
  
  //保证Footer下面不漏白
  $("body").css( "min-height", $(window).height() );
  
}

$(function(){
  window.onresize = adjust;
  adjust();
  $('[data-toggle="tooltip"]').tooltip();
});



//顶栏相关
//全屏按钮

$("#header").on( "click", "#header_btn_fullscreen", function(){
  launchFullscreen( document.documentElement );
});

var isfullscreen = false;
try{
  document.addEventListener("fullscreenchange", function () {
  isfullscreen = (document.fullscreen)? true : false;
    if(isfullscreen) {
      $("#header_btn_fullscreen .material-icons").html("&#xe5d1;");
    } else {
      $("#header_btn_fullscreen .material-icons").html("&#xe5d0;");
    }
  }, false);
  document.addEventListener("mozfullscreenchange", function () { 
  isfullscreen = (document.mozFullScreen)? true : false;
    if(isfullscreen) {
      $("#header_btn_fullscreen .material-icons").html("&#xe5d1;");
    } else {
      $("#header_btn_fullscreen .material-icons").html("&#xe5d0;");
    }
  }, false);
  document.addEventListener("webkitfullscreenchange", function () { isfullscreen = (document.webkitIsFullScreen)? true : false;
    if(isfullscreen) {
      $("#header_btn_fullscreen .material-icons").html("&#xe5d1;");
    } else {
      $("#header_btn_fullscreen .material-icons").html("&#xe5d0;");
    }
  }, false);
  document.addEventListener("msfullscreenchange", function () { 
  isfullscreen = (document.msFullscreenElement)? true : false;
    if(isfullscreen) {
      $("#header_btn_fullscreen .material-icons").html("&#xe5d1;");
    } else {
      $("#header_btn_fullscreen .material-icons").html("&#xe5d0;");
    }
  }, false);
} catch (e) {
} 

// Launch full screen
function launchFullscreen(element) {
  if( isfullscreen ) {
    if (document.exitFullscreen) { 
    document.exitFullscreen(); 
    } 
    else if (document.mozCancelFullScreen) { 
    document.mozCancelFullScreen(); 
    } 
    else if (document.webkitCancelFullScreen) { 
    document.webkitCancelFullScreen(); 
    } 
    else if (document.msExitFullscreen) { 
    document.msExitFullscreen(); 
    }
    isfullscreen = true;
  } else {
    if(element.requestFullscreen) {
      element.requestFullscreen();
    } else if(element.mozRequestFullScreen) {
      element.mozRequestFullScreen();
    } else if(element.webkitRequestFullscreen) {
      element.webkitRequestFullscreen();
    } else if(element.msRequestFullscreen) {
      element.msRequestFullscreen();
    }
    isfullscreen = false;
  } 
}

//锁定顶栏
$("#header").on( "click", "#header_btn_fixed", function(){
  $("body").toggleClass( "fixed_header" );
});

//返回顶部

$(window).scroll(function(){
	if( $(document).scrollTop() > 100 ) {
		$("#scroll_to_top").addClass("active");
	} else {
		$("#scroll_to_top").removeClass("active");
	}
});

$("#scroll_to_top").click( function() {
  $("html, body").animate( {scrollTop: 0}, "slow" );
  event.preventDefault();
});



//侧栏相关

//侧栏折叠成小尺寸
$("#sider").on( "click", ".sider_expand", function(){
  $( "#wrap" ).toggleClass( "smallsider" );
});

//菜单组的展开折叠

$(".sider_group").on( "click", ".sider_group_title", function(){
  $(this).parent( ".sider_group" ).toggleClass( "on" );
});






//水波纹
//$(".ink").click(function(e) {
$("body").on("click", ".ink", function(e) {
	
  $(".ripple").remove();
 
  var posX = $(this).offset().left,
      posY = $(this).offset().top,
      buttonWidth = $(this).width(),
      buttonHeight = $(this).height();
 
  var inkWidth = Math.max($(this).outerWidth(),$(this).outerHeight());
 
  $(this).prepend("<em class='ripple'></em>");
  var x = e.pageX - posX - inkWidth / 2;
  var y = e.pageY - posY - inkWidth / 2;
 
  $(".ripple").css({
    width: inkWidth,
    height: inkWidth,
    top: y + 'px',
    left: x + 'px'
  }).addClass("ripple-effect");
   
});


//载入指示器
$("#loader").css({"-webkit-animation":"loader_hide .5s 1 both",
                  "animation":"loader_hide .5s 1 both"});

