<?php /* Smarty version 2.6.18, created on 2016-07-15 14:24:21
         compiled from notice/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'nocache', 'notice/index.tpl', 1, false),array('modifier', 'truncate', 'notice/index.tpl', 1, false),array('modifier', 'chinadate', 'notice/index.tpl', 1, false),)), $this); ?>
<?php $this->_cache_serials['./runtime/comps/default/index_php/\%%FA^FA9^FA9F1253%%index.tpl.inc'] = '8607f4c5ca47adcbe5361bd4132dc0ac'; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
/css/notice_list.css" />
/js/common.js"></script>
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
</dt>
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
/subject/index/bid/<?php echo $this->_tpl_vars['zone_board_list'][$this->_sections['zb']['index']]['sub_board'][$this->_sections['sb']['index']]['id']; ?>
" style="color:#F26C4F">
/subject/index/bid/<?php echo $this->_tpl_vars['zone_board_list'][$this->_sections['zb']['index']]['sub_board'][$this->_sections['sb']['index']]['id']; ?>
">

$this->_sections['nc']['loop'] = is_array($_loop=$this->_tpl_vars['notice']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['nc']['name'] = 'nc';
$this->_sections['nc']['show'] = true;
$this->_sections['nc']['max'] = $this->_sections['nc']['loop'];
$this->_sections['nc']['step'] = 1;
$this->_sections['nc']['start'] = $this->_sections['nc']['step'] > 0 ? 0 : $this->_sections['nc']['loop']-1;
if ($this->_sections['nc']['show']) {
    $this->_sections['nc']['total'] = $this->_sections['nc']['loop'];
    if ($this->_sections['nc']['total'] == 0)
        $this->_sections['nc']['show'] = false;
} else
    $this->_sections['nc']['total'] = 0;
if ($this->_sections['nc']['show']):

            for ($this->_sections['nc']['index'] = $this->_sections['nc']['start'], $this->_sections['nc']['iteration'] = 1;
                 $this->_sections['nc']['iteration'] <= $this->_sections['nc']['total'];
                 $this->_sections['nc']['index'] += $this->_sections['nc']['step'], $this->_sections['nc']['iteration']++):
$this->_sections['nc']['rownum'] = $this->_sections['nc']['iteration'];
$this->_sections['nc']['index_prev'] = $this->_sections['nc']['index'] - $this->_sections['nc']['step'];
$this->_sections['nc']['index_next'] = $this->_sections['nc']['index'] + $this->_sections['nc']['step'];
$this->_sections['nc']['first']      = ($this->_sections['nc']['iteration'] == 1);
$this->_sections['nc']['last']       = ($this->_sections['nc']['iteration'] == $this->_sections['nc']['total']);
?>
/notice/info/ncid/<?php echo $this->_tpl_vars['notice'][$this->_sections['nc']['index']]['id']; ?>
">

</td>
/space.php/index/index/uid/<?php echo $this->_tpl_vars['notice'][$this->_sections['nc']['index']]['uid']; ?>
">

</p>
$this->_smarty_include(array('smarty_include_tpl_file' => "public/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>