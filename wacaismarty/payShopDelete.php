<?php
require "./libs/Smarty.class.php";
require "./dblink.php";
$smarty=new Smarty;

$pay_shop_id=$_GET['catid'];
$add_url="payShopAddForm.php";
$list_url="payShopList.php";

$count=$db->exec("delete from ".$db_tb_pre."pay_shop where pay_shop_id=$pay_shop_id");
$smarty->assign('info',"分类删除成功");
$smarty->assign('add_url',"<a href='".$add_url."'>再次输入</a>");
$smarty->assign('list_url',"<a href='".$list_url."'>分类列表</a>");
$smarty->display("payShopDelete.html");








?>