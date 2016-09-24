<?php /* Smarty version 2.6.18, created on 2016-07-15 16:58:07
         compiled from public/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'nocache', 'public/header.tpl', 4, false),)), $this); ?>
<?php $this->_cache_serials['./runtime/comps/default/index_php/\%%93^934^93438716%%header.tpl.inc'] = '71c516b8436ba00ea863d76324c2dee3'; ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php if ($this->caching && !$this->_cache_including): echo '{nocache:71c516b8436ba00ea863d76324c2dee3#0}'; endif;$this->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<title><?php echo $this->_tpl_vars['title']; ?>
</title>
	<meta content="<?php echo $this->_tpl_vars['keywords']; ?>
" name="keywords">
	<meta content="<?php echo $this->_tpl_vars['desc']; ?>
" name="description">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['res']; ?>
/css/common.css" />
	<script src="<?php echo $this->_tpl_vars['public']; ?>
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
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:71c516b8436ba00ea863d76324c2dee3#0}'; endif;?>
<body>
<div id="header">
		<?php if ($this->caching && !$this->_cache_including): echo '{nocache:71c516b8436ba00ea863d76324c2dee3#1}'; endif;$this->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<div id="logo_user_login">
			<div id="logo">
				<a href="<?php echo $this->_tpl_vars['root']; ?>
"><img src="<?php echo $this->_tpl_vars['public']; ?>
/images/<?php echo $this->_tpl_vars['logo_name']; ?>
" alt="源代码logo" title="源代码"/></a>
			</div>
			<?php if ($_SESSION['home_login'] == 1): ?>
			<div id="user_info">
				<a href="<?php echo $this->_tpl_vars['root']; ?>
/space.php"><img src="<?php echo $this->_tpl_vars['public']; ?>
/uploads/user/s_<?php echo $_SESSION['user_info']['face_path']; ?>
" /></a>
				<div id="opera">
					<strong><a href="<?php echo $this->_tpl_vars['root']; ?>
/space.php/index/index/uid/<?php echo $_SESSION['user_info']['id']; ?>
"><?php echo $_SESSION['user_info']['name']; ?>
</a></strong> 在线
					|
					消息(<a href="<?php echo $this->_tpl_vars['root']; ?>
/space.php/sms/index/uid/<?php echo $_SESSION['user_info']['id']; ?>
" style="color:red"><b><?php echo $this->_tpl_vars['sms_num']; ?>
</b></a>)
					|
					<a href="<?php echo $this->_tpl_vars['app']; ?>
/subject/post_subj_page">快速发帖</a>
					|
					<a href="<?php echo $this->_tpl_vars['app']; ?>
/login/logout">退出</a>
					<br />
					<a href="<?php echo $this->_tpl_vars['root']; ?>
/space.php/index/index/uid/<?php echo $_SESSION['user_info']['id']; ?>
">我的空间</a>
					|
					积分:(<a href="<?php echo $this->_tpl_vars['root']; ?>
/space.php/profile/index/uid/<?php echo $_SESSION['user_info']['id']; ?>
"><?php echo $_SESSION['user_info']['grade_num']; ?>
</a>)
					|
					等级:<a href="<?php echo $this->_tpl_vars['root']; ?>
/space.php/profile/index/uid/<?php echo $_SESSION['user_info']['id']; ?>
"><?php echo $_SESSION['user_info']['level']; ?>
</a>
				</div>
			</div>
			<?php else: ?>
			<div id="user_login">
			<form action="<?php echo $this->_tpl_vars['root']; ?>
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
					<td><a href="<?php echo $this->_tpl_vars['app']; ?>
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
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:71c516b8436ba00ea863d76324c2dee3#1}'; endif;?>
		<div id="nav">
			<ul>
				<li class="first"><a href="<?php echo $this->_tpl_vars['app']; ?>
">论坛</a></li>
				<li class="first"><a href="<?php echo $this->_tpl_vars['app']; ?>
/news/index">新闻</a></li>
				<li class="first"><a href="<?php echo $this->_tpl_vars['app']; ?>
/notice/index">公告</a></li>
				<li class="first"><a href="<?php echo $this->_tpl_vars['app']; ?>
/user">用户</a></li>
			</ul>
		</div>
		<div id="search">
		<table border="0" cellspacing="0">
			<form action="<?php echo $this->_tpl_vars['app']; ?>
/search/search" method="post">
			<tr>
				<td class="search_icon"></td>
				<td class="search_input"><input type="input" name="keyword" value="<?php echo $_GET['keyword']; ?>
"/></td>
				<td class="search_type">
					<a href="javascript:void(0)">
						<?php if ($_GET['search_type'] == 1): ?>
							主题
						<?php elseif ($_GET['search_type'] == 2): ?>
							用户
						<?php elseif ($_GET['search_type'] == 3): ?>
							日志
						<?php else: ?>
							主题
						<?php endif; ?>
					</a>
					<div id="search_type_box">
						<ul>
							<li value="1">主题</li>
							<li value="2">用户</li>
							<li value="3">日志</li>
						</ul>
						<?php if ($_GET['search_type'] == 1): ?>
							<input type="hidden" name="search_type" value="1" />
						<?php elseif ($_GET['search_type'] == 2): ?>
							<input type="hidden" name="search_type" value="2" />
						<?php elseif ($_GET['search_type'] == 3): ?>
							<input type="hidden" name="search_type" value="3" />
						<?php else: ?>
							<input type="hidden" name="search_type" value="1" />
						<?php endif; ?>						
					</div>
				</td>
				<td class="search_btn_td">
					<input type="submit" class="search_btn_but" value="搜索" />
				</td>
			</tr>
			</form>
		</table>
		</div>
		<div id="nav_chain">
			<a href="<?php echo $this->_tpl_vars['app']; ?>
" id="root">&nbsp;</a>
			<?php unset($this->_sections['nav']);
$this->_sections['nav']['loop'] = is_array($_loop=$this->_tpl_vars['nav_chain']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['nav']['name'] = 'nav';
$this->_sections['nav']['show'] = true;
$this->_sections['nav']['max'] = $this->_sections['nav']['loop'];
$this->_sections['nav']['step'] = 1;
$this->_sections['nav']['start'] = $this->_sections['nav']['step'] > 0 ? 0 : $this->_sections['nav']['loop']-1;
if ($this->_sections['nav']['show']) {
    $this->_sections['nav']['total'] = $this->_sections['nav']['loop'];
    if ($this->_sections['nav']['total'] == 0)
        $this->_sections['nav']['show'] = false;
} else
    $this->_sections['nav']['total'] = 0;
if ($this->_sections['nav']['show']):

            for ($this->_sections['nav']['index'] = $this->_sections['nav']['start'], $this->_sections['nav']['iteration'] = 1;
                 $this->_sections['nav']['iteration'] <= $this->_sections['nav']['total'];
                 $this->_sections['nav']['index'] += $this->_sections['nav']['step'], $this->_sections['nav']['iteration']++):
$this->_sections['nav']['rownum'] = $this->_sections['nav']['iteration'];
$this->_sections['nav']['index_prev'] = $this->_sections['nav']['index'] - $this->_sections['nav']['step'];
$this->_sections['nav']['index_next'] = $this->_sections['nav']['index'] + $this->_sections['nav']['step'];
$this->_sections['nav']['first']      = ($this->_sections['nav']['iteration'] == 1);
$this->_sections['nav']['last']       = ($this->_sections['nav']['iteration'] == $this->_sections['nav']['total']);
?>
				»<a href="<?php echo $this->_tpl_vars['nav_chain'][$this->_sections['nav']['index']]['url']; ?>
"><?php echo $this->_tpl_vars['nav_chain'][$this->_sections['nav']['index']]['name']; ?>
</a>
			<?php endfor; endif; ?>
		</div>
		<div id='return_top' onclick='window.scrollTo(0,0)'></div>
	</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/login_window.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>