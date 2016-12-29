<?php
require "./libs/Smarty.class.php";
require "./dblink.php";
$smarty=new Smarty;

$account_type=$_POST['account_type'];
if($account_type=='cash'){
	$remainding_money=$_POST['remainding_money'];
	$remainding_type=$_POST['remainding_type'];
	$account_statistical_id=$_POST['statistical_currency'];
	$account_remainder=array();

	foreach($remainding_type as $key=>$value){
		$account_remainder[$value]=$remainding_money[$key];
	}
	$account_remainder=serialize($account_remainder);
}elseif($account_type=='credit'){
	//发卡行
	$account_company_id=$_POST['company_type'];
	$rs=$db->query("select company_name from ".$db_tb_pre."company where company_id='$account_company_id'");
	$rs->setFetchMode(PDO::FETCH_ASSOC);
	$r=$rs->fetchAll();
	$account_company_name=$r[0]['company_name'];
	$account_card_number=$_POST['company_number'];
	//当前欠款
	$remainding_money=$_POST['remainding_money'];
	$remainding_type=$_POST['remainding_type'];
	$account_remainder=array();

	foreach($remainding_type as $key=>$value){
		$account_remainder[$value]=$remainding_money[$key];
	}
	$account_remainder=serialize($account_remainder);
	//信用额度
	$credit_money=$_POST['credit_money'];
	$credit_type=$_POST['credit_type'];
	$account_credit=array();

	foreach($credit_type as $key=>$value){
		$account_credit[$value]=$credit_money[$key];
	}
	$account_credit=serialize($account_credit);
	//统计币种
	$account_statistical_id=$_POST['statistical_currency'];
	//日期
	$creditDate=$_POST['creditDate'];
	$creditPayDate=$_POST['creditPayDate'];
	$creditRemind=$_POST['creditRemind'];
}elseif($account_type=='deposit'){
	//发卡行
	$account_company_id=$_POST['company_type'];
	$rs=$db->query("select company_name from ".$db_tb_pre."company where company_id='$account_company_id'");
	$rs->setFetchMode(PDO::FETCH_ASSOC);
	$r=$rs->fetchAll();
	$account_company_name=$r[0]['company_name'];
	$account_card_number=$_POST['company_number'];
	//当前欠款
	$remainding_money=$_POST['remainding_money'];
	$remainding_type=$_POST['remainding_type'];
	$account_remainder=array();

	foreach($remainding_type as $key=>$value){
		$account_remainder[$value]=$remainding_money[$key];
	}
	$account_remainder=serialize($account_remainder);
	//统计币种
	$account_statistical_id=$_POST['statistical_currency'];
}elseif($account_type=='investment'){
	//发卡行
	$account_company_id=$_POST['company_type'];
	$rs=$db->query("select company_name from ".$db_tb_pre."company where company_id='$account_company_id'");
	$rs->setFetchMode(PDO::FETCH_ASSOC);
	$r=$rs->fetchAll();
	$account_company_name=$r[0]['company_name'];
	$account_card_number=$_POST['company_number'];
	//当前欠款
	$remainding_money=$_POST['remainding_money'];
	$remainding_type=$_POST['remainding_type'];
	$account_remainder=array();

	foreach($remainding_type as $key=>$value){
		$account_remainder[$value]=$remainding_money[$key];
	}
	$account_remainder=serialize($account_remainder);
	//统计币种
	$account_statistical_id=$_POST['statistical_currency'];

}elseif($account_type=='stored'){
	$remainding_money=$_POST['remainding_money'];
	$remainding_type=$_POST['remainding_type'];
	$account_statistical_id=$_POST['statistical_currency'];
	$account_remainder=array();

	foreach($remainding_type as $key=>$value){
		$account_remainder[$value]=$remainding_money[$key];
	}
	$account_remainder=serialize($account_remainder);

}elseif($account_type=='shopping'){
	$company_number=$_POST['company_number'];
	$remainding_money=$_POST['remainding_money'];
	$remainding_type=$_POST['remainding_type'];
	$account_statistical_id=$_POST['statistical_currency'];
	$account_remainder=array();

	foreach($remainding_type as $key=>$value){
		$account_remainder[$value]=$remainding_money[$key];
	}
	$account_remainder=serialize($account_remainder);
}elseif($account_type=='beauty'){
	$remainding_money=$_POST['remainding_money'];
	$remainding_type=$_POST['remainding_type'];
	$account_statistical_id=$_POST['statistical_currency'];
	$account_remainder=array();

	foreach($remainding_type as $key=>$value){
		$account_remainder[$value]=$remainding_money[$key];
	}
	$account_remainder=serialize($account_remainder);
}elseif($account_type=='bus'){
	$company_number=$_POST['company_number'];
	$remainding_money=$_POST['remainding_money'];
	$remainding_type=$_POST['remainding_type'];
	$account_statistical_id=$_POST['statistical_currency'];
	$account_remainder=array();

	foreach($remainding_type as $key=>$value){
		$account_remainder[$value]=$remainding_money[$key];
	}
	$account_remainder=serialize($account_remainder);

}elseif($account_type=='dining'){
	$remainding_money=$_POST['remainding_money'];
	$remainding_type=$_POST['remainding_type'];
	$account_statistical_id=$_POST['statistical_currency'];
	$account_remainder=array();

	foreach($remainding_type as $key=>$value){
		$account_remainder[$value]=$remainding_money[$key];
	}
	$account_remainder=serialize($account_remainder);
}elseif($account_type=='internet'){
	$company_type=$_POST['company_type'];
	$remainding_money=$_POST['remainding_money'];
	$remainding_type=$_POST['remainding_type'];
	$account_statistical_id=$_POST['statistical_currency'];
	$account_remainder=array();

	foreach($remainding_type as $key=>$value){
		$account_remainder[$value]=$remainding_money[$key];
	}
	$account_remainder=serialize($account_remainder);
}elseif($account_type=='virtual'){
	$remainding_money=$_POST['remainding_money'];
	$remainding_type=$_POST['remainding_type'];
	$account_statistical_id=$_POST['statistical_currency'];
	$account_remainder=array();

	foreach($remainding_type as $key=>$value){
		$account_remainder[$value]=$remainding_money[$key];
	}
	$account_remainder=serialize($account_remainder);
}elseif($account_type=='loan'){
	$remainding_money=$_POST['remainding_money'];
	$remainding_type=$_POST['remainding_type'];
	$account_remainder=array();

	foreach($remainding_type as $key=>$value){
		$account_remainder[$value]=$remainding_money[$key];
	}
	$account_remainder=serialize($account_remainder);
}

$account_name=$_POST['account_name'];
$account_remarks=$_POST['remark'];
$account_user_id=1;
$account_addtime=time();
$account_edittime=time();
$account_ip=GetIP();
$backurl="accountAddForm.php";
$list_url="accountList.php";

if(!$account_name){
	echo "account_name is empty! <br><a href='".$backurl."'>try again</a>";
	exit;
}

$count=$db->exec("insert into ".$db_tb_pre."account  (account_name,account_type,account_statistical_id,account_remarks,account_remainder,account_company_id,account_company_name,account_card_number,account_user_id,account_addtime,account_edittime,account_ip ) values ('$account_name','$account_type','$account_statistical_id','$account_remarks','$account_remainder','$account_company_id','$account_company_name','$account_card_number','$account_user_id','$account_addtime','$account_edittime','$account_ip')");
$lastId=$db->lastInsertId();
if($account_type=='credit' && $count){
	$crd_count=$db->exec("insert into ".$db_tb_pre."crdact_info  (crdact_account_id,crdact_debt,crdact_credit_line,crdact_bill_date,crdact_repayment_date,crdact_remind_type,crdact_is_current_period) values ('$lastId','$account_remainder','$account_credit','$creditDate','$creditPayDate','$creditRemind','1')");
}
if($count){
	$smarty->assign('info','新账户录入成功!');
	$smarty->assign('backurl',"<a href='".$backurl."'>再次输入</a>");
	$smarty->assign('list_url',"<a href='".$list_url."'>账户列表</a>");
}else{
	$smarty->assign('info',"新公司录入失败！");
	$smarty->assign('backurl',"<a href='".$backurl."'>再次输入</a>");
	$smarty->assign('list_url',"<a href='".$list_url."'>账户列表</a>");
}
$smarty->display("accountAdd.html");


function GetIP(){
	if(!empty($_SERVER["HTTP_CLIENT_IP"])){
	  $cip = $_SERVER["HTTP_CLIENT_IP"];
	}
	elseif(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
	  $cip = $_SERVER["HTTP_X_FORWARDED_FOR"];
	}
	elseif(!empty($_SERVER["REMOTE_ADDR"])){
	  $cip = $_SERVER["REMOTE_ADDR"];
	}
	else{
	  $cip = "无法获取！";
	}
	return $cip;
}





?>