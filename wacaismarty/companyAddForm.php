<?php
require "./libs/Smarty.class.php";
require "./dblink.php";
$smarty=new Smarty;

$backurl="companyAddForm.php";

$smarty->assign("backurl",$backurl);
$smarty->display("companyAddForm.html");








?>