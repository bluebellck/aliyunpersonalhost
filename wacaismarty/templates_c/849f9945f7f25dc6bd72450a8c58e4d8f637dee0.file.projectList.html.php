<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-26 19:49:09
         compiled from "./templates/projectList.html" */ ?>
<?php /*%%SmartyHeaderCode:6040902335606863581ce61-86486300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '849f9945f7f25dc6bd72450a8c58e4d8f637dee0' => 
    array (
      0 => './templates/projectList.html',
      1 => 1425561119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6040902335606863581ce61-86486300',
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
  'unifunc' => 'content_56068635882815_72297100',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56068635882815_72297100')) {function content_56068635882815_72297100($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>项目——列表</title>
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
			<a href="projectAddForm.php">添加收入新类别</a>&nbsp;&nbsp;&nbsp;&nbsp;
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
				<li><a href="projectDelete.php?catid=<?php echo $_smarty_tpl->tpl_vars['value']->value['project_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['project_name'];?>
</a></li>
			<?php } ?>
		</ul>
	</div>
</body>
</html>
<?php }} ?>
