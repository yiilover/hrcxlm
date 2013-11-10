/*
MySQL Data Transfer
Source Host: localhost
Source Database: qibo5.0.1
Target Host: localhost
Target Database: qibo5.0.1
Date: 2013/10/4 20:29:00
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for qb_menu
-- ----------------------------
CREATE TABLE `qb_menu` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `fid` mediumint(5) NOT NULL DEFAULT '0',
  `name` varchar(80) NOT NULL DEFAULT '',
  `linkurl` varchar(150) NOT NULL DEFAULT '',
  `color` varchar(15) NOT NULL DEFAULT '',
  `target` tinyint(1) NOT NULL DEFAULT '0',
  `moduleid` tinyint(2) NOT NULL DEFAULT '0',
  `type` tinyint(2) NOT NULL DEFAULT '0',
  `hide` tinyint(1) NOT NULL DEFAULT '0',
  `list` smallint(4) NOT NULL DEFAULT '0',
  `extend` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `qb_menu` VALUES ('60', '0', '黄页', '/hy', '', '0', '0', '0', '0', '16', '16');
INSERT INTO `qb_menu` VALUES ('52', '0', '资讯', '/news/', '', '0', '0', '0', '0', '19', '20');
INSERT INTO `qb_menu` VALUES ('51', '0', '首页', '/', '', '0', '0', '0', '0', '20', '0');
INSERT INTO `qb_menu` VALUES ('55', '0', '礼品', '/gift/', '', '0', '0', '0', '0', '12', '26');
INSERT INTO `qb_menu` VALUES ('56', '0', '活动', '/tg/', '', '0', '0', '0', '0', '15', '28');
INSERT INTO `qb_menu` VALUES ('57', '0', '促销', '/coupon/', '', '0', '0', '0', '0', '14', '27');
INSERT INTO `qb_menu` VALUES ('58', '0', '商城', '/shop/', '', '0', '0', '0', '0', '17', '29');
INSERT INTO `qb_menu` VALUES ('59', '0', '分类', '/f/', '', '0', '0', '0', '0', '18', '36');
INSERT INTO `qb_menu` VALUES ('61', '0', '招聘', '/hr/', '', '0', '0', '0', '0', '13', '31');
INSERT INTO `qb_menu` VALUES ('62', '0', '团购', '/shoptg/', '', '0', '0', '0', '0', '11', '37');
INSERT INTO `qb_menu` VALUES ('63', '0', '房产', '/house/', '', '0', '0', '0', '0', '10', '38');
INSERT INTO `qb_menu` VALUES ('64', '0', '点评', '/dianping/', '', '0', '0', '0', '0', '9', '39');
INSERT INTO `qb_menu` VALUES ('65', '0', '二手市场', '/2shou/', '', '0', '0', '0', '0', '8', '40');
INSERT INTO `qb_menu` VALUES ('66', '0', '地图搜店', '/dianping/ditu.php', '', '0', '0', '0', '0', '0', '');
INSERT INTO `qb_menu` VALUES ('67', '0', '装修', '/zhuangxiu/', '', '0', '0', '0', '0', '7', '50');
INSERT INTO `qb_menu` VALUES ('74', '63', '地图搜房', '/house/ditu.php', '', '0', '0', '0', '0', '0', '');
INSERT INTO `qb_menu` VALUES ('72', '51', '发布信息', '/f/post.php', '', '0', '0', '0', '1', '0', '');
INSERT INTO `qb_menu` VALUES ('73', '51', '投诉建议', '/form/form.php?mid=3', '', '0', '0', '0', '0', '0', '');
INSERT INTO `qb_menu` VALUES ('75', '58', '最新商品', '/shop/all.php', '', '0', '0', '0', '0', '0', '');
INSERT INTO `qb_menu` VALUES ('76', '58', '热门商品', '/shop/all.php?show_type=2', '', '0', '0', '0', '0', '0', '');
INSERT INTO `qb_menu` VALUES ('77', '56', '最新活动', '/tg/all.php', '', '0', '0', '0', '0', '0', '');
INSERT INTO `qb_menu` VALUES ('78', '56', '热门活动', '/tg/all.php?show_type=2', '', '0', '0', '0', '0', '0', '');
INSERT INTO `qb_menu` VALUES ('79', '57', '最新促销信息', '/coupon/all.php', '', '0', '0', '0', '0', '0', '');
INSERT INTO `qb_menu` VALUES ('80', '57', '热门促销信息', '/coupon/all.php?show_type=2', '', '0', '0', '0', '0', '0', '');
INSERT INTO `qb_menu` VALUES ('81', '55', '最新礼品', '/gift/all.php', '', '0', '0', '0', '0', '0', '');
INSERT INTO `qb_menu` VALUES ('82', '55', '热门礼品', '/gift/all.php?show_type=2', '', '0', '0', '0', '0', '0', '');
INSERT INTO `qb_menu` VALUES ('83', '62', '最新团购信息', '/shoptg/all.php', '', '0', '0', '0', '0', '0', '');
INSERT INTO `qb_menu` VALUES ('84', '62', '热门团购信息', '/shoptg/all.php?show_type=2', '', '0', '0', '0', '0', '0', '');
INSERT INTO `qb_menu` VALUES ('85', '64', '热门点评信息', '/dianping/all.php?show_type=2', '', '0', '0', '0', '0', '0', '');
INSERT INTO `qb_menu` VALUES ('86', '64', '最新点评信息', '/dianping/all.php', '', '0', '0', '0', '0', '0', '');
INSERT INTO `qb_menu` VALUES ('87', '0', '微分享', '/wei/', '', '0', '0', '0', '0', '6', '51');
