<?php /* Smarty version 2.6.18, created on 2016-07-20 18:37:00
         compiled from public/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'nocache', 'public/header.tpl', 1, false),)), $this); ?>
<?php $this->_cache_serials['./runtime/comps/default/space_php/\%%93^934^93438716%%header.tpl.inc'] = 'ebc34d10a41b6a5a0cef23c95ff33627'; ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>	<head>		<title><?php if ($this->caching && !$this->_cache_including): echo '{nocache:ebc34d10a41b6a5a0cef23c95ff33627#0}'; endif;$this->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['user_h']['true_name'] != ''): ?><?php echo $this->_tpl_vars['user_h']['true_name']; ?>
<?php else: ?><?php echo $this->_tpl_vars['user_h']['name']; ?>
<?php endif; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:ebc34d10a41b6a5a0cef23c95ff33627#0}'; endif;?>的个人空间---Powered By SourceCode.com源代码团队</title>		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>		<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['res']; ?>
/css/style.css" />		<script type="text/javascript" src="<?php echo $this->_tpl_vars['public']; ?>
/js/ajax3.0.js"></script>		<script src="<?php echo $this->_tpl_vars['public']; ?>
/ke/kindeditor.js"></script>		<script type="text/javascript" src="<?php echo $this->_tpl_vars['res']; ?>
/js/common.js"></script>		<script type="text/javascript">			var app="<?php echo $this->_tpl_vars['app']; ?>
";			var url="<?php echo $this->_tpl_vars['url']; ?>
";		</script>	</head>	<body>	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/login.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/register.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>			<div class="fast" id="fast" onmouseover="show('fast','block');" onmouseout="show('fast','none');">					<ul>					<?php if ($this->caching && !$this->_cache_including): echo '{nocache:ebc34d10a41b6a5a0cef23c95ff33627#1}'; endif;$this->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>						<li onmouseover="changecolor(this);" onmouseout="returncolor(this)"><a href="<?php echo $this->_tpl_vars['app']; ?>
/index/index/uid/<?php echo $_SESSION['user_info']['id']; ?>
">我的空间</a></li>						<li onmouseover="changecolor(this);" onmouseout="returncolor(this)"><a href="<?php echo $this->_tpl_vars['app']; ?>
/friend/index/uid/<?php echo $_SESSION['user_info']['id']; ?>
">我的好友</a></li>						<li onmouseover="changecolor(this);" onmouseout="returncolor(this)"><a href="<?php echo $this->_tpl_vars['root']; ?>
/index.php/subject/post_subj_page">快速发帖</a></li>						<li onmouseover="changecolor(this);" onmouseout="returncolor(this)"><a href="<?php echo $this->_tpl_vars['app']; ?>
/speak/index/uid/<?php echo $_SESSION['user_info']['id']; ?>
">我的说说</a></li>						<li onmouseover="changecolor(this);" onmouseout="returncolor(this)"><a href="<?php echo $this->_tpl_vars['app']; ?>
/log/add/uid/<?php echo $_SESSION['user_info']['id']; ?>
">写篇日志</a></li>					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:ebc34d10a41b6a5a0cef23c95ff33627#1}'; endif;?>					</ul>			</div>			<div id="top">			<div class="top_left"><span>SourceCode</span> <a href="<?php echo $this->_tpl_vars['root']; ?>
/index.php">返回论坛</a></div>			<div class="top_right">			<?php if ($this->caching && !$this->_cache_including): echo '{nocache:ebc34d10a41b6a5a0cef23c95ff33627#2}'; endif;$this->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>					<?php if ($_SESSION['home_login'] == 1): ?>						<span><a href="<?php echo $this->_tpl_vars['app']; ?>
/index/index/uid/<?php echo $_SESSION['user_info']['id']; ?>
"><?php echo $_SESSION['user_info']['name']; ?>
</a></span><span id="fast_bar" style="font-weight:normal;margin:0;cursor:pointer;" onmouseover="show('fast','block');"> 快速导航 <img src="<?php echo $this->_tpl_vars['public']; ?>
/images/arrwd.gif"> </span>						<a href="<?php echo $this->_tpl_vars['app']; ?>
/profile/edit/uid/<?php echo $_SESSION['user_info']['id']; ?>
">设置</a> <a href="<?php echo $this->_tpl_vars['app']; ?>
/sms/index/uid/<?php echo $_SESSION['user_info']['id']; ?>
">消息(<font color="red"><?php echo $this->_tpl_vars['sms_num']; ?>
</font>)</a> <a href="<?php echo $this->_tpl_vars['app']; ?>
/pub/dologout">退出</a>					<?php else: ?>						<a href="javascript:void(0);" onclick="show('reg_send','block');show('bottom','block',true)">立即注册</a> <a href="javascript:void(0);" onclick="show('login_send','block');show('bottom','block',true)">登录</a>					<?php endif; ?>			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:ebc34d10a41b6a5a0cef23c95ff33627#2}'; endif;?>			</div>		</div>		<div id="main">			<div id="header">				<div class="title">					<span id="pro"><?php if ($this->caching && !$this->_cache_including): echo '{nocache:ebc34d10a41b6a5a0cef23c95ff33627#3}'; endif;$this->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo $this->_tpl_vars['user_h']['name']; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:ebc34d10a41b6a5a0cef23c95ff33627#3}'; endif;?>的个人空间</span><br>					<span id="url">					<?php if ($this->caching && !$this->_cache_including): echo '{nocache:ebc34d10a41b6a5a0cef23c95ff33627#4}'; endif;$this->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>						<a id="domainurl" href="<?php echo $this->_tpl_vars['app']; ?>
/index/index/uid/<?php echo $this->_tpl_vars['user_h']['id']; ?>
" onclick="setCopy('<?php echo $this->_tpl_vars['app']; ?>
/index/index/uid/<?php echo $this->_tpl_vars['user_h']['id']; ?>
', '空间地址复制成功');return false;">http://<?php echo $_SERVER['SERVER_ADDR']; ?>
<?php echo $this->_tpl_vars['app']; ?>
/index/index/uid/<?php echo $this->_tpl_vars['user_h']['id']; ?>
</a>						<a href="javascript:void(0);" onMouseDown="browserEvent(this, 'http://<?php echo $_SERVER['SERVER_ADDR']; ?>
<?php echo $this->_tpl_vars['app']; ?>
/index/index/uid/<?php echo $this->_tpl_vars['user_h']['id']; ?>
','<?php echo $this->_tpl_vars['user_h']['name']; ?>
的个人空间')">[收藏]</a>						<a id="domainurl" href="<?php echo $this->_tpl_vars['app']; ?>
/index/index/uid/<?php echo $this->_tpl_vars['user_h']['id']; ?>
" onclick="copyToClipBoard();return false;">[复制]</a>					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:ebc34d10a41b6a5a0cef23c95ff33627#4}'; endif;?>					</span>				</div>				<div class="menu">					<ul>					<?php if ($this->caching && !$this->_cache_including): echo '{nocache:ebc34d10a41b6a5a0cef23c95ff33627#5}'; endif;$this->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>						<li><a href="<?php echo $this->_tpl_vars['app']; ?>
/index/index/uid/<?php echo $this->_tpl_vars['user_h']['id']; ?>
">空间首页</a></li>						<li><a href="<?php echo $this->_tpl_vars['app']; ?>
/speak/index/uid/<?php echo $this->_tpl_vars['user_h']['id']; ?>
">说说</a></li>						<li><a href="<?php echo $this->_tpl_vars['app']; ?>
/log/index/uid/<?php echo $this->_tpl_vars['user_h']['id']; ?>
">日志</a></li>						<li><a href="<?php echo $this->_tpl_vars['app']; ?>
/album/index/uid/<?php echo $this->_tpl_vars['user_h']['id']; ?>
">相册</a></li>						<li><a href="<?php echo $this->_tpl_vars['app']; ?>
/friend/index/uid/<?php echo $this->_tpl_vars['user_h']['id']; ?>
">好友</a></li>						<li><a href="<?php echo $this->_tpl_vars['app']; ?>
/message/index/uid/<?php echo $this->_tpl_vars['user_h']['id']; ?>
">留言板</a></li>						<li><a href="<?php echo $this->_tpl_vars['app']; ?>
/profile/index/uid/<?php echo $this->_tpl_vars['user_h']['id']; ?>
">个人资料</a></li>							<?php if ($_SESSION['home_login'] == 1 && $_SESSION['user_info']['id'] == $this->_tpl_vars['user_h']['id']): ?>								<li><a href="<?php echo $this->_tpl_vars['app']; ?>
/sms/index/uid/<?php echo $this->_tpl_vars['user_h']['id']; ?>
">站内信</a></li>							<?php endif; ?>					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:ebc34d10a41b6a5a0cef23c95ff33627#5}'; endif;?>					</ul>				</div>			</div>