<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-13 01:42:08
         compiled from ".\templates\projectAddForm.html" */ ?>
<?php /*%%SmartyHeaderCode:29339545ae74da51fa7-99168241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f88c08fd30e0dcbf4a1468ab4c0a86396329bf07' => 
    array (
      0 => '.\\templates\\projectAddForm.html',
      1 => 1415842844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29339545ae74da51fa7-99168241',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_545ae74daa0269_49274467',
  'variables' => 
  array (
    'backurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545ae74daa0269_49274467')) {function content_545ae74daa0269_49274467($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>项目分类——增加</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<meta name="Generator" content="EditPlus">
	<meta name="Author" content="">
	<meta name="Keywords" content="">
	<meta name="Description" content="">
</head>

<body>
	<?php echo $_smarty_tpl->getSubTemplate ("subbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div style="width:600px; height:auto; margin:0 auto;">
		<form action="projectAdd.php" method="post">
			项目名称：<input type="text" name="project_name" ><br><br>
			<input type="hidden" name="backurl" value="<?php echo $_smarty_tpl->tpl_vars['backurl']->value;?>
">
			<input type="submit" name="submit" value="确定">
		</form>
		<br>
		<a href="projectList.php">项目分类列表</a>
	</div>
</body>
</html>
<?php }} ?>
