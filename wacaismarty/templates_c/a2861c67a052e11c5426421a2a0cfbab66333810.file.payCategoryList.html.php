<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-13 01:40:47
         compiled from ".\templates\payCategoryList.html" */ ?>
<?php /*%%SmartyHeaderCode:274835459df5c9d4510-71546220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2861c67a052e11c5426421a2a0cfbab66333810' => 
    array (
      0 => '.\\templates\\payCategoryList.html',
      1 => 1415842844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274835459df5c9d4510-71546220',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5459df5ca57624_48183956',
  'variables' => 
  array (
    'parent_arr' => 0,
    'value' => 0,
    'child_arr' => 0,
    'value_child' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5459df5ca57624_48183956')) {function content_5459df5ca57624_48183956($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
	<?php echo $_smarty_tpl->getSubTemplate ("subbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div style="width:900px; height:auto; margin:0 auto; border:1px solid black;">
		<div style="width:880px; height:40px; line-height:40px; padding:0 0 0 20px; background:#c4f7b3;">
			<a href="payCategoryAddForm.php">添加新类别</a>&nbsp;&nbsp;&nbsp;&nbsp;
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
			<a href="payCategoryDelete.php?catid=<?php echo $_smarty_tpl->tpl_vars['value']->value['pay_catid'];?>
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
				<li><a href="payCategoryDelete.php?catid=<?php echo $_smarty_tpl->tpl_vars['value_child']->value['pay_catid'];?>
"><?php echo $_smarty_tpl->tpl_vars['value_child']->value['pay_catname'];?>
</a></li>
			<?php } ?>
		</ul>
		<?php } ?>
	</div>
</body>
</html>
<?php }} ?>
