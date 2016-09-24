<?php /* Smarty version 2.6.18, created on 2016-07-20 18:37:01
         compiled from sms/send.tpl */

$this->_cache_serials['./runtime/comps/default/space_php/\%%2E^2E4^2E443B2F%%send.tpl.inc'] = 'fec8ed4fae33081b1242a61c71dfdcaf';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'nocache', 'sms/send.tpl', 5, false),)), $this); ?>
<?php
function _smarty_tplfunc_fec8ed4fae33081b1242a61c71dfdcaf_0(&$_smarty)
{
$_smarty->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($_SESSION['user_info']['id']): ?><?php echo $_SESSION['user_info']['id']; ?>
<?php else: ?><?php echo $_GET['uid']; ?>
<?php endif; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}


function _smarty_tplfunc_fec8ed4fae33081b1242a61c71dfdcaf_1(&$_smarty)
{
$_smarty->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo $_SESSION['user_info']['id']; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}



?>
