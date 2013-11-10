<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_wei_content_1`;");
E_C("CREATE TABLE `qb_wei_content_1` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `subhead` varchar(150) NOT NULL DEFAULT '',
  `id` mediumint(7) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `topic` tinyint(1) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `orderid` mediumint(7) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rid`),
  KEY `aid` (`id`,`topic`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=gbk");
E_D("replace into `qb_wei_content_1` values('1','','1','3','1','1','<p>其實心底知道妳會走，但很怕面對，所以一直都當平日一樣過，總期望我們還會見面...今天是小琳的送別儀式，她雖然最後還是被癌症帶走了，但她的積極樂觀一直留在人世。一路走好，美麗的鄧小琳。</p>','0');");
E_D("replace into `qb_wei_content_1` values('2','','2','3','1','1','<p>也没有太多奢望，就是想透透地深呼吸一下。</p>','0');");
E_D("replace into `qb_wei_content_1` values('3','','3','3','1','1','<p>悉尼机场安检门口。鞋好看吗？</p>','0');");
E_D("replace into `qb_wei_content_1` values('4','','4','3','1','1','<p>对爱的执着，静静地等待着那份天荒地老。</p>','0');");
E_D("replace into `qb_wei_content_1` values('5','','5','3','1','1','<p>我发了张有声照片，快来听一下</p>','0');");
E_D("replace into `qb_wei_content_1` values('6','','6','3','1','1','<p>是不是到了星期天空氣跟人都會感受到它的舒適呢！很多時候穿搭是跟著心情走的，有時隨性的搭配會令人開心一整天！這麼輕鬆的一天妳怎麼穿呢？給自己搭配一個好心情吧～</p>','0');");
E_D("replace into `qb_wei_content_1` values('7','','7','3','1','1','<p>相爱的时候需要真诚，争执的时候需要沟通， 生气的时候需要冷静，愉快的时候需要分享， 指责的时候需要谅解，过日子需要包容。</p>','0');");
E_D("replace into `qb_wei_content_1` values('8','','8','3','1','1','<p>当我们不知所措，难以抉择，心烦意的时候，一切交给「祂」帮我们安排！</p>','0');");
E_D("replace into `qb_wei_content_1` values('9','','9','3','1','1','<p>拜会悉尼中国总领事馆。与中国驻悉尼总领事馆副总领事刘侃合影。</p>','0');");
E_D("replace into `qb_wei_content_1` values('10','','10','3','1','1','<p>黄昏的海面与天空，不禁让自己想变成天空中的一抹霞，被天空怀抱，让海水映射！</p>','0');");
E_D("replace into `qb_wei_content_1` values('11','','11','3','1','1','<p>刚刚在街上追帽子，太丢人了。</p>','0');");
E_D("replace into `qb_wei_content_1` values('12','','12','3','1','1','<p>跟大家分享～觀音菩薩講，好好活，不要攀，不要比，不要自己氣自己，父是天，母是地，盡孝父母要牢記，夫妻愛，子女孝，家和比啥都重要，行點善，積點德，多做善事多積德，官再大，錢再多，閻王照樣土里拖。本月是觀音菩薩出家月，福，祿，壽，喜，財各路神仙都來保佑。</p>','0');");
E_D("replace into `qb_wei_content_1` values('13','','13','3','1','1','<p>大风尘土起，遮天蔽日的脏啊！！奇怪的是路上行人没几个戴口罩的！为什么呢？是着急忘戴了？还是～？风尘是老天的，肺是自己的。好歹还是戴着挡挡吧！ 回家都记得洗洗脸，漱漱口，通通鼻子。</p>','0');");
E_D("replace into `qb_wei_content_1` values('14','','14','3','1','1','<p>最喜欢的，不一定是最好的；最好的，不一定是最合适的；最合适的，才是最值得珍惜的。有情能爱，有心能知，有缘能聚，有梦能圆。年轻的情怀，喜欢一个人，爱一朵花，其实并没有错。人生短短几十年，不要给自己留下了什么遗憾，想笑就笑，想哭就哭，只要爱过，喜欢过，珍惜过，就是美丽的！</p>','0');");
E_D("replace into `qb_wei_content_1` values('15','','15','3','1','1','<p> &nbsp;梁晓声：“人文”就是一种植根于内心的素养，以承认约束为前提的自由，一种能设身处地为别人着想的善良。</p>','0');");
E_D("replace into `qb_wei_content_1` values('16','','16','3','1','1','<p>刚刚录完！一钻进棚就是十二个小时啊！唱到哪儿了？有结果了吗？</p>','0');");
E_D("replace into `qb_wei_content_1` values('17','','17','3','1','1','<p>吕哥为啥不发一张嫂子的照片？我还等呢！哥有哥的道理是吧！美丽的花也代表女生了！谢谢吕哥！每年都记得我们！也祝吕哥和我们一样快乐！8月3号是男生的节日要记得！</p>','0');");
E_D("replace into `qb_wei_content_1` values('18','','18','1','1','1','<p>相貌是一个人心灵的写照，脸庞是一个人情感的凝固。的确，一个人存好心，做好人，有文化、有品位时，欢喜充心，愉悦映脸，她一定会越变越漂亮，越变越有味，反之则越变越丑陋，越变越萎缩。对自己的容貌负责，让自己的心充满慈悲吧！</p>','0');");
E_D("replace into `qb_wei_content_1` values('19','','19','1','1','1','<p>三八节是女性的节日，先祝所有女同胞们节日快乐！同样的，三八节们也该为男士们鼓鼓掌。虽然您不是女性，但是女性们的生活必需品；虽然您不是母亲，却让很多女人圆了为人母的梦想。所以，男同胞们也过节去吧！！</p>','0');");
E_D("replace into `qb_wei_content_1` values('20','','20','1','1','1','<p>映啦 虽然时间上没办法配合宣传，但是我会到电影院去看的 祝福票房大卖 附上剧照一张</p>','0');");
E_D("replace into `qb_wei_content_1` values('21','','21','4','1','1','<p>花哈哈哈哈哈！我買了義大利名牌西當撲麗絲包～太可愛樂！</p>','0');");
E_D("replace into `qb_wei_content_1` values('22','','22','4','1','1','<p>这光景，多少鸡汤都不够心灵这淌浑水的。</p>','0');");
E_D("replace into `qb_wei_content_1` values('23','','23','4','1','1','<p> 海风习习，太惬意了。心如白云般洁净，把几年的劳累淘空，充电充电一一</p>','0');");
E_D("replace into `qb_wei_content_1` values('24','','24','4','1','1','<p> 我真的愛上長裙，前幾天跑去做了五件，哈哈～有空再分享！</p>','0');");
E_D("replace into `qb_wei_content_1` values('25','','25','4','1','1','<p> 昨天为朋友拿签名、没想到林小姐下车亲自给我送来、受宠若惊、谢谢林志玲</p>','0');");
E_D("replace into `qb_wei_content_1` values('26','','26','4','1','1','<p> 嫌犯找到，但婴儿已逝，让我们为这名逝去的小生命默哀 被嫌犯埋于雪中的不仅是一个婴儿冰凉的身体，也是万千人对犯罪者具有基本人性的期盼。提醒年轻的父母们，千万不要让自己年幼的孩子独处，在这个复杂的社会中保护好你的孩子。</p>','0');");
E_D("replace into `qb_wei_content_1` values('27','','27','4','1','1','<p>做一档和性格色彩有关的节目，让人们可以通过电视节目真正看清自己读懂他人，这些年，我一直在努力。</p>','0');");
E_D("replace into `qb_wei_content_1` values('28','','28','5','1','1','<p>終於拿到金童玉女DVD也看完了，這部作品我自己很喜歡，劇情緊湊，也有能讓人省思的地方，一部好戲就是能讓人看完能在腦海裡引起漣漪，也謝謝用心的牛導，我想這是一部給我好多信心的一部電影，沒看過的朋友想辦法看一下吧！最近休息就變成大叔了，大家別見怪呀，哈哈！</p>','0');");
E_D("replace into `qb_wei_content_1` values('29','','29','5','1','1','<p>冬去春来，匆匆忙忙的，又开始新的一年去拼搏了</p>','0');");
E_D("replace into `qb_wei_content_1` values('30','','30','5','1','1','<p>我拍的真是马路！</p>','0');");
E_D("replace into `qb_wei_content_1` values('31','','31','5','1','1','<p> 好累、终于到家了！猜猜我都买什么花了？该怎么摆才好呢？</p>','0');");
E_D("replace into `qb_wei_content_1` values('32','','32','5','1','1','<p> 你可知道塞车这种痛苦？很难受的！哎！</p>','0');");

require("../../inc/footer.php");
?>