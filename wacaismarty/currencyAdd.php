<?php
require "./libs/Smarty.class.php";
require "./dblink.php";
$smarty=new Smarty;

$currency_name=$_POST['currency_name'];
$currency_rate=$_POST['currency_rate'];
$backurl=$_POST['backurl'];
$list_url="currencyList.php";

if(!$currency_name){
	echo "currency_name is empty! <br><a href='".$backurl."'>try again</a>";
	exit;
}
$count=$db->exec("insert into ".$db_tb_pre."currency  (currency_name,currency_addtime,currency_edittime,currency_rate ) values ('$currency_name', ".time().", ".time().", $currency_rate)");
if($count){
	$smarty->assign('info','新汇率录入成功!');
	$smarty->assign('backurl',"<a href='".$backurl."'>再次输入</a>");
	$smarty->assign('list_url',"<a href='".$list_url."'>汇率列表</a>");
}else{
	$smarty->assign('info',"新汇率录入失败！");
	$smarty->assign('backurl',"<a href='".$backurl."'>再次输入</a>");
	$smarty->assign('list_url',"<a href='".$list_url."'>汇率列表</a>");
}
$smarty->display("currencyAdd.html");








?>