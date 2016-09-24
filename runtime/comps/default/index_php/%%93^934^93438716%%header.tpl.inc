<?php /* Smarty version 2.6.18, created on 2016-07-15 16:58:07
         compiled from public/header.tpl */

$this->_cache_serials['./runtime/comps/default/index_php/\%%93^934^93438716%%header.tpl.inc'] = '71c516b8436ba00ea863d76324c2dee3';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'nocache', 'public/header.tpl', 4, false),)), $this); ?>
<?php
function _smarty_tplfunc_71c516b8436ba00ea863d76324c2dee3_0(&$_smarty)
{
$_smarty->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<title><?php echo $_smarty->_tpl_vars['title']; ?>
</title>
	<meta content="<?php echo $_smarty->_tpl_vars['keywords']; ?>
" name="keywords">
	<meta content="<?php echo $_smarty->_tpl_vars['desc']; ?>
" name="description">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty->_tpl_vars['res']; ?>
/css/common.css" />
	<script src="<?php echo $_smarty->_tpl_vars['public']; ?>
/js/jquery.js"></script>
	<script>
	//登陆类型
	$(function(){
		$("#login_type_td").mouseover(function(){
			$(this).children("#login_type_box").show().hover();
		}).mouseout(function(){
			$(this).children("#login_type_box").hide();
		})
		$("#login_type_box ul li").click(function(){
			$("#login_type_td input[name=login_type]").val($(this).val());
			$("#login_type").text($(this).text());
			$(this).parents('#login_type_box').hide();
		})
	})	
	//搜索框的搜索类型
	$(function(){
		$('td.search_type').mouseover(function(){
			$(this).children('#search_type_box').show().hover();
		}).mouseout(function(){
			$(this).children('#search_type_box').hide();
		})
		$("#search_type_box ul li").click(function(){
			$("td.search_type > a").text($(this).text());
			$(this).parents("#search_type_box").hide();
			$(this).parent('ul').next('input[name=search_type]').val($(this).val());
		})
	})	
	//搜索检测
	$(function(){
		$('.search_btn_but').click(function(){
			if(check_login()){
				if($("input[name=keyword]").val()==''){
					alert('请输入内容');
					return false;
				}
			}else{
				return false;
			}
		})
	})
	//是否登录
	function check_login(){
		if("<?php echo $_SESSION['home_login']; ?>
"!="1"){
			$(".login_window_back").show();
			$(".login_window_box_back").show();
			window.scrollTo(0,0);		
			return false;
		}else{
			return true;
		}
	}
	</script>
</head>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}


function _smarty_tplfunc_71c516b8436ba00ea863d76324c2dee3_1(&$_smarty)
{
$_smarty->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<div id="logo_user_login">
			<div id="logo">
				<a href="<?php echo $_smarty->_tpl_vars['root']; ?>
"><img src="<?php echo $_smarty->_tpl_vars['public']; ?>
/images/<?php echo $_smarty->_tpl_vars['logo_name']; ?>
" alt="源代码logo" title="源代码"/></a>
			</div>
			<?php if ($_SESSION['home_login'] == 1): ?>
			<div id="user_info">
				<a href="<?php echo $_smarty->_tpl_vars['root']; ?>
/space.php"><img src="<?php echo $_smarty->_tpl_vars['public']; ?>
/uploads/user/s_<?php echo $_SESSION['user_info']['face_path']; ?>
" /></a>
				<div id="opera">
					<strong><a href="<?php echo $_smarty->_tpl_vars['root']; ?>
/space.php/index/index/uid/<?php echo $_SESSION['user_info']['id']; ?>
"><?php echo $_SESSION['user_info']['name']; ?>
</a></strong> 在线
					|
					消息(<a href="<?php echo $_smarty->_tpl_vars['root']; ?>
/space.php/sms/index/uid/<?php echo $_SESSION['user_info']['id']; ?>
" style="color:red"><b><?php echo $_smarty->_tpl_vars['sms_num']; ?>
</b></a>)
					|
					<a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/subject/post_subj_page">快速发帖</a>
					|
					<a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/login/logout">退出</a>
					<br />
					<a href="<?php echo $_smarty->_tpl_vars['root']; ?>
/space.php/index/index/uid/<?php echo $_SESSION['user_info']['id']; ?>
">我的空间</a>
					|
					积分:(<a href="<?php echo $_smarty->_tpl_vars['root']; ?>
/space.php/profile/index/uid/<?php echo $_SESSION['user_info']['id']; ?>
"><?php echo $_SESSION['user_info']['grade_num']; ?>
</a>)
					|
					等级:<a href="<?php echo $_smarty->_tpl_vars['root']; ?>
/space.php/profile/index/uid/<?php echo $_SESSION['user_info']['id']; ?>
"><?php echo $_SESSION['user_info']['level']; ?>
</a>
				</div>
			</div>
			<?php else: ?>
			<div id="user_login">
			<form action="<?php echo $_smarty->_tpl_vars['root']; ?>
/index.php/login/login" method="post">
			<table cellspacing='0' border="0">
				<tr>
					<td id="login_type_td">
						<span id="login_type">用户名:</span>
						<div id="login_type_box">
							<ul>
								<li value="1">Email</li>
								<li value="2">UID</li>
								<li value="3">用户名</li>
							</ul>
						</div>
						<input type="hidden" name="login_type" value="3">
					</td>
					<td><input type="input" name="name" class="input_height" /></td>
					<td><a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/register/index"><b>立即注册</b></a></td>
				</tr>
				<tr>
					<td>密码:</td>
					<td><input type="password" name="pass" class="input_height" /></td>
					<td><input type="submit" value="登陆" class="login_btn" /></td>
					
				</tr>
			</table>
			</form>
			</div>
			<?php endif; ?>
			<div class="clear"></div>
		</div>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}



?>
