<?php
require "./libs/Smarty.class.php";
require "./dblink.php";
$smarty=new Smarty;

$account_id=$_GET['catid'];
$add_url="accountAddForm.php";
$list_url="accountList.php";

$count=$db->exec("delete from ".$db_tb_pre."account where account_id=$account_id");
$smarty->assign('info',"账户删除成功");
$smarty->assign('add_url',"<a href='".$add_url."'>再次输入</a>");
$smarty->assign('list_url',"<a href='".$list_url."'>账户列表</a>");
$smarty->display("accountDelete.html");








?>