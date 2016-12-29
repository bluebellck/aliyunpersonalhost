<?php
require "./libs/Smarty.class.php";
require "./dblink.php";
$smarty=new Smarty;

$project_name=$_POST['project_name'];
$backurl=$_POST['backurl'];
$list_url="projectList.php";

if(!$project_name){
	echo "project_name is empty! <br><a href='".$backurl."'>try again</a>";
	exit;
}
$count=$db->exec("insert into ".$db_tb_pre."project  (project_name,project_addtime,project_edittime,project_user_id ) values ('$project_name', ".time().", ".time().", '1')");
if($count){
	$smarty->assign('info','新成员录入成功!');
	$smarty->assign('backurl',"<a href='".$backurl."'>再次输入</a>");
	$smarty->assign('list_url',"<a href='".$list_url."'>分类列表</a>");
}else{
	$smarty->assign('info',"新成员录入失败！");
	$smarty->assign('backurl',"<a href='".$backurl."'>再次输入</a>");
	$smarty->assign('list_url',"<a href='".$list_url."'>分类列表</a>");
}
$smarty->display("projectAdd.html");








?>