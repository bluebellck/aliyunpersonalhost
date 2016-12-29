<?php
require "./libs/Smarty.class.php";
require "./dblink.php";
$smarty=new Smarty;

$pay_catid=$_GET['catid'];
$add_url="payCategoryAddForm.php";
$list_url="payCategoryList.php";

$count=$db->exec("delete from wacai_pay_category where pay_catid=$pay_catid or pay_parent_id=$pay_catid ");
$smarty->assign('info',"分类删除成功");
$smarty->assign('add_url',"<a href='".$add_url."'>再次输入</a>");
$smarty->assign('list_url',"<a href='".$list_url."'>分类列表</a>");
$smarty->display("payCategoryDelete.html");








?>