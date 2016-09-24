<?php /* Smarty version 2.6.18, created on 2016-07-15 17:49:03
         compiled from news/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'news/index.tpl', 26, false),array('modifier', 'chinadate', 'news/index.tpl', 27, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'public/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['res']; ?>
/js/common.js" ></script>
<script>
	if($(".info").html()==""){
		$(".info")
		.html("<a href='<?php echo $this->_tpl_vars['app']; ?>
/index/main'>首页</a> >> <a href='<?php echo $this->_tpl_vars['url']; ?>
/index'>新闻管理</a> >> <font class=\"Cf60\">查看新闻</font>");
	}
</script>
<div class="border main">
    <table width="99%" border="0" align="center"  cellpadding="3" cellspacing="1">
        <thead>
            <tr>
				<th>选择</th>
				<th>编号</th>
                <th>标题</th>
                <th>添加时间</th>
                <th>作者</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <?php unset($this->_sections['ls']);
$this->_sections['ls']['name'] = 'ls';
$this->_sections['ls']['loop'] = is_array($_loop=$this->_tpl_vars['data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['ls']['show'] = true;
$this->_sections['ls']['max'] = $this->_sections['ls']['loop'];
$this->_sections['ls']['step'] = 1;
$this->_sections['ls']['start'] = $this->_sections['ls']['step'] > 0 ? 0 : $this->_sections['ls']['loop']-1;
if ($this->_sections['ls']['show']) {
    $this->_sections['ls']['total'] = $this->_sections['ls']['loop'];
    if ($this->_sections['ls']['total'] == 0)
        $this->_sections['ls']['show'] = false;
} else
    $this->_sections['ls']['total'] = 0;
if ($this->_sections['ls']['show']):

            for ($this->_sections['ls']['index'] = $this->_sections['ls']['start'], $this->_sections['ls']['iteration'] = 1;
                 $this->_sections['ls']['iteration'] <= $this->_sections['ls']['total'];
                 $this->_sections['ls']['index'] += $this->_sections['ls']['step'], $this->_sections['ls']['iteration']++):
$this->_sections['ls']['rownum'] = $this->_sections['ls']['iteration'];
$this->_sections['ls']['index_prev'] = $this->_sections['ls']['index'] - $this->_sections['ls']['step'];
$this->_sections['ls']['index_next'] = $this->_sections['ls']['index'] + $this->_sections['ls']['step'];
$this->_sections['ls']['first']      = ($this->_sections['ls']['iteration'] == 1);
$this->_sections['ls']['last']       = ($this->_sections['ls']['iteration'] == $this->_sections['ls']['total']);
?>
            <tr <?php if ($this->_tpl_vars['data'][$this->_sections['ls']['index']]['status'] == 1): ?>class="plan_start"<?php elseif ($this->_tpl_vars['data'][$this->_sections['ls']['index']]['status'] == 2): ?>class="finish"<?php endif; ?>>
				<td><input type='checkbox' name='select[]' value='<?php echo $this->_tpl_vars['data'][$this->_sections['ls']['index']]['id']; ?>
' /></td>
				<td><?php echo $this->_tpl_vars['data'][$this->_sections['ls']['index']]['id']; ?>
</td>
                <td><a href="<?php echo $this->_tpl_vars['root']; ?>
/index.php/news/info/nid/<?php echo $this->_tpl_vars['data'][$this->_sections['ls']['index']]['id']; ?>
" target='_black'><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['ls']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, '...') : smarty_modifier_truncate($_tmp, 20, '...')); ?>
</a></td>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['ls']['index']]['ptime'])) ? $this->_run_mod_handler('chinadate', true, $_tmp, "Y-m-d H:i:s") : smarty_modifier_chinadate($_tmp, "Y-m-d H:i:s")); ?>
</td>
                <td><a href="<?php echo $this->_tpl_vars['root']; ?>
/space.php/index/index/id/<?php echo $this->_tpl_vars['data'][$this->_sections['ls']['index']]['uid']; ?>
" target='_black'><?php echo $this->_tpl_vars['data'][$this->_sections['ls']['index']]['author']; ?>
</a></td>
				<td>【<a href='<?php echo $this->_tpl_vars['url']; ?>
/mod/id/<?php echo $this->_tpl_vars['data'][$this->_sections['ls']['index']]['id']; ?>
'>修改</a>】【<a href='<?php echo $this->_tpl_vars['url']; ?>
/del/id/<?php echo $this->_tpl_vars['data'][$this->_sections['ls']['index']]['id']; ?>
'>删除</a>】</td>
            </tr>
            <?php endfor; endif; ?>
        </tbody>

        <tfoot>
			<tr>
				<td colspan=3 align=left>
					<a onclick="check_all()" href='javascript:void(0);'>全选</a>
					<a onclick="check_versa()" href='javascript:void(0);'>反选</a>
					<a onclick="check_cancel()" href='javascript:void(0);'>全不选</a>
					<a onclick="delete_checked()"href="javascript:void(0);">删除选中</a>
				</td>
				<td colspan=5>
					<?php echo $this->_tpl_vars['fpage']; ?>

				</td>
			</tr>
        </tfoot>
    </table>
</div>
<script type="text/javascript">partition();mouse();</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'public/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>