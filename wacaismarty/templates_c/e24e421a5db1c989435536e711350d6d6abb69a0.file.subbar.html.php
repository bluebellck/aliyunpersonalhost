<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-05 21:12:30
         compiled from "./templates/subbar.html" */ ?>
<?php /*%%SmartyHeaderCode:134684125054f8563e946682-64334235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e24e421a5db1c989435536e711350d6d6abb69a0' => 
    array (
      0 => './templates/subbar.html',
      1 => 1425561120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134684125054f8563e946682-64334235',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f8563e94b224_57179404',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f8563e94b224_57179404')) {function content_54f8563e94b224_57179404($_smarty_tpl) {?>
<style>
		body{font-size:14px;}
		div ul li a {padding:0; margin:0;}
		ul li {list-style:none;}
		a {text-decoration:none;}
		.subbar {width:200px; height:auto; overflow:hidden; float:right;}
		.subbar ul {border-top:1px solid black; padding:0;}
		.subbar ul li{width:178px; height:30px; line-height:30px; text-align:left; border:1px solid black; border-top:none; padding-left:20px;}
</style>

<div class="subbar">
	<ul>
		<li><a href="payCategoryList.php">支出类别</a></li>
		<li><a href="incomeCategoryList.php">收入类别</a></li>
		<li><a href="memberList.php">成员</a></li>
		<li><a href="projectList.php">项目</a></li>
		<li><a href="payShopList.php">商家/付款方</a></li>
		<li><a href="currencyList.php">货币/汇率</a></li>
		<li><a href="companyList.php">公司</a></li>
		<li style="height:auto; overflow:hidden;">
			账户添加：<br>
			<a href="accountAddForm.php?account_t=cash">现金</a>
			<a href="accountAddForm.php?account_t=credit">信用卡</a>
			<a href="accountAddForm.php?account_t=deposit">储蓄卡</a>
			<a href="accountAddForm.php?account_t=investment">投资账户</a>
			<a href="accountAddForm.php?account_t=stored">储值卡</a>
			<a href="accountAddForm.php?account_t=shopping">购物卡</a>
			<a href="accountAddForm.php?account_t=beauty">美容卡</a>
			<a href="accountAddForm.php?account_t=bus">公交卡</a>
			<a href="accountAddForm.php?account_t=dining">饭卡</a>
			<a href="accountAddForm.php?account_t=internet">网络账户</a>
			<a href="accountAddForm.php?account_t=virtual">虚拟账户</a>
			<a href="accountAddForm.php?account_t=loan">债权/债务人</a>
		</li>
	</ul>
</div>
























<?php }} ?>
