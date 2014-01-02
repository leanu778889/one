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
<script type="text/javascript" src="http://localhost/one/APP/App/Index/Tpl/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="http://localhost/one/APP/App/Index/Tpl/Public/js/login.js"></script>
<link href="http://localhost/one/APP/App/Index/Tpl/Public/css/style111(2).css" rel="stylesheet" type="text/css" />
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
	<div class="login_top">
    	登录
    </div>
	<div class="login_btm">
    <div style=" height:20px;"></div>
    	<dl>
        	<dt>类型：</dt>
            <dd><select>
            	<option>电视剧电影</option>
                <option>演员登录</option>
                <option>电视栏目</option>
                <option>活动演出</option>
                <option>大赛登录</option>
                <option>高岗代言</option>
                <option>话剧登录</option>
                <option>BOSS</option>
                <option>导演登录</option>
                <option>编剧登录</option>
                <option>广告植入</option>
            </select></dd>
        </dl>
    	<dl>
        	<dt>用户名：</dt>
            <dd><input type="text" /></dd>
        </dl>
        <dl>
        	<dt>密码：</dt>
            <dd><input type="text" /></dd>
        </dl>
        <dl>
        	<dt>验证码：</dt>
            <dd><input type="text" value=""  style="width:80px;" id="input1"/><input type="text" value="VABR" id="checkCode" class="code" style="width: 44px; background-color:#FFC;color:#666; margin-left:6px;" /><span style=" padding-top:10px; display:block;"><a href="#" onclick="createCode()" style=" margin-left:6px; margin-top:10px;">看不清楚</a></span> </dd>
        </dl>
        <button class="login_btn" id="Button1" onclick="validate();">登录</button>
        <div style="height:30px;"></div>
    </div>

</div>
</body>

</html>
