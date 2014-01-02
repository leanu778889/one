<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_WARNING",false);?><!DOCTYPE html>
<html>
<head>
<!-- Mobile Devices Support @begin -->
<meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
<meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
<meta content="no-cache" http-equiv="pragma">
<meta content="0" http-equiv="expires">
<meta content="telephone=no, address=no" name="format-detection">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<!-- Mobile Devices Support @end -->
<title>无标题文档</title>
<link href="http://localhost/one/APP/App/Index/Tpl/Public/css/style111(2).css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://localhost/one/APP/App/Index/Tpl/Public/js/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$(".nn").click(function(){
    $(".list_n").slideToggle("slow");

  });
  $(".vv").click(function(){
    $(".list_v").slideToggle("slow");
  });
});

</script>
<script type="text/javascript">
$(function(){
		$(".nn").click(function(){
			$(".nn").find("span").removeClass("ttag");
			$(this).addClass("ttag");
		});
		$(".vv").click(function(){
			$(".vv").find("span").removeClass("ttag");
			$(this).addClass("ttag");
		});
	});
</script>
</head>

<body>
<div class="bodyer">
	<div class="top">
    	<img src="Public/images/logo.png">
        <ul>
            <a href="<?php echo U('Index/Reg/index');?>">
            <li>
                注册
            </li>
            </a>
            <li>|</li>
            <a href="<?php echo U('Index/Login/index');?>">
            <li>
                登录
            </li>
            </a>
        </ul>
    </div>
    <div class="top_list">请选择类型注册或登录</div>
	<div class="nan nn">
    	<label>注册类型</label><span class="tag ttag"></span>
    </div>
    <div class="yy_list list_n">
    	<ul>
        	<a href="login.html"><li>电视剧电影注册</li></a>
            <a href="<?php echo U('Index/Reg/yy_register');?>"><li>演员注册</li></a>
            <a href="login.html"><li>电视栏目注册</li></a>
            <a href="login.html"><li>活动演出注册</li></a>
            <a href="login.html"><li>大赛注册</li></a>
            <a href="login.html"><li>广告代言注册</li></a>
            <a href="login.html"><li>话剧注册</li></a>
            <a href="login.html"><li>BOSS注册</li></a>
            <a href="login.html"><li>导演注册</li></a>
            <a href="login.html"><li>编剧注册</li></a>
            <a href="login.html"><li>广告植入注册</li></a>
        </ul>
    </div>
    <a href="login.html" style=" color:#333;">
    <div class="nv">
    	<label>登录类型</label><span class="ttag"></span>
    </div>
    </a>

</div>

</body>
</html>
