<?php /* Smarty version 2.6.18, created on 2016-07-13 12:58:01
         compiled from subject/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'subject/index.tpl', 57, false),array('modifier', 'chinadate', 'subject/index.tpl', 71, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'public/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script>var address='<?php echo $this->_tpl_vars['url']; ?>
';</script>
<script>
	if($(".info").html()==""){
		$(".info")
		.html("<a href='<?php echo $this->_tpl_vars['app']; ?>
/index/main'>首页</a> >> <a href='<?php echo $this->_tpl_vars['url']; ?>
/index'>主题管理</a> >> <font class=\"Cf60\">查看主题</font>");
	}
</script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['res']; ?>
/js/common.js" ></script>

<div class="border main">
    <table width="99%" border="0" align="center"  cellpadding="3" cellspacing="1">
        <thead>
			<tr>
				<form action="<?php echo $this->_tpl_vars['url']; ?>
/search" method="post">
				<th colspan=8>搜索：
					<input type="text" value="请输入搜索关键字" class="default_click" size=13 name="title" />
					时间：
					<select name="ptime">
						<option value=0>不限</option>
						<option value=1>今天</option>
						<option value=2>本周</option>
						<option value=3>本月</option>
					</select>
					分区/版块：
					<select onchange="select_board(this.value)">
						<option value="0">请选择</option>
						<?php unset($this->_sections['b']);
$this->_sections['b']['name'] = 'b';
$this->_sections['b']['loop'] = is_array($_loop=$this->_tpl_vars['board']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['b']['show'] = true;
$this->_sections['b']['max'] = $this->_sections['b']['loop'];
$this->_sections['b']['step'] = 1;
$this->_sections['b']['start'] = $this->_sections['b']['step'] > 0 ? 0 : $this->_sections['b']['loop']-1;
if ($this->_sections['b']['show']) {
    $this->_sections['b']['total'] = $this->_sections['b']['loop'];
    if ($this->_sections['b']['total'] == 0)
        $this->_sections['b']['show'] = false;
} else
    $this->_sections['b']['total'] = 0;
if ($this->_sections['b']['show']):

            for ($this->_sections['b']['index'] = $this->_sections['b']['start'], $this->_sections['b']['iteration'] = 1;
                 $this->_sections['b']['iteration'] <= $this->_sections['b']['total'];
                 $this->_sections['b']['index'] += $this->_sections['b']['step'], $this->_sections['b']['iteration']++):
$this->_sections['b']['rownum'] = $this->_sections['b']['iteration'];
$this->_sections['b']['index_prev'] = $this->_sections['b']['index'] - $this->_sections['b']['step'];
$this->_sections['b']['index_next'] = $this->_sections['b']['index'] + $this->_sections['b']['step'];
$this->_sections['b']['first']      = ($this->_sections['b']['iteration'] == 1);
$this->_sections['b']['last']       = ($this->_sections['b']['iteration'] == $this->_sections['b']['total']);
?>
							<option value="<?php echo $this->_tpl_vars['board'][$this->_sections['b']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['board'][$this->_sections['b']['index']]['name']; ?>
</option>
						<?php endfor; endif; ?>
					</select>
					<select name='bid' id='board'>
						<option value="0">请选择</option>
					</select>
					作者：
					<input type="text" name="name" size=8/>
					<input type="submit" name="search" value="搜索" />
				</th>
				</form>
			</tr>
            <tr>
				<th>&nbsp;</th>
                <th>标题</th>
                <th>版块</th>
                <th>作者</th>
                <th>回复/查看</th>
                <th>发表时间</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <?php unset($this->_sections['ls']);
$this->_sections['ls']['name'] = 'ls';
$this->_sections['ls']['loop'] = is_array($_loop=$this->_tpl_vars['subject']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <tr>
				<td><input type="checkbox" name="select[]" value="<?php echo $this->_tpl_vars['subject'][$this->_sections['ls']['index']]['id']; ?>
" /></td>
                <td>
					<a href="<?php echo $this->_tpl_vars['root']; ?>
/index.php/subject/info/sid/<?php echo $this->_tpl_vars['subject'][$this->_sections['ls']['index']]['id']; ?>
" target="_black" >
						<?php echo ((is_array($_tmp=$this->_tpl_vars['subject'][$this->_sections['ls']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 15, '...') : smarty_modifier_truncate($_tmp, 15, '...')); ?>

					</a>
				</td>
                <td>
					<a href="<?php echo $this->_tpl_vars['root']; ?>
/index.php/subject/index/bid/<?php echo $this->_tpl_vars['subject'][$this->_sections['ls']['index']]['bid']; ?>
" target='_black'>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['subject'][$this->_sections['ls']['index']]['board_name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 15, '...') : smarty_modifier_truncate($_tmp, 15, '...')); ?>

					</a>
				</td>
                <td>
					<a href="<?php echo $this->_tpl_vars['root']; ?>
/space.php/index/index/uid/<?php echo $this->_tpl_vars['subject'][$this->_sections['ls']['index']]['uid']; ?>
" target='_black'>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['subject'][$this->_sections['ls']['index']]['user_name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 8) : smarty_modifier_truncate($_tmp, 8)); ?>

					</a>
				</td>
                <td><font><?php echo $this->_tpl_vars['subject'][$this->_sections['ls']['index']]['comment_total']; ?>
</font> / <?php echo $this->_tpl_vars['subject'][$this->_sections['ls']['index']]['click_num']; ?>
</td>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['subject'][$this->_sections['ls']['index']]['ptime'])) ? $this->_run_mod_handler('chinadate', true, $_tmp, "Y-m-d H:i:s") : smarty_modifier_chinadate($_tmp, "Y-m-d H:i:s")); ?>
</td>
				<td>【<a href='<?php echo $this->_tpl_vars['root']; ?>
/index.php/subject/editor/sid/<?php echo $this->_tpl_vars['subject'][$this->_sections['ls']['index']]['id']; ?>
' target="_black">修改</a>】【<a href="javascript:void(0);" onclick="confirm_info('<?php echo $this->_tpl_vars['url']; ?>
/del/id/<?php echo $this->_tpl_vars['subject'][$this->_sections['ls']['index']]['id']; ?>
','确认删除该主题和所有回复？')">删除</a>】</td>
            </tr>
            <?php endfor; endif; ?>
        </tbody>
        <tfoot>
			<tr>
				<td colspan=4 align=left>
					<a onclick="check_all()" href='javascript:void(0);'>全选</a>
					<a href='javascript:void(0);' onclick="check_versa()">反选</a>
					<a href='javascript:void(0);' onclick="check_cancel()">全不选</a>
					<a href="javascript:void(0);" onclick="delete_checked('<?php echo $this->_tpl_vars['url']; ?>
')">删除选中</a>
					
					<?php if ($_GET['ptype'] == '0'): ?>
						<a href="javascript:void(0);" onclick="hidden_cancel('<?php echo $this->_tpl_vars['url']; ?>
')">取消选中屏敞</a>
					<?php else: ?>
						<a href="javascript:void(0);" onclick="hidden_checked('<?php echo $this->_tpl_vars['url']; ?>
')">屏敞选中</a>
						<a href="<?php echo $this->_tpl_vars['url']; ?>
/search/ptype/0">查看屏敞主题</a>
					<?php endif; ?>
					
				</td>
				<td colspan=5 align=right><?php echo $this->_tpl_vars['fpage']; ?>
</td>
			</tr>
        </tfoot>
    </table>
</div>
<script type="text/javascript">default_click();partition();mouse();</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'public/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>