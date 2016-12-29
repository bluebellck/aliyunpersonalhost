<?php
require "./libs/Smarty.class.php";
require "./dblink.php";
$smarty=new Smarty;

$currency_id=$_GET['catid'];
$add_url="currencyAddForm.php";
$list_url="currencyList.php";

$count=$db->exec("delete from ".$db_tb_pre."currency where currency_id=$currency_id");
$smarty->assign('info',"分类删除成功");
$smarty->assign('add_url',"<a href='".$add_url."'>再次输入</a>");
$smarty->assign('list_url',"<a href='".$list_url."'>分类列表</a>");
$smarty->display("currencyDelete.html");








?>