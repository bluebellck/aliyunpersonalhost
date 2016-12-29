<?php
require "./libs/Smarty.class.php";
require "./dblink.php";
$smarty=new Smarty;

$account_t=$_GET['account_t'];
$backurl="accountAddForm.php";

$rs=$db->query("select currency_id, currency_name,currency_abbreviation from ".$db_tb_pre."currency");
$rs->setFetchMode(PDO::FETCH_ASSOC);
$statistical=$rs->fetchAll();

if($account_t=="credit" || $account_t=='deposit'){
	$rs=$db->query("select company_id, company_name from ".$db_tb_pre."company where company_type='bank'");
	$rs->setFetchMode(PDO::FETCH_ASSOC);
	$company=$rs->fetchAll();
	$smarty->assign("company",$company);
}
if($account_t=="investment"){
	$rs=$db->query("select company_id, company_name from ".$db_tb_pre."company where company_type='investment'");
	$rs->setFetchMode(PDO::FETCH_ASSOC);
	$company=$rs->fetchAll();
	$smarty->assign("company",$company);
}
if($account_t=="internet"){
	$rs=$db->query("select company_id, company_name from ".$db_tb_pre."company where company_type='internet'");
	$rs->setFetchMode(PDO::FETCH_ASSOC);
	$company=$rs->fetchAll();
	$smarty->assign("company",$company);
}

$smarty->assign("statistical",$statistical);
$smarty->assign("account_t",$account_t);
$smarty->assign("backurl",$backurl);
$smarty->display("accountAddForm.html");







?>