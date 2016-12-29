<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-06 03:07:53
         compiled from ".\templates\memberAddForm.html" */ ?>
<?php /*%%SmartyHeaderCode:14942545ae609124086-02073226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08db7c3e40a39205c611ef0148ab7298d422a41f' => 
    array (
      0 => '.\\templates\\memberAddForm.html',
      1 => 1415242804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14942545ae609124086-02073226',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'backurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_545ae609172786_06136226',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545ae609172786_06136226')) {function content_545ae609172786_06136226($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>成员分类——增加</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<meta name="Generator" content="EditPlus">
	<meta name="Author" content="">
	<meta name="Keywords" content="">
	<meta name="Description" content="">
</head>

<body>
	<div style="width:600px; height:auto; margin:0 auto;">
		<form action="memberAdd.php" method="post">
			成员名称：<input type="text" name="member_name" ><br><br>
			<input type="hidden" name="backurl" value="<?php echo $_smarty_tpl->tpl_vars['backurl']->value;?>
">
			<input type="submit" name="submit" value="确定">
		</form>
		<br>
		<a href="memberList.php">成员分类列表</a>
	</div>
</body>
</html>
<?php }} ?>
