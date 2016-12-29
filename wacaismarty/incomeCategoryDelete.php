<?php
require "./libs/Smarty.class.php";
require "./dblink.php";
$smarty=new Smarty;

$income_catid=$_GET['catid'];
$add_url="incomeCategoryAddForm.php";
$list_url="incomeCategoryList.php";

$count=$db->exec("delete from ".$db_tb_pre."income_category where income_catid=$income_catid");
$smarty->assign('info',"分类删除成功");
$smarty->assign('add_url',"<a href='".$add_url."'>再次输入</a>");
$smarty->assign('list_url',"<a href='".$list_url."'>分类列表</a>");
$smarty->display("incomeCategoryDelete.html");








?>