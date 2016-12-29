<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-13 01:40:55
         compiled from ".\templates\companyAddForm.html" */ ?>
<?php /*%%SmartyHeaderCode:28920546022fc8b0b80-37211086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aca642af9d8b359a8619784e6e00d53f22b804d1' => 
    array (
      0 => '.\\templates\\companyAddForm.html',
      1 => 1415842844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28920546022fc8b0b80-37211086',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_546022fc8fcd92_13094816',
  'variables' => 
  array (
    'backurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546022fc8fcd92_13094816')) {function content_546022fc8fcd92_13094816($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>公司——增加</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<meta name="Generator" content="EditPlus">
	<meta name="Author" content="">
	<meta name="Keywords" content="">
	<meta name="Description" content="">
</head>

<body>
	<?php echo $_smarty_tpl->getSubTemplate ("subbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div style="width:600px; height:auto; margin:0 auto;">
		<form action="companyAdd.php" method="post">
			公司名称：<input type="text" name="company_name" ><br><br>
			公司类型：<input type="text" name="company_type" value="3" >1是银行，2是投资公司，3是网络账户<br><br>
			<input type="hidden" name="backurl" value="<?php echo $_smarty_tpl->tpl_vars['backurl']->value;?>
">
			<input type="submit" name="submit" value="确定">
		</form>
		<br>
		<a href="companyList.php">公司列表</a>
	</div>
</body>
</html>
<?php }} ?>
