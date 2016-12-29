<?php
require "./libs/Smarty.class.php";
require "./dblink.php";
$smarty=new Smarty;

$pay_parent_id=$_POST['pay_parent_id'];
$pay_catname=$_POST['pay_catname'];
$backurl=$_POST['backurl'];
$list_url="payCategoryList.php";

if(!$pay_catname){
	echo "cat_name is empty! <br><a href='".$backurl."'>tyr again</a>";
	exit;
}
$count=$db->exec("insert into ".$db_tb_pre."pay_category  (pay_catname,pay_parent_id,pay_parent_allid,pay_addtime,pay_edittime,pay_user_id ) values ('$pay_catname',$pay_parent_id, $pay_parent_id, ".time().", ".time().", '1')");
if($count){
	$smarty->assign('info','新分类录入成功!');
	$smarty->assign('backurl',"<a href='".$backurl."'>再次输入</a>");
	$smarty->assign('list_url',"<a href='".$list_url."'>分类列表</a>");
}else{
	$smarty->assign('info',"录入失败！");
	$smarty->assign('backurl',"<a href='".$backurl."'>再次输入</a>");
	$smarty->assign('list_url',"<a href='".$list_url."'>分类列表</a>");
}
$smarty->display("payCategoryAdd.html");








?>