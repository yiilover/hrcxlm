<?php
$pmword = $pmNUM ? "<a href=\"pm.php?job=list\" style=\"color:red;\">�����µ���Ϣ,��ע�����!!</a>" : "<a href=\"pm.php?job=list\" style=\"color:#888;\">����ʱû������Ϣ!</a>";

//��������µ����뽻��
$m3time=$timestamp-60*60*24*90;
@extract($db->get_one("SELECT COUNT(*) AS m3buynum FROM {$pre}shop_join WHERE posttime>'$m3time' AND uid='$lfjuid'"));

//�ҵ�δ�����
@extract($db->get_one("SELECT COUNT(*) AS myunfay FROM {$pre}shop_join WHERE ifpay!=1 AND uid='$lfjuid'"));

//�ҵĵȴ����۵Ľ���
@extract($db->get_one("SELECT COUNT(*) AS myuncomment FROM {$pre}shop_join WHERE ifcomment!=1 AND uid='$lfjuid'"));

//��������µĶ���
@extract($db->get_one("SELECT COUNT(*) AS m3ordernum FROM {$pre}shop_join WHERE posttime>'$m3time' AND cuid='$lfjuid'"));

//�ҵ�δ�����Ķ���
@extract($db->get_one("SELECT COUNT(*) AS myunsend FROM {$pre}shop_join WHERE ifsend!=1 AND cuid='$lfjuid'"));

//�ҵ��޿�����Ʒ
@extract($db->get_one("SELECT COUNT(*) AS mynostorage FROM {$pre}shop_content_1 WHERE storage<1 AND uid='$lfjuid'"));





//�ҵķ�����Ϣ
$rt=$db->get_one("SELECT COUNT(*) AS num FROM {$pre}fenlei_content WHERE uid='$lfjuid'");
$data[fenlei_num]=$rt[num];
//�ҵ���Ʒ
$rt=$db->get_one("SELECT COUNT(*) AS num FROM {$pre}shop_content WHERE uid='$lfjuid'");
$data[shop_num]=$rt[num];
//�ҵ��Ź�
$rt=$db->get_one("SELECT COUNT(*) AS num FROM {$pre}tuangou_content WHERE uid='$lfjuid'");
$data[tuangou_num]=$rt[num];
//�ҵĴ���
$rt=$db->get_one("SELECT COUNT(*) AS num FROM {$pre}coupon_content WHERE uid='$lfjuid'");
$data[coupon_num]=$rt[num];
//�������ְλ
$rt=$db->get_one("SELECT COUNT(*) AS num FROM {$pre}hr_apply WHERE uid='$lfjuid'");
$data[hr_apply_num]=$rt[num];
//�ҵ�ְλ
$rt=$db->get_one("SELECT COUNT(*) AS num FROM {$pre}hr_content WHERE uid='$lfjuid'");
$data[hr_num]=$rt[num];
//�ҵ�����
$rt=$db->get_one("SELECT COUNT(*) AS num FROM {$pre}news_content WHERE uid='$lfjuid'");
$data[article]=$rt[num];
?>