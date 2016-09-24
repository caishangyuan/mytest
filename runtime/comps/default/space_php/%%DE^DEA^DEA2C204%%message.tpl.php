<?php /* Smarty version 2.6.18, created on 2016-07-20 18:37:01
         compiled from index/message.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'nocache', 'index/message.tpl', 1, false),array('modifier', 'chinadate', 'index/message.tpl', 1, false),array('modifier', 'html_decode', 'index/message.tpl', 1, false),)), $this); ?>
<?php $this->_cache_serials['./runtime/comps/default/space_php/\%%DE^DEA^DEA2C204%%message.tpl.inc'] = 'c2ce592c5944752a21443e024a6ead6a'; ?><?php if ($this->caching && !$this->_cache_including): echo '{nocache:c2ce592c5944752a21443e024a6ead6a#0}'; endif;$this->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>	<?php if ($this->_tpl_vars['mdata']): ?>		<?php unset($this->_sections['mls']);
$this->_sections['mls']['loop'] = is_array($_loop=$this->_tpl_vars['mdata']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['mls']['name'] = 'mls';
$this->_sections['mls']['max'] = (int)$this->_tpl_vars['s_mess_index'];
$this->_sections['mls']['show'] = true;
if ($this->_sections['mls']['max'] < 0)
    $this->_sections['mls']['max'] = $this->_sections['mls']['loop'];
$this->_sections['mls']['step'] = 1;
$this->_sections['mls']['start'] = $this->_sections['mls']['step'] > 0 ? 0 : $this->_sections['mls']['loop']-1;
if ($this->_sections['mls']['show']) {
    $this->_sections['mls']['total'] = min(ceil(($this->_sections['mls']['step'] > 0 ? $this->_sections['mls']['loop'] - $this->_sections['mls']['start'] : $this->_sections['mls']['start']+1)/abs($this->_sections['mls']['step'])), $this->_sections['mls']['max']);
    if ($this->_sections['mls']['total'] == 0)
        $this->_sections['mls']['show'] = false;
} else
    $this->_sections['mls']['total'] = 0;
if ($this->_sections['mls']['show']):

            for ($this->_sections['mls']['index'] = $this->_sections['mls']['start'], $this->_sections['mls']['iteration'] = 1;
                 $this->_sections['mls']['iteration'] <= $this->_sections['mls']['total'];
                 $this->_sections['mls']['index'] += $this->_sections['mls']['step'], $this->_sections['mls']['iteration']++):
$this->_sections['mls']['rownum'] = $this->_sections['mls']['iteration'];
$this->_sections['mls']['index_prev'] = $this->_sections['mls']['index'] - $this->_sections['mls']['step'];
$this->_sections['mls']['index_next'] = $this->_sections['mls']['index'] + $this->_sections['mls']['step'];
$this->_sections['mls']['first']      = ($this->_sections['mls']['iteration'] == 1);
$this->_sections['mls']['last']       = ($this->_sections['mls']['iteration'] == $this->_sections['mls']['total']);
?>			<div class="message_content">				<div class="avar_left"><img src="<?php echo $this->_tpl_vars['public']; ?>
/uploads/user/s_<?php echo $this->_tpl_vars['mdata'][$this->_sections['mls']['index']]['mess_avar']; ?>
" width="48px" height="48px"></div>				<div class="content_right" style="width:353px;">					<div class="title"><a href="<?php echo $this->_tpl_vars['app']; ?>
/index/index/uid/<?php echo $this->_tpl_vars['mdata'][$this->_sections['mls']['index']]['mess_id']; ?>
"><?php echo $this->_tpl_vars['mdata'][$this->_sections['mls']['index']]['mess_name']; ?>
</a><span><?php echo ((is_array($_tmp=$this->_tpl_vars['mdata'][$this->_sections['mls']['index']]['ptime'])) ? $this->_run_mod_handler('chinadate', true, $_tmp, "m-d H:i:s") : smarty_modifier_chinadate($_tmp, "m-d H:i:s")); ?>
</span></div>					<div class="content"><?php echo ((is_array($_tmp=$this->_tpl_vars['mdata'][$this->_sections['mls']['index']]['content'])) ? $this->_run_mod_handler('html_decode', true, $_tmp) : smarty_modifier_html_decode($_tmp)); ?>
</div>				</div>			</div>		<div class="line_nav"></div>		<?php endfor; endif; ?>		<p align="right"><a href="<?php echo $this->_tpl_vars['app']; ?>
/message/index/uid/<?php echo $_GET['uid']; ?>
">查看全部</a></p>	<?php else: ?>		<font color="#cccccc" size="2">暂无留言!</font>	<?php endif; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:c2ce592c5944752a21443e024a6ead6a#0}'; endif;?>