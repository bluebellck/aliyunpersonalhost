<?php
require "./libs/Smarty.class.php";
require "./dblink.php";
$smarty=new Smarty;

$backurl="payShopAddForm.php";

$smarty->assign("backurl",$backurl);
$smarty->display("payShopAddForm.html");








?>