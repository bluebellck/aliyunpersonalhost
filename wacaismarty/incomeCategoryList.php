<?php
require "./libs/Smarty.class.php";
require "./dblink.php";
$smarty=new Smarty;

$rs=$db->query("select * from ".$db_tb_pre."income_category where income_user_id=1");
$rs->setFetchMode(PDO::FETCH_ASSOC);
$result_arr=$rs->fetchAll();
$smarty->assign("result_arr",$result_arr);
$smarty->display("incomeCategoryList.html");











?>