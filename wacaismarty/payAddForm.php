<?php
require "./libs/Smarty.class.php";
require "./dblink.php";
$smarty=new Smarty;

$account_t=$_GET['account_t'];
$backurl="accountAddForm.php";

//取得支出的类别，到二级为止
$rs=$db->query("select * from ".$db_tb_pre."pay_category where pay_user_id=1 and pay_parent_id=0");
$rs->setFetchMode(PDO::FETCH_ASSOC);
$r=$rs->fetchAll();
foreach($r as $key=>$value){
	$cate_parent[$value['pay_catid']]=$value['pay_catname'];
	$rs=$db->query("select * from ".$db_tb_pre."pay_category where pay_user_id=1 and pay_parent_id='".$value['pay_catid']."'");
	$rs->setFetchMode(PDO::FETCH_ASSOC);
	$rr=$rs->fetchAll();
	foreach($rr as $r_key=>$r_value){
		$cate_children[$value['pay_catid']][]=array("cate_id"=>$r_value['pay_catid'],"cate_name"=>$r_value['pay_catname']);
	}
}

//取得商家
$rs=$db->query("select * from ".$db_tb_pre."pay_shop where pay_shop_user_id=1");
$rs->setFetchMode(PDO::FETCH_ASSOC);
$r=$rs->fetchAll();
foreach($r as $key=>$value){
	$shop[$value['pay_shop_id']]=$value['pay_shop_name'];
}

//取得项目
$rs=$db->query("select * from ".$db_tb_pre."project where project_user_id=1");
$rs->setFetchMode(PDO::FETCH_ASSOC);
$r=$rs->fetchAll();
foreach($r as $key=>$value){
	$project[$value['project_id']]=$value['project_name'];
}

//取得成员
$rs=$db->query("select * from ".$db_tb_pre."member where member_user_id=1");
$rs->setFetchMode(PDO::FETCH_ASSOC);
$r=$rs->fetchAll();
foreach($r as $key=>$value){
	$member[$value['member_id']]=$value['member_name'];
}
var_dump(unserialize('a:3:{i:1;s:3:"100";i:3;s:3:"200";i:4;s:3:"300";}'));


$smarty->assign("cate_parent",$cate_parent);
$smarty->assign("cate_children",$cate_children);
$smarty->assign("shop",$shop);

$smarty->assign("project",$project);
$smarty->assign("member",$member);
$smarty->assign("backurl",$backurl);
$smarty->display("payAddForm.html");







?>