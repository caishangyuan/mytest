<?php /* Smarty version 2.6.18, created on 2016-07-15 14:24:18
         compiled from user/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'nocache', 'user/index.tpl', 2, false),)), $this); ?>
<?php $this->_cache_serials['./runtime/comps/default/index_php/\%%B3^B34^B34D88B1%%index.tpl.inc'] = '22ce9de315e66bee71a02a168876cfbc'; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:22ce9de315e66bee71a02a168876cfbc#0}'; endif;$this->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<script src="<?php echo $this->_tpl_vars['res']; ?>
/js/common.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['res']; ?>
/css/user_index.css">
	<script>
		//互动操作
		$(function(){
			$(".search_ope").mouseover(function(){
				$(this).next('.ope_box').show();
			}).mouseout(function(){
				$(this).next('.ope_box').hide();
			});
			$(".ope_box").mouseover(function(){
				$(this).show();
			}).mouseout(function(){
				$(this).hide();
			})
		})
		//打招呼	
		$(function(){
			$("a.say_hello").click(function(){
				if(check_login()){
					window.scrollTo(0,0);
					$('.hello_window_back').show();
					$('.hello_window_box_back').show();
					var dst_uid=$(this).parent('li').siblings('input[name=dst_id]').val();
					$("#hello_btn").click(function(){
						var content=$(':radio:checked').val();
						$.ajax({
							type:'post',
							url:'<?php echo $this->_tpl_vars['app']; ?>
/user/hello',
							data:'dst_id='+dst_uid+'&content='+content,
							success:function(data){
								if(data=='1'){
									alert('已向对方打招呼');
								}
							}
						})					
					})
				}			
			})				
		})
		//发送短信(赋值)
		$(function(){
			$('a.send_sms').click(function(){
				if(check_login()){
					$('.sms_window_back').show();
					$('.sms_window_box_back').show();
					$("input[name=f_uid]").val($(this).parent('li').siblings('input[name=dst_id]').val());
					$("input[name=f_name]").val($(this).parent('li').siblings('input[name=dst_name]').val());
				}
			})
		})
	</script>
	<div id="main">
		<div id="user_list">
			<ul class="user_ul">
				<?php unset($this->_sections['ul']);
$this->_sections['ul']['loop'] = is_array($_loop=$this->_tpl_vars['user_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['ul']['name'] = 'ul';
$this->_sections['ul']['show'] = true;
$this->_sections['ul']['max'] = $this->_sections['ul']['loop'];
$this->_sections['ul']['step'] = 1;
$this->_sections['ul']['start'] = $this->_sections['ul']['step'] > 0 ? 0 : $this->_sections['ul']['loop']-1;
if ($this->_sections['ul']['show']) {
    $this->_sections['ul']['total'] = $this->_sections['ul']['loop'];
    if ($this->_sections['ul']['total'] == 0)
        $this->_sections['ul']['show'] = false;
} else
    $this->_sections['ul']['total'] = 0;
if ($this->_sections['ul']['show']):

            for ($this->_sections['ul']['index'] = $this->_sections['ul']['start'], $this->_sections['ul']['iteration'] = 1;
                 $this->_sections['ul']['iteration'] <= $this->_sections['ul']['total'];
                 $this->_sections['ul']['index'] += $this->_sections['ul']['step'], $this->_sections['ul']['iteration']++):
$this->_sections['ul']['rownum'] = $this->_sections['ul']['iteration'];
$this->_sections['ul']['index_prev'] = $this->_sections['ul']['index'] - $this->_sections['ul']['step'];
$this->_sections['ul']['index_next'] = $this->_sections['ul']['index'] + $this->_sections['ul']['step'];
$this->_sections['ul']['first']      = ($this->_sections['ul']['iteration'] == 1);
$this->_sections['ul']['last']       = ($this->_sections['ul']['iteration'] == $this->_sections['ul']['total']);
?>
				<li>
					<a href="<?php echo $this->_tpl_vars['root']; ?>
/space.php/index/index/uid/<?php echo $this->_tpl_vars['user_list'][$this->_sections['ul']['index']]['id']; ?>
">
						<img src="<?php echo $this->_tpl_vars['public']; ?>
/uploads/user/s_<?php echo $this->_tpl_vars['user_list'][$this->_sections['ul']['index']]['face_path']; ?>
" />
					</a>
					<p>
						<a href="<?php echo $this->_tpl_vars['root']; ?>
/space.php/index/index/uid/<?php echo $this->_tpl_vars['user_list'][$this->_sections['ul']['index']]['id']; ?>
" class="search_user_name"><?php echo $this->_tpl_vars['user_list'][$this->_sections['ul']['index']]['name']; ?>
</a>
					</p>
					<p><?php echo $this->_tpl_vars['user_list'][$this->_sections['ul']['index']]['level']; ?>
 积分:<?php echo $this->_tpl_vars['user_list'][$this->_sections['ul']['index']]['grade_num']; ?>
</p>
					<a class="search_ope" href="javascript:void(0)">互动</a>
					<ul class="ope_box">
						<li><a href="<?php echo $this->_tpl_vars['root']; ?>
/space.php/index/index/uid/<?php echo $this->_tpl_vars['user_list'][$this->_sections['ul']['index']]['id']; ?>
">去串个门</a></li>
						<li><a href="javascript:void(0)" class="say_hello">打个招呼</a></li>
						<li><a href="javascript:void(0)" class="send_sms">发送消息</a></li>
						<li><a href="<?php echo $this->_tpl_vars['root']; ?>
/space.php/profile/index/uid/<?php echo $this->_tpl_vars['user_list'][$this->_sections['ul']['index']]['id']; ?>
">查看资料</a></li>
						<input type="hidden" name="dst_id" value="<?php echo $this->_tpl_vars['user_list'][$this->_sections['ul']['index']]['id']; ?>
" />
						<input type="hidden" name="dst_name" value="<?php echo $this->_tpl_vars['user_list'][$this->_sections['ul']['index']]['name']; ?>
" />
					</ul>
				</li>	
				<?php endfor; else: ?>
					<p style="padding:10px;">无此用户</p>
				<?php endif; ?>
 			</ul>
			<div class="clear"></div>
		</div>
		<p style="margin-top:5px"><?php echo $this->_tpl_vars['fpage']; ?>
</p>
	</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/hello_box.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/sms_window.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:22ce9de315e66bee71a02a168876cfbc#0}'; endif;?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>