<?php /* Smarty version 2.6.18, created on 2016-07-20 18:37:01
         compiled from public/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'nocache', 'public/footer.tpl', 11, false),)), $this); ?>
<?php $this->_cache_serials['./runtime/comps/default/space_php/\%%6A^6AF^6AF0B3C7%%footer.tpl.inc'] = '4cbb9bf291c765a531736900575524d2'; ?>		<div class="nav"></div>
		<div id="footer">
			<div class="fl">Powered By <span>SourceCode</span>&nbsp;(源代码团队)<br/>版权&copy; 2011-2012</div>
			<div class="rl"><a href='<?php echo $this->_tpl_vars['root']; ?>
/index.php'>网站论坛</a> | <a href='<?php echo $this->_tpl_vars['root']; ?>
/space.php/index/index/'>个人空间</a> | <a href='<?php echo $this->_tpl_vars['root']; ?>
/admin.php'>管理中心</a><br/><span>EstablishTime&nbsp;:&nbsp;2011-12-15</span></div>
			<div style="height:40px;clear:both"></div>
		</div>
		<div id="bottom" class="bottom" style="height:100%;"></div>
	</body>
</html>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/info.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:4cbb9bf291c765a531736900575524d2#0}'; endif;$this->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php if ($_GET['uid'] == '' && $_SESSION['user_info']['id'] == ''): ?>
		<script type="text/javascript">
			show('login_send','block');
			show('bottom','block',true);
		</script>
	<?php elseif ($_GET['uid'] == '' && $_SESSION['user_info']['id'] != ''): ?>
		<script>
			window.location.href="<?php echo $this->_tpl_vars['app']; ?>
/index/index/uid/<?php echo $_SESSION['user_info']['id']; ?>
";
		</script>
	<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:4cbb9bf291c765a531736900575524d2#0}'; endif;?>