<?php /* Smarty version 2.6.18, created on 2016-07-20 18:37:01
         compiled from index/message.tpl */

$this->_cache_serials['./runtime/comps/default/space_php/\%%DE^DEA^DEA2C204%%message.tpl.inc'] = 'c2ce592c5944752a21443e024a6ead6a';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'nocache', 'index/message.tpl', 1, false),array('modifier', 'chinadate', 'index/message.tpl', 1, false),array('modifier', 'html_decode', 'index/message.tpl', 1, false),)), $this); ?>
<?php
function _smarty_tplfunc_c2ce592c5944752a21443e024a6ead6a_0(&$_smarty)
{
$_smarty->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?>	<?php if ($_smarty->_tpl_vars['mdata']): ?>		<?php unset($_smarty->_sections['mls']);
$_smarty->_sections['mls']['loop'] = is_array($_loop=$_smarty->_tpl_vars['mdata']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty->_sections['mls']['name'] = 'mls';
$_smarty->_sections['mls']['max'] = (int)$_smarty->_tpl_vars['s_mess_index'];
$_smarty->_sections['mls']['show'] = true;
if ($_smarty->_sections['mls']['max'] < 0)
    $_smarty->_sections['mls']['max'] = $_smarty->_sections['mls']['loop'];
$_smarty->_sections['mls']['step'] = 1;
$_smarty->_sections['mls']['start'] = $_smarty->_sections['mls']['step'] > 0 ? 0 : $_smarty->_sections['mls']['loop']-1;
if ($_smarty->_sections['mls']['show']) {
    $_smarty->_sections['mls']['total'] = min(ceil(($_smarty->_sections['mls']['step'] > 0 ? $_smarty->_sections['mls']['loop'] - $_smarty->_sections['mls']['start'] : $_smarty->_sections['mls']['start']+1)/abs($_smarty->_sections['mls']['step'])), $_smarty->_sections['mls']['max']);
    if ($_smarty->_sections['mls']['total'] == 0)
        $_smarty->_sections['mls']['show'] = false;
} else
    $_smarty->_sections['mls']['total'] = 0;
if ($_smarty->_sections['mls']['show']):

            for ($_smarty->_sections['mls']['index'] = $_smarty->_sections['mls']['start'], $_smarty->_sections['mls']['iteration'] = 1;
                 $_smarty->_sections['mls']['iteration'] <= $_smarty->_sections['mls']['total'];
                 $_smarty->_sections['mls']['index'] += $_smarty->_sections['mls']['step'], $_smarty->_sections['mls']['iteration']++):
$_smarty->_sections['mls']['rownum'] = $_smarty->_sections['mls']['iteration'];
$_smarty->_sections['mls']['index_prev'] = $_smarty->_sections['mls']['index'] - $_smarty->_sections['mls']['step'];
$_smarty->_sections['mls']['index_next'] = $_smarty->_sections['mls']['index'] + $_smarty->_sections['mls']['step'];
$_smarty->_sections['mls']['first']      = ($_smarty->_sections['mls']['iteration'] == 1);
$_smarty->_sections['mls']['last']       = ($_smarty->_sections['mls']['iteration'] == $_smarty->_sections['mls']['total']);
?>			<div class="message_content">				<div class="avar_left"><img src="<?php echo $_smarty->_tpl_vars['public']; ?>
/uploads/user/s_<?php echo $_smarty->_tpl_vars['mdata'][$_smarty->_sections['mls']['index']]['mess_avar']; ?>
" width="48px" height="48px"></div>				<div class="content_right" style="width:353px;">					<div class="title"><a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/index/index/uid/<?php echo $_smarty->_tpl_vars['mdata'][$_smarty->_sections['mls']['index']]['mess_id']; ?>
"><?php echo $_smarty->_tpl_vars['mdata'][$_smarty->_sections['mls']['index']]['mess_name']; ?>
</a><span><?php echo ((is_array($_tmp=$_smarty->_tpl_vars['mdata'][$_smarty->_sections['mls']['index']]['ptime'])) ? $_smarty->_run_mod_handler('chinadate', true, $_tmp, "m-d H:i:s") : smarty_modifier_chinadate($_tmp, "m-d H:i:s")); ?>
</span></div>					<div class="content"><?php echo ((is_array($_tmp=$_smarty->_tpl_vars['mdata'][$_smarty->_sections['mls']['index']]['content'])) ? $_smarty->_run_mod_handler('html_decode', true, $_tmp) : smarty_modifier_html_decode($_tmp)); ?>
</div>				</div>			</div>		<div class="line_nav"></div>		<?php endfor; endif; ?>		<p align="right"><a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/message/index/uid/<?php echo $_GET['uid']; ?>
">查看全部</a></p>	<?php else: ?>		<font color="#cccccc" size="2">暂无留言!</font>	<?php endif; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}



?>
