<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-13 01:41:03
         compiled from ".\templates\payShopAddForm.html" */ ?>
<?php /*%%SmartyHeaderCode:7543545ae90744a661-09593766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32dacf308cba7d5d26d7e85b114f88e8dfc1d561' => 
    array (
      0 => '.\\templates\\payShopAddForm.html',
      1 => 1415842844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7543545ae90744a661-09593766',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_545ae90749fff0_31205163',
  'variables' => 
  array (
    'backurl' => 0,
    'serialize_var' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545ae90749fff0_31205163')) {function content_545ae90749fff0_31205163($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>商家分类——增加</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<meta name="Generator" content="EditPlus">
	<meta name="Author" content="">
	<meta name="Keywords" content="">
	<meta name="Description" content="">
</head>

<body>
	<?php echo $_smarty_tpl->getSubTemplate ("subbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div style="width:600px; height:auto; margin:0 auto;">
		<form action="payShopAdd.php" method="post">
			商家名称：<input type="text" name="pay_shop_name" ><br><br>
			<input type="hidden" name="backurl" value="<?php echo $_smarty_tpl->tpl_vars['backurl']->value;?>
">
			<input type="submit" name="submit" value="确定">
		</form>
		<br>
		<a href="payShopList.php">商家分类列表</a>
		<?php echo $_smarty_tpl->tpl_vars['serialize_var']->value;?>

	</div>
</body>
</html>
<?php }} ?>
