<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-13 01:42:58
         compiled from ".\templates\currencyDelete.html" */ ?>
<?php /*%%SmartyHeaderCode:195015460139f0860e0-45723653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aefd98c377284d35f9449d75059acc789f3e9ddc' => 
    array (
      0 => '.\\templates\\currencyDelete.html',
      1 => 1415842844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195015460139f0860e0-45723653',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5460139f0de049_59335193',
  'variables' => 
  array (
    'info' => 0,
    'add_url' => 0,
    'list_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5460139f0de049_59335193')) {function content_5460139f0de049_59335193($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>汇率——删除</title>
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
		<?php echo $_smarty_tpl->tpl_vars['add_url']->value;?>
<br><br>
		<?php echo $_smarty_tpl->tpl_vars['list_url']->value;?>
<br><br>
	</div>
</body>
</html>
<?php }} ?>
