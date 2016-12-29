<?php
require "./libs/Smarty.class.php";
require "./dblink.php";
$smarty=new Smarty;

$rs=$db->query("select * from ".$db_tb_pre."pay_category where pay_parent_id=0");
$rs->setFetchMode(PDO::FETCH_ASSOC);
$rs_arr=$rs->fetchAll();
if(count($rs_arr)){
	$smarty->assign("rs_arr",$rs_arr);
}
$backurl="payCategoryAddForm.php";

$smarty->assign("backurl",$backurl);
$smarty->display("payCategoryAddForm.html");








?>