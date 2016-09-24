<?php /* Smarty version 2.6.18, created on 2016-07-12 15:48:03
         compiled from index/menu.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['res']; ?>
/css/common.css" type="text/css" />
<style>
/* 去掉 A 连接的边框线 */
a{blr:expression(this.onFocus=this.close());}
a{blr:expression(this.onFocus=this.blur());}
a:focus { -moz-outline-style: none;}
</style>
<script type='text/javascript' src='<?php echo $this->_tpl_vars['public']; ?>
/js/jquery.js'></script>
<title>---无标题---</title>
</head>
<body>
<script>
	$(function(){
		var $op=$('#main_nav ul li ul');

		/* 第一个默认是显示的 */
		$('#main_nav ul li ul:gt(0)').hide();
		$('#main_nav ul li h3:first').addClass('click');
		$('#main_nav ul li h3').click(function(){
			//$op.siblings().hide().end().fadeIn(500);
			if($(this).next('ul').css('display')=='none'){
				$op.hide();
				$('#main_nav ul li h3').removeClass('click');
				$(this).next('ul').slideDown(100).end().addClass('click');
			}
		});
   });
</script>
<div id="menu_content">
     <div id="user_info">欢迎您，<strong><?php echo $_SESSION['user_info']['name']; ?>
</strong><br />[级别:<a class="C09c" href="javascript:void(0)"><?php echo $_SESSION['user_info']['grade_name']; ?>
</a>] <a href="<?php echo $this->_tpl_vars['app']; ?>
/login/logout" target='_top'>退出</a></div>
	 <div id="main_nav">
	   <ul class="all">
			<?php if ($_GET['operate'] == 2): ?>
				<li>
					<h3>帖子/主题</h3>
					<ul>
						
						<li><a href='<?php echo $this->_tpl_vars['app']; ?>
/subject/index' target='main'>查看主题</a></li>
						<li><a href='<?php echo $this->_tpl_vars['root']; ?>
/index.php/subject/post_subj_page' target='_black'>添加主题</a></li>
					</ul>
				</li>
				<li>
					<h3>分区/版块</h3>
					<ul>
						<li><a href='<?php echo $this->_tpl_vars['app']; ?>
/board' target='main'>分区/版块</a></li>
					</ul>
				</li>
				<li>
					<h3>空间管理</h3>
					<ul>
						<li><a href='<?php echo $this->_tpl_vars['app']; ?>
/search' target='main'>空间管理</a></li>
					</ul>
				</li>
				
			<?php elseif ($_GET['operate'] == 3): ?>
				<li>
					<h3>相册/照片</h3>
					<ul>
						<li><a href='<?php echo $this->_tpl_vars['app']; ?>
/alspmess/index/operate/album' target='main'>查看相册</a></li>
					</ul>
				</li>
				<li>
					<h3>说说</h3>
					<ul>
						<li><a href='<?php echo $this->_tpl_vars['app']; ?>
/alspmess/index/operate/speak' target='main'>查看说说</a></li>
					</ul>
				</li>
				<li>
					<h3>留言</h3>
					<ul>
						<li><a href='<?php echo $this->_tpl_vars['app']; ?>
/alspmess/index/operate/message' target='main'>查看留言</a></li>
					</ul>
				</li>
				<li>
					<h3>站内信</h3>
					<ul>
						<li><a href='<?php echo $this->_tpl_vars['app']; ?>
/sms/' target='main'>查看站内信</a></li>
						<li><a href='<?php echo $this->_tpl_vars['app']; ?>
/sms/add' target='main'>发送站内信</a></li>
					</ul>
				</li>
			<?php elseif ($_GET['operate'] == 4): ?>
				<li>
					<h3>用户管理</h3>
					<ul>
						<li><a href='<?php echo $this->_tpl_vars['app']; ?>
/user/' target='main'>查看用户</a></li>
						<li><a href='<?php echo $this->_tpl_vars['app']; ?>
/user/add' target='main'>添加用户</a></li>
					</ul>
				</li>
				<li>
					<h3>等级管理</h3>
					<ul>
						<li><a href='<?php echo $this->_tpl_vars['app']; ?>
/level/' target='main'>查看等级</a></li>
					</ul>
				</li>
				<?php elseif ($_GET['operate'] == 5): ?>
				<li>
					<h3>公告管理</h3>
					<ul>
						<li><a href='<?php echo $this->_tpl_vars['app']; ?>
/notice/index' target='main'>查看公告</a></li>
						<li><a href='<?php echo $this->_tpl_vars['app']; ?>
/notice/add' target='main'>添加公告</a></li>
					</ul>
				</li>
				<li>
					<h3>新闻管理</h3>
					<ul>
						<li><a href='<?php echo $this->_tpl_vars['app']; ?>
/news/' target='main'>查看新闻</a></li>
						<li><a href='<?php echo $this->_tpl_vars['app']; ?>
/news/add' target='main'>添加新闻</a></li>
					</ul>
				</li>
			<?php else: ?>
				<li>
					<h3>网站配置</h3>
					<ul>
						<li><a href='<?php echo $this->_tpl_vars['app']; ?>
/set/index' target='main'>网站配置</a></li>
						<li><a href='<?php echo $this->_tpl_vars['app']; ?>
/set/bbs' target='main'>论坛设置</a></li>
						<li><a href='<?php echo $this->_tpl_vars['app']; ?>
/set/space' target='main'>空间设置</a></li>
						<li><a href='<?php echo $this->_tpl_vars['app']; ?>
/set/clear_cache' target='main'>清空缓存</a></li>
						<li><a href='<?php echo $this->_tpl_vars['app']; ?>
/set/optimize' target='main'>数据库优化</a></li>
					</ul>
				</li>
				
			<?php endif; ?>
	   </ul>
	 </div>
</div>
</body>
</html>