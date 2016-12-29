<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-05 07:34:14
         compiled from ".\templates\payList.html" */ ?>
<?php /*%%SmartyHeaderCode:271995459c75806ee15-98152051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c24260448026a7fe97a39ff38a97d1daf75bd82' => 
    array (
      0 => '.\\templates\\payList.html',
      1 => 1415172847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '271995459c75806ee15-98152051',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5459c7580fe779_80260220',
  'variables' => 
  array (
    'parent_arr' => 0,
    'value' => 0,
    'child_arr' => 0,
    'value_child' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5459c7580fe779_80260220')) {function content_5459c7580fe779_80260220($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>支出分类——增加</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<meta name="Generator" content="EditPlus">
	<meta name="Author" content="">
	<meta name="Keywords" content="">
	<meta name="Description" content="">
	<style>
		.category_ul { width:850px;  overflow:hidden; margin:5px 0; }
		.category_ul li { width:90px; height:30px; line-height:30px; float:left; margin:5px 10px; overflow:hidden; background:#ebebe4;}
		.category_ul li a { color:black;}
	</style>
</head>

<body>
	<div style="width:900px; height:auto; margin:0 auto; border:1px solid black;">
		<div style="width:880px; height:40px; line-height:40px; padding:0 0 0 20px; background:#c4f7b3;">
			<a href="payAddForm.php">添加新类别</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<font>（点击类别会删除类别，慎重！）</font>
		</div>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['parent_arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<div style="width:880px; height:40px; line-height:40px; padding:0 0 0 20px; background:#c4f7b3;">
			<a href="payDelete.php?catid=<?php echo $_smarty_tpl->tpl_vars['value']->value['pay_catid'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['pay_catname'];?>
</a>
		</div>
		<ul class="category_ul">
			<?php  $_smarty_tpl->tpl_vars['value_child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value_child']->_loop = false;
 $_smarty_tpl->tpl_vars['key_child'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['child_arr']->value[$_smarty_tpl->tpl_vars['value']->value['pay_catid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value_child']->key => $_smarty_tpl->tpl_vars['value_child']->value) {
$_smarty_tpl->tpl_vars['value_child']->_loop = true;
 $_smarty_tpl->tpl_vars['key_child']->value = $_smarty_tpl->tpl_vars['value_child']->key;
?>
				<li><a href="payDelete.php?catid=<?php echo $_smarty_tpl->tpl_vars['value_child']->value['pay_catid'];?>
"><?php echo $_smarty_tpl->tpl_vars['value_child']->value['pay_catname'];?>
</a></li>
			<?php } ?>
		</ul>
		<?php } ?>
	</div>
</body>
</html>
<?php }} ?>
