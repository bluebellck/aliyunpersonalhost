<?php
require "./config.php";

$dsn=$db_base.":host=".$db_host.";dbname=".$db_name;
if($db_pconnect)
	$db= new PDO($dsn, $db_user,$db_pwd,array(PDO::ATTR_PERSISTENT => true));//������
else
	$db= new PDO($dsn, $db_user,$db_pwd);
$db->exec('SET CHARACTER SET '.$db_charset);

//pdoʹ������
/*
//����
$count=$db->exec("insert into wacai_account set account_name='ck', account_addtime=".time());
echo $count;

//����
$count=$db->exec("update wacai_account set account_name='111', account_addtime=".time()." where account_id=1");

//��ѯ
$rs=$db->query("select * from wacai_account");
$rs->setFetchMode(PDO::FETCH_ASSOC);
$result_arr=$rs->fetchAll();
var_dump($result_arr);
foreach($result_arr as $key=>$value){
	foreach($value as $key1=>$value1){
		echo $key1."=>".$value1."<br>";
	}
}
*/




?>