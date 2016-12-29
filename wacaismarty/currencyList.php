<?php
require "./libs/Smarty.class.php";
require "./dblink.php";
$smarty=new Smarty;

$rs=$db->query("select * from ".$db_tb_pre."currency");
$rs->setFetchMode(PDO::FETCH_ASSOC);
$result_arr=$rs->fetchAll();
$smarty->assign("result_arr",$result_arr);
$smarty->display("currencyList.html");











?>