<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-01 13:28:24
         compiled from "./templates/payCategoryDelete.html" */ ?>
<?php /*%%SmartyHeaderCode:106132986957c7bc782cec23-23772936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70bd404af089a32034836ed21ed86c4f4ffd3897' => 
    array (
      0 => './templates/payCategoryDelete.html',
      1 => 1425561118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106132986957c7bc782cec23-23772936',
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
  'unifunc' => 'content_57c7bc783aeff5_87222239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7bc783aeff5_87222239')) {function content_57c7bc783aeff5_87222239($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>支出分类——增加</title>
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
