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
<title>演员信息注册</title>

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
    	<span>演员信息注册</span>
    </div>
    <form action="<?php echo U('Index/Reg/yy_register');?>" method="post">
	<div class="login_btm">
    <div style=" height:20px;"></div>

    	<dl>
        	<dt><font color="#FF0000";>*</font>演员类型：</dt>
            <dd>
                <select name="t_id">
                    <?php if(is_array($type)):?><?php  foreach($type as $v){ ?>
                        <option value="<?php echo $v['t_id'];?>"><?php echo $v['t_name'];?></option>
                    <?php }?><?php endif;?>
                </select>
            </dd>
        </dl>
    	<dl>
        	<dt><font color="#FF0000";>*</font>用户名：</dt>
            <dd><input name="p_name" type="text"  /></dd>
        </dl>
        <dl>
        	<dt><font color="#FF0000";>*</font>密码：</dt>
            <dd><input name="p_password"  type="password" /></dd>
        </dl>
        <dl>
        	<dt><font color="#FF0000";>*</font>确认密码：</dt>
            <dd><input name="p_password_d" type='password' /></dd>
        </dl>
        <dl>
        	<dt style=" line-height:36px;"><font color="#FF0000";>*</font>上传头像：</dt>
            <dd>
                <!-- <input type="file" style=" border:none; height:36px; margin-left:-5px; box-shadow:0 0 0 #FFF inset;" /> -->
                <link rel="stylesheet" type="text/css" href="http://localhost/one/hdphp/Extend/Org/Uploadify/uploadify.css" />
            <script type="text/javascript" src="http://localhost/one/hdphp/Extend/Org/Uploadify/jquery.uploadify.min.js"></script>
            <script type="text/javascript">
            var HDPHP_CONTROL         = "http://localhost/one/index.php/Index/Reg";
            var UPLOADIFY_URL    = "http://localhost/one/hdphp/Extend/Org/Uploadify/";
            var HDPHP_UPLOAD_THUMB    ="";
HDPHP_UPLOAD_TOTAL = 0</script>
            <script type="text/javascript" src="http://localhost/one/hdphp/Extend/Org/Uploadify/hd_uploadify.js"></script>
<script type="text/javascript">
    $(function() {
        hd_uploadify_options.removeTimeout  =0;
        hd_uploadify_options.fileSizeLimit  ="2MB";
        hd_uploadify_options.fileTypeExts   ="*.gif;*.jpg;*.png;*.jpeg";
        hd_uploadify_options.queueID        ="hd_uploadify_file_queue";
        hd_uploadify_options.showalt        =true;
        hd_uploadify_options.uploadLimit    =6;
        hd_uploadify_options.success_msg    ="正在上传...";//上传成功提示文字
        hd_uploadify_options.formData       ={image : "1", someOtherKey:1,hdsid:"0l986v6vmvbe28cd78or7qrbh2",upload_dir:"",hdphp_upload_thumb:""};
        hd_uploadify_options.thumb_width          =200;
        hd_uploadify_options.thumb_height          =150;
        hd_uploadify_options.uploadsSuccessNums = 0;

        $("#hd_uploadify_file").uploadify(hd_uploadify_options);
        });
</script>
<input type="file" name="up" id="hd_uploadify_file"/>
<div tool="hd_uploadify_file_msg uploadify_upload_msg">
</div>
<div id="hd_uploadify_file_queue"></div>
<div class="hd_uploadify_file_files uploadify_upload_files" input_file_id ="hd_uploadify_file">
    <ul></ul>
    <div style="clear:both;"></div>
</div>
            </dd>
        </dl>
    	<dl>
        	<dt><font color="#FF0000";>*</font>真实姓名：</dt>
            <dd><input type="text" /></dd>
        </dl>
        <dl>
        	<dt>艺名：</dt>
            <dd><input type="text" /></dd>
        </dl>

        <dl>
        	<dt>性　　别：</dt>
            <dd>
            	<ul>
                        <li style="width:20px; background:#FFF;"><input name="" type="radio" value="" style=" box-shadow:none;"></li>
                        <li>男</li>
                        <li style="width:20px; margin-left:15px;"><input name="" type="radio" value="" style=" box-shadow:none;"></li>
                        <li>女</li>
                    </ul>
            </dd>
        </dl>

        <dl>
        	<dt>出生日期：</dt>
            <dd><input type="text" /></dd>
        </dl>
        <dl>
        	<dt>籍　　贯：</dt>
            <dd><input type="text" /></dd>
        </dl>
        <dl>
        	<dt><font color="#FF0000";>*</font>身　　高：</dt>
            <dd><input type="text" /></dd>
        </dl>
        <dl>
        	<dt><font color="#FF0000";>*</font>体　　重：</dt>
            <dd><input type="text" /></dd>
        </dl>
        <dl>
        	<dt><font color="#FF0000";>*</font>特　　长：</dt>
            <dd><input type="text" /></dd>
        </dl>
        <dl>
        	<dt>爱　　好：</dt>
            <dd><input type="text" /></dd>
        </dl>
        <dl>
        	<dt><font color="#FF0000";>*</font>联系方式：</dt>
            <dd><input type="text" /></dd>
        </dl>
        <dl>
        	<dt>邮　　箱：</dt>
            <dd><input type="text" /></dd>
        </dl>
        <dl>
        	<dt><font color="#FF0000";>*</font>长年居住地：</dt>
            <dd><input type="text" /></dd>
        </dl>
        <dl>
        	<dt>工作所在地：</dt>
            <dd><input type="text" /></dd>
        </dl>
        <dl>
        	<dt>饰演年龄段：</dt>
            <dd><select>
            	<option>1岁-10岁</option>
                <option>10岁-18岁</option>
                <option>18岁-30岁</option>
                <option>30岁-50岁</option>
                <option>50岁-70岁</option>
                <option>70岁-90岁</option>
            </select></dd>
        </dl>
        <dl>
        	<dt>毕业院校：</dt>
            <dd><input type="text" style=" width:39%" /><input type="button" value="添加" style="width:50px; background-image:url(Public/images/bt_bj.png);color:#FFF; margin-left:10px;box-shadow:0 0 0 #FFF inset;" id="btn1"/></dd>
        </dl>
        <div id="hide"></div>
        <dl>
        	<dt><font color="#FF0000">*</font>签约类型：</dt>
            <dd><select>
            	<option>经纪公司</option>
                <option>工作室</option>
                <option>个人</option>

            </select></dd>
        </dl>
        <dl>
        	<dt>演绎经历：</dt>
            <dd>
            <input onclick="hide('box_x')" type="text" value="电视剧演员" id="am" class="select_box" style=" border-radius:0; box-shadow:0 0 0 #FFF inset;" />
			</dd>
            <div id="box_x" class="select_btm_box" style="display:none;">
 <span id="a1" onclick="pick('电视剧演员')" onMouseOver="bgcolor('a1')" onMouseOut="nocolor('a1')" class="cur box_demo1">电视剧演员</span>
 <span id="a2" onclick="pick('广告')" onMouseOver="bgcolor('a2')" onMouseOut="nocolor('a2')" class="cur box_demo2">广告</span>
 <span id="a3" onclick="pick('电影')" onMouseOver="bgcolor('a3')" onMouseOut="nocolor('a3')" class="cur box_demo3">电影</span>
 <span id="a4" onclick="pick('综艺节目')" onMouseOver="bgcolor('a4')" onMouseOut="nocolor('a4')" class="cur box_demo4">综艺节目</span>
 <span id="a5" onclick="pick('话剧')" onMouseOver="bgcolor('a5')" onMouseOut="nocolor('a5')" class="cur box_demo5">话剧</span>
 <span id="a6" onclick="pick('戏曲')" onMouseOver="bgcolor('a6')" onMouseOut="nocolor('a6')" class="cur box_demo6">戏曲</span>
 <span id="a7" onclick="pick('主持人')" onMouseOver="bgcolor('a7')" onMouseOut="nocolor('a7')" class="cur box_demo7">主持人</span>
 <span id="a8" onclick="pick('舞蹈演员')" onMouseOver="bgcolor('a8')" onMouseOut="nocolor('a8')" class="cur box_demo8">舞蹈演员</span>
 <span id="a9" onclick="pick('相声小品')" onMouseOver="bgcolor('a9')" onMouseOut="nocolor('a9')" class="cur box_demo9">相声小品</span>
 <span id="a10" onclick="pick('模特')" onMouseOver="bgcolor('a10')" onMouseOut="nocolor('a10')" class="cur box_demo10">模特</span>
 <span id="a11" onclick="pick('魔术杂技')" onMouseOver="bgcolor('a11')" onMouseOut="nocolor('a11')" class="cur box_demo11">魔术杂技</span>
 <span id="a12" onclick="pick('歌手')" onMouseOver="bgcolor('a12')" onMouseOut="nocolor('a12')" class="cur box_demo12">歌手</span>
  <span id="a13" onclick="pick('配音演员')" onMouseOver="bgcolor('a13')" onMouseOut="nocolor('a13')" class="cur box_demo13">配音演员</span>
 <span id="a14" onclick="pick('特性演员')" onMouseOver="bgcolor('a14')" onMouseOut="nocolor('a14')" class="cur box_demo14">特性演员</span>
</div>
        </dl>

        <dl>
        	<dt><font color="#FF0000">*</font>个人相册：</dt>
            <dd><input type="text" style=" width:39%" /><input type="button" value="添加" style="width:50px; background-image:url(Public/images/bt_bj.png);color:#FFF; margin-left:10px;box-shadow:0 0 0 #FFF inset;" id="btn2"/></dd>
        </dl>
       <div id="hide1"></div>
        <dl>
        	<dt>视频地址：</dt>
            <dd><input type="text" style=" width:39%" /><input type="button" value="添加" style="width:50px; background-image:url(Public/images/bt_bj.png);color:#FFF; margin-left:10px;box-shadow:0 0 0 #FFF inset;" id="btn3"/></dd>
        </dl>
        <div id="hide2"></div>
        <dl>
        	<dt>获得奖项：</dt>
            <dd><textarea name="" cols="" rows="" style=" width:39%"></textarea><input type="button" value="添加" style="width:50px; background-image:url(Public/images/bt_bj.png);color:#FFF; margin-left:10px;box-shadow:0 0 0 #FFF inset;" id="btn4"/></dd>
        </dl>
        <div id="hide3"></div>
        <dl>
        	<dt>受捧宣言：</dt>
            <dd><textarea name="" cols="" rows="">例如：人生如戏，戏如人生，戏演给别人看，人生活给自己看。</textarea></dd>
        </dl>
        <div style=" height:30px;"></div>
        <button class="login_btn">注册</button>
       <div style="height:30px;"></div>
    </div>
    </form>
</div>
<div style=" width:100%; height:100%; opacity:0.3;filter:alpha(opacity=50);position:fixed;top:0;left:0; background-color:#333; display:none;" class="demo"></div>
<!--1-->
<div class="Mask1 box_01">
    <div class="Mask1top">
        <dl>
            <dt>时间：</dt>
            <dd><input type="text"></dd>
        </dl>
        <dl>
            <dt>剧名：</dt>
            <dd><input type="text"></dd>
        </dl>
		<dl>
            <dt>扮演角色：</dt>
            <dd><input type="text"></dd>
        </dl>
		<dl>
            <dt>导演：</dt>
            <dd><input type="text"></dd>
        </dl>

	 </div>

    <div style=" border-top:1px solid #fff;">
        <button class="Maskbtn1">保存</button>
    </div>
</div>
<!--2-->
<div class="Mask1 box_02">
    <div class="Mask1top">
        <dl>
            <dt>时间：</dt>
            <dd><input type="text"></dd>
        </dl>
        <dl>
            <dt>广告名：</dt>
            <dd><input type="text"></dd>
        </dl>

	 </div>

    <div style=" border-top:1px solid #fff;">
        <button class="Maskbtn1">保存</button>
    </div>
</div>
<!--3-->
<div class="Mask1 box_03">
    <div class="Mask1top">
        <dl>
            <dt>时间：</dt>
            <dd><input type="text"></dd>
        </dl>
        <dl>
            <dt>剧名：</dt>
            <dd><input type="text"></dd>
        </dl>
		<dl>
            <dt>扮演角色：</dt>
            <dd><input type="text"></dd>
        </dl>
		<dl>
            <dt>导演：</dt>
            <dd><input type="text"></dd>
        </dl>

	 </div>

    <div style=" border-top:1px solid #fff;">
        <button class="Maskbtn1">保存</button>
    </div>
</div>
<!--4-->
<div class="Mask1 box_04">
    <div class="Mask1top">
        <dl>
            <dt>时间：</dt>
            <dd><input type="text"></dd>
        </dl>
        <dl>
            <dt>节目名称：</dt>
            <dd><input type="text"></dd>
        </dl>

	 </div>

    <div style=" border-top:1px solid #fff;">
        <button class="Maskbtn1">保存</button>
    </div>
</div>
<!--5-->
<div class="Mask1 box_05">
    <div class="Mask1top">
        <dl>
            <dt>时间：</dt>
            <dd><input type="text"></dd>
        </dl>
        <dl>
            <dt>剧名：</dt>
            <dd><input type="text"></dd>
        </dl>
		<dl>
            <dt>扮演角色：</dt>
            <dd><input type="text"></dd>
        </dl>
		<dl>
            <dt>导演：</dt>
            <dd><input type="text"></dd>
        </dl>

	 </div>

    <div style=" border-top:1px solid #fff;">
        <button class="Maskbtn1">保存</button>
    </div>
</div>
<!--6-->
<div class="Mask1 box_06">
    <div class="Mask1top">
        <dl>
            <dt>时间：</dt>
            <dd><input type="text"></dd>
        </dl>
        <dl>
            <dt>剧名：</dt>
            <dd><input type="text"></dd>
        </dl>
		<dl>
            <dt>扮演角色：</dt>
            <dd><input type="text"></dd>
        </dl>

	 </div>

    <div style=" border-top:1px solid #fff;">
        <button class="Maskbtn1">保存</button>
    </div>
</div>
<!--7-->
<div class="Mask1  box_07">
    <div class="Mask1top">
        <dl>
            <dt>时间：</dt>
            <dd><input type="text"></dd>
        </dl>
        <dl>
            <dt>主持栏目名：</dt>
            <dd><input type="text"></dd>
        </dl>

	 </div>

    <div style=" border-top:1px solid #fff;">
        <button class="Maskbtn1">保存</button>
    </div>
</div>
<!--8-->
<div class="Mask1 box_08">
    <div class="Mask1top">
        <dl>
            <dt>时间：</dt>
            <dd><input type="text"></dd>
        </dl>
        <dl>
            <dt>剧名：</dt>
            <dd><input type="text"></dd>
        </dl>

	 </div>

    <div style=" border-top:1px solid #fff;">
        <button class="Maskbtn1">保存</button>
    </div>
</div>
<!--9-->
<div class="Mask1 box_09">
    <div class="Mask1top">
        <dl>
            <dt>时间：</dt>
            <dd><input type="text"></dd>
        </dl>
        <dl>
            <dt>演出作品：</dt>
            <dd><input type="text"></dd>
        </dl>
		<dl>
            <dt>搭档名称：</dt>
            <dd><input type="text"></dd>
        </dl>

	 </div>

    <div style=" border-top:1px solid #fff;">
        <button class="Maskbtn1">保存</button>
    </div>
</div>
<!--10-->
<div class="Mask1 box_10">
    <div class="Mask1top">
        <dl>
            <dt>时间：</dt>
            <dd><input type="text"></dd>
        </dl>
        <dl>
            <dt>作品描述：</dt>
            <dd><input type="text"></dd>
        </dl>

	 </div>

    <div style=" border-top:1px solid #fff;">
        <button class="Maskbtn1">保存</button>
    </div>
</div>
<!--11-->
<div class="Mask1 box_11">
    <div class="Mask1top">
        <dl>
            <dt>时间：</dt>
            <dd><input type="text"></dd>
        </dl>
        <dl>
            <dt>作品：</dt>
            <dd><input type="text"></dd>
        </dl>

	 </div>

    <div style=" border-top:1px solid #fff;">
        <button class="Maskbtn1">保存</button>
    </div>
</div>
<!--12-->
<div class="Mask1 box_12">
    <div class="Mask1top">
        <dl>
            <dt>时间：</dt>
            <dd><input type="text"></dd>
        </dl>
        <dl>
            <dt>曲目：</dt>
            <dd><input type="text"></dd>
        </dl>

	 </div>

    <div style=" border-top:1px solid #fff;">
        <button class="Maskbtn1">保存</button>
    </div>
</div>
<!--13-->
<div class="Mask1 box_13">
    <div class="Mask1top">
        <dl>
            <dt>时间：</dt>
            <dd><input type="text"></dd>
        </dl>
        <dl>
            <dt>剧目名称：</dt>
            <dd><input type="text"></dd>
        </dl>
		<dl>
            <dt>配音角色：</dt>
            <dd><input type="text"></dd>
        </dl>

	 </div>

    <div style=" border-top:1px solid #fff;">
        <button class="Maskbtn1">保存</button>
    </div>
</div>
<!--14-->
<div class="Mask1 box_14">
    <div class="Mask1top">
        <dl>
            <dt>明星脸人名：</dt>
            <dd><input type="text"></dd>
        </dl>
        <dl>
            <dt>历史人物脸人名：</dt>
            <dd><input type="text"></dd>
        </dl>
		<dl>
            <dt>伟人脸人名：</dt>
            <dd><input type="text"></dd>
        </dl>
		<dl>
            <dt>特型特征：</dt>
            <dd><input type="text"></dd>
        </dl>

	 </div>

    <div style=" border-top:1px solid #fff;">
        <button class="Maskbtn1">保存</button>
    </div>
</div>
</body>
<script type="text/javascript" src="Public/js/jquery.min.js"></script>
<link href="css/style111(2).css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
$(document).ready(function(){
  $(".box_demo1").click(function(){
   $(".demo").show();
   $(".box_01").show();
  });

  $(".box_demo2").click(function(){
   $(".demo").show();
   $(".box_02").show();
  });
  $(".box_demo3").click(function(){
   $(".demo").show();
   $(".box_03").show();
  });
  $(".box_demo4").click(function(){
   $(".demo").show();
   $(".box_04").show();
  });
  $(".box_demo5").click(function(){
   $(".demo").show();
   $(".box_05").show();
  });
  $(".box_demo6").click(function(){
   $(".demo").show();
   $(".box_06").show();
  });
  $(".box_demo7").click(function(){
   $(".demo").show();
   $(".box_07").show();
  });
  $(".box_demo8").click(function(){
   $(".demo").show();
   $(".box_08").show();
  });
  $(".box_demo9").click(function(){
   $(".demo").show();
   $(".box_09").show();
  });
  $(".box_demo10").click(function(){
   $(".demo").show();
   $(".box_10").show();
  });
  $(".box_demo11").click(function(){
   $(".demo").show();
   $(".box_11").show();
  });
  $(".box_demo12").click(function(){
   $(".demo").show();
   $(".box_12").show();
  });
  $(".box_demo13").click(function(){
   $(".demo").show();
   $(".box_13").show();
  });
  $(".box_demo14").click(function(){
   $(".demo").show();
   $(".box_14").show();
  });

  $(".Maskbtn1").click(function(){
   $(".demo").hide();
   $(".Mask1").hide();
  });
    $("#btn1").click(function(){
    $("#hide").prepend("<dl class='appbtn1'>"+
      "<dt>"+"毕业院校："+"</dt>"+
      "<dd>"+"<input type='text' style='width:45%' />"+"</dd>"+
      "</dl>");
  });
  $("#btn2").click(function(){
    $("#hide1").prepend("<dl class='appbtn1'>"+
      "<dt>"+"<font color='#ff0000'>*</font>个人相册："+"</dt>"+
      "<dd>"+"<input type='text' style='width:39%' />"+"</dd>"+
      "</dl>");
  });
  $("#btn3").click(function(){
    $("#hide2").prepend("<dl class='appbtn1'>"+
      "<dt>"+"视频地址："+"</dt>"+
      "<dd>"+"<input type='text' style='width:39%' />"+"</dd>"+
      "</dl>");
  });
  $("#btn4").click(function(){
    $("#hide3").prepend("<dl class='appbtn1'>"+
      "<dt>"+"获得奖项："+"</dt>"+
      "<dd>"+"<textarea name='' cols='' rows='' style=' width:39%'></textarea>"+"</dd>"+
      "</dl>");
  });
 $(".appbtn1").click(function(){
    $("dl").remove();
  });
});


/*仿下拉列表*/
function $$$$$(_sId){
 return document.getElementById(_sId);
 }
function hide(_sId)
 {$$$$$(_sId).style.display = $$$$$(_sId).style.display == "none" ? "" : "none";}
function pick(v) {
 document.getElementById('am').value=v;
hide('box_x')
}
function bgcolor(id){
 document.getElementById(id).style.background="green";
 document.getElementById(id).style.color="#FFF";
}
function nocolor(id){
 document.getElementById(id).style.background="";
 document.getElementById(id).style.color="#666";
}
</script>
</html>
