<?php /* Smarty version 2.6.18, created on 2016-07-15 14:24:21
         compiled from notice/index.tpl */

$this->_cache_serials['./runtime/comps/default/index_php/\%%FA^FA9^FA9F1253%%index.tpl.inc'] = '8607f4c5ca47adcbe5361bd4132dc0ac';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'nocache', 'notice/index.tpl', 1, false),array('modifier', 'truncate', 'notice/index.tpl', 1, false),array('modifier', 'chinadate', 'notice/index.tpl', 1, false),)), $this); ?>
<?php
function _smarty_tplfunc_8607f4c5ca47adcbe5361bd4132dc0ac_0(&$_smarty)
{
$_smarty->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
$_smarty->_sections['zb']['loop'] = is_array($_loop=$_smarty->_tpl_vars['zone_board_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty->_sections['zb']['name'] = 'zb';
$_smarty->_sections['zb']['show'] = true;
$_smarty->_sections['zb']['max'] = $_smarty->_sections['zb']['loop'];
$_smarty->_sections['zb']['step'] = 1;
$_smarty->_sections['zb']['start'] = $_smarty->_sections['zb']['step'] > 0 ? 0 : $_smarty->_sections['zb']['loop']-1;
if ($_smarty->_sections['zb']['show']) {
    $_smarty->_sections['zb']['total'] = $_smarty->_sections['zb']['loop'];
    if ($_smarty->_sections['zb']['total'] == 0)
        $_smarty->_sections['zb']['show'] = false;
} else
    $_smarty->_sections['zb']['total'] = 0;
if ($_smarty->_sections['zb']['show']):

            for ($_smarty->_sections['zb']['index'] = $_smarty->_sections['zb']['start'], $_smarty->_sections['zb']['iteration'] = 1;
                 $_smarty->_sections['zb']['iteration'] <= $_smarty->_sections['zb']['total'];
                 $_smarty->_sections['zb']['index'] += $_smarty->_sections['zb']['step'], $_smarty->_sections['zb']['iteration']++):
$_smarty->_sections['zb']['rownum'] = $_smarty->_sections['zb']['iteration'];
$_smarty->_sections['zb']['index_prev'] = $_smarty->_sections['zb']['index'] - $_smarty->_sections['zb']['step'];
$_smarty->_sections['zb']['index_next'] = $_smarty->_sections['zb']['index'] + $_smarty->_sections['zb']['step'];
$_smarty->_sections['zb']['first']      = ($_smarty->_sections['zb']['iteration'] == 1);
$_smarty->_sections['zb']['last']       = ($_smarty->_sections['zb']['iteration'] == $_smarty->_sections['zb']['total']);
?>
</dt>
$_smarty->_sections['sb']['loop'] = is_array($_loop=$_smarty->_tpl_vars['zone_board_list'][$_smarty->_sections['zb']['index']]['sub_board']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty->_sections['sb']['name'] = 'sb';
$_smarty->_sections['sb']['show'] = true;
$_smarty->_sections['sb']['max'] = $_smarty->_sections['sb']['loop'];
$_smarty->_sections['sb']['step'] = 1;
$_smarty->_sections['sb']['start'] = $_smarty->_sections['sb']['step'] > 0 ? 0 : $_smarty->_sections['sb']['loop']-1;
if ($_smarty->_sections['sb']['show']) {
    $_smarty->_sections['sb']['total'] = $_smarty->_sections['sb']['loop'];
    if ($_smarty->_sections['sb']['total'] == 0)
        $_smarty->_sections['sb']['show'] = false;
} else
    $_smarty->_sections['sb']['total'] = 0;
if ($_smarty->_sections['sb']['show']):

            for ($_smarty->_sections['sb']['index'] = $_smarty->_sections['sb']['start'], $_smarty->_sections['sb']['iteration'] = 1;
                 $_smarty->_sections['sb']['iteration'] <= $_smarty->_sections['sb']['total'];
                 $_smarty->_sections['sb']['index'] += $_smarty->_sections['sb']['step'], $_smarty->_sections['sb']['iteration']++):
$_smarty->_sections['sb']['rownum'] = $_smarty->_sections['sb']['iteration'];
$_smarty->_sections['sb']['index_prev'] = $_smarty->_sections['sb']['index'] - $_smarty->_sections['sb']['step'];
$_smarty->_sections['sb']['index_next'] = $_smarty->_sections['sb']['index'] + $_smarty->_sections['sb']['step'];
$_smarty->_sections['sb']['first']      = ($_smarty->_sections['sb']['iteration'] == 1);
$_smarty->_sections['sb']['last']       = ($_smarty->_sections['sb']['iteration'] == $_smarty->_sections['sb']['total']);
?>
/subject/index/bid/<?php echo $_smarty->_tpl_vars['zone_board_list'][$_smarty->_sections['zb']['index']]['sub_board'][$_smarty->_sections['sb']['index']]['id']; ?>
" style="color:#F26C4F">
/subject/index/bid/<?php echo $_smarty->_tpl_vars['zone_board_list'][$_smarty->_sections['zb']['index']]['sub_board'][$_smarty->_sections['sb']['index']]['id']; ?>
">

$_smarty->_sections['nc']['loop'] = is_array($_loop=$_smarty->_tpl_vars['notice']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty->_sections['nc']['name'] = 'nc';
$_smarty->_sections['nc']['show'] = true;
$_smarty->_sections['nc']['max'] = $_smarty->_sections['nc']['loop'];
$_smarty->_sections['nc']['step'] = 1;
$_smarty->_sections['nc']['start'] = $_smarty->_sections['nc']['step'] > 0 ? 0 : $_smarty->_sections['nc']['loop']-1;
if ($_smarty->_sections['nc']['show']) {
    $_smarty->_sections['nc']['total'] = $_smarty->_sections['nc']['loop'];
    if ($_smarty->_sections['nc']['total'] == 0)
        $_smarty->_sections['nc']['show'] = false;
} else
    $_smarty->_sections['nc']['total'] = 0;
if ($_smarty->_sections['nc']['show']):

            for ($_smarty->_sections['nc']['index'] = $_smarty->_sections['nc']['start'], $_smarty->_sections['nc']['iteration'] = 1;
                 $_smarty->_sections['nc']['iteration'] <= $_smarty->_sections['nc']['total'];
                 $_smarty->_sections['nc']['index'] += $_smarty->_sections['nc']['step'], $_smarty->_sections['nc']['iteration']++):
$_smarty->_sections['nc']['rownum'] = $_smarty->_sections['nc']['iteration'];
$_smarty->_sections['nc']['index_prev'] = $_smarty->_sections['nc']['index'] - $_smarty->_sections['nc']['step'];
$_smarty->_sections['nc']['index_next'] = $_smarty->_sections['nc']['index'] + $_smarty->_sections['nc']['step'];
$_smarty->_sections['nc']['first']      = ($_smarty->_sections['nc']['iteration'] == 1);
$_smarty->_sections['nc']['last']       = ($_smarty->_sections['nc']['iteration'] == $_smarty->_sections['nc']['total']);
?>
/notice/info/ncid/<?php echo $_smarty->_tpl_vars['notice'][$_smarty->_sections['nc']['index']]['id']; ?>
">

</td>
/space.php/index/index/uid/<?php echo $_smarty->_tpl_vars['notice'][$_smarty->_sections['nc']['index']]['uid']; ?>
">

</p>
}



?>