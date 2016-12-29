<?php
require "./libs/Smarty.class.php";
require "./dblink.php";
$smarty=new Smarty;

$project_id=$_GET['catid'];
$add_url="projectAddForm.php";
$list_url="projectList.php";

$count=$db->exec("delete from ".$db_tb_pre."project where project_id=$project_id");
$smarty->assign('info',"分类删除成功");
$smarty->assign('add_url',"<a href='".$add_url."'>再次输入</a>");
$smarty->assign('list_url',"<a href='".$list_url."'>分类列表</a>");
$smarty->display("projectDelete.html");








?>