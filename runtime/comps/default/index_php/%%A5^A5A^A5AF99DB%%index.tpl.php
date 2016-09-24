<?php /* Smarty version 2.6.18, created on 2016-07-15 17:48:39
         compiled from log/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'log/index.tpl', 7, false),array('modifier', 'html_decode', 'log/index.tpl', 7, false),array('modifier', 'chinadate', 'log/index.tpl', 12, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['res']; ?>
/css/log_index.css" />
	<div id="main">	
		<?php unset($this->_sections['log']);
$this->_sections['log']['loop'] = is_array($_loop=$this->_tpl_vars['log_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<div class="log">
				<h1>
					<a href="<?php echo $this->_tpl_vars['root']; ?>
/space.php/log/content/uid/<?php echo $this->_tpl_vars['log_list'][$this->_sections['log']['index']]['uid']; ?>
/lid/<?php echo $this->_tpl_vars['log_list'][$this->_sections['log']['index']]['id']; ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['log_list'][$this->_sections['log']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 75, '...') : smarty_modifier_truncate($_tmp, 75, '...')))) ? $this->_run_mod_handler('html_decode', true, $_tmp) : smarty_modifier_html_decode($_tmp)); ?>
</a>
				</h1>
				<p><b><?php echo $this->_tpl_vars['log_list'][$this->_sections['log']['index']]['comm_num']; ?>
</b>个回复 - <b><?php echo $this->_tpl_vars['log_list'][$this->_sections['log']['index']]['click_num']; ?>
</b>次查看</p>
				<p><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['log_list'][$this->_sections['log']['index']]['content'])) ? $this->_run_mod_handler('html_decode', true, $_tmp) : smarty_modifier_html_decode($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 200, '......') : smarty_modifier_truncate($_tmp, 200, '......')); ?>
</p>
				<p>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['log_list'][$this->_sections['log']['index']]['ptime'])) ? $this->_run_mod_handler('chinadate', true, $_tmp, 'Y-m-d H:i:s') : smarty_modifier_chinadate($_tmp, 'Y-m-d H:i:s')); ?>

					-
					<a href="<?php echo $this->_tpl_vars['root']; ?>
/space.php/index/index/uid/<?php echo $this->_tpl_vars['log_list'][$this->_sections['log']['index']]['uid']; ?>
"><?php echo $this->_tpl_vars['log_list'][$this->_sections['log']['index']]['author']; ?>
</a>
				</p>
			</div>			
		<?php endfor; endif; ?>
		<p><?php echo $this->_tpl_vars['fpage']; ?>
</p>
	</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>