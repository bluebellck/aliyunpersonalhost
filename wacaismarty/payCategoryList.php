<?php
require "./libs/Smarty.class.php";
require "./dblink.php";
$smarty=new Smarty;

$rs=$db->query("select * from ".$db_tb_pre."pay_category where pay_user_id=1 and pay_parent_id=0");
$rs->setFetchMode(PDO::FETCH_ASSOC);
$result_arr=$rs->fetchAll();
foreach($result_arr as $key=>$value){
	$rs_child=$db->query("select * from ".$db_tb_pre."pay_category where pay_user_id=1 and pay_parent_id=".$value['pay_catid']);
	$rs_child->setFetchMode(PDO::FETCH_ASSOC);
	$result_child_arr[$value['pay_catid']]=$rs_child->fetchAll();
}
$smarty->assign("parent_arr",$result_arr);
$smarty->assign("child_arr",$result_child_arr);
$smarty->display("payCategoryList.html");











?>