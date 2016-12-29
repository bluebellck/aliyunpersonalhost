<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-21 05:20:03
         compiled from ".\templates\accountDelete.html" */ ?>
<?php /*%%SmartyHeaderCode:4832546ecb8374ff58-47260722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07a27d610f251c865126214059a1fe9e35dd25d2' => 
    array (
      0 => '.\\templates\\accountDelete.html',
      1 => 1416547126,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4832546ecb8374ff58-47260722',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'add_url' => 0,
    'list_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_546ecb837bebe1_41315068',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546ecb837bebe1_41315068')) {function content_546ecb837bebe1_41315068($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>账户——删除</title>
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
