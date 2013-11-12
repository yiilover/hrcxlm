<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_dianping_content_1`;");
E_C("CREATE TABLE `qb_dianping_content_1` (
  `rid` mediumint(7) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL DEFAULT '0',
  `fid` mediumint(7) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL,
  `sortid` tinyint(3) NOT NULL DEFAULT '0',
  `sortid2` tinyint(3) NOT NULL DEFAULT '0',
  `my_228` tinyint(1) NOT NULL DEFAULT '0',
  `my_837` varchar(100) NOT NULL DEFAULT '',
  `my_613` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`rid`),
  KEY `fid` (`fid`),
  KEY `id` (`id`),
  KEY `uid` (`uid`),
  KEY `sortid` (`sortid`),
  KEY `my_228` (`my_228`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=gbk");
E_D("replace into `qb_dianping_content_1` values('12','11','18','1','　　作为海南四大名菜之首的海量文昌鸡隆重登场，这道菜是他们得过六年金奖的一道著名菜式，文昌鸡体型方圆、脚胫短细、肉香馥郁，实为经典。\r\n　　出品：大椰风饭中华广场店\r\n　　地址：中山三路33号中华广场6楼\r\n　　电话：83738488 83738588','2','2','1','15路','汉海站');");
E_D("replace into `qb_dianping_content_1` values('3','2','18','1','第三批小小食家，围攻“大哥”\r\n　　第三批小小食家迅速组建成功：7岁的德宇、8岁的德灏、10岁半的岚天。今年，我分别策动了两批的小小食家，能吃、好吃是他们的共性。 \r\n　　大哥餐厅的现场，德灏用筷子卷意粉的方法去卷起了乌黑油亮的“大哥特色干炒牛河”，因为这样可以卷多一些塞进嘴里；岚天用叉子戳向“芝士肉酱炸薯条”；德宇凑热闹搞局，抢吃薯条，右眼的余光扫过了“大哥手撕俏皮鸡”，左眼又瞄着盐酥鸡。 \r\n　　几轮冲锋，不表战况，只道战果，经过三位小小食家扫荡，碟里还剩三分之一的有：大哥特色干炒牛河、盐酥鸡、芒西椰奶、马来柑橘话梅蜜、公主的城堡；被全部清盘的美食是：芝士肉酱炸薯条、西汁忌廉蛋包牛肉饭、马来咖喱牛筋腩、奶油猪、精装迷你奶油西多士、恐龙阿华田。哈哈，小小食家们真的藏了巨胃，可以容纳大量可口美味的食物。','3','3','3','124路','中山站');");
E_D("replace into `qb_dianping_content_1` values('4','3','18','1','　　香浓的冰激凌中有软软的水果、脆脆的坚果，口感非常丰富。你也可以按照TA的口味，自由换冰激凌里的“馅料”，例如加巧克力豆、葡萄干等。\r\n　　所有原料都非常容易买到，但是通过你的简单加工和精美摆盘，完全能成就定制级别的绝美甜品。当然，如果你的礼物是小小的首饰，你还可以玩玩浪漫，将它埋入冰激凌中。\r\n　　原料：美国大杏仁一小把，水果（如猕猴桃、橙子或草莓各1只），威化饼干2块，冰激凌一杯\r\n　　步骤：\r\n　　1.将大杏仁切碎粒。\r\n　　2.把水果切小丁。\r\n　　3.威化饼干切小丁。\r\n　　4.把冰激凌放在冰箱冷藏室里回温约30分钟，然后把冰激凌倒入搅拌碗中，加入水果、威化饼和大杏仁适量一起搅拌即可。也可以待冰激凌软化一点后，把水果、大杏仁和饼干与冰激凌混合，用勺子搅拌后食用。','4','2','3','','');");
E_D("replace into `qb_dianping_content_1` values('5','4','18','1','　我家宝宝最爱吃那些五颜六色的菜式。宝贝说:“菜菜漂亮，吃起来也开心。”呵呵，身为妈妈的我，看着宝宝吃得开心，心里自然也美滋滋的。今天弄了道外观很吸引人又补铁的养生菜。\r\n　　材料:猪肝200克、窝窝头 7-10个、泡发好的黑木耳20克，红、黄、绿彩椒各20克。\r\n　　\r\n　　点做？\r\n　　1、将彩椒和黑木耳都切成碎末，再切点葱末和蒜末备用；\r\n\r\n　　2、将窝窝头隔水蒸热蒸软备用；\r\n\r\n　　3、将猪肝焯水 ，8成熟；将猪肝切成小丁备用；\r\n\r\n　　4、将锅烧热，锅中倒色拉油40克左右，油6成热时倒入葱蒜爆香，倒入猪肝，翻炒半分钟左右，倒入5克料酒翻炒几下，加入生抽20毫升，加入黑木耳，翻炒1分钟，太干的话可以加个20克热水；\r\n\r\n　　5、倒入彩椒，翻炒几下，出锅；\r\n\r\n　　6、将炒好的猪肝彩椒碎用勺子盛入事先准备好的窝窝头中，开吃啦。趁热食用，一次最好不要超过2个。','2','2','4','','');");
E_D("replace into `qb_dianping_content_1` values('6','5','18','1','　　东坡懂得吃，也自称“宁可食无肉，不可居无竹”。因其老饕和老顽童的个性，还白白被后人附会出一首“无肉令人瘦，无竹令人俗，若要不瘦且不俗，唯有竹笋焖猪肉”。但说到对竹笋的理解，还是老实巴交的杨万里说得好－－“淡处当知有真味”。\r\n　　鲜笋很淡，春笋就更淡了。而那种淡一被激发，就成味中珍鲜。以江浙人的话来说，就是“鲜得眉毛 都掉了”。\r\n　　虽然我更爱好略带苦味的冬笋，但春机勃勃之时，春笋也是不可放过的。\r\n　　笋的做法有很多。炒肉、焖肉、放汤，都能做出简单美味的家常菜。\r\n　　用鲜笋做出来的菜式，怎么看都有个性。\r\n　　小笋炒鸡蛋，是清清白白，小家碧玉。\r\n　　笋片炒腊肉，极尽吸味之能事，一试便欲罢不能。\r\n　　青花碗、青花勺，笋丝飘在清汤上，简直就是临水照花，幽芳自赏了。','3','3','2','54路','东口站');");
E_D("replace into `qb_dianping_content_1` values('7','6','18','1','　　新兴是个盆地，就好像锅底一样！同行的地胆华哥这样介绍，我立刻想到食，除了这里盛产不锈钢厨具外，我能想到的就是一条条清溪从山上流淌下来，流到“锅底”。果然地胆带我们到镇上一个住家店。一家人做在店内吃饭，见我们到来，先把我们引进小房，然后老板就吩咐伙计捞虾、宰鱼、洗螺、拔鸡毛。 \r\n　　说是溪鲜，我最讨厌所谓的油炸山坑鱼，小鱼猫丁丁大、吸饱油，只剩调味料味道。所以再三确认这山坑鱼非鱼猫，而是被当地人称为“狗仔鱼”。因为它在溪里喜欢用脑壳顶起石头找食，就像小狗觅食翻翻找找?解！看它的模样像鲩鱼，但是吃法像鲤鱼不去鳞，连鳞清蒸，大大片的鳞嚼起来少少爽！而鱼肉就细致得如童颜，带着天真的鲜味。铁盘蒸出来，空调房里一吹一下子鱼凉了，正是可惜的时候，发现鱼即使凉了，鱼味儿层次更突出，未有半点腥气，真是神了！','5','4','4','120路','小车站');");
E_D("replace into `qb_dianping_content_1` values('8','7','18','1','一些香槟或者葡萄酒附送的小食。分别是德国鱼子酱、西班牙火腿、香辣鸡软骨、酥炸鸭舌。\r\n\r\n　　个漂亮的造型和特别的口感。记者在这里要提醒一下，大家要记得，它们虽然有美丽的外表和甜美的果香，但同样是用伏特加、白兰地等烈酒调制的，酒精度绝对不容小看。\r\n　　与其他酒吧不同的是，这里不提倡客人喝啤酒或者胡乱勾兑的葡萄酒、烈酒，而是推崇纯品香槟、葡萄酒。酒吧特地引入顶级香槟－－法国酩悦香槟。客人点选一些名贵酒品的时候，这里还会附送香辣鸡软骨、酥炸鸭舌、小批萨等新鲜现做的小吃，其中不乏高档进口配酒食品，例如西班牙火腿、德国的鱼子酱。小食以凉菜为主，装碟上场的方式又要与普通食肆区分开来不同，以高脚雪糕杯一样的容器奉上，以小花小草点缀，清新宜人。当它们与香槟、葡萄酒摆在一起的时候，我们会误以为自己在喝西式的下午茶。','2','2','4','23路','大东站');");
E_D("replace into `qb_dianping_content_1` values('9','8','18','1','　　是亚洲餐饮文化独有的符号和象征。如果一家餐厅的出品，能够使得中国、新加坡、马来西亚、印尼、泰国、越南、日本等美食国度的人们都愿意拿起手中的筷子去品尝，那它该要有多大的能耐？日前，荟萃了亚洲各地丰盛美食的“筷子荟”亚洲餐厅就在广州塔的负一层低调开业，高调上菜。来自新加坡的餐厅总经理Roy Tan立志要在广州的地标建筑物里，做广州最好、最地道的亚洲美食，既要让来广州游玩的各国人民吃得开心，更要令广州市民近在家门口也能大饱口福。\r\n　　餐厅装修风格简洁时尚，大地系的主色调、原木的餐桌餐椅、宽敞的落地玻璃、柔和的灯光都给人以一种温暖质朴的感觉。开放式厨房的设计既增强了餐厅的空间感，又令食客能亲眼看到厨师团队精心准备每一道美食的过程，他们精湛的厨艺无疑成为了餐前最令人心动的前戏。\r\n　　虽然餐厅荟萃了亚洲各国的风味美食，用料繁复，但为了保证出品的正宗和地道，Roy Tan仍然坚持大部分原料都必须由原产地进口，比如东南亚菜系常用的各种香草和新鲜香料，就全部都要漂洋过海而来。马来西亚总厨苏师傅不但带来当地传统怀旧的佳肴，还带来那边新兴的特色烹饪法，让广州食客们大为受落。想知道这里的出品是不是有够地道？以下几道出品你不得不试。','4','4','4','','');");
E_D("replace into `qb_dianping_content_1` values('10','9','18','1','朋友请客，据说是要先预订才能来吃的。\r\n走到胡同的时候，完全看不出来这里是个吃饭的地方，一个四合院的房子，大门紧闭，要敲门才入内。\r\n听朋友说这里是午饭到下午茶是不翻桌的，所以吃完午饭就可以喝茶，相待多久都行。\r\n\r\n100一位的自助小火锅，先给我们上了一铺丸子，说是吃完后再点喜欢吃的。\r\n没想到丸子都挺好吃的，特别是芝士丸，还有虾丸，很Q，馅儿很好吃，我们后来加了很多次~~~\r\n\r\n虽然吃得很撑，但是又普洱茶来消油腻，以下午从那儿看书，聊天，环境也装修得非常漂亮，很有丽江的感觉。 真是不错，以后有机会和朋友聚会的时候也会再去的~~~','1','1','4','','');");
E_D("replace into `qb_dianping_content_1` values('11','10','18','1','人气“很旺”，每到饭点“都要排队”。烤鱼有“N多”口味可选，味道“没得说”，皮可以“大块”地撕下来吃，那叫一个“过瘾”，肉也烤得“恰到好处”，整个一“外焦里嫩”，配菜的话，选土豆、莴笋、豆皮、木耳等“比较经典”。还有“免费”瓜子和茶水“无限供应”，真是“聊天乱侃”的好地方。','1','1','4','','');");

require("../../inc/footer.php");
?>