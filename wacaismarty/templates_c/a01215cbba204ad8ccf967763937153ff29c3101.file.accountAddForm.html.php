<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-17 06:53:13
         compiled from ".\templates\accountAddForm.html" */ ?>
<?php /*%%SmartyHeaderCode:178585460550f052b88-65075911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a01215cbba204ad8ccf967763937153ff29c3101' => 
    array (
      0 => '.\\templates\\accountAddForm.html',
      1 => 1416207059,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178585460550f052b88-65075911',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5460550f0f7362_06146944',
  'variables' => 
  array (
    'account_t' => 0,
    'company' => 0,
    'value' => 0,
    'statistical' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5460550f0f7362_06146944')) {function content_5460550f0f7362_06146944($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>账户——增加</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<meta name="Generator" content="EditPlus">
	<meta name="Author" content="">
	<meta name="Keywords" content="">
	<meta name="Description" content="">
	<?php echo '<script'; ?>
 src="js/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
	
	<style>
		body{font-size:14px;}
		div ul li a {padding:0; margin:0;}
		ul li {list-style:none;}
		.account_box { width:600px; height:auto; margin:0 auto; border:1px solid black;} 
		.account_box_title { width:600px; height:40px; background:#f0f2f5;}
		.account_box_title span {width:110px; height:40px; line-height:40px; font-weight:bold; text-align:center; float:left; background:white;}
		.account_box_body{width:600px; min-height:380px; overflow:hidden; padding:10px 0 0 0;}
		.account_type{width:600px; height:30px; float:left; margin:5px 0;}
		.account_type span {width:130px; height:30px; line-height:30px; padding:0 10px 0 0; text-align:right; float:left;}
		.select_font{width:135px; height:28px; line-height:28px; background:url(./images/unselect.png) 128px 13px no-repeat; text-align:left; float:left; border:1px solid #ccc; padding:0 0 0 10px; font-size:14px; cursor:pointer;  margin:0 10px 0 0;}
		.account_change_content {width:600px; height:auto; overflow:visible; float:left;}
		.account_name {width:600px; height:30px; float:left; margin:5px 0; }
		.account_name span {width:130px; height:30px; line-height:30px; padding:0 10px 0 0; text-align:right; float:left;}
		.account_name input {width:140px; height:22px; line-height:22px; float:left;border: 1px solid #ccc;}
		.account_remainder {width:600px; height:auto; overflow:visible; margin:5px 0; float:left;}
		.account_remainder span {width:130px; height:30px; line-height:30px; padding:0 10px 0 0; text-align:right; float:left;}
		.account_remainder_ul {width:450px; height:auto; overflow:visible; float:left; margin:0; padding:0;}
		.account_remainder_ul li {width:auto; height:30px; line-height:30px; float:left; margin:0 0 10px 0; padding:0;}
		.account_remainder_ul li input {width:140px; height:24px; line-height:24px;border: 1px solid #ccc; float:left; margin:0 10px 0 0;}
		.currency_type_delete {width:20px; height:20px; float:left; margin:4px 0 0 0px;  cursor:pointer; background:url(./images/innerpagesprite_001.gif) -295px -55px no-repeat; display:none;}
		.credit_delete {width:20px; height:20px; float:left; margin:4px 0 0 0px;  cursor:pointer; background:url(./images/innerpagesprite_001.gif) -295px -55px no-repeat; display:none;}
		.currency_type_remainding {width:250px; height:235px; overflow-y:scroll; position:relative; top:0px; left:0px; border:1px solid #999; background:white; display:none;}
		.currency_type_remainding ul {width:220px; height:auto; overflow:hidden;padding:0;margin:0;}
		.currency_type_remainding ul li{width:220px; height:24px; line-height:24px; float:hidden;  text-align:left; padding:0 0 0 10px; cursor:pointer;}
		.currency_type_add {width:20px; height:20px; margin:4px 0 0 10px; float:left;  cursor:pointer; background:url(./images/innerpagesprite_001.gif) -375px -95px no-repeat;}
		.account_statistical {width:600px; height:30px; float:left; margin:5px 0; }
		.account_statistical span {width:130px; height:30px; line-height:30px; padding:0 10px 0 0; text-align:right; float:left;}
		.account_remark {width:600px; height:180px; float:left; margin:5px 0; }
		.account_remark span {width:130px; height:30px; line-height:30px; padding:0 10px 0 0; text-align:right; float:left;}
		.account_remark textarea {height: 75px;margin: 0;padding: 0 0 0 5px;resize: none;width: 295px;}
		.account_submit {width:120px; height:30px; margin:0 auto 20px auto;}
		.account_submit input  {background: none repeat scroll 0 0 #15a041;border: 1px solid #15a041;color: #fff;font-weight: bold;width: 110px;cursor: pointer;height: 30px;line-height: 30px;text-align: center;}
	</style>
	<?php echo '<script'; ?>
>
		$(function(){
			var idNumber=2;
			var idNumCredit=2;
			account_select("statistical","statistical_select","statistical_input","1");
			account_select("creditDate","creditDate_select","creditDate_input","1");
			account_select("creditPayDate","creditPayDate_select","creditPayDate_input","1");
			account_select("creditRemind","creditRemind_select","creditRemind_input","0");
			//account_select("account_type","account_type_select","account_type_input","");
			account_select("company_type","company_type_select","company_type_input","1");
			account_select("cur_1","cur_1_select","cur_1_input","1");
			account_select("credit_1","credit_1_select","credit_1_input","1");
			$("#currency_type_delete_1").click(function(){
				$("#cur_1").parent().remove();			
			})
			$("#currency_type_add").click(function(){
				var l=$("#account_remainder_ul").children().length;
				if(l>1){
					$(".currency_type_delete").show();
				}

				$("#account_remainder_ul li").eq(0).clone().prependTo("#account_remainder_ul");
				$("#account_remainder_ul li:first .select_font").attr("id","cur_"+idNumber);
				$("#account_remainder_ul li:first .currency_type_remainding").attr("id","cur_"+idNumber+"_select");
				$("#account_remainder_ul li:first .cur_input").attr("id","cur_"+idNumber+"_input");
				account_select("cur_"+idNumber,"cur_"+idNumber+"_select","cur_"+idNumber+"_input","1");
				$("#account_remainder_ul li:first .currency_type_delete").attr("id","currency_type_delete_"+idNumber);
				$("#currency_type_delete_"+idNumber).click(function(){
					$(this).parent().remove();			
					var ll=$("#account_remainder_ul").children().length;
					if(ll<3){
						$(".currency_type_delete").hide();
					}
				})
				idNumber++;
			})

			$("#credit_add").click(function(){
				var lc=$("#credit_ul").children().length;
				if(lc>1){
					$(".credit_delete").show();
				}

				$("#credit_ul li").eq(0).clone().prependTo("#credit_ul");
				$("#credit_ul li:first .select_font").attr("id","credit_"+idNumCredit);
				$("#credit_ul li:first .currency_type_remainding").attr("id","credit_"+idNumCredit+"_select");
				$("#credit_ul li:first .cur_input").attr("id","credit_"+idNumCredit+"_input");
				account_select("credit_"+idNumCredit,"credit_"+idNumCredit+"_select","credit_"+idNumCredit+"_input","1");
				$("#credit_ul li:first .credit_delete").attr("id","credit_delete_"+idNumCredit);
				$("#credit_delete_"+idNumCredit).click(function(){
					$(this).parent().remove();			
					var llc=$("#credit_ul").children().length;
					if(llc<3){
						$(".credit_delete").hide();
					}
				})
				idNumCredit++;
			})

			$('#send').click(function(){
				 $.ajax({
					 type: "POST",
					 url: "accountAjax.php",
					 data: {username:"username", content:"content"},
					 dataType: "text",
					 success: function(data){
						alert(data);
					 }
				 });
			});
		});

		function account_select(show_id,select_id,input_id,intial){
			$("#"+input_id).val(intial);
			$("#"+show_id).click(function(){
				$("#"+select_id).toggle();
			})
			$("#"+select_id+" ul li").each(function(){
				$(this).click(function(){
					$("#"+select_id).toggle();
					$("#"+show_id).html($(this).html());
					$("#"+input_id).val($(this).attr("data-id"));
				})
				$(this).mouseover(function(){
					$(this).css({"background":"#3278dc","color":"white"});
				})
				$(this).mouseout(function(){
					$(this).css({"background":"white","color":"black"});
				})
			})
		}
	<?php echo '</script'; ?>
>
	
</head>

<body>
	<?php echo $_smarty_tpl->getSubTemplate ("subbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="account_box">
		<div class="account_box_title">
			<span>账户</span>
		</div>
		<div class="account_box_body">
			<form action="accountAdd.php" method="post">
				<div class="account_type">
					<span>类别</span>
					<div class="select_font" id="account_type">
						<?php if ($_smarty_tpl->tpl_vars['account_t']->value=='credit') {?>信用卡<?php } elseif ($_smarty_tpl->tpl_vars['account_t']->value=='deposit') {?>储蓄卡<?php } elseif ($_smarty_tpl->tpl_vars['account_t']->value=='investment') {?>投资账户<?php } elseif ($_smarty_tpl->tpl_vars['account_t']->value=='stored') {?>储值卡<?php } elseif ($_smarty_tpl->tpl_vars['account_t']->value=='shopping') {?>购物卡<?php } elseif ($_smarty_tpl->tpl_vars['account_t']->value=='beauty') {?>美容卡<?php } elseif ($_smarty_tpl->tpl_vars['account_t']->value=='bus') {?>公交卡<?php } elseif ($_smarty_tpl->tpl_vars['account_t']->value=='dining') {?>饭卡<?php } elseif ($_smarty_tpl->tpl_vars['account_t']->value=='internet') {?>网络账户<?php } elseif ($_smarty_tpl->tpl_vars['account_t']->value=='virtual') {?>虚拟账户<?php } elseif ($_smarty_tpl->tpl_vars['account_t']->value=='loan') {?>债权/债务人<?php } else { ?>现金<?php }?>
					</div>
					<div class="currency_type_remainding" id="account_type_select" style="top:30px; left:-157px;">
						<ul>
							<li data-id="cash">现金</li>
							<li data-id="credit">信用卡</li>
							<li data-id="deposit ">储蓄卡</li>
							<li data-id="investment">投资账户</li>
							<li data-id="stored">储值卡</li>
							<li data-id="shopping">购物卡</li>
							<li data-id="beauty">美容卡</li>
							<li data-id="bus">公交卡</li>
							<li data-id="dining">饭卡</li>
							<li data-id="internet">网络账户</li>
							<li data-id="virtual">虚拟账户</li>
							<li data-id="loan">债权/债务人</li>
						</ul>
					</div>
					<input type="hidden" id="account_type_input" name="account_type" value="<?php echo $_smarty_tpl->tpl_vars['account_t']->value;?>
">
				</div>
				<div class="account_change_content">
					<div  class="account_name">
						<span>名称</span>
						<input type="text" name="account_name" >
					</div>
					<?php if ($_smarty_tpl->tpl_vars['account_t']->value=='credit'||$_smarty_tpl->tpl_vars['account_t']->value=='deposit'||$_smarty_tpl->tpl_vars['account_t']->value=='investment'||$_smarty_tpl->tpl_vars['account_t']->value=='internet') {?>
					<div  class="account_name">
						<span>发卡行</span>
						<div class="select_font" id="company_type">
							<?php if ($_smarty_tpl->tpl_vars['account_t']->value!='investment'&&$_smarty_tpl->tpl_vars['account_t']->value!='internet') {?>中国银行<?php }?>
						</div>
						<input type="hidden" id="company_type_input" name="company_type" value="<?php if ($_smarty_tpl->tpl_vars['account_t']->value!='investment'&&$_smarty_tpl->tpl_vars['account_t']->value!='internet') {?>1<?php } else { ?>0<?php }?>">
						<?php if ($_smarty_tpl->tpl_vars['account_t']->value!='internet') {?>
							<span>卡号</span>
							<input type="text" name="company_number" >
						<?php }?>
						<div class="currency_type_remainding" id="company_type_select" <?php if ($_smarty_tpl->tpl_vars['account_t']->value!='internet') {?>style="top:0px; left:140px;"<?php } else { ?>style="top:30px; left:-157px;"<?php }?>>
							<ul>
								<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['company']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
									<li data-id="<?php echo $_smarty_tpl->tpl_vars['value']->value['company_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['company_name'];?>
</li>
								<?php } ?>
							</ul>
						</div>
					</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['account_t']->value=='shopping'||$_smarty_tpl->tpl_vars['account_t']->value=='bus') {?>
					<div  class="account_name">
						<span>卡号</span>
						<input type="text" name="company_number" >
					</div>
					<?php }?>
					<div class="account_remainder">
						<span><?php if ($_smarty_tpl->tpl_vars['account_t']->value=='credit') {?>当前欠款<?php } else { ?>余额<?php }?></span>
						<ul class="account_remainder_ul" id="account_remainder_ul">
							<li>
								<div class="select_font" id="cur_1">人民币</div>
								<input type="text" name="remainding_money[]" value="0.00">
								<div class="currency_type_delete" id="currency_type_delete_1"></div>
								<div class="currency_type_remainding" id="cur_1_select">
									<ul>
										<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['statistical']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
											<li data-type="<?php echo $_smarty_tpl->tpl_vars['value']->value['currency_abbreviation'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['value']->value['currency_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['currency_name'];?>
</li>
										<?php } ?>
									</ul>
								</div>
								<input type="hidden" name="remainding_type[]" class="cur_input" id="cur_1_input" value="1">
							</li>
							<?php if ($_smarty_tpl->tpl_vars['account_t']->value!='loan') {?><li style="width:20px; height:20px; margin:4px 0 0 10px;" class="currency_type_add" id="currency_type_add"></li><?php }?>
						</ul>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['account_t']->value=='credit') {?>
					<div class="account_remainder">
						<span>信用额度</span>
						<ul class="account_remainder_ul" id="credit_ul">
							<li>
								<div class="select_font" id="credit_1">人民币</div>
								<input type="text" name="credit_money[]" value="0.00">
								<div class="credit_delete" id="credit_delete_1"></div>
								<div class="currency_type_remainding" id="credit_1_select">
									<ul>
										<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['statistical']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
											<li data-type="<?php echo $_smarty_tpl->tpl_vars['value']->value['currency_abbreviation'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['value']->value['currency_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['currency_name'];?>
</li>
										<?php } ?>
									</ul>
								</div>
								<input type="hidden" name="credit_type[]" class="cur_input" id="credit_1_input" value="1">
							</li>
							<li style="width:20px; height:20px; margin:4px 0 0 10px;" class="currency_type_add" id="credit_add"></li>
						</ul>
					</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['account_t']->value!='loan') {?>
					<div class="account_statistical">
						<span>统计币种</span>
						<div class="select_font" id="statistical">
							人民币
						</div>
						<div class="currency_type_remainding" id="statistical_select" style="top:30px; left:-157px;">
							<ul class="account_statistical_select">
									<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['statistical']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
										<li data-type="<?php echo $_smarty_tpl->tpl_vars['value']->value['currency_abbreviation'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['value']->value['currency_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['currency_name'];?>
</li>
									<?php } ?>
							</ul>
						</div>
						<input type="hidden" name="statistical_currency" class="cur_input" id="statistical_input" value="1">
					</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['account_t']->value=='credit') {?>
					<div class="account_statistical">
						<span>账单日</span>
						<div class="select_font" id="creditDate">
							1
						</div>
						<div class="currency_type_remainding" id="creditDate_select" style="top:30px; left:-157px;">
							<ul class="account_statistical_select">
								<li data-id="1">1</li>
								<li data-id="2">2</li>
								<li data-id="3">3</li>
								<li data-id="4">4</li>
								<li data-id="5">5</li>
								<li data-id="6">6</li>
								<li data-id="7">7</li>
								<li data-id="8">8</li>
								<li data-id="9">9</li>
								<li data-id="10">10</li>
								<li data-id="11">11</li>
								<li data-id="12">12</li>
								<li data-id="13">13</li>
								<li data-id="14">14</li>
								<li data-id="15">15</li>
								<li data-id="16">16</li>
								<li data-id="17">17</li>
								<li data-id="18">18</li>
								<li data-id="19">19</li>
								<li data-id="20">20</li>
								<li data-id="21">21</li>
								<li data-id="22">22</li>
								<li data-id="23">23</li>
								<li data-id="24">24</li>
								<li data-id="25">25</li>
								<li data-id="26">26</li>
								<li data-id="27">27</li>
								<li data-id="28">28</li>
								<li data-id="0">月末</li>
							</ul>
						</div>
						<input type="hidden" name="creditDate" class="cur_input" id="creditDate_input" value="1">
					</div>
					<div class="account_statistical">
						<span>还款日</span>
						<div class="select_font" id="creditPayDate">
							1
						</div>
						<div class="currency_type_remainding" id="creditPayDate_select" style="top:30px; left:-157px;">
							<ul class="account_statistical_select">
								<li data-id="1">1</li>
								<li data-id="2">2</li>
								<li data-id="3">3</li>
								<li data-id="4">4</li>
								<li data-id="5">5</li>
								<li data-id="6">6</li>
								<li data-id="7">7</li>
								<li data-id="8">8</li>
								<li data-id="9">9</li>
								<li data-id="10">10</li>
								<li data-id="11">11</li>
								<li data-id="12">12</li>
								<li data-id="13">13</li>
								<li data-id="14">14</li>
								<li data-id="15">15</li>
								<li data-id="16">16</li>
								<li data-id="17">17</li>
								<li data-id="18">18</li>
								<li data-id="19">19</li>
								<li data-id="20">20</li>
								<li data-id="21">21</li>
								<li data-id="22">22</li>
								<li data-id="23">23</li>
								<li data-id="24">24</li>
								<li data-id="25">25</li>
								<li data-id="26">26</li>
								<li data-id="27">27</li>
								<li data-id="28">28</li>
								<li data-id="0">月末</li>
							</ul>
						</div>
						<input type="hidden" name="creditPayDate" class="cur_input" id="creditPayDate_input" value="1">
					</div>
					<div class="account_statistical">
						<span>还款提醒</span>
						<div class="select_font" id="creditRemind">
							1
						</div>
						<div class="currency_type_remainding" id="creditRemind_select" style="top:30px; left:-157px;">
							<ul class="account_statistical_select">
								<li data-id="0">无需提醒</li>
								<li data-id="1">当天提醒</li>
								<li data-id="3">滴前3天+当天提醒</li>
								<li data-id="7">提前7天+当天提醒</li>
							</ul>
						</div>
						<input type="hidden" name="creditRemind" class="cur_input" id="creditRemind_input" value="0">
					</div>
					<?php }?>
					<div class="account_remark">
						<span>备注</span>
						<textarea name="remark"></textarea>
					</div>
				</div>
				<div style="width:600px; float:left;">
					<div class="account_submit" style="visibility: visible;">
						<input type="submit" value="提 交">
					</div>
				</div>
			</form>
		</div>
		<br>
		<a href="accountList.php">账户列表</a>
	</div>





</body>
</html>
<?php }} ?>
