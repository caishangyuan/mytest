<?php /* Smarty version 2.6.18, created on 2016-07-15 14:24:26
         compiled from news/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'news/index.tpl', 35, false),array('modifier', 'chinadate', 'news/index.tpl', 38, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['res']; ?>
/css/news_list.css" />
<script src="<?php echo $this->_tpl_vars['res']; ?>
/js/common.js"></script>
<div id="main">
	<div id="nav_chain_box">
		<h2>板块导航</h2>	
		<?php unset($this->_sections['zb']);
$this->_sections['zb']['loop'] = is_array($_loop=$this->_tpl_vars['zone_board_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['zb']['name'] = 'zb';
$this->_sections['zb']['show'] = true;
$this->_sections['zb']['max'] = $this->_sections['zb']['loop'];
$this->_sections['zb']['step'] = 1;
$this->_sections['zb']['start'] = $this->_sections['zb']['step'] > 0 ? 0 : $this->_sections['zb']['loop']-1;
if ($this->_sections['zb']['show']) {
    $this->_sections['zb']['total'] = $this->_sections['zb']['loop'];
    if ($this->_sections['zb']['total'] == 0)
        $this->_sections['zb']['show'] = false;
} else
    $this->_sections['zb']['total'] = 0;
if ($this->_sections['zb']['show']):

            for ($this->_sections['zb']['index'] = $this->_sections['zb']['start'], $this->_sections['zb']['iteration'] = 1;
                 $this->_sections['zb']['iteration'] <= $this->_sections['zb']['total'];
                 $this->_sections['zb']['index'] += $this->_sections['zb']['step'], $this->_sections['zb']['iteration']++):
$this->_sections['zb']['rownum'] = $this->_sections['zb']['iteration'];
$this->_sections['zb']['index_prev'] = $this->_sections['zb']['index'] - $this->_sections['zb']['step'];
$this->_sections['zb']['index_next'] = $this->_sections['zb']['index'] + $this->_sections['zb']['step'];
$this->_sections['zb']['first']      = ($this->_sections['zb']['iteration'] == 1);
$this->_sections['zb']['last']       = ($this->_sections['zb']['iteration'] == $this->_sections['zb']['total']);
?>
			<dl>
				<dt><?php echo $this->_tpl_vars['zone_board_list'][$this->_sections['zb']['index']]['name']; ?>
</dt>
				<?php unset($this->_sections['sb']);
$this->_sections['sb']['loop'] = is_array($_loop=$this->_tpl_vars['zone_board_list'][$this->_sections['zb']['index']]['sub_board']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
					<dd>
						<?php if ($_GET['bid'] == $this->_tpl_vars['zone_board_list'][$this->_sections['zb']['index']]['sub_board'][$this->_sections['sb']['index']]['id']): ?>
							<a href="<?php echo $this->_tpl_vars['app']; ?>
/subject/index/bid/<?php echo $this->_tpl_vars['zone_board_list'][$this->_sections['zb']['index']]['sub_board'][$this->_sections['sb']['index']]['id']; ?>
" style="color:#F26C4F">
						<?php else: ?>
							<a href="<?php echo $this->_tpl_vars['app']; ?>
/subject/index/bid/<?php echo $this->_tpl_vars['zone_board_list'][$this->_sections['zb']['index']]['sub_board'][$this->_sections['sb']['index']]['id']; ?>
">
						<?php endif; ?>
							<?php echo $this->_tpl_vars['zone_board_list'][$this->_sections['zb']['index']]['sub_board'][$this->_sections['sb']['index']]['name']; ?>

							</a>
					</dd>
				<?php endfor; endif; ?>
			</dl>
		<?php endfor; endif; ?>
	</div>
	<div id="news">
		<table width="100%" border="0" cellspacing='0'>
			<tr>
				<th style="width:520px">标题</th>
				<th style="width:150px">时间</th>
				<th>发表者</th>
			</tr>
			<?php unset($this->_sections['new']);
$this->_sections['new']['loop'] = is_array($_loop=$this->_tpl_vars['news']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['new']['name'] = 'new';
$this->_sections['new']['show'] = true;
$this->_sections['new']['max'] = $this->_sections['new']['loop'];
$this->_sections['new']['step'] = 1;
$this->_sections['new']['start'] = $this->_sections['new']['step'] > 0 ? 0 : $this->_sections['new']['loop']-1;
if ($this->_sections['new']['show']) {
    $this->_sections['new']['total'] = $this->_sections['new']['loop'];
    if ($this->_sections['new']['total'] == 0)
        $this->_sections['new']['show'] = false;
} else
    $this->_sections['new']['total'] = 0;
if ($this->_sections['new']['show']):

            for ($this->_sections['new']['index'] = $this->_sections['new']['start'], $this->_sections['new']['iteration'] = 1;
                 $this->_sections['new']['iteration'] <= $this->_sections['new']['total'];
                 $this->_sections['new']['index'] += $this->_sections['new']['step'], $this->_sections['new']['iteration']++):
$this->_sections['new']['rownum'] = $this->_sections['new']['iteration'];
$this->_sections['new']['index_prev'] = $this->_sections['new']['index'] - $this->_sections['new']['step'];
$this->_sections['new']['index_next'] = $this->_sections['new']['index'] + $this->_sections['new']['step'];
$this->_sections['new']['first']      = ($this->_sections['new']['iteration'] == 1);
$this->_sections['new']['last']       = ($this->_sections['new']['iteration'] == $this->_sections['new']['total']);
?>
				<tr>
					<td>
						<a href="<?php echo $this->_tpl_vars['app']; ?>
/news/info/nid/<?php echo $this->_tpl_vars['news'][$this->_sections['new']['index']]['id']; ?>
">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['news'][$this->_sections['new']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, '80') : smarty_modifier_truncate($_tmp, '80')); ?>

						</a>
					</td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['news'][$this->_sections['new']['index']]['ptime'])) ? $this->_run_mod_handler('chinadate', true, $_tmp, 'Y-m-d H:i:s') : smarty_modifier_chinadate($_tmp, 'Y-m-d H:i:s')); ?>
</td>
					<td>
						<a href="<?php echo $this->_tpl_vars['root']; ?>
/space.php/index/index/uid/<?php echo $this->_tpl_vars['news'][$this->_sections['new']['index']]['uid']; ?>
">
						<?php echo $this->_tpl_vars['news'][$this->_sections['new']['index']]['user_name']; ?>

						</a>
					</td>
				</tr>
			<?php endfor; endif; ?>
		</table>
		<p style="margin-top:5px"><?php echo $this->_tpl_vars['fpage']; ?>
</p>
	</div>
	<div class="clear"></div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>