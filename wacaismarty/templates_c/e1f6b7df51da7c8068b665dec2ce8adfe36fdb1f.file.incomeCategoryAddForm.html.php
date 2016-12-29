<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-06 02:03:19
         compiled from ".\templates\incomeCategoryAddForm.html" */ ?>
<?php /*%%SmartyHeaderCode:25817545ad6d2419bd5-07236509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1f6b7df51da7c8068b665dec2ce8adfe36fdb1f' => 
    array (
      0 => '.\\templates\\incomeCategoryAddForm.html',
      1 => 1415239396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25817545ad6d2419bd5-07236509',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_545ad6d2676e76_68908920',
  'variables' => 
  array (
    'backurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545ad6d2676e76_68908920')) {function content_545ad6d2676e76_68908920($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>收入分类——增加</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<meta name="Generator" content="EditPlus">
	<meta name="Author" content="">
	<meta name="Keywords" content="">
	<meta name="Description" content="">
</head>

<body>
	<div style="width:600px; height:auto; margin:0 auto;">
		<form action="incomeCategoryAdd.php" method="post">
			分类名称：<input type="text" name="income_catname" ><br><br>
			<input type="hidden" name="backurl" value="<?php echo $_smarty_tpl->tpl_vars['backurl']->value;?>
">
			<input type="submit" name="submit" value="确定">
		</form>
		<br>
		<a href="incomeCategoryList.php">收入分类列表</a>
	</div>
</body>
</html>
<?php }} ?>
