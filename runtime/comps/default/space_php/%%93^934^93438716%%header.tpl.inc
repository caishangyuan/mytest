<?php /* Smarty version 2.6.18, created on 2016-07-20 18:37:00
         compiled from public/header.tpl */

$this->_cache_serials['./runtime/comps/default/space_php/\%%93^934^93438716%%header.tpl.inc'] = 'ebc34d10a41b6a5a0cef23c95ff33627';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'nocache', 'public/header.tpl', 1, false),)), $this); ?>
<?php
function _smarty_tplfunc_ebc34d10a41b6a5a0cef23c95ff33627_0(&$_smarty)
{
$_smarty->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($_smarty->_tpl_vars['user_h']['true_name'] != ''): ?><?php echo $_smarty->_tpl_vars['user_h']['true_name']; ?>
<?php else: ?><?php echo $_smarty->_tpl_vars['user_h']['name']; ?>
<?php endif; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}


function _smarty_tplfunc_ebc34d10a41b6a5a0cef23c95ff33627_1(&$_smarty)
{
$_smarty->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?>						<li onmouseover="changecolor(this);" onmouseout="returncolor(this)"><a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/index/index/uid/<?php echo $_SESSION['user_info']['id']; ?>
">我的空间</a></li>						<li onmouseover="changecolor(this);" onmouseout="returncolor(this)"><a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/friend/index/uid/<?php echo $_SESSION['user_info']['id']; ?>
">我的好友</a></li>						<li onmouseover="changecolor(this);" onmouseout="returncolor(this)"><a href="<?php echo $_smarty->_tpl_vars['root']; ?>
/index.php/subject/post_subj_page">快速发帖</a></li>						<li onmouseover="changecolor(this);" onmouseout="returncolor(this)"><a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/speak/index/uid/<?php echo $_SESSION['user_info']['id']; ?>
">我的说说</a></li>						<li onmouseover="changecolor(this);" onmouseout="returncolor(this)"><a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/log/add/uid/<?php echo $_SESSION['user_info']['id']; ?>
">写篇日志</a></li>					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}


function _smarty_tplfunc_ebc34d10a41b6a5a0cef23c95ff33627_2(&$_smarty)
{
$_smarty->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?>					<?php if ($_SESSION['home_login'] == 1): ?>						<span><a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/index/index/uid/<?php echo $_SESSION['user_info']['id']; ?>
"><?php echo $_SESSION['user_info']['name']; ?>
</a></span><span id="fast_bar" style="font-weight:normal;margin:0;cursor:pointer;" onmouseover="show('fast','block');"> 快速导航 <img src="<?php echo $_smarty->_tpl_vars['public']; ?>
/images/arrwd.gif"> </span>						<a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/profile/edit/uid/<?php echo $_SESSION['user_info']['id']; ?>
">设置</a> <a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/sms/index/uid/<?php echo $_SESSION['user_info']['id']; ?>
">消息(<font color="red"><?php echo $_smarty->_tpl_vars['sms_num']; ?>
</font>)</a> <a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/pub/dologout">退出</a>					<?php else: ?>						<a href="javascript:void(0);" onclick="show('reg_send','block');show('bottom','block',true)">立即注册</a> <a href="javascript:void(0);" onclick="show('login_send','block');show('bottom','block',true)">登录</a>					<?php endif; ?>			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}


function _smarty_tplfunc_ebc34d10a41b6a5a0cef23c95ff33627_3(&$_smarty)
{
$_smarty->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo $_smarty->_tpl_vars['user_h']['name']; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}


function _smarty_tplfunc_ebc34d10a41b6a5a0cef23c95ff33627_4(&$_smarty)
{
$_smarty->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?>						<a id="domainurl" href="<?php echo $_smarty->_tpl_vars['app']; ?>
/index/index/uid/<?php echo $_smarty->_tpl_vars['user_h']['id']; ?>
" onclick="setCopy('<?php echo $_smarty->_tpl_vars['app']; ?>
/index/index/uid/<?php echo $_smarty->_tpl_vars['user_h']['id']; ?>
', '空间地址复制成功');return false;">http://<?php echo $_SERVER['SERVER_ADDR']; ?>
<?php echo $_smarty->_tpl_vars['app']; ?>
/index/index/uid/<?php echo $_smarty->_tpl_vars['user_h']['id']; ?>
</a>						<a href="javascript:void(0);" onMouseDown="browserEvent(this, 'http://<?php echo $_SERVER['SERVER_ADDR']; ?>
<?php echo $_smarty->_tpl_vars['app']; ?>
/index/index/uid/<?php echo $_smarty->_tpl_vars['user_h']['id']; ?>
','<?php echo $_smarty->_tpl_vars['user_h']['name']; ?>
的个人空间')">[收藏]</a>						<a id="domainurl" href="<?php echo $_smarty->_tpl_vars['app']; ?>
/index/index/uid/<?php echo $_smarty->_tpl_vars['user_h']['id']; ?>
" onclick="copyToClipBoard();return false;">[复制]</a>					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}


function _smarty_tplfunc_ebc34d10a41b6a5a0cef23c95ff33627_5(&$_smarty)
{
$_smarty->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?>						<li><a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/index/index/uid/<?php echo $_smarty->_tpl_vars['user_h']['id']; ?>
">空间首页</a></li>						<li><a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/speak/index/uid/<?php echo $_smarty->_tpl_vars['user_h']['id']; ?>
">说说</a></li>						<li><a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/log/index/uid/<?php echo $_smarty->_tpl_vars['user_h']['id']; ?>
">日志</a></li>						<li><a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/album/index/uid/<?php echo $_smarty->_tpl_vars['user_h']['id']; ?>
">相册</a></li>						<li><a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/friend/index/uid/<?php echo $_smarty->_tpl_vars['user_h']['id']; ?>
">好友</a></li>						<li><a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/message/index/uid/<?php echo $_smarty->_tpl_vars['user_h']['id']; ?>
">留言板</a></li>						<li><a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/profile/index/uid/<?php echo $_smarty->_tpl_vars['user_h']['id']; ?>
">个人资料</a></li>							<?php if ($_SESSION['home_login'] == 1 && $_SESSION['user_info']['id'] == $_smarty->_tpl_vars['user_h']['id']): ?>								<li><a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/sms/index/uid/<?php echo $_smarty->_tpl_vars['user_h']['id']; ?>
">站内信</a></li>							<?php endif; ?>					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}



?>
