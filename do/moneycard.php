<?php
require("global.php");

if(!$lfjuid){
	showerr("������ǰ̨��¼");
}

if($action=='get')
{
	if(!$atc_passwd){
		showerr("�������ֵ������");
	}
	$rsdb=$db->get_one("SELECT * FROM {$pre}moneycard WHERE passwd='$atc_passwd'");
	if(!$rsdb){
		showerr("��ֵ�����벻��");
	}elseif($rsdb[ifsell]){
		showerr("����ֵ����ʹ�ù�,�벻Ҫ�ظ���ֵ");
	}
	$db->query("UPDATE {$pre}moneycard SET ifsell='1',uid='$lfjuid',username='$lfjid',posttime='$timestamp' WHERE id='$rsdb[id]'");

	add_user($lfjuid,$rsdb[moneycard],'��ֵ��(�㿨)��ֵ');

	refreshto("$webdb[www_url]/","��ϲ��,��ֵ�ɹ�",2);
}
elseif($action=='yu_er'){

	$post_rmb = intval($post_rmb);
	if($post_rmb<1){
		showerr("֧�����������1Ԫ��");
	}elseif($post_rmb>$lfjdb[rmb]){
		showerr("֧�����ܴ����㵱ǰ�ʻ�������");
	}

	$floor = floor($post_rmb/10);
	$num=$post_rmb*$webdb[alipay_scale] + $floor*$webdb[alipay_give_scale];
	
	add_rmb($lfjuid,-$post_rmb,0,'�ʻ�����ֵ����');
	add_user($lfjuid,$num,'�ʻ�����ֵ����');

	refreshto("$webdb[www_url]/","��ϲ��,��ֵ�ɹ�",2);
}

$lfjdb[money]=get_money($lfjdb[uid]);

require(ROOT_PATH."inc/head.php");
require(html("moneycard"));
require(ROOT_PATH."inc/foot.php");

?>