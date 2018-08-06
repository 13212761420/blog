<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>往事随风个人博客模板</title>
<meta name="keywords" content="黑色模板,个人网站模板,个人博客模板,博客模板,css3,html5,网站模板" />
<meta name="description" content="这是一个有关黑色时间轴的css3 html5 网站模板" />
<link href="/Public/wap/css/styles.css" rel="stylesheet">
<link href="/Public/wap/css/animation.css" rel="stylesheet">
<link href="/Public/wap/css/wap.css" rel="stylesheet">
<!-- 返回顶部调用 begin -->
<script src="/Public/wap/js/silder.js"></script><!--获取当前页导航 高亮显示标题--> 
<link href="/Public/wap/css/lrtk.css" rel="stylesheet" />
<script type="text/javascript" src="/Public/wap/js/jquery.js"></script>
<script type="text/javascript" src="/Public/wap/js/js.js"></script>
<style>

</style>
</head>
<body>
<header>
  <nav id="nav">
    <ul>
      <?php if(is_array($data)): foreach($data as $key=>$value): ?><li><a href="<?php echo ($value["link"]); ?>" ><?php echo ($value["classify"]); ?></a></li><?php endforeach; endif; ?>
    </ul>
    <div><a href="/home/login/register" style="color:#f9f9f9;float:right;border:2px solid #a5abac; background-color: #494c4c; border-radius:3px; margin-top:10px; padding:2px 20px;">注&nbsp;册</a></div>
    <div style=""><a href="/home/login/login" style="color:#f9f9f9;border:2px solid #a5abac; background-color: #494c4c; border-radius:3px; margin-top:10px; padding:2px 20px;float:right;">登&nbsp;陆</a></div>
  </nav>
</header>
<!--header end-->
<div id="mainbody">
  <div class="info">
    <figure> <a href="details.html"><img src="/Public/wap/images/123456.jpg"  alt="Panama Hat" style="width:630px;"></a>
      <figcaption><strong>渡人如渡己，渡已，亦是渡</strong> 当我们被误解时，会花很多时间去辩白。 但没有用，没人愿意听，大家习惯按自己的所闻、理解做出判别，每个人其实都很固执。与其努力且痛苦的试图扭转别人的评判，不如默默承受，给大家多一点时间和空间去了解。而我们省下辩解的功夫，去实现自身更久远的人生价值。其实，渡人如渡己，渡已，亦是渡人。</figcaption>

    </figure>
    <div class="card">
      <div></div>
      <h1>我的名片</h1>
      <p>网名：DanceSmile | 往事随风...</p>
      <p>职业：Web前端设计、PHP开发工程师</p>
      <p>电话：13212761420</p>
      <p>Email：2316289798@qq.com</p>
      <ul class="linkmore">
        <li><a href="/home/index/index" class="talk" title="给我留言"></a></li>
        <li><a href="/home/index/index" class="address" title="联系地址"></a></li>
        <li><a href="/home/index/index" class="email" title="给我写信"></a></li>
        <li><a href="/home/index/index" class="photos" title="生活照片"></a></li>
        <li><a href="/home/index/index" class="heart" title="关注我"></a></li>
      </ul>
    </div>
  </div>
  <!--info end-->
  <div class="blank"></div>
  <div class="blogs">
    <ul class="bloglist">
      <?php if(is_array($article)): foreach($article as $key=>$value): ?><li>
        <div class="arrow_box">
          <div class="ti"></div>
          <!--三角形-->
          <div class="ci"></div>
          <!--圆形-->
          <h2 class="title"><a href="/" target="_blank"><?php echo ($value["title"]); ?></a></h2>
          <ul class="textinfo">
            <a href="/"><img src="<?php echo ($value["img"]); ?>"></a>
            <p><?php echo (mb_substr($value["text"],0,135)); ?>...</p>
          </ul>
          <ul class="details">
            <li class="likes"><a href="#"><?php echo ($value["collect"]); ?></a></li>
            <li class="comments"><a href="#"><?php echo ($value["comment"]); ?></a></li>
            <li class="icon-time"><a href="#"><?php echo (date('Y-m-d H:i:s',$value["create_itme"])); ?></a></li>
          </ul>
        </div>
        <!--arrow_box end--> 
      </li><?php endforeach; endif; ?>
        <div class="pages"><?php echo ($page); ?></div>
    </ul>
    <!--bloglist end-->

    <aside>
      <div class="tuijian">
        <h2>推荐文章</h2>
        <ol>
          <li><span><strong>1</strong></span><a href="/">有一种思念，是淡淡的幸福,一个心情一行文字</a></li>
          <li><span><strong>2</strong></span><a href="/">励志人生-要做一个潇洒的女人</a></li>
          <li><span><strong>3</strong></span><a href="/">女孩都有浪漫的小情怀——浪漫的求婚词</a></li>
          <li><span><strong>4</strong></span><a href="/">Green绿色小清新的夏天-个人博客模板</a></li>
          <li><span><strong>5</strong></span><a href="/">女生清新个人博客网站模板</a></li>
          <li><span><strong>6</strong></span><a href="/">Wedding-婚礼主题、情人节网站模板</a></li>
          <li><span><strong>7</strong></span><a href="/">Column 三栏布局 个人网站模板</a></li>
          <li><span><strong>8</strong></span><a href="/">时间煮雨-个人网站模板</a></li>
          <li><span><strong>9</strong></span><a href="/">花气袭人是酒香—个人网站模板</a></li>
        </ol>
      </div>
      <div class="toppic">
        <h2>图文并茂</h2>
        <ul>
          <li><a href="/"><img src="/Public/wap/images/k01.jpg">腐女不可怕，就怕腐女会画画！
            <p>伤不起</p>
            </a></li>
          <li><a href="/"><img src="/Public/wap/images/k02.jpg">问前任，你还爱我吗？无限戳中泪点~
            <p>感兴趣</p>
            </a></li>
          <li><a href="/"><img src="/Public/wap/images/k03.jpg">世上所谓幸福，就是一个笨蛋遇到一个傻瓜。
            <p>喜欢</p>
            </a></li>
        </ul>
      </div>
      <div class="clicks">
        <h2>热门点击</h2>
        <ol>
          <li><span><a href="/">慢生活</a></span><a href="/">有一种思念，是淡淡的幸福,一个心情一行文字</a></li>
          <li><span><a href="/">爱情美文</a></span><a href="/">励志人生-要做一个潇洒的女人</a></li>
          <li><span><a href="/">慢生活</a></span><a href="/">女孩都有浪漫的小情怀——浪漫的求婚词</a></li>
          <li><span><a href="/">博客模板</a></span><a href="/">Green绿色小清新的夏天-个人博客模板</a></li>
          <li><span><a href="/">女生个人博客</a></span><a href="/">女生清新个人博客网站模板</a></li>
          <li><span><a href="/">Wedding</a></span><a href="/">Wedding-婚礼主题、情人节网站模板</a></li>
          <li><span><a href="/">三栏布局</a></span><a href="/">Column 三栏布局 个人网站模板</a></li>
          <li><span><a href="/">个人网站模板</a></span><a href="/">时间煮雨-个人网站模板</a></li>
          <li><span><a href="/">古典风格</a></span><a href="/">花气袭人是酒香—个人网站模板</a></li>
        </ol>
      </div>
      <div class="search">
        <form class="searchform" method="get" action="#">
          <input type="text" name="s" value="Search" onfocus="this.value=''" onblur="this.value='Search'">
        </form>
      </div>
      <div class="viny">
        <dl>
          <dt class="art"><img src="images/artwork.png" alt="专辑"></dt>
          <dd class="icon-song"><span></span>南方姑娘</dd>
          <dd class="icon-artist"><span></span>歌手：赵雷</dd>
          <dd class="icon-album"><span></span>所属专辑：《赵小雷》</dd>
          <dd class="icon-like"><span></span><a href="/">喜欢</a></dd>
          <dd class="music">
            <audio src="images/nf.mp3" controls></audio>
          </dd>
          <!--也可以添加loop属性 音频加载到末尾时，会重新播放-->
        </dl>
      </div>
    </aside>
  </div>
  <!--blogs end--> 
</div>
<!--mainbody end-->
<footer>
  <div class="footer-mid">
    <div class="links">
      <h2>友情链接</h2>
      <ul>
        <li><a href="/">杨青个人博客</a></li>
        <li><a href="http://www.3dst.com">3DST技术服务中心</a></li>
      </ul>
    </div>
    <div class="visitors">
      <h2>最新评论</h2>
      <dl>
        <dt><img src="../../../Public/wap/images/s8.jpg">
        <dt>
        <dd>DanceSmile
          <time>49分钟前</time>
        </dd>
        <dd>在 <a href="http://www.yangqq.com/jstt/bj/2013-07-28/530.html" class="title">如果要学习web前端开发，需要学习什么？ </a>中评论：</dd>
        <dd>文章非常详细，我很喜欢.前端的工程师很少，我记得几年前yahoo花高薪招聘前端也招不到</dd>
      </dl>
      <dl>
        <dt><img src="../../../Public/wap/images/s7.jpg">
        <dt>
        <dd>yisa
          <time>2小时前</time>
        </dd>
        <dd>在 <a href="http://www.yangqq.com/news/s/2013-07-31/533.html" class="title">芭蕾女孩的心事儿</a>中评论：</dd>
        <dd>我手机里面也有这样一个号码存在</dd>
      </dl>
      <dl>
        <dt><img src="../../../Public/wap/images/s6.jpg">
        <dt>
        <dd>小林博客
          <time>8月7日</time>
        </dd>
        <dd>在 <a href="http://www.yangqq.com/jstt/bj/2013-06-18/285.html" class="title">如果个人博客网站再没有价值，你还会坚持吗？ </a>中评论：</dd>
        <dd>博客色彩丰富，很是好看</dd>
      </dl>
    </div>
    <section class="flickr">
      <h2>摄影作品</h2>
      <ul>
        <li><a href="/"><img src="../../../Public/wap/images/01.jpg"></a></li>
        <li><a href="/"><img src="../../../Public/wap/images/02.jpg"></a></li>
        <li><a href="/"><img src="../../../Public/wap/images/03.jpg"></a></li>
        <li><a href="/"><img src="../../../Public/wap/images/04.jpg"></a></li>
        <li><a href="/"><img src="../../../Public/wap/images/05.jpg"></a></li>
        <li><a href="/"><img src="../../../Public/wap/images/06.jpg"></a></li>
        <li><a href="/"><img src="../../../Public/wap/images/07.jpg"></a></li>
        <li><a href="/"><img src="../../../Public/wap/images/08.jpg"></a></li>
        <li><a href="/"><img src="../../../Public/wap/images/09.jpg"></a></li>
      </ul>
    </section>
  </div>
  <div class="footer-bottom">
    <p>Copyright 2013 Design by <a href="http://www.yangqq.com">DanceSmile</a></p>
  </div>
</footer>
<!-- jQuery仿腾讯回顶部和建议 代码开始 -->
<div id="tbox"> <a id="togbook" href="/e/tool/gbook/?bid=1"></a> <a id="gotop" href="javascript:void(0)"></a> </div>
<!-- 代码结束 -->
</body>
</html>