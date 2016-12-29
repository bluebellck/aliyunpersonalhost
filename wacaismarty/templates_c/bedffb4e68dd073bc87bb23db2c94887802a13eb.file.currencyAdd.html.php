<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-13 01:42:52
         compiled from ".\templates\currencyAdd.html" */ ?>
<?php /*%%SmartyHeaderCode:3903546012e7b8fbf8-77317652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bedffb4e68dd073bc87bb23db2c94887802a13eb' => 
    array (
      0 => '.\\templates\\currencyAdd.html',
      1 => 1415842844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3903546012e7b8fbf8-77317652',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_546012e7be69b6_85301720',
  'variables' => 
  array (
    'info' => 0,
    'backurl' => 0,
    'list_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546012e7be69b6_85301720')) {function content_546012e7be69b6_85301720($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
		<?php echo $_smarty_tpl->tpl_vars['info']->value;?>
<br><br>
		<?php echo $_smarty_tpl->tpl_vars['backurl']->value;?>
<br><br>
		<?php echo $_smarty_tpl->tpl_vars['list_url']->value;?>
<br><br>
	</div>
</body>
</html>
<?php }} ?>
