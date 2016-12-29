<?php
require "./libs/Smarty.class.php";
require "./dblink.php";
$smarty=new Smarty;

$backurl="currencyAddForm.php";

$smarty->assign("backurl",$backurl);
$smarty->display("currencyAddForm.html");








?>