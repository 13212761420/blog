<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>往事随风个人博客模板</title>
<meta name="keywords" content="黑色模板,个人网站模板,个人博客模板,博客模板,css3,html5,网站模板" />
<meta name="description" content="这是一个有关黑色时间轴的css3 html5 网站模板" />
<link href="../../../Public/wap/css/styles.css" rel="stylesheet">
<link href="../../../Public/wap/css/animation.css" rel="stylesheet">
<!-- 返回顶部调用 begin -->
<script src="../../../Public/wap/js/silder.js"></script><!--获取当前页导航 高亮显示标题--> 
<script src="https://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>

</head>
<body>
<header>
  <div style="color:#f9f9f9;margin-left:20px;padding-top:20px;"><a href="/home/index/index"><h1>网站首页</h1></a></div>
</header>

<div style="color:#f9f9f9;margin:0 auto; width:500px;height:auto;margin-top:5%;">
  <div style="font-size:25px;margin-left:160px;margin-bottom:50px;">用户注册</div>
  <form action="/home/login/register" method="post">
  <div style="margin-bottom:50px;">
    <input type="text" name="name" value=""  size="55" style="height:30px; text-align:center;" placeholder="用户名">
  </div>
  <div style="margin-bottom:50px;">
    <input type="password" name="password" value="" size="55" style="height:30px; text-align:center;" placeholder="密码">
  </div>
  <div style="margin-bottom:50px;">
    <input type="password" name="dopassword" value="" size="55" style="height:30px; text-align:center;" placeholder="确认密码">
  </div>
 <div style="margin-bottom:50px;">
    <input type="text" name="email" value="" size="55" style="height:30px; text-align:center;" placeholder="邮箱">
  </div>
  <div >
    <input type="submit"  value="注&nbsp;&nbsp;&nbsp;册" style="width:415px;height:38px;font-size:17px;background-color: #976bb5;color:#f9f5f6;font-weight: bold;">
  </div>
  </form>
</div>
<!-- jQuery仿腾讯回顶部和建议 代码开始 -->
<div id="tbox"> <a id="togbook" href="/e/tool/gbook/?bid=1"></a> <a id="gotop" href="javascript:void(0)"></a> </div>
<!-- 代码结束 -->
</body>
</html>