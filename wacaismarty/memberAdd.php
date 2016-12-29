<?php
require "./libs/Smarty.class.php";
require "./dblink.php";
$smarty=new Smarty;

$member_name=$_POST['member_name'];
$backurl=$_POST['backurl'];
$list_url="memberList.php";

if(!$member_name){
	echo "member_name is empty! <br><a href='".$backurl."'>try again</a>";
	exit;
}
$count=$db->exec("insert into ".$db_tb_pre."member  (member_name,member_addtime,member_edittime,member_user_id ) values ('$member_name', ".time().", ".time().", '1')");
if($count){
	$smarty->assign('info','新成员录入成功!');
	$smarty->assign('backurl',"<a href='".$backurl."'>再次输入</a>");
	$smarty->assign('list_url',"<a href='".$list_url."'>分类列表</a>");
}else{
	$smarty->assign('info',"新成员录入失败！");
	$smarty->assign('backurl',"<a href='".$backurl."'>再次输入</a>");
	$smarty->assign('list_url',"<a href='".$list_url."'>分类列表</a>");
}
$smarty->display("memberAdd.html");








?>