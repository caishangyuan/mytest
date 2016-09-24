<?php /* Smarty version 2.6.18, created on 2016-07-15 17:49:48
         compiled from subject/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'subject/index.tpl', 133, false),array('modifier', 'truncate', 'subject/index.tpl', 244, false),array('modifier', 'chinadate', 'subject/index.tpl', 261, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script src="<?php echo $this->_tpl_vars['public']; ?>
/ke/kindeditor.js"></script>
<script src="<?php echo $this->_tpl_vars['public']; ?>
/js/common.js"></script>
<script src="<?php echo $this->_tpl_vars['res']; ?>
/js/common.js"></script>
<script>
	KindEditor.ready(function(K) {
		var editor;
		KindEditor.ready(function(K) {
			editor = K.create('textarea[id="ke_content"]', {
				resizeType : 1,
				width:"100%",
				hright:"300px",
				allowPreviewEmoticons : false,
				allowImageUpload : false,
				items : [
					'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
					'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
					'insertunorderedlist', '|', 'emoticons', 'image', 'link']
			});
		});
	});
</script>
<script>
	$(function(){
		$("#title_input").click(function(){
			check_login();
		})
		$("#fast_post form").submit(function(){
			var content=$(".ke-edit-iframe").contents().find("body").text();
			if($("#title_input").val()==''){
				$("#mess").text("提示: 请输入标题");
				return false;
			}else if(content==''){
				$("#mess").text("提示: 请输入内容");
				return false;
			}else if(getlength(content,'utf8')<15){
				$("#mess").text("提示: 内容不能少于15个字符");
				return false;
			}
			return true;
		})
		$("#title_input").keydown(function(){
			$(this).next('b').text(150-getlength($(this).val(),'utf8'));
			if(150-getlength($(this).val(),'utf8')<=0){
				$(this).next('b').text('0');
				var title=$(this).val();
				$(this).val(title.substr(0,150));
			}
		})	
	})	
	//时间排序 主题类型排序
	$(function(){
		$('a.show_menu_icon').parent('span.menu_box').mouseover(function(){
			$(this).children('div').show();
		}).mouseout(function(){
			$(this).children('div').hide();
		})
		//时间排序
		var ptime=Array();
		ptime['0']='全部时间';
		ptime['86400']='一天之内';
		ptime['172800']='两天之内';
		ptime['604800']='一周之内';
		ptime['2592000']='一月之内';
		ptime['7776000']='三月之内';
		ptime['15552000']='半年之内';
		$("#time_order").text(ptime["<?php echo $_GET['ptime']; ?>
"])
		$("body").click(function(){
			$(".time_order,.subj_type_order").hide();
		})
		//类型排序
		var type=Array();
		type['default']='默认排序';
		type['click_down']='点击量倒序';
		type['click_up']='点击量正序';
		type['no_down']='反对量倒序';
		type['no_up']='反对量正序';
		type['yes_down']='支持量倒序';
		type['yes_up']='支持量正序';
		type['time_down']='时间倒序';
		type['time_up']='时间正序';
		$("#subj_type_order").text(type["<?php echo $_GET['order']; ?>
"]);
	})		
</script>
<script src="<?php echo $this->_tpl_vars['res']; ?>
/js/post.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['res']; ?>
/css/subject_list.css">
<div id="main">
	<div id="nav_chain_box">
		<h2>板块导航</h2>	
		<?php unset($this->_sections['zb']);
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
			<dl>
				<dt><?php echo $this->_tpl_vars['zone_board_list'][$this->_sections['zb']['index']]['name']; ?>
</dt>
				<?php unset($this->_sections['sb']);
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
					<dd>
						<?php if ($_GET['bid'] == $this->_tpl_vars['zone_board_list'][$this->_sections['zb']['index']]['sub_board'][$this->_sections['sb']['index']]['id']): ?>
							<a href="<?php echo $this->_tpl_vars['app']; ?>
/subject/index/bid/<?php echo $this->_tpl_vars['zone_board_list'][$this->_sections['zb']['index']]['sub_board'][$this->_sections['sb']['index']]['id']; ?>
" style="color:#F26C4F">
						<?php else: ?>
							<a href="<?php echo $this->_tpl_vars['app']; ?>
/subject/index/bid/<?php echo $this->_tpl_vars['zone_board_list'][$this->_sections['zb']['index']]['sub_board'][$this->_sections['sb']['index']]['id']; ?>
">
						<?php endif; ?>
							<?php echo $this->_tpl_vars['zone_board_list'][$this->_sections['zb']['index']]['sub_board'][$this->_sections['sb']['index']]['name']; ?>

							</a>
					</dd>
				<?php endfor; endif; ?>
			</dl>
		<?php endfor; endif; ?>
	</div>
	
	<div id="subj_list">
		<div id="subj_title">
			<strong><?php echo $this->_tpl_vars['board_name']; ?>
</strong> 今日主题: <b><?php echo $this->_tpl_vars['board_subj_num']; ?>
</b>
		</div>
		<?php if ($this->_tpl_vars['board_name'] == '未知板块'): ?>
			<p style="border:1px dashed #F26C4F;padding:10px;margin-top:10px;">未知板块</p>
		<?php else: ?>
		<div class="post_page">
			<a href="<?php echo $this->_tpl_vars['app']; ?>
/subject/post_subj_page/bid/<?php echo $_GET['bid']; ?>
"><img src="<?php echo $this->_tpl_vars['res']; ?>
/images/pn_post.png"></a>
			<?php echo $this->_tpl_vars['fpage']; ?>

			<p class="clear"></p>
		</div>
		<div id="list_box">
			<table border="0" cellspacing="0" width="100%">
				<thead>
					<tr>
					<td class="filter">筛选:</td>
					<td class="title">
						<span class="menu_box">
						<a href="javascript:void(0)" class="show_menu_icon" id="time_order" style="display:inline">
							全部时间
						</a>
						<div class='hide_menu time_order'>
							<ul>
								<li>
									<a href='<?php echo $this->_tpl_vars['app']; ?>
/subject/index/bid/<?php echo $_GET['bid']; ?>
/ptime/0/order/<?php echo ((is_array($_tmp=@$_GET['order'])) ? $this->_run_mod_handler('default', true, $_tmp, 'default') : smarty_modifier_default($_tmp, 'default')); ?>
'>全部时间</a>
								</li>
								<li>
									<a href='<?php echo $this->_tpl_vars['app']; ?>
/subject/index/bid/<?php echo $_GET['bid']; ?>
/ptime/86400/order/<?php echo ((is_array($_tmp=@$_GET['order'])) ? $this->_run_mod_handler('default', true, $_tmp, 'default') : smarty_modifier_default($_tmp, 'default')); ?>
'>一天之内</a>
								</li>
								<li>
									<a href='<?php echo $this->_tpl_vars['app']; ?>
/subject/index/bid/<?php echo $_GET['bid']; ?>
/ptime/172800/order/<?php echo ((is_array($_tmp=@$_GET['order'])) ? $this->_run_mod_handler('default', true, $_tmp, 'default') : smarty_modifier_default($_tmp, 'default')); ?>
'>两天之内</a>
								</li>
								<li>
									<a href='<?php echo $this->_tpl_vars['app']; ?>
/subject/index/bid/<?php echo $_GET['bid']; ?>
/ptime/604800/order/<?php echo ((is_array($_tmp=@$_GET['order'])) ? $this->_run_mod_handler('default', true, $_tmp, 'default') : smarty_modifier_default($_tmp, 'default')); ?>
'>一周之内</a>
								</li>
								<li>
									<a href='<?php echo $this->_tpl_vars['app']; ?>
/subject/index/bid/<?php echo $_GET['bid']; ?>
/ptime/2592000/order/<?php echo ((is_array($_tmp=@$_GET['order'])) ? $this->_run_mod_handler('default', true, $_tmp, 'default') : smarty_modifier_default($_tmp, 'default')); ?>
'>一月之内</a>
								</li>
								<li>
									<a href='<?php echo $this->_tpl_vars['app']; ?>
/subject/index/bid/<?php echo $_GET['bid']; ?>
/ptime/7776000/order/<?php echo ((is_array($_tmp=@$_GET['order'])) ? $this->_run_mod_handler('default', true, $_tmp, 'default') : smarty_modifier_default($_tmp, 'default')); ?>
'>三月之内</a>
								</li>
								<li>
									<a href='<?php echo $this->_tpl_vars['app']; ?>
/subject/index/bid/<?php echo $_GET['bid']; ?>
/ptime/15552000/order/<?php echo ((is_array($_tmp=@$_GET['order'])) ? $this->_run_mod_handler('default', true, $_tmp, 'default') : smarty_modifier_default($_tmp, 'default')); ?>
'>半年之内</a>
								</li>								
							</ul>
						</div>
						</span>
						排序:
						<span class="menu_box">
						<a href="javascript:void(0)" class="show_menu_icon" id="subj_type_order">默认排序</a>
						<div class="hide_menu subj_type_order">
							<ul>
								<li>
									<a href='<?php echo $this->_tpl_vars['app']; ?>
/subject/index/bid/<?php echo $_GET['bid']; ?>
/ptime/<?php echo ((is_array($_tmp=@$_GET['ptime'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
/order/default'>
										默认排序
									</a>
								</li>							
								<li>
									<a href='<?php echo $this->_tpl_vars['app']; ?>
/subject/index/bid/<?php echo $_GET['bid']; ?>
/ptime/<?php echo ((is_array($_tmp=@$_GET['ptime'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
/order/click_down'>
										点击量倒序
									</a>
								</li>
								<li>
									<a href='<?php echo $this->_tpl_vars['app']; ?>
/subject/index/bid/<?php echo $_GET['bid']; ?>
/ptime/<?php echo ((is_array($_tmp=@$_GET['ptime'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
/order/click_up'>
										点击量正序
									</a>
								</li>
								<li>
									<a href='<?php echo $this->_tpl_vars['app']; ?>
/subject/index/bid/<?php echo $_GET['bid']; ?>
/ptime/<?php echo ((is_array($_tmp=@$_GET['ptime'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
/order/no_down'>
										反对量倒序
									</a>
								</li>
								<li>
									<a href='<?php echo $this->_tpl_vars['app']; ?>
/subject/index/bid/<?php echo $_GET['bid']; ?>
/ptime/<?php echo ((is_array($_tmp=@$_GET['ptime'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
/order/no_up'>
										反对量正序
									</a>
								</li>
								<li>
									<a href='<?php echo $this->_tpl_vars['app']; ?>
/subject/index/bid/<?php echo $_GET['bid']; ?>
/ptime/<?php echo ((is_array($_tmp=@$_GET['ptime'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
/order/yes_down'>
										支持量倒序
									</a>
								</li>
								<li>
									<a href='<?php echo $this->_tpl_vars['app']; ?>
/subject/index/bid/<?php echo $_GET['bid']; ?>
/ptime/<?php echo ((is_array($_tmp=@$_GET['ptime'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
/order/yes_up'>
										支持量正序
									</a>
								</li>
								<li>
									<a href='<?php echo $this->_tpl_vars['app']; ?>
/subject/index/bid/<?php echo $_GET['bid']; ?>
/ptime/<?php echo ((is_array($_tmp=@$_GET['ptime'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
/order/time_down'>
										时间倒序
									</a>
								</li>
								<li>
									<a href='<?php echo $this->_tpl_vars['app']; ?>
/subject/index/bid/<?php echo $_GET['bid']; ?>
/ptime/<?php echo ((is_array($_tmp=@$_GET['ptime'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
/order/time_up'>
										时间正序
									</a>
								</li>									
							</ul>
						</div>
						</span>
						|
						<a href="<?php echo $this->_tpl_vars['app']; ?>
/subject/index/bid/<?php echo $_GET['bid']; ?>
/ptype/2">
							精华
						</a>
						|
						<a href="<?php echo $this->_tpl_vars['app']; ?>
/subject/index/bid/<?php echo $_GET['bid']; ?>
/ptype/3">
							推荐
						</a>
					</td>
					<td class="author">作者</td>
					<td class="comm_num">回复/查看</td>
					<td class="last_comm">最后评论</td>
					</tr>
				</thead>
				<tbody>
					<?php unset($this->_sections['sbj']);
$this->_sections['sbj']['loop'] = is_array($_loop=$this->_tpl_vars['subj_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['sbj']['name'] = 'sbj';
$this->_sections['sbj']['show'] = true;
$this->_sections['sbj']['max'] = $this->_sections['sbj']['loop'];
$this->_sections['sbj']['step'] = 1;
$this->_sections['sbj']['start'] = $this->_sections['sbj']['step'] > 0 ? 0 : $this->_sections['sbj']['loop']-1;
if ($this->_sections['sbj']['show']) {
    $this->_sections['sbj']['total'] = $this->_sections['sbj']['loop'];
    if ($this->_sections['sbj']['total'] == 0)
        $this->_sections['sbj']['show'] = false;
} else
    $this->_sections['sbj']['total'] = 0;
if ($this->_sections['sbj']['show']):

            for ($this->_sections['sbj']['index'] = $this->_sections['sbj']['start'], $this->_sections['sbj']['iteration'] = 1;
                 $this->_sections['sbj']['iteration'] <= $this->_sections['sbj']['total'];
                 $this->_sections['sbj']['index'] += $this->_sections['sbj']['step'], $this->_sections['sbj']['iteration']++):
$this->_sections['sbj']['rownum'] = $this->_sections['sbj']['iteration'];
$this->_sections['sbj']['index_prev'] = $this->_sections['sbj']['index'] - $this->_sections['sbj']['step'];
$this->_sections['sbj']['index_next'] = $this->_sections['sbj']['index'] + $this->_sections['sbj']['step'];
$this->_sections['sbj']['first']      = ($this->_sections['sbj']['iteration'] == 1);
$this->_sections['sbj']['last']       = ($this->_sections['sbj']['iteration'] == $this->_sections['sbj']['total']);
?>
						<tr>
							<td class="filter">
								<?php if ($this->_tpl_vars['subj_list'][$this->_sections['sbj']['index']]['ptype'] == 1): ?>
									<img src="<?php echo $this->_tpl_vars['res']; ?>
/images/pin_1.gif" />							
								<?php elseif ($this->_tpl_vars['subj_list'][$this->_sections['sbj']['index']]['ptype'] == 6): ?>
									<img src="<?php echo $this->_tpl_vars['res']; ?>
/images/hot_3.gif" />
								<?php elseif ($this->_tpl_vars['subj_list'][$this->_sections['sbj']['index']]['ptype'] == 2): ?>
									<img src="<?php echo $this->_tpl_vars['res']; ?>
/images/digest_1.gif" />
								<?php elseif ($this->_tpl_vars['subj_list'][$this->_sections['sbj']['index']]['ptype'] == 3): ?>
									<img src="<?php echo $this->_tpl_vars['res']; ?>
/images/006.small.gif" />									
								<?php elseif ($this->_tpl_vars['subj_list'][$this->_sections['sbj']['index']]['comm_num'] == 0): ?>
									<img src="<?php echo $this->_tpl_vars['res']; ?>
/images/folder_common.gif" />
								<?php else: ?>
									<img src="<?php echo $this->_tpl_vars['res']; ?>
/images/folder_new.gif" />
								<?php endif; ?>
								
							</td>
							<td class="title">
								<a href="<?php echo $this->_tpl_vars['url']; ?>
/info/sid/<?php echo $this->_tpl_vars['subj_list'][$this->_sections['sbj']['index']]['id']; ?>
">
									<?php echo ((is_array($_tmp=$this->_tpl_vars['subj_list'][$this->_sections['sbj']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, '55') : smarty_modifier_truncate($_tmp, '55')); ?>

								</a>
							</td>
							<td class="author">
								<a href="<?php echo $this->_tpl_vars['root']; ?>
/space.php/index/index/uid/<?php echo $this->_tpl_vars['subj_list'][$this->_sections['sbj']['index']]['uid']; ?>
">
									<?php echo $this->_tpl_vars['subj_list'][$this->_sections['sbj']['index']]['author']; ?>

								</a>
							</td>
							<td class="comm_num">
								<?php echo $this->_tpl_vars['subj_list'][$this->_sections['sbj']['index']]['comm_num']; ?>
/<?php echo $this->_tpl_vars['subj_list'][$this->_sections['sbj']['index']]['click_num']; ?>

							</td>
							<?php if ($this->_tpl_vars['subj_list'][$this->_sections['sbj']['index']]['comm_num'] > 0): ?>
								<td class="last_comm" style="width:134px">
									<a href="<?php echo $this->_tpl_vars['root']; ?>
/space.php/index/index/uid/<?php echo $this->_tpl_vars['subj_list'][$this->_sections['sbj']['index']]['last_comm_id']; ?>
">
										<?php echo $this->_tpl_vars['subj_list'][$this->_sections['sbj']['index']]['last_comm_name']; ?>

									</a>
									<br />
									<small><?php echo ((is_array($_tmp=$this->_tpl_vars['subj_list'][$this->_sections['sbj']['index']]['last_comm_time'])) ? $this->_run_mod_handler('chinadate', true, $_tmp, 'Y-m-d H:i:s') : smarty_modifier_chinadate($_tmp, 'Y-m-d H:i:s')); ?>
</small>
								</td>								
							<?php else: ?>
								<td>暂无</td>
							<?php endif; ?>
						</tr>		
					<?php endfor; else: ?>
						<tr><td colspan="5">暂无主题</td></tr>
					<?php endif; ?>
				</tbody>
			</table>
		</div>
		<div class="post_page">
			<a href="<?php echo $this->_tpl_vars['app']; ?>
/subject/post_subj_page/bid/<?php echo $_GET['bid']; ?>
"><img src="<?php echo $this->_tpl_vars['res']; ?>
/images/pn_post.png"></a>
			<?php echo $this->_tpl_vars['fpage']; ?>

			<p class="clear"></p>
		</div>
		<div id="fast_post">
			<form action="<?php echo $this->_tpl_vars['app']; ?>
/subject/insert" method="post">
			<h4>快速发帖</h4>
			<p><b>标题:</b></p>
			<input type="text" name="title" id="title_input" maxlength="150" /> 你还可以输入 <b>150</b> 个字符<span id="mess"></span>
			<div id="post_zone">
				<textarea id="ke_content" name="content"></textarea>
				<input type="submit" value="发表" id="fast_btn"/>
				<span id="look">
				<input type="radio" name="state" value="1" checked />可回复
				<input type="radio" name="state" value="2" />禁止回复
				</span>
				<input type="hidden" value="<?php echo $_GET['bid']; ?>
" name="bid" />
			</div>
			</form>
		</div>		
		<?php endif; ?>
	</div>
</div>
<div id="pmbottom" style="height:100%;"></div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "public/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>