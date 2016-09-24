<?php /* Smarty version 2.6.18, created on 2016-07-20 18:37:00
         compiled from index/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'nocache', 'index/index.tpl', 27, false),array('modifier', 'html_decode', 'index/index.tpl', 79, false),array('modifier', 'chinadate', 'index/index.tpl', 99, false),array('modifier', 'html_deltags', 'index/index.tpl', 119, false),array('modifier', 'truncate', 'index/index.tpl', 119, false),)), $this); ?>
<?php $this->_cache_serials['./runtime/comps/default/space_php/\%%83^833^83385F9A%%index.tpl.inc'] = '109911e2f417c4159fc22c57b42f3cb3'; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript">
	function send_index_message(mid,uid){
		var textstr = editor.html();
		Ajax().post("<?php echo $this->_tpl_vars['url']; ?>
/insert_message/"+Math.random(),{uid:uid,mess_id:mid,content:textstr},function(data){
				select_index_message(uid);
				editor.html("");
				show('grade','block',false,true);
				show('bottom','block',true,false);
				document.getElementById("info").innerHTML="<img src='<?php echo $this->_tpl_vars['res']; ?>
/images/grade.gif' /> <span style='font-size:15px;font-weight:bold;font-family:微软雅黑,宋体;color:green;height:145px;margin-top:70px'>发表成功,积分增加 <font color='red'>"+data+"</font> 分</span>";
				timec(4,'y');
		});
	}
	function select_index_message(uid){
		Ajax().get("<?php echo $this->_tpl_vars['url']; ?>
/message/uid/"+uid+"/sj/"+Math.random(), function(data){
				document.getElementById("message_c").innerHTML=data;
		});
	}
</script>
<div class="nav"></div>
<div id="content">
		<div id="left">
			<div class="column">
				<div class="column_title">头像</div>
				<div class="column_content">
					<div class="m_avar">
						<img src="<?php echo $this->_tpl_vars['public']; ?>
/uploads/user/m_<?php if ($this->caching && !$this->_cache_including): echo '{nocache:109911e2f417c4159fc22c57b42f3cb3#0}'; endif;$this->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo $this->_tpl_vars['user']['face_path']; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:109911e2f417c4159fc22c57b42f3cb3#0}'; endif;?>" width="120px" height="120px" />
					</div>
					<span><?php if ($this->caching && !$this->_cache_including): echo '{nocache:109911e2f417c4159fc22c57b42f3cb3#1}'; endif;$this->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo $this->_tpl_vars['user']['name']; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:109911e2f417c4159fc22c57b42f3cb3#1}'; endif;?></span><br>
					<?php if ($this->caching && !$this->_cache_including): echo '{nocache:109911e2f417c4159fc22c57b42f3cb3#2}'; endif;$this->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php if ($_SESSION['home_login'] == 1 && $_SESSION['user_info']['id'] == $this->_tpl_vars['user_h']['id']): ?>
							<ul class="avar">
								<li><img src="<?php echo $this->_tpl_vars['res']; ?>
/images/thread_magic.gif">&nbsp;<a href="<?php echo $this->_tpl_vars['app']; ?>
/sms/index/uid/<?php echo $_GET['uid']; ?>
">查看消息</a></li>
								<li><img src="<?php echo $this->_tpl_vars['res']; ?>
/images/wall.gif">&nbsp;<a href="<?php echo $this->_tpl_vars['app']; ?>
/message/index/uid/<?php echo $_GET['uid']; ?>
">查看留言</a></li>
								<li><img src="<?php echo $this->_tpl_vars['res']; ?>
/images/profile.gif">&nbsp;<a href="<?php echo $this->_tpl_vars['app']; ?>
/profile/edit/uid/<?php echo $_GET['uid']; ?>
">更新资料</a></li>
								<li><img src="<?php echo $this->_tpl_vars['res']; ?>
/images/album.gif">&nbsp;<a href="<?php echo $this->_tpl_vars['app']; ?>
/profile/edit_avar/uid/<?php echo $_GET['uid']; ?>
">编辑头像</a></li>
							</ul>
						<?php else: ?>
							<span id="send_uid_<?php echo $_GET['uid']; ?>
" style="display:none"><?php echo $_GET['uid']; ?>
</span>
							<span id="send_name_<?php echo $_GET['uid']; ?>
" style="display:none"><?php echo $this->_tpl_vars['user']['name']; ?>
</span>
							<ul class="avar">
								<li><img src="<?php echo $this->_tpl_vars['res']; ?>
/images/friend.gif">&nbsp;<a href="javascript:;" onclick="show('frsend','block');show('bottom','block',true);getfrValue()">加为好友</a></li>
								<li><img src="<?php echo $this->_tpl_vars['res']; ?>
/images/wall.gif">&nbsp;<a href="<?php echo $this->_tpl_vars['app']; ?>
/message/index/uid/<?php echo $_GET['uid']; ?>
">给我留言</a></li>
								<li><img src="<?php echo $this->_tpl_vars['res']; ?>
/images/poke.gif">&nbsp;<a href="javascript:show('hello','block');show('bottom','block',true);getname('<?php echo $_GET['uid']; ?>
');">打个招呼</a></li>
								<li><img src="<?php echo $this->_tpl_vars['res']; ?>
/images/pm.gif">&nbsp;<a href="javascript:;" onclick="show('pmsend','block');show('bottom','block',true);getValue();">发送消息</a></li>
							</ul>
							<span id="send_uid" style="display:none"><?php echo $_GET['uid']; ?>
</span>
							<span id="send_name" style="display:none"><?php echo $this->_tpl_vars['user']['name']; ?>
</span>
							<span id="friend_uid" style="display:none"><?php echo $_GET['uid']; ?>
</span>
							<span id="friend_name" style="display:none"><?php echo $this->_tpl_vars['user']['name']; ?>
</span>
						<?php endif; ?>
					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:109911e2f417c4159fc22c57b42f3cb3#2}'; endif;?>
				</div>
			</div>
			<div class="nav_s"></div>
			<div class="column">
				<div class="column_title">统计信息</div>
				<div class="column_content">
				<?php if ($this->caching && !$this->_cache_including): echo '{nocache:109911e2f417c4159fc22c57b42f3cb3#3}'; endif;$this->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<span class="v_total">已有 <span> <?php echo $this->_tpl_vars['total']['guest_num']; ?>
 </span> 人来访过</span>
					<ul class="total">
						<li>积分:<a href=""> <?php echo $this->_tpl_vars['user']['grade_num']; ?>
</a></li>
						<li>好友:<a href=""> <?php echo $this->_tpl_vars['total']['friend_num']; ?>
</a></li>
						<li>主题:<a href=""> <?php echo $this->_tpl_vars['total']['subj_num']; ?>
</a></li>
						<li>日志:<a href=""> <?php echo $this->_tpl_vars['total']['log_num']; ?>
</a></li>
						<li>相册:<a href=""> <?php echo $this->_tpl_vars['total']['album_num']; ?>
</a></li>
					</ul>
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:109911e2f417c4159fc22c57b42f3cb3#3}'; endif;?>
					<div class="nav"></div>
				</div>
			</div>
			<div class="nav_s"></div>
			<div class="column">
				<div class="column_title">记录</div>
				<div class="column_content">
				<?php if ($this->caching && !$this->_cache_including): echo '{nocache:109911e2f417c4159fc22c57b42f3cb3#4}'; endif;$this->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php if ($this->_tpl_vars['speak']): ?>
						<?php unset($this->_sections['sls']);
$this->_sections['sls']['loop'] = is_array($_loop=$this->_tpl_vars['speak']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['sls']['name'] = 'sls';
$this->_sections['sls']['max'] = (int)'3';
$this->_sections['sls']['show'] = true;
if ($this->_sections['sls']['max'] < 0)
    $this->_sections['sls']['max'] = $this->_sections['sls']['loop'];
$this->_sections['sls']['step'] = 1;
$this->_sections['sls']['start'] = $this->_sections['sls']['step'] > 0 ? 0 : $this->_sections['sls']['loop']-1;
if ($this->_sections['sls']['show']) {
    $this->_sections['sls']['total'] = min(ceil(($this->_sections['sls']['step'] > 0 ? $this->_sections['sls']['loop'] - $this->_sections['sls']['start'] : $this->_sections['sls']['start']+1)/abs($this->_sections['sls']['step'])), $this->_sections['sls']['max']);
    if ($this->_sections['sls']['total'] == 0)
        $this->_sections['sls']['show'] = false;
} else
    $this->_sections['sls']['total'] = 0;
if ($this->_sections['sls']['show']):

            for ($this->_sections['sls']['index'] = $this->_sections['sls']['start'], $this->_sections['sls']['iteration'] = 1;
                 $this->_sections['sls']['iteration'] <= $this->_sections['sls']['total'];
                 $this->_sections['sls']['index'] += $this->_sections['sls']['step'], $this->_sections['sls']['iteration']++):
$this->_sections['sls']['rownum'] = $this->_sections['sls']['iteration'];
$this->_sections['sls']['index_prev'] = $this->_sections['sls']['index'] - $this->_sections['sls']['step'];
$this->_sections['sls']['index_next'] = $this->_sections['sls']['index'] + $this->_sections['sls']['step'];
$this->_sections['sls']['first']      = ($this->_sections['sls']['iteration'] == 1);
$this->_sections['sls']['last']       = ($this->_sections['sls']['iteration'] == $this->_sections['sls']['total']);
?>
							<div class="log_show"><span class="log_content"><?php echo ((is_array($_tmp=$this->_tpl_vars['speak'][$this->_sections['sls']['index']]['content'])) ? $this->_run_mod_handler('html_decode', true, $_tmp) : smarty_modifier_html_decode($_tmp)); ?>
</span><span style="float:right"><a href="<?php echo $this->_tpl_vars['app']; ?>
/speak/index/uid/<?php echo $_GET['uid']; ?>
">回复</a></span>
							<div style="clear:both"></div>
							</div>
							<div class="line_nav" style="margin:0"></div>
						<?php endfor; endif; ?>
					<?php else: ?>
						<font color="#cccccc" size="2">暂无记录!</font>
					<?php endif; ?>
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:109911e2f417c4159fc22c57b42f3cb3#4}'; endif;?>
				</div>
			</div>
		</div>
		<div id="middle">
			<div class="column">
				<div class="column_title">个人资料</div>
				<div class="column_content">
				<?php if ($this->caching && !$this->_cache_including): echo '{nocache:109911e2f417c4159fc22c57b42f3cb3#5}'; endif;$this->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<ul class="profile">
							<li><em>真实姓名</em><span><?php echo $this->_tpl_vars['user']['true_name']; ?>
</span></li>
							<li><em>性别</em><span><?php echo $this->_tpl_vars['user']['sex']; ?>
</span></li>
							<li><em>生日</em><span><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['birthday'])) ? $this->_run_mod_handler('chinadate', true, $_tmp, "Y年m月d日") : smarty_modifier_chinadate($_tmp, "Y年m月d日")); ?>
</span></li>
							<li><em>出生地</em><span><?php echo $this->_tpl_vars['user']['birth_add']['province']; ?>
 <?php echo $this->_tpl_vars['user']['birth_add']['city']; ?>
</span></li>
							<li><em>居住地</em><span><?php echo $this->_tpl_vars['user']['live_add']['province']; ?>
 <?php echo $this->_tpl_vars['user']['live_add']['city']; ?>
</span></li>
							<li><em>交友目的</em><span><?php echo $this->_tpl_vars['user']['pal_aim']; ?>
</span></li>
							<li><em>兴趣爱好</em><span><?php echo $this->_tpl_vars['user']['hobby']; ?>
</span></li>
					</ul>
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:109911e2f417c4159fc22c57b42f3cb3#5}'; endif;?>
					<div class="line_nav"></div>
					<p align="right"><a href="<?php echo $this->_tpl_vars['app']; ?>
/profile/index/uid/<?php if ($this->caching && !$this->_cache_including): echo '{nocache:109911e2f417c4159fc22c57b42f3cb3#6}'; endif;$this->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo $_GET['uid']; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:109911e2f417c4159fc22c57b42f3cb3#6}'; endif;?>">查看全部个人资料</a></p>
				</div>
			</div>
			<div class="nav_s"></div>
			<div class="column">
				<div class="column_title">日志</div>
				<div class="column_content">
				<?php if ($this->caching && !$this->_cache_including): echo '{nocache:109911e2f417c4159fc22c57b42f3cb3#7}'; endif;$this->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php if ($this->_tpl_vars['log']): ?>
						<?php unset($this->_sections['lls']);
$this->_sections['lls']['loop'] = is_array($_loop=$this->_tpl_vars['log']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['lls']['name'] = 'lls';
$this->_sections['lls']['max'] = (int)$this->_tpl_vars['s_log_index'];
$this->_sections['lls']['show'] = true;
if ($this->_sections['lls']['max'] < 0)
    $this->_sections['lls']['max'] = $this->_sections['lls']['loop'];
$this->_sections['lls']['step'] = 1;
$this->_sections['lls']['start'] = $this->_sections['lls']['step'] > 0 ? 0 : $this->_sections['lls']['loop']-1;
if ($this->_sections['lls']['show']) {
    $this->_sections['lls']['total'] = min(ceil(($this->_sections['lls']['step'] > 0 ? $this->_sections['lls']['loop'] - $this->_sections['lls']['start'] : $this->_sections['lls']['start']+1)/abs($this->_sections['lls']['step'])), $this->_sections['lls']['max']);
    if ($this->_sections['lls']['total'] == 0)
        $this->_sections['lls']['show'] = false;
} else
    $this->_sections['lls']['total'] = 0;
if ($this->_sections['lls']['show']):

            for ($this->_sections['lls']['index'] = $this->_sections['lls']['start'], $this->_sections['lls']['iteration'] = 1;
                 $this->_sections['lls']['iteration'] <= $this->_sections['lls']['total'];
                 $this->_sections['lls']['index'] += $this->_sections['lls']['step'], $this->_sections['lls']['iteration']++):
$this->_sections['lls']['rownum'] = $this->_sections['lls']['iteration'];
$this->_sections['lls']['index_prev'] = $this->_sections['lls']['index'] - $this->_sections['lls']['step'];
$this->_sections['lls']['index_next'] = $this->_sections['lls']['index'] + $this->_sections['lls']['step'];
$this->_sections['lls']['first']      = ($this->_sections['lls']['iteration'] == 1);
$this->_sections['lls']['last']       = ($this->_sections['lls']['iteration'] == $this->_sections['lls']['total']);
?>
							<dl>
								<dt class="log_title"><a href="<?php echo $this->_tpl_vars['app']; ?>
/log/content/uid/<?php echo $_GET['uid']; ?>
/lid/<?php echo $this->_tpl_vars['log'][$this->_sections['lls']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['log'][$this->_sections['lls']['index']]['title']; ?>
</a><span><?php echo ((is_array($_tmp=$this->_tpl_vars['log'][$this->_sections['lls']['index']]['ptime'])) ? $this->_run_mod_handler('chinadate', true, $_tmp, "Y-m-d") : smarty_modifier_chinadate($_tmp, "Y-m-d")); ?>
</span></dt>
								<dd class="log_content"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['log'][$this->_sections['lls']['index']]['content'])) ? $this->_run_mod_handler('html_decode', true, $_tmp) : smarty_modifier_html_decode($_tmp)))) ? $this->_run_mod_handler('html_deltags', true, $_tmp) : smarty_modifier_html_deltags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 200, "...") : smarty_modifier_truncate($_tmp, 200, "...")); ?>
</dd>
								<dd class="log_show"><a href="<?php echo $this->_tpl_vars['app']; ?>
/log/content/uid/<?php echo $_GET['uid']; ?>
/lid/<?php echo $this->_tpl_vars['log'][$this->_sections['lls']['index']]['id']; ?>
" style="float:right">(<?php echo $this->_tpl_vars['log'][$this->_sections['lls']['index']]['click_num']; ?>
)次阅读</a><span style="float:right;margin:0 5px;">|</span><a href="<?php echo $this->_tpl_vars['app']; ?>
/log/content/uid/<?php echo $_GET['uid']; ?>
/lid/<?php echo $this->_tpl_vars['log'][$this->_sections['lls']['index']]['id']; ?>
" style="float:right">(<?php echo $this->_tpl_vars['log'][$this->_sections['lls']['index']]['ctotal']; ?>
)次评论</a>
								<div style="clear:both"></div>
								</dd>
							</dl>
							<div class="line_nav"></div>
						<?php endfor; endif; ?>
						<p align="right"><a href="<?php echo $this->_tpl_vars['app']; ?>
/log/index/uid/<?php echo $_GET['uid']; ?>
">查看更多</a></p>
					<?php else: ?>
							<font color="#cccccc" size="2">暂未发表!</font>
					<?php endif; ?>
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:109911e2f417c4159fc22c57b42f3cb3#7}'; endif;?>
				</div>
			</div>
			<div class="nav_s"></div>
			<div class="column">
				<div class="column_title">留言板</div>
				<div class="column_content">
				<?php if ($this->caching && !$this->_cache_including): echo '{nocache:109911e2f417c4159fc22c57b42f3cb3#8}'; endif;$this->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
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
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:109911e2f417c4159fc22c57b42f3cb3#8}'; endif;?>
					<div id="message_c"><img src='<?php echo $this->_tpl_vars['public']; ?>
/images/ajax.gif' /> 加载中...</div>
				</div>
			</div>
		</div>
		<div id="right">
			<div class="column">
				<div class="column_title">好友</div>
				<div class="column_content">
					<ul class="friend">
					<?php if ($this->caching && !$this->_cache_including): echo '{nocache:109911e2f417c4159fc22c57b42f3cb3#9}'; endif;$this->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php if ($this->_tpl_vars['fdata']): ?>
							<?php unset($this->_sections['fls']);
$this->_sections['fls']['loop'] = is_array($_loop=$this->_tpl_vars['fdata']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['fls']['name'] = 'fls';
$this->_sections['fls']['max'] = (int)$this->_tpl_vars['s_friend_index'];
$this->_sections['fls']['show'] = true;
if ($this->_sections['fls']['max'] < 0)
    $this->_sections['fls']['max'] = $this->_sections['fls']['loop'];
$this->_sections['fls']['step'] = 1;
$this->_sections['fls']['start'] = $this->_sections['fls']['step'] > 0 ? 0 : $this->_sections['fls']['loop']-1;
if ($this->_sections['fls']['show']) {
    $this->_sections['fls']['total'] = min(ceil(($this->_sections['fls']['step'] > 0 ? $this->_sections['fls']['loop'] - $this->_sections['fls']['start'] : $this->_sections['fls']['start']+1)/abs($this->_sections['fls']['step'])), $this->_sections['fls']['max']);
    if ($this->_sections['fls']['total'] == 0)
        $this->_sections['fls']['show'] = false;
} else
    $this->_sections['fls']['total'] = 0;
if ($this->_sections['fls']['show']):

            for ($this->_sections['fls']['index'] = $this->_sections['fls']['start'], $this->_sections['fls']['iteration'] = 1;
                 $this->_sections['fls']['iteration'] <= $this->_sections['fls']['total'];
                 $this->_sections['fls']['index'] += $this->_sections['fls']['step'], $this->_sections['fls']['iteration']++):
$this->_sections['fls']['rownum'] = $this->_sections['fls']['iteration'];
$this->_sections['fls']['index_prev'] = $this->_sections['fls']['index'] - $this->_sections['fls']['step'];
$this->_sections['fls']['index_next'] = $this->_sections['fls']['index'] + $this->_sections['fls']['step'];
$this->_sections['fls']['first']      = ($this->_sections['fls']['iteration'] == 1);
$this->_sections['fls']['last']       = ($this->_sections['fls']['iteration'] == $this->_sections['fls']['total']);
?>
								<li>
									<div class="img_b_s"><a href="<?php echo $this->_tpl_vars['app']; ?>
/index/index/uid/<?php echo $this->_tpl_vars['fdata'][$this->_sections['fls']['index']]['fid']; ?>
"><img src="<?php echo $this->_tpl_vars['public']; ?>
/uploads/user/s_<?php echo $this->_tpl_vars['fdata'][$this->_sections['fls']['index']]['face']; ?>
" width="48px" height="48px"></a></div>
									<p><a href="<?php echo $this->_tpl_vars['app']; ?>
/index/index/uid/<?php echo $this->_tpl_vars['fdata'][$this->_sections['fls']['index']]['fid']; ?>
"><?php echo $this->_tpl_vars['fdata'][$this->_sections['fls']['index']]['fname']; ?>
</a></p>
								</li>
							<?php endfor; endif; ?>
						<?php else: ?>
							<font color="#cccccc" size="2">暂无好友!</font>
						<?php endif; ?>
					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:109911e2f417c4159fc22c57b42f3cb3#9}'; endif;?>
					</ul>
					<div class="nav"></div>
				</div>
			</div>
			<div class="nav_s"></div>
			<div class="column">
				<div class="column_title">最近访客</div>
				<div class="column_content">
					<ul class="friend">
					<?php if ($this->caching && !$this->_cache_including): echo '{nocache:109911e2f417c4159fc22c57b42f3cb3#10}'; endif;$this->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php if ($this->_tpl_vars['vdata']): ?>
							<?php unset($this->_sections['vls']);
$this->_sections['vls']['loop'] = is_array($_loop=$this->_tpl_vars['vdata']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['vls']['name'] = 'vls';
$this->_sections['vls']['show'] = true;
$this->_sections['vls']['max'] = $this->_sections['vls']['loop'];
$this->_sections['vls']['step'] = 1;
$this->_sections['vls']['start'] = $this->_sections['vls']['step'] > 0 ? 0 : $this->_sections['vls']['loop']-1;
if ($this->_sections['vls']['show']) {
    $this->_sections['vls']['total'] = $this->_sections['vls']['loop'];
    if ($this->_sections['vls']['total'] == 0)
        $this->_sections['vls']['show'] = false;
} else
    $this->_sections['vls']['total'] = 0;
if ($this->_sections['vls']['show']):

            for ($this->_sections['vls']['index'] = $this->_sections['vls']['start'], $this->_sections['vls']['iteration'] = 1;
                 $this->_sections['vls']['iteration'] <= $this->_sections['vls']['total'];
                 $this->_sections['vls']['index'] += $this->_sections['vls']['step'], $this->_sections['vls']['iteration']++):
$this->_sections['vls']['rownum'] = $this->_sections['vls']['iteration'];
$this->_sections['vls']['index_prev'] = $this->_sections['vls']['index'] - $this->_sections['vls']['step'];
$this->_sections['vls']['index_next'] = $this->_sections['vls']['index'] + $this->_sections['vls']['step'];
$this->_sections['vls']['first']      = ($this->_sections['vls']['iteration'] == 1);
$this->_sections['vls']['last']       = ($this->_sections['vls']['iteration'] == $this->_sections['vls']['total']);
?>
								<li>
									<div class="img_b_s"><a href="<?php echo $this->_tpl_vars['app']; ?>
/index/index/uid/<?php echo $this->_tpl_vars['vdata'][$this->_sections['vls']['index']]['guest_id']; ?>
"><img src="<?php echo $this->_tpl_vars['public']; ?>
/uploads/user/s_<?php echo $this->_tpl_vars['vdata'][$this->_sections['vls']['index']]['face']; ?>
" width="48px" height="48px"></a></div>
									<p><a href="<?php echo $this->_tpl_vars['app']; ?>
/index/index/uid/<?php echo $this->_tpl_vars['vdata'][$this->_sections['vls']['index']]['guest_id']; ?>
"><?php echo $this->_tpl_vars['vdata'][$this->_sections['vls']['index']]['vname']; ?>
</a></p>
									<span class="vtime">
										<?php echo ((is_array($_tmp=$this->_tpl_vars['vdata'][$this->_sections['vls']['index']]['vtime'])) ? $this->_run_mod_handler('chinadate', true, $_tmp, "H:i") : smarty_modifier_chinadate($_tmp, "H:i")); ?>

									</span>
								</li>
							<?php endfor; endif; ?>
						<?php else: ?>
							<font color="#cccccc" size="2">暂无访客!</font>
						<?php endif; ?>
					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:109911e2f417c4159fc22c57b42f3cb3#10}'; endif;?>
					</ul>
					<div class="nav"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	<?php if ($this->caching && !$this->_cache_including): echo '{nocache:109911e2f417c4159fc22c57b42f3cb3#11}'; endif;$this->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		select_index_message(<?php echo $_GET['uid']; ?>
);
		add_visite(<?php echo $_GET['uid']; ?>
);
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:109911e2f417c4159fc22c57b42f3cb3#11}'; endif;?>
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "friend/send.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "sms/send.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/hello_box.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>