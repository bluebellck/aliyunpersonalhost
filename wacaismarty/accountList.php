<?php
require "./libs/Smarty.class.php";
require "./dblink.php";
$smarty=new Smarty;

$sort=array("cash"=>0,"credit"=>1,"deposit"=>2,"investment"=>3,"stored"=>4,"shopping"=>5,"beauty"=>6,"bus"=>7,"dining"=>8,"internet"=>9,"virtual"=>10,"loan"=>11);
$rs=$db->query("select account_type from ".$db_tb_pre."account where account_user_id=1 group by account_type");
$rs->setFetchMode(PDO::FETCH_ASSOC);
$r=$rs->fetchAll();
//用户所所拥有的账户种类
foreach($r as $key=>$value){
	foreach($value as $key1=>$value1){
		$act_type[$sort[$value1]]=$value1;
	}
}
ksort($act_type);
//账户种类循环
foreach($act_type as $key=>$value){
	switch($value){
		case "cash":$account_total[$value]['typeName']="现金";break;
		case "credit":$account_total[$value]['typeName']="信用卡";break;
		case "deposit":$account_total[$value]['typeName']="储蓄卡";break;
		case "investment":$account_total[$value]['typeName']="投资账户";break;
		case "stored":$account_total[$value]['typeName']="储值卡";break;
		case "shopping":$account_total[$value]['typeName']="购物卡";break;
		case "beauty":$account_total[$value]['typeName']="美容卡";break;
		case "bus":$account_total[$value]['typeName']="公交卡";break;
		case "dining":$account_total[$value]['typeName']="饭卡";break;
		case "internet":$account_total[$value]['typeName']="网络账户";break;
		case "virtual":$account_total[$value]['typeName']="虚拟账户";break;
		case "loan":$account_total[$value]['typeName']="债权/债务人";break;
	}
	$rs=$db->query("select * from ".$db_tb_pre."account where account_user_id=1 and account_type='$value'");
	$rs->setFetchMode(PDO::FETCH_ASSOC);
	$r=$rs->fetchAll();
	if(count($r)){
		//同一种类型的账户个数循环
		foreach($r as $r_key=>$r_value){
			$currency_type=unserialize($r_value["account_remainder"]);
			//单个账户的不同币种循环
			foreach($currency_type as $c_key=>$c_value){
				$c_rs=$db->query("select * from ".$db_tb_pre."currency where currency_id=$c_key");
				$c_rs->setFetchMode(PDO::FETCH_ASSOC);
				$c_r=$c_rs->fetchAll();
				if(count($c_r)){
					$type_string.=$c_r[0]['currency_name'].",";
					$money_total+=$c_r[0]['currency_rate']*$c_value;
				}
			}
			$type_string=trim($type_string,',');
			$account_list[$value][]=array("account_id"=>$r_value["account_id"],"account_name"=>$r_value["account_name"],"account_currency"=>$type_string,"account_money"=>$money_total);
			$type_string='';
			$money_total=0;
			//var_dump($currency_type);
		}
	}
	foreach($account_list[$value] as $l_key=>$l_value){
		$account_total[$value]['total']+=$l_value['account_money'];
	}
}
//
/*foreach($r as $key=>$value){
	echo $key."=>".$value."<br>";
	foreach($value as $key1=>$value1){
		echo $key1."=>".$value1."<br>";
	}
}
foreach($account_list as $key=>$value){
	echo '&nbsp;'.$key."=>".$value."<br>";
	foreach($value as $key1=>$value1){
		echo '&nbsp;&nbsp;'.$key1."=>".$value1."<br>";
		foreach($value1 as $key2=>$value2){
			echo '&nbsp;&nbsp;&nbsp;'.$key2."=>".$value2."<br>";
		}
	}
}
*/
$smarty->assign("account_total",$account_total);
$smarty->assign("account_list",$account_list);
$smarty->display("accountList.html");




?>