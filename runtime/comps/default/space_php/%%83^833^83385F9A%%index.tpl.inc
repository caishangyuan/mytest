<?php /* Smarty version 2.6.18, created on 2016-07-20 18:37:00
         compiled from index/index.tpl */

$this->_cache_serials['./runtime/comps/default/space_php/\%%83^833^83385F9A%%index.tpl.inc'] = '109911e2f417c4159fc22c57b42f3cb3';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'nocache', 'index/index.tpl', 27, false),array('modifier', 'html_decode', 'index/index.tpl', 79, false),array('modifier', 'chinadate', 'index/index.tpl', 99, false),array('modifier', 'html_deltags', 'index/index.tpl', 119, false),array('modifier', 'truncate', 'index/index.tpl', 119, false),)), $this); ?>
<?php
function _smarty_tplfunc_109911e2f417c4159fc22c57b42f3cb3_0(&$_smarty)
{
$_smarty->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo $_smarty->_tpl_vars['user']['face_path']; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}


function _smarty_tplfunc_109911e2f417c4159fc22c57b42f3cb3_1(&$_smarty)
{
$_smarty->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo $_smarty->_tpl_vars['user']['name']; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}


function _smarty_tplfunc_109911e2f417c4159fc22c57b42f3cb3_2(&$_smarty)
{
$_smarty->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php if ($_SESSION['home_login'] == 1 && $_SESSION['user_info']['id'] == $_smarty->_tpl_vars['user_h']['id']): ?>
							<ul class="avar">
								<li><img src="<?php echo $_smarty->_tpl_vars['res']; ?>
/images/thread_magic.gif">&nbsp;<a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/sms/index/uid/<?php echo $_GET['uid']; ?>
">查看消息</a></li>
								<li><img src="<?php echo $_smarty->_tpl_vars['res']; ?>
/images/wall.gif">&nbsp;<a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/message/index/uid/<?php echo $_GET['uid']; ?>
">查看留言</a></li>
								<li><img src="<?php echo $_smarty->_tpl_vars['res']; ?>
/images/profile.gif">&nbsp;<a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/profile/edit/uid/<?php echo $_GET['uid']; ?>
">更新资料</a></li>
								<li><img src="<?php echo $_smarty->_tpl_vars['res']; ?>
/images/album.gif">&nbsp;<a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/profile/edit_avar/uid/<?php echo $_GET['uid']; ?>
">编辑头像</a></li>
							</ul>
						<?php else: ?>
							<span id="send_uid_<?php echo $_GET['uid']; ?>
" style="display:none"><?php echo $_GET['uid']; ?>
</span>
							<span id="send_name_<?php echo $_GET['uid']; ?>
" style="display:none"><?php echo $_smarty->_tpl_vars['user']['name']; ?>
</span>
							<ul class="avar">
								<li><img src="<?php echo $_smarty->_tpl_vars['res']; ?>
/images/friend.gif">&nbsp;<a href="javascript:;" onclick="show('frsend','block');show('bottom','block',true);getfrValue()">加为好友</a></li>
								<li><img src="<?php echo $_smarty->_tpl_vars['res']; ?>
/images/wall.gif">&nbsp;<a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/message/index/uid/<?php echo $_GET['uid']; ?>
">给我留言</a></li>
								<li><img src="<?php echo $_smarty->_tpl_vars['res']; ?>
/images/poke.gif">&nbsp;<a href="javascript:show('hello','block');show('bottom','block',true);getname('<?php echo $_GET['uid']; ?>
');">打个招呼</a></li>
								<li><img src="<?php echo $_smarty->_tpl_vars['res']; ?>
/images/pm.gif">&nbsp;<a href="javascript:;" onclick="show('pmsend','block');show('bottom','block',true);getValue();">发送消息</a></li>
							</ul>
							<span id="send_uid" style="display:none"><?php echo $_GET['uid']; ?>
</span>
							<span id="send_name" style="display:none"><?php echo $_smarty->_tpl_vars['user']['name']; ?>
</span>
							<span id="friend_uid" style="display:none"><?php echo $_GET['uid']; ?>
</span>
							<span id="friend_name" style="display:none"><?php echo $_smarty->_tpl_vars['user']['name']; ?>
</span>
						<?php endif; ?>
					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}


function _smarty_tplfunc_109911e2f417c4159fc22c57b42f3cb3_3(&$_smarty)
{
$_smarty->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<span class="v_total">已有 <span> <?php echo $_smarty->_tpl_vars['total']['guest_num']; ?>
 </span> 人来访过</span>
					<ul class="total">
						<li>积分:<a href=""> <?php echo $_smarty->_tpl_vars['user']['grade_num']; ?>
</a></li>
						<li>好友:<a href=""> <?php echo $_smarty->_tpl_vars['total']['friend_num']; ?>
</a></li>
						<li>主题:<a href=""> <?php echo $_smarty->_tpl_vars['total']['subj_num']; ?>
</a></li>
						<li>日志:<a href=""> <?php echo $_smarty->_tpl_vars['total']['log_num']; ?>
</a></li>
						<li>相册:<a href=""> <?php echo $_smarty->_tpl_vars['total']['album_num']; ?>
</a></li>
					</ul>
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}


function _smarty_tplfunc_109911e2f417c4159fc22c57b42f3cb3_4(&$_smarty)
{
$_smarty->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php if ($_smarty->_tpl_vars['speak']): ?>
						<?php unset($_smarty->_sections['sls']);
$_smarty->_sections['sls']['loop'] = is_array($_loop=$_smarty->_tpl_vars['speak']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty->_sections['sls']['name'] = 'sls';
$_smarty->_sections['sls']['max'] = (int)'3';
$_smarty->_sections['sls']['show'] = true;
if ($_smarty->_sections['sls']['max'] < 0)
    $_smarty->_sections['sls']['max'] = $_smarty->_sections['sls']['loop'];
$_smarty->_sections['sls']['step'] = 1;
$_smarty->_sections['sls']['start'] = $_smarty->_sections['sls']['step'] > 0 ? 0 : $_smarty->_sections['sls']['loop']-1;
if ($_smarty->_sections['sls']['show']) {
    $_smarty->_sections['sls']['total'] = min(ceil(($_smarty->_sections['sls']['step'] > 0 ? $_smarty->_sections['sls']['loop'] - $_smarty->_sections['sls']['start'] : $_smarty->_sections['sls']['start']+1)/abs($_smarty->_sections['sls']['step'])), $_smarty->_sections['sls']['max']);
    if ($_smarty->_sections['sls']['total'] == 0)
        $_smarty->_sections['sls']['show'] = false;
} else
    $_smarty->_sections['sls']['total'] = 0;
if ($_smarty->_sections['sls']['show']):

            for ($_smarty->_sections['sls']['index'] = $_smarty->_sections['sls']['start'], $_smarty->_sections['sls']['iteration'] = 1;
                 $_smarty->_sections['sls']['iteration'] <= $_smarty->_sections['sls']['total'];
                 $_smarty->_sections['sls']['index'] += $_smarty->_sections['sls']['step'], $_smarty->_sections['sls']['iteration']++):
$_smarty->_sections['sls']['rownum'] = $_smarty->_sections['sls']['iteration'];
$_smarty->_sections['sls']['index_prev'] = $_smarty->_sections['sls']['index'] - $_smarty->_sections['sls']['step'];
$_smarty->_sections['sls']['index_next'] = $_smarty->_sections['sls']['index'] + $_smarty->_sections['sls']['step'];
$_smarty->_sections['sls']['first']      = ($_smarty->_sections['sls']['iteration'] == 1);
$_smarty->_sections['sls']['last']       = ($_smarty->_sections['sls']['iteration'] == $_smarty->_sections['sls']['total']);
?>
							<div class="log_show"><span class="log_content"><?php echo ((is_array($_tmp=$_smarty->_tpl_vars['speak'][$_smarty->_sections['sls']['index']]['content'])) ? $_smarty->_run_mod_handler('html_decode', true, $_tmp) : smarty_modifier_html_decode($_tmp)); ?>
</span><span style="float:right"><a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/speak/index/uid/<?php echo $_GET['uid']; ?>
">回复</a></span>
							<div style="clear:both"></div>
							</div>
							<div class="line_nav" style="margin:0"></div>
						<?php endfor; endif; ?>
					<?php else: ?>
						<font color="#cccccc" size="2">暂无记录!</font>
					<?php endif; ?>
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}


function _smarty_tplfunc_109911e2f417c4159fc22c57b42f3cb3_5(&$_smarty)
{
$_smarty->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<ul class="profile">
							<li><em>真实姓名</em><span><?php echo $_smarty->_tpl_vars['user']['true_name']; ?>
</span></li>
							<li><em>性别</em><span><?php echo $_smarty->_tpl_vars['user']['sex']; ?>
</span></li>
							<li><em>生日</em><span><?php echo ((is_array($_tmp=$_smarty->_tpl_vars['user']['birthday'])) ? $_smarty->_run_mod_handler('chinadate', true, $_tmp, "Y年m月d日") : smarty_modifier_chinadate($_tmp, "Y年m月d日")); ?>
</span></li>
							<li><em>出生地</em><span><?php echo $_smarty->_tpl_vars['user']['birth_add']['province']; ?>
 <?php echo $_smarty->_tpl_vars['user']['birth_add']['city']; ?>
</span></li>
							<li><em>居住地</em><span><?php echo $_smarty->_tpl_vars['user']['live_add']['province']; ?>
 <?php echo $_smarty->_tpl_vars['user']['live_add']['city']; ?>
</span></li>
							<li><em>交友目的</em><span><?php echo $_smarty->_tpl_vars['user']['pal_aim']; ?>
</span></li>
							<li><em>兴趣爱好</em><span><?php echo $_smarty->_tpl_vars['user']['hobby']; ?>
</span></li>
					</ul>
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}


function _smarty_tplfunc_109911e2f417c4159fc22c57b42f3cb3_6(&$_smarty)
{
$_smarty->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo $_GET['uid']; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}


function _smarty_tplfunc_109911e2f417c4159fc22c57b42f3cb3_7(&$_smarty)
{
$_smarty->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php if ($_smarty->_tpl_vars['log']): ?>
						<?php unset($_smarty->_sections['lls']);
$_smarty->_sections['lls']['loop'] = is_array($_loop=$_smarty->_tpl_vars['log']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty->_sections['lls']['name'] = 'lls';
$_smarty->_sections['lls']['max'] = (int)$_smarty->_tpl_vars['s_log_index'];
$_smarty->_sections['lls']['show'] = true;
if ($_smarty->_sections['lls']['max'] < 0)
    $_smarty->_sections['lls']['max'] = $_smarty->_sections['lls']['loop'];
$_smarty->_sections['lls']['step'] = 1;
$_smarty->_sections['lls']['start'] = $_smarty->_sections['lls']['step'] > 0 ? 0 : $_smarty->_sections['lls']['loop']-1;
if ($_smarty->_sections['lls']['show']) {
    $_smarty->_sections['lls']['total'] = min(ceil(($_smarty->_sections['lls']['step'] > 0 ? $_smarty->_sections['lls']['loop'] - $_smarty->_sections['lls']['start'] : $_smarty->_sections['lls']['start']+1)/abs($_smarty->_sections['lls']['step'])), $_smarty->_sections['lls']['max']);
    if ($_smarty->_sections['lls']['total'] == 0)
        $_smarty->_sections['lls']['show'] = false;
} else
    $_smarty->_sections['lls']['total'] = 0;
if ($_smarty->_sections['lls']['show']):

            for ($_smarty->_sections['lls']['index'] = $_smarty->_sections['lls']['start'], $_smarty->_sections['lls']['iteration'] = 1;
                 $_smarty->_sections['lls']['iteration'] <= $_smarty->_sections['lls']['total'];
                 $_smarty->_sections['lls']['index'] += $_smarty->_sections['lls']['step'], $_smarty->_sections['lls']['iteration']++):
$_smarty->_sections['lls']['rownum'] = $_smarty->_sections['lls']['iteration'];
$_smarty->_sections['lls']['index_prev'] = $_smarty->_sections['lls']['index'] - $_smarty->_sections['lls']['step'];
$_smarty->_sections['lls']['index_next'] = $_smarty->_sections['lls']['index'] + $_smarty->_sections['lls']['step'];
$_smarty->_sections['lls']['first']      = ($_smarty->_sections['lls']['iteration'] == 1);
$_smarty->_sections['lls']['last']       = ($_smarty->_sections['lls']['iteration'] == $_smarty->_sections['lls']['total']);
?>
							<dl>
								<dt class="log_title"><a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/log/content/uid/<?php echo $_GET['uid']; ?>
/lid/<?php echo $_smarty->_tpl_vars['log'][$_smarty->_sections['lls']['index']]['id']; ?>
"><?php echo $_smarty->_tpl_vars['log'][$_smarty->_sections['lls']['index']]['title']; ?>
</a><span><?php echo ((is_array($_tmp=$_smarty->_tpl_vars['log'][$_smarty->_sections['lls']['index']]['ptime'])) ? $_smarty->_run_mod_handler('chinadate', true, $_tmp, "Y-m-d") : smarty_modifier_chinadate($_tmp, "Y-m-d")); ?>
</span></dt>
								<dd class="log_content"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$_smarty->_tpl_vars['log'][$_smarty->_sections['lls']['index']]['content'])) ? $_smarty->_run_mod_handler('html_decode', true, $_tmp) : smarty_modifier_html_decode($_tmp)))) ? $_smarty->_run_mod_handler('html_deltags', true, $_tmp) : smarty_modifier_html_deltags($_tmp)))) ? $_smarty->_run_mod_handler('truncate', true, $_tmp, 200, "...") : smarty_modifier_truncate($_tmp, 200, "...")); ?>
</dd>
								<dd class="log_show"><a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/log/content/uid/<?php echo $_GET['uid']; ?>
/lid/<?php echo $_smarty->_tpl_vars['log'][$_smarty->_sections['lls']['index']]['id']; ?>
" style="float:right">(<?php echo $_smarty->_tpl_vars['log'][$_smarty->_sections['lls']['index']]['click_num']; ?>
)次阅读</a><span style="float:right;margin:0 5px;">|</span><a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/log/content/uid/<?php echo $_GET['uid']; ?>
/lid/<?php echo $_smarty->_tpl_vars['log'][$_smarty->_sections['lls']['index']]['id']; ?>
" style="float:right">(<?php echo $_smarty->_tpl_vars['log'][$_smarty->_sections['lls']['index']]['ctotal']; ?>
)次评论</a>
								<div style="clear:both"></div>
								</dd>
							</dl>
							<div class="line_nav"></div>
						<?php endfor; endif; ?>
						<p align="right"><a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/log/index/uid/<?php echo $_GET['uid']; ?>
">查看更多</a></p>
					<?php else: ?>
							<font color="#cccccc" size="2">暂未发表!</font>
					<?php endif; ?>
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}


function _smarty_tplfunc_109911e2f417c4159fc22c57b42f3cb3_8(&$_smarty)
{
$_smarty->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php if ($_SESSION['home_login'] == 1): ?>
							<div class="message_area">
								<textarea id="message_index"></textarea>
																<script>
									KindEditor.ready(function(K) {
										KindEditor.ready(function(K) {
											window.editor = K.create('textarea[id="message_index"]', {
												resizeType : 1,
												width:"100%",
												hright:"250px",
												allowPreviewEmoticons : false,
												allowImageUpload : false,
												items : ['emoticons']
											});
										});
									});
								</script>
								<button class="bn" onclick="send_index_message(<?php echo $_SESSION['user_info']['id']; ?>
,<?php echo $_GET['uid']; ?>
)">留言</button>
							</div>
						<div class="line_nav"></div>
					<?php endif; ?>
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}


function _smarty_tplfunc_109911e2f417c4159fc22c57b42f3cb3_9(&$_smarty)
{
$_smarty->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php if ($_smarty->_tpl_vars['fdata']): ?>
							<?php unset($_smarty->_sections['fls']);
$_smarty->_sections['fls']['loop'] = is_array($_loop=$_smarty->_tpl_vars['fdata']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty->_sections['fls']['name'] = 'fls';
$_smarty->_sections['fls']['max'] = (int)$_smarty->_tpl_vars['s_friend_index'];
$_smarty->_sections['fls']['show'] = true;
if ($_smarty->_sections['fls']['max'] < 0)
    $_smarty->_sections['fls']['max'] = $_smarty->_sections['fls']['loop'];
$_smarty->_sections['fls']['step'] = 1;
$_smarty->_sections['fls']['start'] = $_smarty->_sections['fls']['step'] > 0 ? 0 : $_smarty->_sections['fls']['loop']-1;
if ($_smarty->_sections['fls']['show']) {
    $_smarty->_sections['fls']['total'] = min(ceil(($_smarty->_sections['fls']['step'] > 0 ? $_smarty->_sections['fls']['loop'] - $_smarty->_sections['fls']['start'] : $_smarty->_sections['fls']['start']+1)/abs($_smarty->_sections['fls']['step'])), $_smarty->_sections['fls']['max']);
    if ($_smarty->_sections['fls']['total'] == 0)
        $_smarty->_sections['fls']['show'] = false;
} else
    $_smarty->_sections['fls']['total'] = 0;
if ($_smarty->_sections['fls']['show']):

            for ($_smarty->_sections['fls']['index'] = $_smarty->_sections['fls']['start'], $_smarty->_sections['fls']['iteration'] = 1;
                 $_smarty->_sections['fls']['iteration'] <= $_smarty->_sections['fls']['total'];
                 $_smarty->_sections['fls']['index'] += $_smarty->_sections['fls']['step'], $_smarty->_sections['fls']['iteration']++):
$_smarty->_sections['fls']['rownum'] = $_smarty->_sections['fls']['iteration'];
$_smarty->_sections['fls']['index_prev'] = $_smarty->_sections['fls']['index'] - $_smarty->_sections['fls']['step'];
$_smarty->_sections['fls']['index_next'] = $_smarty->_sections['fls']['index'] + $_smarty->_sections['fls']['step'];
$_smarty->_sections['fls']['first']      = ($_smarty->_sections['fls']['iteration'] == 1);
$_smarty->_sections['fls']['last']       = ($_smarty->_sections['fls']['iteration'] == $_smarty->_sections['fls']['total']);
?>
								<li>
									<div class="img_b_s"><a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/index/index/uid/<?php echo $_smarty->_tpl_vars['fdata'][$_smarty->_sections['fls']['index']]['fid']; ?>
"><img src="<?php echo $_smarty->_tpl_vars['public']; ?>
/uploads/user/s_<?php echo $_smarty->_tpl_vars['fdata'][$_smarty->_sections['fls']['index']]['face']; ?>
" width="48px" height="48px"></a></div>
									<p><a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/index/index/uid/<?php echo $_smarty->_tpl_vars['fdata'][$_smarty->_sections['fls']['index']]['fid']; ?>
"><?php echo $_smarty->_tpl_vars['fdata'][$_smarty->_sections['fls']['index']]['fname']; ?>
</a></p>
								</li>
							<?php endfor; endif; ?>
						<?php else: ?>
							<font color="#cccccc" size="2">暂无好友!</font>
						<?php endif; ?>
					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}


function _smarty_tplfunc_109911e2f417c4159fc22c57b42f3cb3_10(&$_smarty)
{
$_smarty->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php if ($_smarty->_tpl_vars['vdata']): ?>
							<?php unset($_smarty->_sections['vls']);
$_smarty->_sections['vls']['loop'] = is_array($_loop=$_smarty->_tpl_vars['vdata']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty->_sections['vls']['name'] = 'vls';
$_smarty->_sections['vls']['show'] = true;
$_smarty->_sections['vls']['max'] = $_smarty->_sections['vls']['loop'];
$_smarty->_sections['vls']['step'] = 1;
$_smarty->_sections['vls']['start'] = $_smarty->_sections['vls']['step'] > 0 ? 0 : $_smarty->_sections['vls']['loop']-1;
if ($_smarty->_sections['vls']['show']) {
    $_smarty->_sections['vls']['total'] = $_smarty->_sections['vls']['loop'];
    if ($_smarty->_sections['vls']['total'] == 0)
        $_smarty->_sections['vls']['show'] = false;
} else
    $_smarty->_sections['vls']['total'] = 0;
if ($_smarty->_sections['vls']['show']):

            for ($_smarty->_sections['vls']['index'] = $_smarty->_sections['vls']['start'], $_smarty->_sections['vls']['iteration'] = 1;
                 $_smarty->_sections['vls']['iteration'] <= $_smarty->_sections['vls']['total'];
                 $_smarty->_sections['vls']['index'] += $_smarty->_sections['vls']['step'], $_smarty->_sections['vls']['iteration']++):
$_smarty->_sections['vls']['rownum'] = $_smarty->_sections['vls']['iteration'];
$_smarty->_sections['vls']['index_prev'] = $_smarty->_sections['vls']['index'] - $_smarty->_sections['vls']['step'];
$_smarty->_sections['vls']['index_next'] = $_smarty->_sections['vls']['index'] + $_smarty->_sections['vls']['step'];
$_smarty->_sections['vls']['first']      = ($_smarty->_sections['vls']['iteration'] == 1);
$_smarty->_sections['vls']['last']       = ($_smarty->_sections['vls']['iteration'] == $_smarty->_sections['vls']['total']);
?>
								<li>
									<div class="img_b_s"><a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/index/index/uid/<?php echo $_smarty->_tpl_vars['vdata'][$_smarty->_sections['vls']['index']]['guest_id']; ?>
"><img src="<?php echo $_smarty->_tpl_vars['public']; ?>
/uploads/user/s_<?php echo $_smarty->_tpl_vars['vdata'][$_smarty->_sections['vls']['index']]['face']; ?>
" width="48px" height="48px"></a></div>
									<p><a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/index/index/uid/<?php echo $_smarty->_tpl_vars['vdata'][$_smarty->_sections['vls']['index']]['guest_id']; ?>
"><?php echo $_smarty->_tpl_vars['vdata'][$_smarty->_sections['vls']['index']]['vname']; ?>
</a></p>
									<span class="vtime">
										<?php echo ((is_array($_tmp=$_smarty->_tpl_vars['vdata'][$_smarty->_sections['vls']['index']]['vtime'])) ? $_smarty->_run_mod_handler('chinadate', true, $_tmp, "H:i") : smarty_modifier_chinadate($_tmp, "H:i")); ?>

									</span>
								</li>
							<?php endfor; endif; ?>
						<?php else: ?>
							<font color="#cccccc" size="2">暂无访客!</font>
						<?php endif; ?>
					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}


function _smarty_tplfunc_109911e2f417c4159fc22c57b42f3cb3_11(&$_smarty)
{
$_smarty->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		select_index_message(<?php echo $_GET['uid']; ?>
);
		add_visite(<?php echo $_GET['uid']; ?>
);
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}



?>
