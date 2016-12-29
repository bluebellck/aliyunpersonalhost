<?php
require "./libs/Smarty.class.php";
require "./dblink.php";
$smarty=new Smarty;

$backurl="memberAddForm.php";

$smarty->assign("backurl",$backurl);
$smarty->display("memberAddForm.html");








?>