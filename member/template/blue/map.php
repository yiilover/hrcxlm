<?php
$pmword = $pmNUM ? "<a href=\"pm.php?job=list\" style=\"color:red;\">你有新的消息,请注意查收!!</a>" : "<a href=\"pm.php?job=list\" style=\"color:#888;\">你暂时没有新消息!</a>";

//最近三个月的买入交易
$m3time=$timestamp-60*60*24*90;
@extract($db->get_one("SELECT COUNT(*) AS m3buynum FROM {$pre}shop_join WHERE posttime>'$m3time' AND uid='$lfjuid'"));

//我的未付款交易
@extract($db->get_one("SELECT COUNT(*) AS myunfay FROM {$pre}shop_join WHERE ifpay!=1 AND uid='$lfjuid'"));

//我的等待评价的交易
@extract($db->get_one("SELECT COUNT(*) AS myuncomment FROM {$pre}shop_join WHERE ifcomment!=1 AND uid='$lfjuid'"));

//最近三个月的订单
@extract($db->get_one("SELECT COUNT(*) AS m3ordernum FROM {$pre}shop_join WHERE posttime>'$m3time' AND cuid='$lfjuid'"));

//我的未发货的订单
@extract($db->get_one("SELECT COUNT(*) AS myunsend FROM {$pre}shop_join WHERE ifsend!=1 AND cuid='$lfjuid'"));

//我的无库存的商品
@extract($db->get_one("SELECT COUNT(*) AS mynostorage FROM {$pre}shop_content_1 WHERE storage<1 AND uid='$lfjuid'"));





//我的分类信息
$rt=$db->get_one("SELECT COUNT(*) AS num FROM {$pre}fenlei_content WHERE uid='$lfjuid'");
$data[fenlei_num]=$rt[num];
//我的商品
$rt=$db->get_one("SELECT COUNT(*) AS num FROM {$pre}shop_content WHERE uid='$lfjuid'");
$data[shop_num]=$rt[num];
//我的团购
$rt=$db->get_one("SELECT COUNT(*) AS num FROM {$pre}tuangou_content WHERE uid='$lfjuid'");
$data[tuangou_num]=$rt[num];
//我的促销
$rt=$db->get_one("SELECT COUNT(*) AS num FROM {$pre}coupon_content WHERE uid='$lfjuid'");
$data[coupon_num]=$rt[num];
//我申请的职位
$rt=$db->get_one("SELECT COUNT(*) AS num FROM {$pre}hr_apply WHERE uid='$lfjuid'");
$data[hr_apply_num]=$rt[num];
//我的职位
$rt=$db->get_one("SELECT COUNT(*) AS num FROM {$pre}hr_content WHERE uid='$lfjuid'");
$data[hr_num]=$rt[num];
//我的文章
$rt=$db->get_one("SELECT COUNT(*) AS num FROM {$pre}news_content WHERE uid='$lfjuid'");
$data[article]=$rt[num];
?>