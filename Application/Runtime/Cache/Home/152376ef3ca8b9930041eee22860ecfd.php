<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>���������˲���ģ��</title>
<meta name="keywords" content="��ɫģ��,������վģ��,���˲���ģ��,����ģ��,css3,html5,��վģ��" />
<meta name="description" content="����һ���йغ�ɫʱ�����css3 html5 ��վģ��" />
<link href="../../../Public/wap/css/styles.css" rel="stylesheet">
<link href="../../../Public/wap/css/animation.css" rel="stylesheet">
<!-- ���ض������� begin -->
<script src="../../../Public/wap/js/silder.js"></script><!--��ȡ��ǰҳ���� ������ʾ����--> 
<link href="../../../Public/wap/css/lrtk.css" rel="stylesheet" />
<script type="text/javascript" src="../../../Public/wap/js/jquery.js"></script>
<script type="text/javascript" src="../../../Public/wap/js/js.js"></script>
<!-- ���ض������� end-->
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<header>
  <nav id="nav">
    <ul>
      <li><a href="/home/index/index" >��վ��ҳ</a></li>
      <li><a href="/book/" target="_blank" title="ͼ���Ƽ�">�˹�����</a></li>
      <li><a href="/book/" target="_blank" title="ͼ���Ƽ�">ͼ���Ƽ�</a></li>
      <li><a href="/web/" target="_blank" title="��վ����">��վ����</a></li>
      <li><a href="/newshtml5/" target="_blank" title="HTML5 / CSS3">HTML5 / CSS3</a></li>
      <li><a href="/jstt/" target="_blank" title="����̽��">����̽��</a></li>
    </ul>
  </nav>
</header>
<link href="../../../Public/wap/css/view.css" rel="stylesheet">
<!--header end-->
<div id="mainbody">
  <div class="blogs">
    <?php if(is_array($data)): foreach($data as $key=>$value): ?><div id="index_view">
      <h2 class="t_nav"><a href="home/index/index">网站首页</a><a href="/">慢生活</a></h2>
      <h1 class="c_titile"><?php echo ($value["title"]); ?></h1>
      <p class="box">发布时间：<?php echo (date('Y-m-d',$value["create_itme"])); ?><span>编辑：DanceSmile</span>阅读（30）</p>
      <ul>
        <p><img src="<?php echo ($value["img"]); ?>"></p>
        <p><?php echo ($value["text"]); ?></p>
      </ul>
      <div class="share"> 
        <!-- Baidu Button BEGIN -->
        <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare"> <span class="bds_more">分享到：</span> <a class="bds_qzone"></a> <a class="bds_tsina"></a> <a class="bds_tqq"></a> <a class="bds_renren"></a> <a class="bds_t163"></a> <a class="shareCount"></a> </div>
        <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script> 
        <script type="text/javascript" id="bdshell_js"></script> 
        <script type="text/javascript">document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)</script>
        <!-- Baidu Button END --> 
      </div>
      <div class="otherlink">
        <h2>相关文章</h2>
        <ul>
          <li><a href="/newstalk/mood/2013-07-24/518.html" title="我希望我的爱情是这样的">我希望我的爱情是这样的有种情谊，不是爱情，也算不得友情有种情谊，不是爱情，也算不得友情</a></li>
          <li><a href="/newstalk/mood/2013-07-02/335.html" title="有种情谊，不是爱情，也算不得友情">有种情谊，不是爱情，也算不得友情有种情谊，不是爱情，也算不得友情有种情谊，不是爱情，也算不得友情</a></li>
          <li><a href="/newstalk/mood/2013-07-01/329.html" title="世上最美好的爱情">世上最美好的爱情</a></li>
          <li><a href="/news/read/2013-06-11/213.html" title="爱情没有永远，地老天荒也走不完">爱情没有永远，地老天荒也走不完</a></li>
          <li><a href="/news/s/2013-06-06/24.html" title="爱情的背叛者">爱情的背叛者</a></li>
        </ul>
      </div>
    </div><?php endforeach; endif; ?>
    <!--bloglist end-->
    <aside>
      <div class="search">
        <form class="searchform" method="get" action="#">
          <input type="text" name="s" value="Search" onfocus="this.value=''" onblur="this.value='Search'">
        </form>
      </div>
      <div class="sunnav">
        <ul>
          <li><a href="/web/" target="_blank" title="网站建设">网站建设</a></li>
          <li><a href="/newshtml5/" target="_blank" title="HTML5 / CSS3">HTML5 / CSS3</a></li>
          <li><a href="/jstt/" target="_blank" title="技术探讨">技术探讨</a></li>
          <li><a href="/news/s/" target="_blank" title="慢生活">慢生活</a></li>
        </ul>
      </div>
      <div class="tuijian">
        <h2>栏目更新</h2>
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
          <li><a href="/"><img src="../../../Public/wap/images/k01.jpg">腐女不可怕，就怕腐女会画画！
            <p>伤不起</p>
            </a></li>
          <li><a href="/"><img src="../../../Public/wap/images/k02.jpg">问前任，你还爱我吗？无限戳中泪点~
            <p>感兴趣</p>
            </a></li>
          <li><a href="/"><img src="../../../Public/wap/images/k03.jpg">世上所谓幸福，就是一个笨蛋遇到一个傻瓜。
            <p>喜欢</p>
            </a></li>
        </ul>
      </div>
      <div class="clicks">
        <h2>热门点击</h2>
        <ol>
          <li><span><a href="index.html">慢生活</a></span><a href="index.html">有一种思念，是淡淡的幸福,一个心情一行文字</a></li>
          <li><span><a href="index.html">爱情美文</a></span><a href="index.html">励志人生-要做一个潇洒的女人</a></li>
          <li><span><a href="index.html">慢生活</a></span><a href="index.html">女孩都有浪漫的小情怀——浪漫的求婚词</a></li>
          <li><span><a href="index.html">博客模板</a></span><a href="index.html">Green绿色小清新的夏天-个人博客模板</a></li>
          <li><span><a href="index.html">女生个人博客</a></span><a href="index.html">女生清新个人博客网站模板</a></li>
          <li><span><a href="index.html">Wedding</a></span><a href="index.html">Wedding-婚礼主题、情人节网站模板</a></li>
          <li><span><a href="index.html">三栏布局</a></span><a href="index.html">Column 三栏布局 个人网站模板</a></li>
          <li><span><a href="index.html">个人网站模板</a></span><a href="index.html">时间煮雨-个人网站模板</a></li>
          <li><span><a href="index.html">古典风格</a></span><a href="index.html">花气袭人是酒香—个人网站模板</a></li>
        </ol>
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