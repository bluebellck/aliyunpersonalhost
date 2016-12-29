<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-18 06:32:47
         compiled from ".\templates\payCategoryAddForm.html" */ ?>
<?php /*%%SmartyHeaderCode:81845459df5f93dfb0-24229317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc883b0d2ee42902ad87d954b1129aaf3e20984e' => 
    array (
      0 => '.\\templates\\payCategoryAddForm.html',
      1 => 1415842844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81845459df5f93dfb0-24229317',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5459df5f9b37b0_82196637',
  'variables' => 
  array (
    'rs_arr' => 0,
    'value' => 0,
    'backurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5459df5f9b37b0_82196637')) {function content_5459df5f9b37b0_82196637($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
		<form action="payCategoryAdd.php" method="post">
			上级分类：<select name="pay_parent_id">
				<option value="0">未选择</option>
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rs_arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['pay_catid'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['pay_catname'];?>
</option>
				<?php } ?>
			</select><br><br>
			分类名称：<input type="text" name="pay_catname" ><br><br>
			<input type="hidden" name="backurl" value="<?php echo $_smarty_tpl->tpl_vars['backurl']->value;?>
">
			<input type="submit" name="submit">
		</form>
		<br>
		<a href="payCategoryList.php">分类列表</a>
	</div>
</body>
</html>
<?php }} ?>
