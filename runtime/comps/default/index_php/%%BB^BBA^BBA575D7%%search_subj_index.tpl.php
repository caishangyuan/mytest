<?php /* Smarty version 2.6.18, created on 2016-07-15 17:48:16
         compiled from subject/search_subj_index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'subject/search_subj_index.tpl', 22, false),array('modifier', 'html_decode', 'subject/search_subj_index.tpl', 22, false),array('modifier', 'chinadate', 'subject/search_subj_index.tpl', 26, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<style>
		#main{
			border:1px solid #CDCDCD;	
			padding-top:5px;
			margin-bottom:10px;
		}
		.subj{
			width:950px;
			margin:0 auto;
			border-bottom:1px dashed #DDE3E7;
			margin-bottom:10px;
			padding-bottom:5px;
		}
		.subj h1{
			font-size:16px;
		}
	</style>
	<div id="main">	
		<?php unset($this->_sections['sbj']);
$this->_sections['sbj']['loop'] = is_array($_loop=$this->_tpl_vars['subj_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['sbj']['name'] = 'sbj';
$this->_sections['sbj']['show'] = true;
$this->_sections['sbj']['max'] = $this->_sections['sbj']['loop'];
$this->_sections['sbj']['step'] = 1;
$this->_sections['sbj']['start'] = $this->_sections['sbj']['step'] > 0 ? 0 : $this->_sections['sbj']['loop']-1;
if ($this->_sections['sbj']['show']) {
    $this->_sections['sbj']['total'] = $this->_sections['sbj']['loop'];
    if ($this->_sections['sbj']['total'] == 0)
        $this->_sections['sbj']['show'] = false;
} else
    $this->_sections['sbj']['total'] = 0;
if ($this->_sections['sbj']['show']):

            for ($this->_sections['sbj']['index'] = $this->_sections['sbj']['start'], $this->_sections['sbj']['iteration'] = 1;
                 $this->_sections['sbj']['iteration'] <= $this->_sections['sbj']['total'];
                 $this->_sections['sbj']['index'] += $this->_sections['sbj']['step'], $this->_sections['sbj']['iteration']++):
$this->_sections['sbj']['rownum'] = $this->_sections['sbj']['iteration'];
$this->_sections['sbj']['index_prev'] = $this->_sections['sbj']['index'] - $this->_sections['sbj']['step'];
$this->_sections['sbj']['index_next'] = $this->_sections['sbj']['index'] + $this->_sections['sbj']['step'];
$this->_sections['sbj']['first']      = ($this->_sections['sbj']['iteration'] == 1);
$this->_sections['sbj']['last']       = ($this->_sections['sbj']['iteration'] == $this->_sections['sbj']['total']);
?>
		<div class="subj">
			<h1><a href="<?php echo $this->_tpl_vars['app']; ?>
/subject/info/sid/<?php echo $this->_tpl_vars['subj_list'][$this->_sections['sbj']['index']]['id']; ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['subj_list'][$this->_sections['sbj']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 75, '...') : smarty_modifier_truncate($_tmp, 75, '...')))) ? $this->_run_mod_handler('html_decode', true, $_tmp) : smarty_modifier_html_decode($_tmp)); ?>
</a></h1>
			<p><b><?php echo $this->_tpl_vars['subj_list'][$this->_sections['sbj']['index']]['comm_num']; ?>
</b>个回复 - <b><?php echo $this->_tpl_vars['subj_list'][$this->_sections['sbj']['index']]['click_num']; ?>
</b>次查看</p>
			<p><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['subj_list'][$this->_sections['sbj']['index']]['content'])) ? $this->_run_mod_handler('html_decode', true, $_tmp) : smarty_modifier_html_decode($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 200, '......') : smarty_modifier_truncate($_tmp, 200, '......')); ?>
</p>
			<p>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['subj_list'][$this->_sections['sbj']['index']]['ptime'])) ? $this->_run_mod_handler('chinadate', true, $_tmp, 'Y-m-d H:i:s') : smarty_modifier_chinadate($_tmp, 'Y-m-d H:i:s')); ?>

				- 
				<a href="<?php echo $this->_tpl_vars['root']; ?>
/space.php/index/index/uid/<?php echo $this->_tpl_vars['subj_list'][$this->_sections['sbj']['index']]['uid']; ?>
"><?php echo $this->_tpl_vars['subj_list'][$this->_sections['sbj']['index']]['author']; ?>
</a> 
				- 
				<a href="<?php echo $this->_tpl_vars['app']; ?>
/subject/index/bid/<?php echo $this->_tpl_vars['subj_list'][$this->_sections['sbj']['index']]['bid']; ?>
"><?php echo $this->_tpl_vars['subj_list'][$this->_sections['sbj']['index']]['board_name']; ?>
</a></p>
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