<?php /* Smarty version 2.6.18, created on 2016-07-20 18:37:01
         compiled from public/footer.tpl */

$this->_cache_serials['./runtime/comps/default/space_php/\%%6A^6AF^6AF0B3C7%%footer.tpl.inc'] = '4cbb9bf291c765a531736900575524d2';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'nocache', 'public/footer.tpl', 11, false),)), $this); ?>
<?php
function _smarty_tplfunc_4cbb9bf291c765a531736900575524d2_0(&$_smarty)
{
$_smarty->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php if ($_GET['uid'] == '' && $_SESSION['user_info']['id'] == ''): ?>
		<script type="text/javascript">
			show('login_send','block');
			show('bottom','block',true);
		</script>
	<?php elseif ($_GET['uid'] == '' && $_SESSION['user_info']['id'] != ''): ?>
		<script>
			window.location.href="<?php echo $_smarty->_tpl_vars['app']; ?>
/index/index/uid/<?php echo $_SESSION['user_info']['id']; ?>
";
		</script>
	<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}



?>
