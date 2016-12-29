<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-13 01:41:26
         compiled from ".\templates\currencyAddForm.html" */ ?>
<?php /*%%SmartyHeaderCode:12441546012bdc19ca1-45477138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adfb187fbf0efb8e19d887210f0075f839263e7d' => 
    array (
      0 => '.\\templates\\currencyAddForm.html',
      1 => 1415842844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12441546012bdc19ca1-45477138',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_546012bdc6b072_78228548',
  'variables' => 
  array (
    'backurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546012bdc6b072_78228548')) {function content_546012bdc6b072_78228548($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>汇率——增加</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<meta name="Generator" content="EditPlus">
	<meta name="Author" content="">
	<meta name="Keywords" content="">
	<meta name="Description" content="">
</head>

<body>
	<?php echo $_smarty_tpl->getSubTemplate ("subbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div style="width:600px; height:auto; margin:0 auto;">
		<form action="currencyAdd.php" method="post">
			汇率名称：<input type="text" name="currency_name" ><br><br>
			对人民币汇率：<input type="text" name="currency_rate" ><br><br>
			<input type="hidden" name="backurl" value="<?php echo $_smarty_tpl->tpl_vars['backurl']->value;?>
">
			<input type="submit" name="submit" value="确定">
		</form>
		<br>
		<a href="currencyList.php">汇率列表</a>
	</div>
</body>
</html>
<?php }} ?>
