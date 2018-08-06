/*
Navicat MySQL Data Transfer

Source Server         : localhost_server
Source Server Version : 50719
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50719
File Encoding         : 65001

Date: 2018-08-03 18:12:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for www_blog_article
-- ----------------------------
DROP TABLE IF EXISTS `www_blog_article`;
CREATE TABLE `www_blog_article` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cid` int(10) NOT NULL COMMENT 'classid（类型id）',
  `title` varchar(50) NOT NULL COMMENT '博文标题',
  `text` text NOT NULL COMMENT '博文内容',
  `create_itme` int(10) DEFAULT NULL COMMENT '发表时间',
  `img` varchar(255) DEFAULT NULL COMMENT '博文图片',
  `comment` varchar(255) DEFAULT NULL COMMENT '评论',
  `collect` int(5) DEFAULT NULL COMMENT '点赞次数',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='博文表';

-- ----------------------------
-- Records of www_blog_article
-- ----------------------------
INSERT INTO `www_blog_article` VALUES ('5', '5', 'HTML5权威特性', '标准通用标记语言下的一个应用HTML标准自1999年12月发布的HTML4.01后，后继的HTML5和其它标准被束之高阁，为了推动Web标准化运动的发展，一些公司联合起来，成立了一个叫做 Web Hypertext Application Technology Working Group （Web超文本应用技术工作组 -WHATWG） 的组织。WHATWG 致力于 Web 表单和应用程序，而W3C（World Wide Web Consortium，万维网联盟） 专注于XHTML2.0。在 2006 年，双方决定进行合作，来创建一个新版本的 HTML。\r\nHTML5草案的前身名为 Web Applications 1.0，于2004年被WHATWG提出，于2007年被W3C接纳，并成立了新的 HTML 工作团队。\r\nHTML 5 的第一份正式草案已于2008年1月22日公布。HTML5 仍处于完善之中。然而，大部分现代浏览器已经具备了某些 HTML5 支持。\r\n2012年12月17日，万维网联盟（W3C）正式宣布凝结了大量网络工作者心血的HTML5规范已经正式定稿。根据W3C的发言稿称：“HTML5是开放的Web网络平台的奠基石。”\r\n2013年5月6日， HTML 5.1正式草案公布。该规范定义了第五次重大版本，第一次要修订万维网的核心语言：超文本标记语言（HTML）。在这个版本中，新功能不断推出，以帮助Web应用程序的作者，努力提高新元素互操作性。\r\n本次草案的发布，从2012年12月27日至今，进行了多达近百项的修改，包括HTML和XHTML的标签，相关的API、Canvas等，同时HTML5的图像img标签及svg也进行了改进，性能得到进一步提升。\r\n支持Html5的浏览器包括Firefox（火狐浏览器），IE9及其更高版本，Chrome（谷歌浏览器），Safari，Opera等；国内的傲游浏览器（Maxthon），以及基于IE或Chromium（Chrome的工程版或称实验版）所推出的360浏览器、搜狗浏览器、QQ浏览器、猎豹浏览器等国产浏览器同样具备支持HTML5的能力。\r\n在移动设备开发HTML5应用只有两种方法，要不就是全使用HTML5的语法，要不就是仅使用JavaScript引擎。\r\nJavaScript引擎的构建方法让制作手机网页游戏成为可能。由于界面层很复杂，已预订了一个UI工具包去使用。\r\n纯HTML5手机应用运行缓慢并错漏百出，但优化后的效果会好转。尽管不是很多人愿意去做这样的优化，但依然可以去尝试。\r\nHTML5手机应用的最大优势就是可以在网页上直接调试和修改。原先应用的开发人员可能需要花费非常大的力气才能达到HTML5的效果，不断地重复编码、调试和运行，这是首先得解决的一个问题。因此也有许多手机杂志客户端是基于HTML5标准，开发人员可以轻松调试修改。\r\n2014年10月29日，万维网联盟泪流满面地宣布，经过几乎8年的艰辛努力，HTML5标准规范终于最终制定完成了，并已公开发布。\r\n在此之前的几年时间里，已经有很多开发者陆续使用了HTML5的部分技术，Firefox、Google Chrome、Opera、Safari 4+、Internet Explorer 9+都已支持HTML5，但直到今天，我们才看到“正式版”。\r\nHTML5将会取代1999年制定的HTML 4.01、XHTML 1.0标准，以期能在互联网应用迅速发展的时候，使网络标准达到符合当代的网络需求，为桌面和移动平台带来无缝衔接的丰富内容。\r\nW3C CEO Jeff Jaffe博士表示：“HTML5将推动Web进入新的时代。不久以前，Web还只是上网看一些基础文档，而如今，Web是一个极大丰富的平台。我们已经进入一个稳定阶段，每个人都可以按照标准行事，并且可用于所有浏览器。如果我们不能携起手来，就不会有统一的Web。”\r\nHTML5还有望成为梦想中的“开放Web平台”(Open Web Platform)的基石，如能实现可进一步推动更深入的跨平台Web应用。', '1533095397', '/attachs/img/5b612de51fc93.jpg', null, null);
INSERT INTO `www_blog_article` VALUES ('4', '2', '智慧生活', '随着科技的发展社会的进步，新一代信息技术正在着力打造智慧生活，互联网、智能机、液晶电视、空调也逐渐步入了千千万万的家庭。\r\n1977年英国世界上最大的互联网公司的经理预料，将来任何人都不会在自己的家里拥有一台属于自己的计算机。计算机不会被大多数人使用，然而在日新月异发展的现代化社会里不是用电脑这几乎是不可能的，高楼大厦里职员们正使用计算机记录完成上级布置的任务；漫画家打好画稿在用计算机进行扫描、上色；学校里每一间教室都放置一台，老师则利用计算机为学生讲解课文；打印店里一台台计算机正忙碌的工作着。然而那位经理怎么也想不到将近半个世纪的今天计算机已经在我们的生活中起着不可代替的作用，也从原来笨重的以至于塞满一整个房间的机器到如今教科书厚的液晶。\r\n展望未来。\r\n未来，一个抽象的代名词——触摸不到，感受不到。每个人都有美好的畅想，我畅想畅想着城市美好的未来。城市的美好，必然少不了那一片霓虹灯。繁华的夜景，热闹的人市。那繁荣景象的背后又是什么呢？是一片黑暗吗？不，至少有盏明灯。是那些流浪者的家吗？不，至少有间草屋。光明固然美好，黑暗也将会被无数明灯所点亮。我畅想，畅想城市那份恬静。\r\n当人们迎着朝阳开始一天的工作时，他们的心情是平静而喜悦的。此时，自行车已成“古董”，人们只能在博物馆才能见到。在宽阔、现代化的立交桥上，一辆辆高级轿车来回穿梭。在居民小区里，物业管理是机器人，二十四小时服务。工作的地方没有了原来的狭隘，不再只是人手一台电脑埋头工作，而是两三个人一个办公室，摄像头、监视器什么的都不在有，人们诚实守信、勤勤恳恳。工厂是机器人工作的岗位。\r\n我们把美好的梦想层层堆砌，让高瞻远瞩的目光投向时代的前沿，审视昨天，展望未来，沿着金光大道，一步一步靠近我们心中向往的地方。让我们畅想美好的明天，走向美好的未来！\r\n其实幸福。很难！当黑暗笼罩住了城市，永远没有那一角：有人在打架斗殴。难道这就是美好城市？现在这份重任落下来了，在每个人的肩上，还有我们——新时代的中学生，更落在了我们的笔尖，我们要用笔去描绘未来的城市，画出她最可爱的一面、美丽的一面。我们的校园里，纸屑很珍贵，因为它从不露面。微笑很普通，因为它洋溢在每个人的脸上。城市的美好如同筑房子——第一层是文明，第二层是平安，第三层是繁华，第四层是快乐。只有不停地建造，才能盖上它的屋顶——美好。让我们共同携起手来，建造这幢“美好”的城市！', '1533092747', '/attachs/img/5b61238ba4841.jpg', '2', '5');
INSERT INTO `www_blog_article` VALUES ('6', '1', 'HYML5 CSS3应用说明', '随着现代技术的发展，人们对于任何事物在看重实用性能的同时，也越来越重视自我的体验，比如当前流行的互联网企业，除了要有出色的性能和实用性，还要有良好的界面、客户体验，这样才能吸引人。所以对于初创的互联网公司来说，最烧钱的时候就是刚刚获得风投或融资的时候，因为那时候还没有客户访问，所以他们不得不把钱砸向前端，只有做好前端技术、客户体验，一切才有可能。当有了来访者，访问的人多了，才会优化后端，做客户分析等等。所以互联网公司获得融资后的第一件事往往就是招聘Web前端开发人员，先把前端和用户体验做好，打好发展第一炮，这也是为什么Web前端开发这么火、工程师薪资高的重要原因。\r\n　　根据国内最大的招聘门户网站智联招聘的数据统计，每个月企业在智联上公布的Web前端的岗位量在2.4万个左右，由此可以看出当前企业对于Web前端工程师的需求是十分旺盛的，并且根据智联的职业专家的介绍，Web前端工程师工作1-2年后成为Web前端高级软件工程师，年薪可达到15万以上；工作3-5年后成为Web前端技术主管或经理，年薪在15-50万之间；工作5年以上，通常会成为互联网公司的技术总监或产品经理，年薪达到50-100万不成问题。\r\n　　互联网技术的飞速发展促使着互联网企业对于用户体验的要求越来越高，网站开发的能读也越来越大，在这样的时机下，Web前端工程师应运而生，成为各大企业争抢的香饽饽。根据对国内100家互联网企业对Web前端工程师的招聘需求分析，企业对于人才的需求主要有两部分：一是核心要求，包括语言技术：JS基础和核心/HTML5/CSS3、框架技术：JQuery、AJAX、Bootstrap、AngularJS、通讯协议技术：HTTP协议、服务端开发技术、交互技术：UI交互设计、客户端技术：微信开发技术、html5、JS、SDK开发、Android、iOS、Web App开发技术；二是辅助要求，具备1-3年的Web开发工作经验，学历、相关经验、团队合作能力等等。\r\n　　一名优秀的Web前端工程师必须要有能力编写任何一个互联网系统的前端页面、交互代码，相对于其它IT技术岗位，Web前端工程师的专业性要求没那么高，不管你是专业的还是非专业的，或者是转行而来的，选对方式，找到入门，都可以从事Web前端开发。itjob祝你成就开发梦', '1533095921', '/attachs/img/5b612ff1ca707.jpg', null, null);
INSERT INTO `www_blog_article` VALUES ('7', '3', '必须写够十万行代码，不要心存侥幸', '程序员象木工一样，熟能生巧。程序员必须写足够代码量的程序，才会有感觉，这是一个苦力活，没有任何捷径可走。\r\n\r\n       计算机是一门实践性的科学，没有动手能力做支撑，很难做出好的科研成果。我的一个学长是美国卡内基梅隆大学的博士，卡内基梅隆大学计算机系在全世界非常出名，他说每个博士生必须写十万行代码才能毕业，卡内基梅隆大学博士进任何一个大企业基本不用面试。而国内培养的大部分研究生、博士生，动手能力都偏弱。\r\n\r\n       没有写过足够代码量的，想成为高手是不可能的，只能纸上谈兵！\r\n\r\n       建议四：时刻保持好奇心\r\n\r\n       计算机技术更新换代非常快，每年都有各种各样的新技术出现。在我过去的职业生涯中，仅编程语言，我就用过 basic、masm、pascal、c++、vba、Delphi、java 等。需要时刻保持好奇心，不断学习各种新的东西，才能在未来的几十年职业生涯中不落伍。你要理解为什么 iPhone 出来很多高手用iPhone，现在一天到晚惦记着换部 gPhone 玩玩。\r\n\r\n       人的精力有限，高手往往工作压力也比较大，如何在有限的时间内掌握整个行业动态，的确是一个不简单的事情。我的经验是经常看业内的各种技术杂志，参加各种聚会，可以节约很多时间。最重要的是，交几个博学的技术高手，多和他们交流，一定获益匪浅！\r\n\r\n       建议五：不要局限在技术本身，多花点精力关注用户\r\n\r\n       做到前面几条，就已经是千金难求的高手了。但一个真正的高手需要知道用户需要什么，如何做出让用户满意的产品。\r\n\r\n       现在的软件研发越来越强烈团队协作，不少团队都配置了专门的需求分析的工程师、用户界面及用户体验的设计师，软件研发的分工越来越细。很多程序员以为只要把技术搞好，不用管用户需求和用户体验。实际上，需求方案及界面方案不可能写得非常细，具体的实施还是程序员自己来实现的。这个时候，好坏的差距很快就体现出来了。\r\n\r\n       我们写程序的最终目的是满足用户需求，不是简单完成需求规划方案中的功能。所以，程序员一定要认真揣摩用户心理，能明白用户的真实需求。\r\n\r\n       其次，怎么设计交互界面，让用户觉得好用，用起来舒服，这里面学问很大。我举一个小例子，每个程序窗口右上角都有三个按钮，如最小化、关闭等。乔布斯觉得不好看，不易用，他提出改用红绿蓝的交通灯。这样修改后，果然 Mac OS 漂亮和易用了很多。\r\n\r\n       目前互联网和手机上的应用开发，都非常强调小团队研发。这样研发模式速度会快很多，但对程序员的综合素质的要求也就更高了。\r\n\r\n       我强烈建议程序员不要仅仅局限在技术本事，还需要多点精力考虑和用户相关的问题，学会洞察用户的需求，并努力设计好用易用的产品。做着这点的程序高手，创业成算就很大了。\r\n\r\n       这些就是我说的《创业十大标准》中提到的“技术过硬”要求。\r\n\r\n       这样的技术高手，如果捕捉到合适的产品方向，并且具备一定带团队的能力，创业成功机会很大！事实上，绝大部分创业的技术公司，创始人都是这样的人！比如迅雷的邹胜龙和程浩，UCWEB的何小鹏和梁捷等。', '1533104357', '/attachs/img/5b6150e58807f.jpg', null, null);
INSERT INTO `www_blog_article` VALUES ('8', '6', '只有真正喜欢才能写好程序', '建议一：只有真正喜欢才能写好程序\r\n\r\n       喜欢写程序，做程序员就是上天堂；\r\n\r\n       不喜欢写程序，做程序员就是下地狱。\r\n\r\n       程序员需要整天趴在电脑前，经常没日没夜的，非常辛苦，而且工作来不得半点虚假，少写一个标点符号都不行。喜欢的人，日子过得非常开心，每写一行代码，都会有新的成就，尤其当自己的作品被广泛应用的时候，那种自豪感油然而起。不喜欢的人，坐在电脑前极端无聊，被进度压得喘不过气来，天天为找bug改bug生气。\r\n\r\n       只有喜欢，只有热爱，才能把程序写好！\r\n\r\n       我建议不喜欢写程序的人早点转行，不要勉强自己，免得误人误己。\r\n\r\n       建议二：把程序当艺术品，象写诗一样来写代码\r\n\r\n       现在很少有公司做 codeview （对写好的程序做代码级检查），于是很多人在进度的压力下潦草应付，只要测试通过就算搞定。表面上看，开发速度很快，进度有保障；但实际上，这样的程序连开发者自己都很难读懂，一旦有bug，很难调试，将来维护升级都非常困难。这样的代码多半只能重写，浪费自然严重。\r\n\r\n       如果每个人写程序的时候当艺术品来写，写每行都认认真真、干干净净的，虽然速度略微慢了一点，但综合的开发成本会低很多。\r\n\r\n       如何写像诗一样美的代码呢？方法也很简单。\r\n\r\n       一、买几本经典的编程书，把书上所有例程全部重新写一遍，逐个比较和书上范例的差距，一步一步改善自己编程的风格和技巧。时间长了，自然就能写出象书上例程一样的代码，甚至可以比书上写得好。\r\n\r\n       二、基础扎实后，多看看Linux 等系统级的源代码，看看高手是如何写的，就有感觉了。\r\n\r\n       三、通读一下MSDN中所有的资料，这样，“读书破万卷，下笔如有神”。\r\n\r\n       还有，一定要牢记软件工程的铁律：可能出错的地方一定会出错。每个变量都做初始化，引用每个参数都会做有效性检查，在可能出错的每个地方都会做边界条件检查，这样开发出来的程序一定会稳固很多，就是出错也会很容易修改。野路子出来的高手，一般开发速度很快，但做完后bug很多，经常需要很长时间修改。而真正的高手，追求的境界是 bugfree code（零缺陷代码）。', '1533104595', '/attachs/img/5b6151d3c8664.jpg', null, null);
INSERT INTO `www_blog_article` VALUES ('9', '6', '两种编程高手', '第一种工程师\r\n\r\n给一段复杂的程序，比如有7个局部变量，5层循环和if嵌套，他能赤手空拳上阵，迅速领会程序意图、找到bug，不用借助任何工具甚至纸笔。\r\n给一个复杂的问题，能在一个函数之内一气呵成，立马给出正确实现，这个函数可能有七个变量，5层循环和if嵌套。没有废话，删无可删，但是单一函数复杂度高，一般人要费老鼻子劲方能看懂。\r\n第二种工程师\r\n\r\n给一段复杂的程序，比如有7个局部变量，5层循环和if嵌套，他无法马上看出程序的意图，但是他通常会借助纸笔写写画画，最终搞定。\r\n给一个复杂的问题，要磨叽磨叽好半天，一般用几个函数组合起来实现，这些函数职责单一明确，身段苗条，通常一两个变量，循环和if不超过2层嵌套。单一函数复杂度低，一般人都能轻轻松松看懂。\r\n \r\n\r\n第一种软件工程师是天生的聪明人，他们处理复杂事物的能力与生俱来，可以流利的心算三位数加三位数带进位的加法。根据认知负载理论，这类人的working memory容量超越常人，他们可以将多种因素同时纳入大脑进行思考而不会出现大脑过载。他们写出来的复杂程序，一般的看法是没有掌握分而治之的正确编程风格，其实际是他们脑筋太好使，普通人为了克服认知过载而发明的编程方法对他们而言纯粹就是多此一举。当遇到更为复杂的问题时，他们自然会分而治之。缺点是不经刻意训练，他们按照自己的认知能力写出来的程序普通人维护起来有困难。\r\n\r\n第二种工程师是天资正常的普通人，working memeory的容量大概就是可以心算两位数加两位数带进位的加法。但是他们掌握了解决认知负载的方法。阅读复杂代码的时候，他们借助纸笔，把对其中的小片段的分析结论先写下来，避免大脑缓存太多东西，然后就这些数量变少的中间结果再进行分析，始终保持放入大脑的东西不要太多。写代码的时候，他们无法一下子把所有的细节想清楚，因此需要分步搞定，要么先把关键步骤逐次实现好再去整合整个方案，要么先写好一个大而化之的框架，然后分头实现细节。写完之后往往还会发现有一点顾此失彼，因此还要调整清理一番。特点是不管那种方法，大脑在任何一个阶段都不会过载。按照这种方法写出来的代码，也不会让它的读者大脑过载。\r\n\r\n对于团队来说，我们希望工程师具有第一种工程师的天份，同时写出来的代码要像第二种工程师那样方便理解。尤其需要关注的是第三种工程师，他们缺乏第一种工程师的天资，同时还没有掌握第二种工程师的技能，经常自己被自己写出来的代码搞糊涂。', '1533105205', '/attachs/img/5b615435553df.gif', null, null);

-- ----------------------------
-- Table structure for www_blog_class
-- ----------------------------
DROP TABLE IF EXISTS `www_blog_class`;
CREATE TABLE `www_blog_class` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `classify` varchar(50) NOT NULL COMMENT '菜单名称',
  `link` varchar(50) NOT NULL,
  `type` int(10) NOT NULL COMMENT '类型',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='菜单类型表';

-- ----------------------------
-- Records of www_blog_class
-- ----------------------------
INSERT INTO `www_blog_class` VALUES ('1', '网站首页', '/home/index/index', '1');
INSERT INTO `www_blog_class` VALUES ('2', '人工智能', '', '2');
INSERT INTO `www_blog_class` VALUES ('3', '图书推荐', '', '3');
INSERT INTO `www_blog_class` VALUES ('4', '网站建设', '', '4');
INSERT INTO `www_blog_class` VALUES ('5', 'HTHL5/CSS3', '', '5');
INSERT INTO `www_blog_class` VALUES ('6', '技术探讨', '', '6');

-- ----------------------------
-- Table structure for www_blog_user
-- ----------------------------
DROP TABLE IF EXISTS `www_blog_user`;
CREATE TABLE `www_blog_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL COMMENT '用户名',
  `password` varchar(50) NOT NULL COMMENT '密码',
  `email` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '是否是管理员',
  `time` int(11) NOT NULL COMMENT '注册时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of www_blog_user
-- ----------------------------
INSERT INTO `www_blog_user` VALUES ('1', '刘德华', '14e1b600b1fd579f47433b88e8d85291', '', '0', '1532910663');
INSERT INTO `www_blog_user` VALUES ('2', '张学友', '14e1b600b1fd579f47433b88e8d85291', '2316289798@qq.com', '0', '1532911950');