<?php
require "./libs/Smarty.class.php";
require "./dblink.php";
$smarty=new Smarty;

var_dump($_POST);
$pay_shop_name=$_POST['pay_shop_name'];
$backurl=$_POST['backurl'];
$list_url="payShopList.php";

if(!$pay_shop_name){
	echo "pay_shop_name is empty! <br><a href='".$backurl."'>try again</a>";
	exit;
}
$count=$db->exec("insert into ".$db_tb_pre."pay_shop  (pay_shop_name,pay_shop_addtime,pay_shop_edittime,pay_shop_user_id ) values ('$pay_shop_name', ".time().", ".time().", '1')");
if($count){
	$smarty->assign('info','新成员录入成功!');
	$smarty->assign('backurl',"<a href='".$backurl."'>再次输入</a>");
	$smarty->assign('list_url',"<a href='".$list_url."'>分类列表</a>");
}else{
	$smarty->assign('info',"新成员录入失败！");
	$smarty->assign('backurl',"<a href='".$backurl."'>再次输入</a>");
	$smarty->assign('list_url',"<a href='".$list_url."'>分类列表</a>");
}
$smarty->display("payShopAdd.html");








?>