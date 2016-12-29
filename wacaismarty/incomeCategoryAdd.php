<?php
require "./libs/Smarty.class.php";
require "./dblink.php";
$smarty=new Smarty;

$income_catname=$_POST['income_catname'];
$backurl=$_POST['backurl'];
$list_url="incomeCategoryList.php";

if(!$income_catname){
	echo "cat_name is empty! <br><a href='".$backurl."'>try again</a>";
	exit;
}
$count=$db->exec("insert into ".$db_tb_pre."income_category  (income_catname,income_addtime,income_edittime,income_user_id ) values ('$income_catname', ".time().", ".time().", '1')");
if($count){
	$smarty->assign('info','收入新分类录入成功!');
	$smarty->assign('backurl',"<a href='".$backurl."'>再次输入</a>");
	$smarty->assign('list_url',"<a href='".$list_url."'>分类列表</a>");
}else{
	$smarty->assign('info',"收入新分类录入失败！");
	$smarty->assign('backurl',"<a href='".$backurl."'>再次输入</a>");
	$smarty->assign('list_url',"<a href='".$list_url."'>分类列表</a>");
}
$smarty->display("incomeCategoryAdd.html");








?>