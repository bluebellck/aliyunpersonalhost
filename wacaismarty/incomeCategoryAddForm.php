<?php
require "./libs/Smarty.class.php";
require "./dblink.php";
$smarty=new Smarty;

$backurl="incomeCategoryAddForm.php";

$smarty->assign("backurl",$backurl);
$smarty->display("incomeCategoryAddForm.html");








?>