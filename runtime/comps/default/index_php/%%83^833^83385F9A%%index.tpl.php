<?php /* Smarty version 2.6.18, created on 2016-07-07 14:07:53
         compiled from index/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'index/index.tpl', 24, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['res']; ?>
/css/index.css" />
	<script src="<?php echo $this->_tpl_vars['res']; ?>
/js/common.js"></script>
	<script>
		$(function(){
			//默认"最新主题"被选中,加载背景色为白色的.option_card样式 其他的暂时隐藏
			$("#boxs .title ul li:first").addClass('option_card');
			$("#boxs .option_box .option_content:not(:first)").hide();
			//鼠标移动上去的时候,就显示相应的列表
			$("#boxs .title ul li").mouseover(function(){
				$(this).addClass('option_card').siblings("li").removeClass('option_card');
				$("#boxs .option_box .option_content:eq("+$(this).index()+")").show().siblings(".option_content").hide();
			})
		})	
	</script>
	<div id="main">
		<div id="boxs">
			<div class="side_box left_box box">
				<h1>热门主题</h1>
				<ul>
				<?php unset($this->_sections['hot_subj']);
$this->_sections['hot_subj']['loop'] = is_array($_loop=$this->_tpl_vars['hot_subj']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['hot_subj']['name'] = 'hot_subj';
$this->_sections['hot_subj']['show'] = true;
$this->_sections['hot_subj']['max'] = $this->_sections['hot_subj']['loop'];
$this->_sections['hot_subj']['step'] = 1;
$this->_sections['hot_subj']['start'] = $this->_sections['hot_subj']['step'] > 0 ? 0 : $this->_sections['hot_subj']['loop']-1;
if ($this->_sections['hot_subj']['show']) {
    $this->_sections['hot_subj']['total'] = $this->_sections['hot_subj']['loop'];
    if ($this->_sections['hot_subj']['total'] == 0)
        $this->_sections['hot_subj']['show'] = false;
} else
    $this->_sections['hot_subj']['total'] = 0;
if ($this->_sections['hot_subj']['show']):

            for ($this->_sections['hot_subj']['index'] = $this->_sections['hot_subj']['start'], $this->_sections['hot_subj']['iteration'] = 1;
                 $this->_sections['hot_subj']['iteration'] <= $this->_sections['hot_subj']['total'];
                 $this->_sections['hot_subj']['index'] += $this->_sections['hot_subj']['step'], $this->_sections['hot_subj']['iteration']++):
$this->_sections['hot_subj']['rownum'] = $this->_sections['hot_subj']['iteration'];
$this->_sections['hot_subj']['index_prev'] = $this->_sections['hot_subj']['index'] - $this->_sections['hot_subj']['step'];
$this->_sections['hot_subj']['index_next'] = $this->_sections['hot_subj']['index'] + $this->_sections['hot_subj']['step'];
$this->_sections['hot_subj']['first']      = ($this->_sections['hot_subj']['iteration'] == 1);
$this->_sections['hot_subj']['last']       = ($this->_sections['hot_subj']['iteration'] == $this->_sections['hot_subj']['total']);
?>
					<li>
						<strong>
							<a href="<?php echo $this->_tpl_vars['app']; ?>
/subject/info/sid/<?php echo $this->_tpl_vars['hot_subj'][$this->_sections['hot_subj']['index']]['id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['hot_subj'][$this->_sections['hot_subj']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, '25') : smarty_modifier_truncate($_tmp, '25')); ?>
</a>
						</strong>
						<span>
							<a href="<?php echo $this->_tpl_vars['root']; ?>
/space.php/index/index/uid/<?php echo $this->_tpl_vars['hot_subj'][$this->_sections['hot_subj']['index']]['uid']; ?>
">
								<?php echo ((is_array($_tmp=$this->_tpl_vars['hot_subj'][$this->_sections['hot_subj']['index']]['user_name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, '8') : smarty_modifier_truncate($_tmp, '8')); ?>

							</a>
						</span>
					</li>			
				<?php endfor; else: ?>
				<li>暂无</li>
				<?php endif; ?>
				</ul>
			</div>
			<div class="option_box">
				<div class="title">
					<ul>
						<li>最新主题</li>
						<li class="center">最新新闻</li>
						<li>最新公告</li>
					</ul>
				</div>
				<!--最新主题-->
				<div class="option_content">
					<ul>
						<?php unset($this->_sections['new_subj']);
$this->_sections['new_subj']['loop'] = is_array($_loop=$this->_tpl_vars['new_subj']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['new_subj']['name'] = 'new_subj';
$this->_sections['new_subj']['show'] = true;
$this->_sections['new_subj']['max'] = $this->_sections['new_subj']['loop'];
$this->_sections['new_subj']['step'] = 1;
$this->_sections['new_subj']['start'] = $this->_sections['new_subj']['step'] > 0 ? 0 : $this->_sections['new_subj']['loop']-1;
if ($this->_sections['new_subj']['show']) {
    $this->_sections['new_subj']['total'] = $this->_sections['new_subj']['loop'];
    if ($this->_sections['new_subj']['total'] == 0)
        $this->_sections['new_subj']['show'] = false;
} else
    $this->_sections['new_subj']['total'] = 0;
if ($this->_sections['new_subj']['show']):

            for ($this->_sections['new_subj']['index'] = $this->_sections['new_subj']['start'], $this->_sections['new_subj']['iteration'] = 1;
                 $this->_sections['new_subj']['iteration'] <= $this->_sections['new_subj']['total'];
                 $this->_sections['new_subj']['index'] += $this->_sections['new_subj']['step'], $this->_sections['new_subj']['iteration']++):
$this->_sections['new_subj']['rownum'] = $this->_sections['new_subj']['iteration'];
$this->_sections['new_subj']['index_prev'] = $this->_sections['new_subj']['index'] - $this->_sections['new_subj']['step'];
$this->_sections['new_subj']['index_next'] = $this->_sections['new_subj']['index'] + $this->_sections['new_subj']['step'];
$this->_sections['new_subj']['first']      = ($this->_sections['new_subj']['iteration'] == 1);
$this->_sections['new_subj']['last']       = ($this->_sections['new_subj']['iteration'] == $this->_sections['new_subj']['total']);
?>
							<li>
								<strong>
									<a href="<?php echo $this->_tpl_vars['app']; ?>
/subject/info/sid/<?php echo $this->_tpl_vars['new_subj'][$this->_sections['new_subj']['index']]['id']; ?>
">
										<?php echo ((is_array($_tmp=$this->_tpl_vars['new_subj'][$this->_sections['new_subj']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, '25') : smarty_modifier_truncate($_tmp, '25')); ?>

									</a>
								</strong>
								<span>
									<a href="<?php echo $this->_tpl_vars['root']; ?>
/space.php/index/index/uid/<?php echo $this->_tpl_vars['new_subj'][$this->_sections['new_subj']['index']]['uid']; ?>
">
										<?php echo ((is_array($_tmp=$this->_tpl_vars['new_subj'][$this->_sections['new_subj']['index']]['user_name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, '8') : smarty_modifier_truncate($_tmp, '8')); ?>

									</a>
								</span>
							</li>			
						<?php endfor; else: ?>
						<li>暂无</li>
						<?php endif; ?>			
					</ul>
				</div>
				<!--最新新闻-->
				<div class="option_content">
					<ul>
						<?php unset($this->_sections['news']);
$this->_sections['news']['loop'] = is_array($_loop=$this->_tpl_vars['news']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['news']['name'] = 'news';
$this->_sections['news']['show'] = true;
$this->_sections['news']['max'] = $this->_sections['news']['loop'];
$this->_sections['news']['step'] = 1;
$this->_sections['news']['start'] = $this->_sections['news']['step'] > 0 ? 0 : $this->_sections['news']['loop']-1;
if ($this->_sections['news']['show']) {
    $this->_sections['news']['total'] = $this->_sections['news']['loop'];
    if ($this->_sections['news']['total'] == 0)
        $this->_sections['news']['show'] = false;
} else
    $this->_sections['news']['total'] = 0;
if ($this->_sections['news']['show']):

            for ($this->_sections['news']['index'] = $this->_sections['news']['start'], $this->_sections['news']['iteration'] = 1;
                 $this->_sections['news']['iteration'] <= $this->_sections['news']['total'];
                 $this->_sections['news']['index'] += $this->_sections['news']['step'], $this->_sections['news']['iteration']++):
$this->_sections['news']['rownum'] = $this->_sections['news']['iteration'];
$this->_sections['news']['index_prev'] = $this->_sections['news']['index'] - $this->_sections['news']['step'];
$this->_sections['news']['index_next'] = $this->_sections['news']['index'] + $this->_sections['news']['step'];
$this->_sections['news']['first']      = ($this->_sections['news']['iteration'] == 1);
$this->_sections['news']['last']       = ($this->_sections['news']['iteration'] == $this->_sections['news']['total']);
?>
							<li>
								<strong>
									<a href="<?php echo $this->_tpl_vars['app']; ?>
/news/info/nid/<?php echo $this->_tpl_vars['news'][$this->_sections['news']['index']]['id']; ?>
">
										<?php echo ((is_array($_tmp=$this->_tpl_vars['news'][$this->_sections['news']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, '25') : smarty_modifier_truncate($_tmp, '25')); ?>

									</a>
								</strong>
								<span>
									<a href="<?php echo $this->_tpl_vars['root']; ?>
/space.php/index/index/uid/<?php echo $this->_tpl_vars['news'][$this->_sections['news']['index']]['uid']; ?>
">
										<?php echo ((is_array($_tmp=$this->_tpl_vars['news'][$this->_sections['news']['index']]['user_name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, '8') : smarty_modifier_truncate($_tmp, '8')); ?>

									</a>
								</span>
							</li>			
						<?php endfor; else: ?>
						<li>暂无</li>
						<?php endif; ?>
					</ul>
				</div>	
				<!--最新公告-->
				<div class="option_content">
					<ul>
						<?php unset($this->_sections['notice']);
$this->_sections['notice']['loop'] = is_array($_loop=$this->_tpl_vars['notice']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['notice']['name'] = 'notice';
$this->_sections['notice']['show'] = true;
$this->_sections['notice']['max'] = $this->_sections['notice']['loop'];
$this->_sections['notice']['step'] = 1;
$this->_sections['notice']['start'] = $this->_sections['notice']['step'] > 0 ? 0 : $this->_sections['notice']['loop']-1;
if ($this->_sections['notice']['show']) {
    $this->_sections['notice']['total'] = $this->_sections['notice']['loop'];
    if ($this->_sections['notice']['total'] == 0)
        $this->_sections['notice']['show'] = false;
} else
    $this->_sections['notice']['total'] = 0;
if ($this->_sections['notice']['show']):

            for ($this->_sections['notice']['index'] = $this->_sections['notice']['start'], $this->_sections['notice']['iteration'] = 1;
                 $this->_sections['notice']['iteration'] <= $this->_sections['notice']['total'];
                 $this->_sections['notice']['index'] += $this->_sections['notice']['step'], $this->_sections['notice']['iteration']++):
$this->_sections['notice']['rownum'] = $this->_sections['notice']['iteration'];
$this->_sections['notice']['index_prev'] = $this->_sections['notice']['index'] - $this->_sections['notice']['step'];
$this->_sections['notice']['index_next'] = $this->_sections['notice']['index'] + $this->_sections['notice']['step'];
$this->_sections['notice']['first']      = ($this->_sections['notice']['iteration'] == 1);
$this->_sections['notice']['last']       = ($this->_sections['notice']['iteration'] == $this->_sections['notice']['total']);
?>
							<li>
								<strong>
									<a href="<?php echo $this->_tpl_vars['app']; ?>
/notice/info/ncid/<?php echo $this->_tpl_vars['notice'][$this->_sections['notice']['index']]['id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['notice'][$this->_sections['notice']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, '25') : smarty_modifier_truncate($_tmp, '25')); ?>
</a>
								</strong>
								<span>
									<a href="<?php echo $this->_tpl_vars['root']; ?>
/space.php/index/index/uid/<?php echo $this->_tpl_vars['notice'][$this->_sections['notice']['index']]['uid']; ?>
">
										<?php echo ((is_array($_tmp=$this->_tpl_vars['notice'][$this->_sections['notice']['index']]['user_name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, '8') : smarty_modifier_truncate($_tmp, '8')); ?>

									</a>
								</span>
							</li>			
						<?php endfor; else: ?>
						<li>暂无</li>
						<?php endif; ?>									
					</ul>
				</div>				
			</div>
			<div class="side_box right_box box">
				<h1>最新日志</h1>
				<ul>
					<?php unset($this->_sections['log']);
$this->_sections['log']['loop'] = is_array($_loop=$this->_tpl_vars['log']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['log']['name'] = 'log';
$this->_sections['log']['show'] = true;
$this->_sections['log']['max'] = $this->_sections['log']['loop'];
$this->_sections['log']['step'] = 1;
$this->_sections['log']['start'] = $this->_sections['log']['step'] > 0 ? 0 : $this->_sections['log']['loop']-1;
if ($this->_sections['log']['show']) {
    $this->_sections['log']['total'] = $this->_sections['log']['loop'];
    if ($this->_sections['log']['total'] == 0)
        $this->_sections['log']['show'] = false;
} else
    $this->_sections['log']['total'] = 0;
if ($this->_sections['log']['show']):

            for ($this->_sections['log']['index'] = $this->_sections['log']['start'], $this->_sections['log']['iteration'] = 1;
                 $this->_sections['log']['iteration'] <= $this->_sections['log']['total'];
                 $this->_sections['log']['index'] += $this->_sections['log']['step'], $this->_sections['log']['iteration']++):
$this->_sections['log']['rownum'] = $this->_sections['log']['iteration'];
$this->_sections['log']['index_prev'] = $this->_sections['log']['index'] - $this->_sections['log']['step'];
$this->_sections['log']['index_next'] = $this->_sections['log']['index'] + $this->_sections['log']['step'];
$this->_sections['log']['first']      = ($this->_sections['log']['iteration'] == 1);
$this->_sections['log']['last']       = ($this->_sections['log']['iteration'] == $this->_sections['log']['total']);
?>
						<li>
							<strong>
								<a href="<?php echo $this->_tpl_vars['root']; ?>
/space.php/log/content/uid/<?php echo $this->_tpl_vars['log'][$this->_sections['log']['index']]['uid']; ?>
/lid/<?php echo $this->_tpl_vars['log'][$this->_sections['log']['index']]['id']; ?>
">
									<?php echo ((is_array($_tmp=$this->_tpl_vars['log'][$this->_sections['log']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, '25') : smarty_modifier_truncate($_tmp, '25')); ?>

								</a>
							</strong>
							<span>
								<a href="<?php echo $this->_tpl_vars['root']; ?>
/space.php/index/index/uid/<?php echo $this->_tpl_vars['log'][$this->_sections['log']['index']]['uid']; ?>
">
									<?php echo ((is_array($_tmp=$this->_tpl_vars['log'][$this->_sections['log']['index']]['user_name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, '8') : smarty_modifier_truncate($_tmp, '8')); ?>

								</a>
							</span>
						</li>			
					<?php endfor; else: ?>
					<li>暂无</li>
					<?php endif; ?>							
				</ul>				
			</div>
			<div class="clear"><><iv>
		</div>
		<div id="site_info">
			<p>
				今日: <b><?php echo $this->_tpl_vars['today_sbj_num']; ?>
</b>
				|
				昨日: <b><?php echo $this->_tpl_vars['yesterday_sbj_num']; ?>
</b>
				|
				主题:<b><?php echo $this->_tpl_vars['total_sbj_num']; ?>
</b>
				|
				帖子: <b><?php echo $this->_tpl_vars['total_comm_num']; ?>
</b>
				|
				会员: <b><?php echo $this->_tpl_vars['user_total_num']; ?>
</b>
				|
				欢迎新会员: <b><a href="<?php echo $this->_tpl_vars['root']; ?>
/space.php/index/index/uid/<?php echo $this->_tpl_vars['new_user']['id']; ?>
"><?php echo $this->_tpl_vars['new_user']['name']; ?>
</a></b>
				
			</p>
		</div>
		<div id="board_list">
		<!--分区板块-->
		<?php unset($this->_sections['bl']);
$this->_sections['bl']['loop'] = is_array($_loop=$this->_tpl_vars['board_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['bl']['name'] = 'bl';
$this->_sections['bl']['show'] = true;
$this->_sections['bl']['max'] = $this->_sections['bl']['loop'];
$this->_sections['bl']['step'] = 1;
$this->_sections['bl']['start'] = $this->_sections['bl']['step'] > 0 ? 0 : $this->_sections['bl']['loop']-1;
if ($this->_sections['bl']['show']) {
    $this->_sections['bl']['total'] = $this->_sections['bl']['loop'];
    if ($this->_sections['bl']['total'] == 0)
        $this->_sections['bl']['show'] = false;
} else
    $this->_sections['bl']['total'] = 0;
if ($this->_sections['bl']['show']):

            for ($this->_sections['bl']['index'] = $this->_sections['bl']['start'], $this->_sections['bl']['iteration'] = 1;
                 $this->_sections['bl']['iteration'] <= $this->_sections['bl']['total'];
                 $this->_sections['bl']['index'] += $this->_sections['bl']['step'], $this->_sections['bl']['iteration']++):
$this->_sections['bl']['rownum'] = $this->_sections['bl']['iteration'];
$this->_sections['bl']['index_prev'] = $this->_sections['bl']['index'] - $this->_sections['bl']['step'];
$this->_sections['bl']['index_next'] = $this->_sections['bl']['index'] + $this->_sections['bl']['step'];
$this->_sections['bl']['first']      = ($this->_sections['bl']['iteration'] == 1);
$this->_sections['bl']['last']       = ($this->_sections['bl']['iteration'] == $this->_sections['bl']['total']);
?>
			<div class="board_box">
				<h1><a href="<?php echo $this->_tpl_vars['app']; ?>
/board/index/zid/<?php echo $this->_tpl_vars['board_list'][$this->_sections['bl']['index']]['zid']; ?>
"><?php echo $this->_tpl_vars['board_list'][$this->_sections['bl']['index']]['name']; ?>
</a></h1>
				
				<div class="board_content">
					<table border="0" cellspacing="0" width="100%">
						<tr>
							<?php unset($this->_sections['sb']);
$this->_sections['sb']['loop'] = is_array($_loop=$this->_tpl_vars['board_list'][$this->_sections['bl']['index']]['sub_board']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['sb']['name'] = 'sb';
$this->_sections['sb']['show'] = true;
$this->_sections['sb']['max'] = $this->_sections['sb']['loop'];
$this->_sections['sb']['step'] = 1;
$this->_sections['sb']['start'] = $this->_sections['sb']['step'] > 0 ? 0 : $this->_sections['sb']['loop']-1;
if ($this->_sections['sb']['show']) {
    $this->_sections['sb']['total'] = $this->_sections['sb']['loop'];
    if ($this->_sections['sb']['total'] == 0)
        $this->_sections['sb']['show'] = false;
} else
    $this->_sections['sb']['total'] = 0;
if ($this->_sections['sb']['show']):

            for ($this->_sections['sb']['index'] = $this->_sections['sb']['start'], $this->_sections['sb']['iteration'] = 1;
                 $this->_sections['sb']['iteration'] <= $this->_sections['sb']['total'];
                 $this->_sections['sb']['index'] += $this->_sections['sb']['step'], $this->_sections['sb']['iteration']++):
$this->_sections['sb']['rownum'] = $this->_sections['sb']['iteration'];
$this->_sections['sb']['index_prev'] = $this->_sections['sb']['index'] - $this->_sections['sb']['step'];
$this->_sections['sb']['index_next'] = $this->_sections['sb']['index'] + $this->_sections['sb']['step'];
$this->_sections['sb']['first']      = ($this->_sections['sb']['iteration'] == 1);
$this->_sections['sb']['last']       = ($this->_sections['sb']['iteration'] == $this->_sections['sb']['total']);
?>
							<?php if ($this->_sections['sb']['rownum'] % 4 == 0): ?>
								</tr>
								<tr>
							<?php endif; ?>
							<td width="32.9%">
								<div class="board_icon">
									<a href="<?php echo $this->_tpl_vars['app']; ?>
/subject/index/bid/<?php echo $this->_tpl_vars['board_list'][$this->_sections['bl']['index']]['sub_board'][$this->_sections['sb']['index']]['id']; ?>
">
										<img src="<?php echo $this->_tpl_vars['public']; ?>
/uploads/board/<?php echo $this->_tpl_vars['board_list'][$this->_sections['bl']['index']]['sub_board'][$this->_sections['sb']['index']]['img_path']; ?>
" />
									<a/>
								</div>
								<dl>
									<dt>
										<a href="<?php echo $this->_tpl_vars['app']; ?>
/subject/index/bid/<?php echo $this->_tpl_vars['board_list'][$this->_sections['bl']['index']]['sub_board'][$this->_sections['sb']['index']]['id']; ?>
">
											<?php echo $this->_tpl_vars['board_list'][$this->_sections['bl']['index']]['sub_board'][$this->_sections['sb']['index']]['name']; ?>

										</a>
									</dt>
									<dd>
										<small>
											主题:<?php echo $this->_tpl_vars['board_list'][$this->_sections['bl']['index']]['sub_board'][$this->_sections['sb']['index']]['subj_num']; ?>
, 贴数:<?php echo $this->_tpl_vars['board_list'][$this->_sections['bl']['index']]['sub_board'][$this->_sections['sb']['index']]['comm_num']; ?>

										</small>
									</dd>
									<dd>版主:
										<a href="<?php echo $this->_tpl_vars['root']; ?>
/space.php/index/index/uid/<?php echo $this->_tpl_vars['board_list'][$this->_sections['bl']['index']]['sub_board'][$this->_sections['sb']['index']]['master']; ?>
">
											<?php echo $this->_tpl_vars['board_list'][$this->_sections['bl']['index']]['sub_board'][$this->_sections['sb']['index']]['master_name']; ?>

										</a>
									</dd>
								</dl>
							</td>
								<?php if ($this->_sections['sb']['last'] && $this->_sections['sb']['rownum'] % 3 == 2): ?>
									<td width="32.9%">&nbsp;</td>
								<?php elseif ($this->_sections['sb']['last'] && $this->_sections['sb']['rownum'] % 3 == 1): ?>
									<td width="32.9%">&nbsp;</td>
									<td width="32.9%">&nbsp;</td>
								<?php endif; ?>
							<?php endfor; endif; ?>
						</tr>
					</table>
				</div>
			</div>		
		<?php endfor; endif; ?>
		</div>
	</div>
	<?php if ($this->_tpl_vars['flink']): ?>
	<div id="flink">
		友情连接:
		<?php unset($this->_sections['link']);
$this->_sections['link']['loop'] = is_array($_loop=$this->_tpl_vars['flink']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['link']['name'] = 'link';
$this->_sections['link']['show'] = true;
$this->_sections['link']['max'] = $this->_sections['link']['loop'];
$this->_sections['link']['step'] = 1;
$this->_sections['link']['start'] = $this->_sections['link']['step'] > 0 ? 0 : $this->_sections['link']['loop']-1;
if ($this->_sections['link']['show']) {
    $this->_sections['link']['total'] = $this->_sections['link']['loop'];
    if ($this->_sections['link']['total'] == 0)
        $this->_sections['link']['show'] = false;
} else
    $this->_sections['link']['total'] = 0;
if ($this->_sections['link']['show']):

            for ($this->_sections['link']['index'] = $this->_sections['link']['start'], $this->_sections['link']['iteration'] = 1;
                 $this->_sections['link']['iteration'] <= $this->_sections['link']['total'];
                 $this->_sections['link']['index'] += $this->_sections['link']['step'], $this->_sections['link']['iteration']++):
$this->_sections['link']['rownum'] = $this->_sections['link']['iteration'];
$this->_sections['link']['index_prev'] = $this->_sections['link']['index'] - $this->_sections['link']['step'];
$this->_sections['link']['index_next'] = $this->_sections['link']['index'] + $this->_sections['link']['step'];
$this->_sections['link']['first']      = ($this->_sections['link']['iteration'] == 1);
$this->_sections['link']['last']       = ($this->_sections['link']['iteration'] == $this->_sections['link']['total']);
?>
			<a href="<?php echo $this->_tpl_vars['flink'][$this->_sections['link']['index']]['site']; ?>
"><?php echo $this->_tpl_vars['flink'][$this->_sections['link']['index']]['name']; ?>
</a>
		<?php endfor; endif; ?>
	</div>
	<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>