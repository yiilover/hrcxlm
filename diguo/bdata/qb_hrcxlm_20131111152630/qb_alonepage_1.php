<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qb_alonepage`;");
E_C("CREATE TABLE `qb_alonepage` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `fid` mediumint(5) NOT NULL DEFAULT '0',
  `name` varchar(100) NOT NULL DEFAULT '',
  `title` varchar(100) NOT NULL DEFAULT '',
  `posttime` int(10) NOT NULL DEFAULT '0',
  `uid` mediumint(7) NOT NULL DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `style` varchar(15) NOT NULL DEFAULT '',
  `tpl_head` varchar(50) NOT NULL DEFAULT '',
  `tpl_main` varchar(50) NOT NULL DEFAULT '',
  `tpl_foot` varchar(50) NOT NULL DEFAULT '',
  `filename` varchar(100) DEFAULT NULL,
  `filepath` varchar(30) NOT NULL DEFAULT '',
  `descrip` text NOT NULL,
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `hits` int(7) NOT NULL DEFAULT '0',
  `ishtml` tinyint(1) NOT NULL DEFAULT '0',
  `ifclose` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk");
E_D("replace into `qb_alonepage` values('1','0','��������','��������','1322183267','0','','','','','','friendlink.htm','','��ӭ��Ҽ�����������','����¼��������','<table cellSpacing=4 cellPadding=4 width=\"100%\" border=0>\r\n<tbody>\r\n<tr>\r\n<td width=\"20%\"><a href=\"http://www.mmcbbs.com/\" target=_blank>ݼݼ��̳</a></td>\r\n<td width=\"20%\"><a href=\"http://www.liuv.net/\" target=_blank>��ˮ���</a></td>\r\n<td width=\"20%\"><a href=\"http://pic.goodod.com/\" target=_blank>ŷ���ֻ�ͼƬ</a></td>\r\n<td width=\"20%\"><a href=\"http://www.tianyakezhan.com/\" target=_blank>���Ŀ�ջ</a></td>\r\n<td width=\"20%\"><a href=\"http://www.czin.cn/\" target=_blank>��������</a></td></tr>\r\n<tr>\r\n<td width=\"20%\"><a href=\"http://www.jneg.com.cn/\" target=_blank>���ܼ�԰</a></td>\r\n<td width=\"20%\"><a href=\"http://www.wyrj.com/\" target=_blank>�����˼�</a></td>\r\n<td width=\"20%\"><a href=\"http://www.nenbei.com/\" target=_blank>�۱���</a></td>\r\n<td width=\"20%\"><a href=\"http://www.photosbar.com/\" target=_blank>ͼ��</a></td>\r\n<td width=\"20%\"><a href=\"http://www.ok586.cn/\" target=_blank>��������</a></td></tr>\r\n<tr>\r\n<td width=\"20%\"><a href=\"http://www.51solo.net/\" target=_blank>�Ұ���������</a></td>\r\n<td width=\"20%\"><a href=\"http://www.toopd.com/\" target=_blank>�������</a></td>\r\n<td width=\"20%\"><a href=\"http://www.qiqig.com/\" target=_blank>����</a></td>\r\n<td width=\"20%\"><a href=\"http://www.jxsrjys.com.cn/\" target=_blank>���Ľ���</a></td>\r\n<td width=\"20%\"><a href=\"http://www.unok.net/\" target=_blank>������</a></td></tr>\r\n<tr>\r\n<td width=\"20%\"><a href=\"http://mmm.pudou.com/\" target=_blank>�˶��й�</a></td>\r\n<td width=\"20%\"><a href=\"http://www.itzhan.com/\" target=_blank>IT����</a></td>\r\n<td width=\"20%\"><a href=\"http://www.hkwtv.com/\" target=_blank>�������</a></td>\r\n<td width=\"20%\">&nbsp;</td>\r\n<td width=\"20%\">&nbsp;</td></tr></tbody></table>','175','0','0');");
E_D("replace into `qb_alonepage` values('6','0','�ֻ��ͻ�������','�ֻ��ͻ�������','1354171963','0','','','template/default/none.htm','template/default/moble.htm','template/default/none.htm','do/moble.htm','','','','','72','1','0');");

require("../../inc/footer.php");
?>