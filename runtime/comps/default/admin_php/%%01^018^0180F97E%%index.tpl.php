<?php /* Smarty version 2.6.18, created on 2016-07-15 14:08:31
         compiled from board/index.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "board/assist.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['res']; ?>
/js/common.js" ></script>
<div class="border main">
    <table width="99%" border="0" align="center"  cellpadding="3" cellspacing="1">
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
				<tr class="odd">
					<td><?php echo $this->_tpl_vars['data'][$this->_sections['ls']['index']]['name']; ?>
　</td>
					<td width=20%>版主</td>
					<td width=30%>
						【<a href="javascript:void(0);" onclick="add_board(this,<?php echo $this->_tpl_vars['data'][$this->_sections['ls']['index']]['id']; ?>
)">添加版块</a>】
						【<a href="javascript:void(0);" onclick="mod_area(this,<?php echo $this->_tpl_vars['data'][$this->_sections['ls']['index']]['id']; ?>
,'<?php echo $this->_tpl_vars['data'][$this->_sections['ls']['index']]['name']; ?>
')">修改</a>】
						【<a href="<?php echo $this->_tpl_vars['url']; ?>
/del/id/<?php echo $this->_tpl_vars['data'][$this->_sections['ls']['index']]['id']; ?>
" onclick="if(confirm('确认删除？')){return true;}else{return false;}">删除</a>】
					</td>
				</tr>
				<?php unset($this->_sections['cls']);
$this->_sections['cls']['name'] = 'cls';
$this->_sections['cls']['loop'] = is_array($_loop=$this->_tpl_vars['data'][$this->_sections['ls']['index']]['child_board']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cls']['show'] = true;
$this->_sections['cls']['max'] = $this->_sections['cls']['loop'];
$this->_sections['cls']['step'] = 1;
$this->_sections['cls']['start'] = $this->_sections['cls']['step'] > 0 ? 0 : $this->_sections['cls']['loop']-1;
if ($this->_sections['cls']['show']) {
    $this->_sections['cls']['total'] = $this->_sections['cls']['loop'];
    if ($this->_sections['cls']['total'] == 0)
        $this->_sections['cls']['show'] = false;
} else
    $this->_sections['cls']['total'] = 0;
if ($this->_sections['cls']['show']):

            for ($this->_sections['cls']['index'] = $this->_sections['cls']['start'], $this->_sections['cls']['iteration'] = 1;
                 $this->_sections['cls']['iteration'] <= $this->_sections['cls']['total'];
                 $this->_sections['cls']['index'] += $this->_sections['cls']['step'], $this->_sections['cls']['iteration']++):
$this->_sections['cls']['rownum'] = $this->_sections['cls']['iteration'];
$this->_sections['cls']['index_prev'] = $this->_sections['cls']['index'] - $this->_sections['cls']['step'];
$this->_sections['cls']['index_next'] = $this->_sections['cls']['index'] + $this->_sections['cls']['step'];
$this->_sections['cls']['first']      = ($this->_sections['cls']['iteration'] == 1);
$this->_sections['cls']['last']       = ($this->_sections['cls']['iteration'] == $this->_sections['cls']['total']);
?>
					<tr>
						<td>
							　　||--　<a href="<?php echo $this->_tpl_vars['root']; ?>
/index.php/subject/index/bid/<?php echo $this->_tpl_vars['data'][$this->_sections['ls']['index']]['child_board'][$this->_sections['cls']['index']]['id']; ?>
" target="_black"><?php echo $this->_tpl_vars['data'][$this->_sections['ls']['index']]['child_board'][$this->_sections['cls']['index']]['name']; ?>
</a>
						</td>
						<td width=20%>
							<a href="<?php echo $this->_tpl_vars['root']; ?>
/space.php/index/index/uid/<?php echo $this->_tpl_vars['data'][$this->_sections['ls']['index']]['child_board'][$this->_sections['cls']['index']]['master']; ?>
" target="_black">　　<?php echo $this->_tpl_vars['data'][$this->_sections['ls']['index']]['child_board'][$this->_sections['cls']['index']]['master_name']; ?>
</a>
						</td>
						<td width=30%>　　【<a href="javascript:void(0)" onclick="modify(this,'<?php echo $this->_tpl_vars['data'][$this->_sections['ls']['index']]['child_board'][$this->_sections['cls']['index']]['id']; ?>
','<?php echo $this->_tpl_vars['data'][$this->_sections['ls']['index']]['child_board'][$this->_sections['cls']['index']]['name']; ?>
','<?php echo $this->_tpl_vars['data'][$this->_sections['ls']['index']]['child_board'][$this->_sections['cls']['index']]['master_name']; ?>
')">修改</a>】【<a href="<?php echo $this->_tpl_vars['url']; ?>
/del/id/<?php echo $this->_tpl_vars['data'][$this->_sections['ls']['index']]['child_board'][$this->_sections['cls']['index']]['id']; ?>
" onclick="if(confirm('确认删除？')){return true;}else{return false;}">删除版块</a>】</td>
					</tr>
				<?php endfor; endif; ?>
			<?php endfor; endif; ?>
        </tbody>
        <tfoot>
			<tr>
				<td colspan="3 " align=center>
					<a href="javascript:void(0);" onclick="add_area_html()">添加分区</a>
				</td>
			</tr>
        </tfoot>
    </table>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'public/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>