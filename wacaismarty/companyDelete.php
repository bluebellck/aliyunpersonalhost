<?php
require "./libs/Smarty.class.php";
require "./dblink.php";
$smarty=new Smarty;

$company_id=$_GET['catid'];
$add_url="companyAddForm.php";
$list_url="companyList.php";

$count=$db->exec("delete from ".$db_tb_pre."company where company_id=$company_id");
$smarty->assign('info',"公司删除成功");
$smarty->assign('add_url',"<a href='".$add_url."'>再次输入</a>");
$smarty->assign('list_url',"<a href='".$list_url."'>公司列表</a>");
$smarty->display("companyDelete.html");








?>