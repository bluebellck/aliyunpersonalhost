<?php
require "./libs/Smarty.class.php";
require "./dblink.php";
$smarty=new Smarty;

$company_name=$_POST['company_name'];
$company_type=$_POST['company_type'];
$backurl=$_POST['backurl'];
$list_url="companyList.php";

if(!$company_name){
	echo "company_name is empty! <br><a href='".$backurl."'>try again</a>";
	exit;
}
$count=$db->exec("insert into ".$db_tb_pre."company  (company_name,company_addtime,company_edittime,company_user_id,company_type ) values ('$company_name', ".time().", ".time().", 1,$company_type)");
if($count){
	$smarty->assign('info','新公司录入成功!');
	$smarty->assign('backurl',"<a href='".$backurl."'>再次输入</a>");
	$smarty->assign('list_url',"<a href='".$list_url."'>公司列表</a>");
}else{
	$smarty->assign('info',"新公司录入失败！");
	$smarty->assign('backurl',"<a href='".$backurl."'>再次输入</a>");
	$smarty->assign('list_url',"<a href='".$list_url."'>公司列表</a>");
}
$smarty->display("companyAdd.html");








?>