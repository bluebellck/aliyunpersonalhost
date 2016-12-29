<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-05 21:12:33
         compiled from "./templates/currencyList.html" */ ?>
<?php /*%%SmartyHeaderCode:191571690054f856413a7259-56352227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '211a3769add12ac4c532e82855cbc26436c818e0' => 
    array (
      0 => './templates/currencyList.html',
      1 => 1425561115,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191571690054f856413a7259-56352227',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result_arr' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f8564140d183_83269530',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f8564140d183_83269530')) {function content_54f8564140d183_83269530($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>汇率——列表</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<meta name="Generator" content="EditPlus">
	<meta name="Author" content="">
	<meta name="Keywords" content="">
	<meta name="Description" content="">
	<style>
		.category_ul { width:850px;  overflow:hidden; margin:5px 0; }
		.category_ul li { width:250px; height:30px; line-height:30px; float:left; margin:5px 10px; overflow:hidden; background:#ebebe4;}
		.category_ul li a { color:black; float:left;}
		.category_ul li font { color:black; float:left;}
	</style>
</head>

<body>
	<?php echo $_smarty_tpl->getSubTemplate ("subbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div style="width:900px; height:auto; margin:0 auto; border:1px solid black;">
		<div style="width:880px; height:40px; line-height:40px; padding:0 0 0 20px; background:#c4f7b3;">
			<a href="currencyAddForm.php">添加汇率</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<font>（点击类别会删除类别，慎重！）</font>
		</div>
		<ul class="category_ul">
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['result_arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<li><a href="currencyDelete.php?catid=<?php echo $_smarty_tpl->tpl_vars['value']->value['currency_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['currency_name'];?>
</a><font>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['value']->value['currency_rate'];?>
</font><font>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['value']->value['currency_abbreviation'];?>
</font></li>
			<?php } ?>
		</ul>
	</div>
</body>
</html>
<?php }} ?>
