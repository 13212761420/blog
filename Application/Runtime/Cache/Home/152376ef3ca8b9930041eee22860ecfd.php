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
<link href="../../../Public/wap/css/lrtk.css" rel="stylesheet" />
<script type="text/javascript" src="../../../Public/wap/js/jquery.js"></script>
<script type="text/javascript" src="../../../Public/wap/js/js.js"></script>
<!-- 返回顶部调用 end-->
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<header>
  <nav id="nav">
    <ul>
      <li><a href="/home/index/index" >网站首页</a></li>
      <li><a href="/book/" target="_blank" title="图书推荐">人工智能</a></li>
      <li><a href="/book/" target="_blank" title="图书推荐">图书推荐</a></li>
      <li><a href="/web/" target="_blank" title="网站建设">网站建设</a></li>
      <li><a href="/newshtml5/" target="_blank" title="HTML5 / CSS3">HTML5 / CSS3</a></li>
      <li><a href="/jstt/" target="_blank" title="技术探讨">技术探讨</a></li>
    </ul>
  </nav>
</header>
<link href="../../../Public/wap/css/view.css" rel="stylesheet">
<!--header end-->
<div id="mainbody">
  <div class="blogs">
    <?php if(is_array($data)): foreach($data as $key=>$value): ?><div id="index_view">
      <h2 class="t_nav"><a href="home/index/index">缃戠珯棣栭〉</a><a href="/">鎱㈢敓娲�</a></h2>
      <h1 class="c_titile"><?php echo ($value["title"]); ?></h1>
      <p class="box">鍙戝竷鏃堕棿锛�<?php echo (date('Y-m-d',$value["create_itme"])); ?><span>缂栬緫锛欴anceSmile</span>闃呰锛�30锛�</p>
      <ul>
        <p><img src="<?php echo ($value["img"]); ?>"></p>
        <p><?php echo ($value["text"]); ?></p>
      </ul>
      <div class="share"> 
        <!-- Baidu Button BEGIN -->
        <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare"> <span class="bds_more">鍒嗕韩鍒帮細</span> <a class="bds_qzone"></a> <a class="bds_tsina"></a> <a class="bds_tqq"></a> <a class="bds_renren"></a> <a class="bds_t163"></a> <a class="shareCount"></a> </div>
        <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script> 
        <script type="text/javascript" id="bdshell_js"></script> 
        <script type="text/javascript">document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)</script>
        <!-- Baidu Button END --> 
      </div>
      <div class="otherlink">
        <h2>鐩稿叧鏂囩珷</h2>
        <ul>
          <li><a href="/newstalk/mood/2013-07-24/518.html" title="鎴戝笇鏈涙垜鐨勭埍鎯呮槸杩欐牱鐨�">鎴戝笇鏈涙垜鐨勭埍鎯呮槸杩欐牱鐨勬湁绉嶆儏璋婏紝涓嶆槸鐖辨儏锛屼篃绠椾笉寰楀弸鎯呮湁绉嶆儏璋婏紝涓嶆槸鐖辨儏锛屼篃绠椾笉寰楀弸鎯�</a></li>
          <li><a href="/newstalk/mood/2013-07-02/335.html" title="鏈夌鎯呰皧锛屼笉鏄埍鎯咃紝涔熺畻涓嶅緱鍙嬫儏">鏈夌鎯呰皧锛屼笉鏄埍鎯咃紝涔熺畻涓嶅緱鍙嬫儏鏈夌鎯呰皧锛屼笉鏄埍鎯咃紝涔熺畻涓嶅緱鍙嬫儏鏈夌鎯呰皧锛屼笉鏄埍鎯咃紝涔熺畻涓嶅緱鍙嬫儏</a></li>
          <li><a href="/newstalk/mood/2013-07-01/329.html" title="涓栦笂鏈�缇庡ソ鐨勭埍鎯�">涓栦笂鏈�缇庡ソ鐨勭埍鎯�</a></li>
          <li><a href="/news/read/2013-06-11/213.html" title="鐖辨儏娌℃湁姘歌繙锛屽湴鑰佸ぉ鑽掍篃璧颁笉瀹�">鐖辨儏娌℃湁姘歌繙锛屽湴鑰佸ぉ鑽掍篃璧颁笉瀹�</a></li>
          <li><a href="/news/s/2013-06-06/24.html" title="鐖辨儏鐨勮儗鍙涜��">鐖辨儏鐨勮儗鍙涜��</a></li>
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
          <li><a href="/web/" target="_blank" title="缃戠珯寤鸿">缃戠珯寤鸿</a></li>
          <li><a href="/newshtml5/" target="_blank" title="HTML5 / CSS3">HTML5 / CSS3</a></li>
          <li><a href="/jstt/" target="_blank" title="鎶�鏈帰璁�">鎶�鏈帰璁�</a></li>
          <li><a href="/news/s/" target="_blank" title="鎱㈢敓娲�">鎱㈢敓娲�</a></li>
        </ul>
      </div>
      <div class="tuijian">
        <h2>鏍忕洰鏇存柊</h2>
        <ol>
          <li><span><strong>1</strong></span><a href="/">鏈変竴绉嶆�濆康锛屾槸娣℃贰鐨勫垢绂�,涓�涓績鎯呬竴琛屾枃瀛�</a></li>
          <li><span><strong>2</strong></span><a href="/">鍔卞織浜虹敓-瑕佸仛涓�涓絿娲掔殑濂充汉</a></li>
          <li><span><strong>3</strong></span><a href="/">濂冲閮芥湁娴极鐨勫皬鎯呮��鈥斺�旀氮婕殑姹傚璇�</a></li>
          <li><span><strong>4</strong></span><a href="/">Green缁胯壊灏忔竻鏂扮殑澶忓ぉ-涓汉鍗氬妯℃澘</a></li>
          <li><span><strong>5</strong></span><a href="/">濂崇敓娓呮柊涓汉鍗氬缃戠珯妯℃澘</a></li>
          <li><span><strong>6</strong></span><a href="/">Wedding-濠氱ぜ涓婚銆佹儏浜鸿妭缃戠珯妯℃澘</a></li>
          <li><span><strong>7</strong></span><a href="/">Column 涓夋爮甯冨眬 涓汉缃戠珯妯℃澘</a></li>
          <li><span><strong>8</strong></span><a href="/">鏃堕棿鐓洦-涓汉缃戠珯妯℃澘</a></li>
          <li><span><strong>9</strong></span><a href="/">鑺辨皵琚汉鏄厭棣欌�斾釜浜虹綉绔欐ā鏉�</a></li>
        </ol>
      </div>
      <div class="toppic">
        <h2>鍥炬枃骞惰寕</h2>
        <ul>
          <li><a href="/"><img src="../../../Public/wap/images/k01.jpg">鑵愬コ涓嶅彲鎬曪紝灏辨�曡厫濂充細鐢荤敾锛�
            <p>浼や笉璧�</p>
            </a></li>
          <li><a href="/"><img src="../../../Public/wap/images/k02.jpg">闂墠浠伙紝浣犺繕鐖辨垜鍚楋紵鏃犻檺鎴充腑娉偣~
            <p>鎰熷叴瓒�</p>
            </a></li>
          <li><a href="/"><img src="../../../Public/wap/images/k03.jpg">涓栦笂鎵�璋撳垢绂忥紝灏辨槸涓�涓铔嬮亣鍒颁竴涓偦鐡溿��
            <p>鍠滄</p>
            </a></li>
        </ul>
      </div>
      <div class="clicks">
        <h2>鐑棬鐐瑰嚮</h2>
        <ol>
          <li><span><a href="index.html">鎱㈢敓娲�</a></span><a href="index.html">鏈変竴绉嶆�濆康锛屾槸娣℃贰鐨勫垢绂�,涓�涓績鎯呬竴琛屾枃瀛�</a></li>
          <li><span><a href="index.html">鐖辨儏缇庢枃</a></span><a href="index.html">鍔卞織浜虹敓-瑕佸仛涓�涓絿娲掔殑濂充汉</a></li>
          <li><span><a href="index.html">鎱㈢敓娲�</a></span><a href="index.html">濂冲閮芥湁娴极鐨勫皬鎯呮��鈥斺�旀氮婕殑姹傚璇�</a></li>
          <li><span><a href="index.html">鍗氬妯℃澘</a></span><a href="index.html">Green缁胯壊灏忔竻鏂扮殑澶忓ぉ-涓汉鍗氬妯℃澘</a></li>
          <li><span><a href="index.html">濂崇敓涓汉鍗氬</a></span><a href="index.html">濂崇敓娓呮柊涓汉鍗氬缃戠珯妯℃澘</a></li>
          <li><span><a href="index.html">Wedding</a></span><a href="index.html">Wedding-濠氱ぜ涓婚銆佹儏浜鸿妭缃戠珯妯℃澘</a></li>
          <li><span><a href="index.html">涓夋爮甯冨眬</a></span><a href="index.html">Column 涓夋爮甯冨眬 涓汉缃戠珯妯℃澘</a></li>
          <li><span><a href="index.html">涓汉缃戠珯妯℃澘</a></span><a href="index.html">鏃堕棿鐓洦-涓汉缃戠珯妯℃澘</a></li>
          <li><span><a href="index.html">鍙ゅ吀椋庢牸</a></span><a href="index.html">鑺辨皵琚汉鏄厭棣欌�斾釜浜虹綉绔欐ā鏉�</a></li>
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
      <h2>鍙嬫儏閾炬帴</h2>
      <ul>
        <li><a href="/">鏉ㄩ潚涓汉鍗氬</a></li>
        <li><a href="http://www.3dst.com">3DST鎶�鏈湇鍔′腑蹇�</a></li>
      </ul>
    </div>
    <div class="visitors">
      <h2>鏈�鏂拌瘎璁�</h2>
      <dl>
        <dt><img src="../../../Public/wap/images/s8.jpg">
        <dt>
        <dd>DanceSmile
          <time>49鍒嗛挓鍓�</time>
        </dd>
        <dd>鍦� <a href="http://www.yangqq.com/jstt/bj/2013-07-28/530.html" class="title">濡傛灉瑕佸涔爓eb鍓嶇寮�鍙戯紝闇�瑕佸涔犱粈涔堬紵 </a>涓瘎璁猴細</dd>
        <dd>鏂囩珷闈炲父璇︾粏锛屾垜寰堝枩娆�.鍓嶇鐨勫伐绋嬪笀寰堝皯锛屾垜璁板緱鍑犲勾鍓峺ahoo鑺遍珮钖嫑鑱樺墠绔篃鎷涗笉鍒�</dd>
      </dl>
      <dl>
        <dt><img src="../../../Public/wap/images/s7.jpg">
        <dt>
        <dd>yisa
          <time>2灏忔椂鍓�</time>
        </dd>
        <dd>鍦� <a href="http://www.yangqq.com/news/s/2013-07-31/533.html" class="title">鑺暰濂冲鐨勫績浜嬪効</a>涓瘎璁猴細</dd>
        <dd>鎴戞墜鏈洪噷闈篃鏈夎繖鏍蜂竴涓彿鐮佸瓨鍦�</dd>
      </dl>
      <dl>
        <dt><img src="../../../Public/wap/images/s6.jpg">
        <dt>
        <dd>灏忔灄鍗氬
          <time>8鏈�7鏃�</time>
        </dd>
        <dd>鍦� <a href="http://www.yangqq.com/jstt/bj/2013-06-18/285.html" class="title">濡傛灉涓汉鍗氬缃戠珯鍐嶆病鏈変环鍊硷紝浣犺繕浼氬潥鎸佸悧锛� </a>涓瘎璁猴細</dd>
        <dd>鍗氬鑹插僵涓板瘜锛屽緢鏄ソ鐪�</dd>
      </dl>
    </div>
    <section class="flickr">
      <h2>鎽勫奖浣滃搧</h2>
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
<!-- jQuery浠胯吘璁洖椤堕儴鍜屽缓璁� 浠ｇ爜寮�濮� -->
<div id="tbox"> <a id="togbook" href="/e/tool/gbook/?bid=1"></a> <a id="gotop" href="javascript:void(0)"></a> </div>
<!-- 浠ｇ爜缁撴潫 -->
</body>
</html>