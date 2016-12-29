<?php
require "./libs/Smarty.class.php";
require "./dblink.php";
$smarty=new Smarty;

$backurl="projectAddForm.php";

$smarty->assign("backurl",$backurl);
$smarty->display("projectAddForm.html");








?>