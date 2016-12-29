<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-13 01:40:53
         compiled from ".\templates\companyList.html" */ ?>
<?php /*%%SmartyHeaderCode:24667546022fab17ea0-61894672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b2e17c7e0ebd024fee32d0fc58a42a38be7ec5b' => 
    array (
      0 => '.\\templates\\companyList.html',
      1 => 1415842844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24667546022fab17ea0-61894672',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_546022fab835d0_94824145',
  'variables' => 
  array (
    'result_arr' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546022fab835d0_94824145')) {function content_546022fab835d0_94824145($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>公司——列表</title>
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
			<a href="companyAddForm.php">添加公司</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<font>（点击公司会删除公司，慎重！）</font>
		</div>
		<ul class="category_ul">
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['result_arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<li><a href="companyDelete.php?catid=<?php echo $_smarty_tpl->tpl_vars['value']->value['company_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['company_name'];?>
</a><font>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['value']->value['company_type'];?>
</font></li>
			<?php } ?>
		</ul>
	</div>
</body>
</html>
<?php }} ?>
