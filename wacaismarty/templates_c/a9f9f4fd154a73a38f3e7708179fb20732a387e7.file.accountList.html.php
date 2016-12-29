<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-21 05:38:10
         compiled from ".\templates\accountList.html" */ ?>
<?php /*%%SmartyHeaderCode:23581546aa7c08ff4f4-15891833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9f9f4fd154a73a38f3e7708179fb20732a387e7' => 
    array (
      0 => '.\\templates\\accountList.html',
      1 => 1416548285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23581546aa7c08ff4f4-15891833',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_546aa7c0da75e4_13219785',
  'variables' => 
  array (
    'account_total' => 0,
    'value' => 0,
    'key' => 0,
    'account_list' => 0,
    'l_value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546aa7c0da75e4_13219785')) {function content_546aa7c0da75e4_13219785($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>账户——列表</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<meta name="Generator" content="EditPlus">
	<meta name="Author" content="">
	<meta name="Keywords" content="">
	<meta name="Description" content="">
	
	<style>
		body {background: none repeat scroll 0 0 #f5f5f5;font-family: Verdana,sans-serif;font-size: 12px;margin: 0;padding: 0;}
		div, form, img, ul, ol, li, dl, dt, dd, p, span, input {border: 0 none;margin: 0;padding: 0;}
		li {list-style-type: none;}
		img {vertical-align: top;}
		h1, h2, h3, h4, h5, h6 {font-size: 12px;font-weight: normal;margin: 0;padding: 0;}
		textarea {border: 1px solid #ccc;overflow-y: auto;padding: 2px 5px;resize: none;}
		input, textarea {background-color: white;outline: medium none;}
		input[type="radio"] {background: none repeat scroll 0 0 transparent;border: 0 none;vertical-align: text-bottom;}
		.right {display: inline;float: right;}
		.left {display: inline;float: left;}
		.clear {clear: both;}
		a {color: #3278dc;cursor: pointer;text-decoration: none;}
		#list_header, .list_header {background: none repeat scroll 0 0 #eee;color: #737373;height: 35px;line-height: 35px;}
		#list_page, .list_page {color: #000;margin: 10px;}
		.lineCheck {height: 15px;line-height: 15px;margin: 10px;width: 15px;}
		.list_day_head {background: none repeat scroll 0 0 #f5f5f5;border-bottom: 1px solid #d4dae2;color: #3278dc;height: 25px;line-height: 25px;}
		#list_header .lineCheck, .list_header .lineCheck {margin-bottom: 0;margin-top: 10px;}
		.listLine {border-bottom: 1px solid #e7ebef;cursor: pointer;height: 30px;line-height: 35px;}
		.listLine_checked {background-color: #e6eef8;}
		.listEdit .editable-select {height: 24px !important;line-height: 24px !important;padding-right: 20px;width: 85px !important;}
		.listLine ul li {height: 30px;line-height: 35px;padding: 0 10px; color:#737373;}
		.listLine ul .bankMaturityMsg {background: none repeat scroll 0 0 #fff0f0;border: 1px solid #f1a1a1;border-radius: 1px;color: #d11f1f;display:none;height: 21px;left: 1px;line-height: 21px;padding: 0 9px 0 7px;position: absolute;top: -19px;}
		.listLine ul .img_3_3:hover .bankMaturityMsg {display: block;}
		.listLine ul .bankMaturityMsg i {background: url("/images/inside/innerpageSprite.gif") no-repeat scroll -141px -144px rgba(0, 0, 0, 0);height: 5px;left: 12px;overflow: hidden;position: absolute;top: 20px;width: 8px;}
		.listLine ul .bankMaturityMsg:after {background: none repeat scroll 0 0 #f4eded;bottom: -2px;content: " ";height: 1px;overflow:hidden;position:absolute;width: 100%;}
		#list_header ul li, .list_header ul li {padding: 0 10px;}
		#list_header .sep, .list_header .sep {background: url("/images/inside/listHeaderSep.png") no-repeat scroll 0 center rgba(0, 0, 0, 0);}
	</style>
	
</head>

<body>
	<?php echo $_smarty_tpl->getSubTemplate ("subbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div style="width:770px; height:auto; margin:0 auto;">
		<div id="list_page">
			<div id="list_header">
				<ul>
					<li class="left sep" style="width:145px;">名称</li>
					<li class="left sep" style="width:260px;">币种</li>
					<li class="left sep balanceDes" style="width:160px;">当前状况</li>
					<li class="left sep" style="width:100px;">删除</li>
				</ul>
			</div>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['account_total']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<div id="list_content">
				<div class="list_day_head">
					<ul>
						<li class="left" style="width:173px;margin-left:10px;">
							<span><?php echo $_smarty_tpl->tpl_vars['value']->value['typeName'];?>
</span>
						</li>
						<li class="left" style="margin-left:110px;">
							<span id="totalMoney_0">￥<?php echo $_smarty_tpl->tpl_vars['value']->value['total'];?>
</span>
						</li>
					</ul>
				</div>
				<?php  $_smarty_tpl->tpl_vars['l_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l_value']->_loop = false;
 $_smarty_tpl->tpl_vars['l_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['account_list']->value[$_smarty_tpl->tpl_vars['key']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l_value']->key => $_smarty_tpl->tpl_vars['l_value']->value) {
$_smarty_tpl->tpl_vars['l_value']->_loop = true;
 $_smarty_tpl->tpl_vars['l_key']->value = $_smarty_tpl->tpl_vars['l_value']->key;
?>
				<div class="listLine">
					<ul>
						<li class="left cutlong" style="width:145px;"><?php echo $_smarty_tpl->tpl_vars['l_value']->value['account_name'];?>
</li>
						<li class="left cutlong" style="width:260px;"><?php echo $_smarty_tpl->tpl_vars['l_value']->value['account_currency'];?>
</li>
						<li class="left cutlong" style="width:150px;">
							<div class="showBalance"> <?php if ($_smarty_tpl->tpl_vars['key']->value=="credit") {?>欠款: ￥-<?php } else { ?>余额: ￥<?php }
echo $_smarty_tpl->tpl_vars['l_value']->value['account_money'];?>
 </div>
						</li>
						<li class="left cutlong" style="width:100px;"><a href="accountDelete.php?catid=<?php echo $_smarty_tpl->tpl_vars['l_value']->value['account_id'];?>
">删除</a></li>
					</ul>
				</div>
				<?php } ?>
			</div>
			<?php } ?>
		</div>
	</div>
</body>
</html>
<?php }} ?>
