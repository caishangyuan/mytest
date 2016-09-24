<?php /* Smarty version 2.6.18, created on 2016-07-15 14:07:24
         compiled from subject/info.tpl */

$this->_cache_serials['./runtime/comps/default/index_php/\%%04^043^04309023%%info.tpl.inc'] = '70df6c9e45b569e2b0d5e9602f9df11b';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'nocache', 'subject/info.tpl', 2, false),array('modifier', 'chinadate', 'subject/info.tpl', 298, false),array('modifier', 'html_decode', 'subject/info.tpl', 300, false),)), $this); ?>
<?php
function _smarty_tplfunc_70df6c9e45b569e2b0d5e9602f9df11b_0(&$_smarty)
{
$_smarty->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<script src="<?php echo $_smarty->_tpl_vars['public']; ?>
/ke/kindeditor.js"></script>
<script src="<?php echo $_smarty->_tpl_vars['res']; ?>
/js/common.js"></script>
<script src="<?php echo $_smarty->_tpl_vars['public']; ?>
/js/common.js"></script>
<script>
	KindEditor.ready(function(K) {
		var editor;
		KindEditor.ready(function(K) {
			editor = K.create('textarea[id="ke_content"]', {
				resizeType : 1,
				width:"100%",
				hright:"250px",
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
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty->_tpl_vars['res']; ?>
/css/subject_info.css">
<script>
	$(function(){
		//未登录 显示登陆窗口
		$(".reply_btn").click(function(){
			check_login();
		})
		
		//加好友 
		$(".add_friend").click(function(){
			if("<?php echo $_SESSION['home_login']; ?>
"!='1'){
				$(".reply_btn").click();
				return;
			}
			$(".f_window_back").show();
			$(".f_window_box_back").show();
			window.scrollTo(0,0);				
		})
		
		//发送短消息
		$(".send_mess").click(function(){
			if("<?php echo $_SESSION['home_login']; ?>
"!='1'){
				$(".reply_btn").click();
				return;
			}
			$(".sms_window_back").show();
			$(".sms_window_box_back").show();
			window.scrollTo(0,0);				
		})	
		//打招呼	
		$(function(){
			$("a.say_hello").click(function(){
				if(check_login()){
					window.scrollTo(0,0);
					$('.hello_window_back').show();
					$('.hello_window_box_back').show();
					var dst_uid=$(this).parent('.OTA').siblings(".dashed_line").children('span').text();
					$("#hello_btn").click(function(){
						var content=$(':radio:checked').val();
						$.ajax({
							type:'post',
							url:'<?php echo $_smarty->_tpl_vars['app']; ?>
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
		//回帖按钮监听(看内容是否符合要求)
		$("#fast_btn").click(function(){
			if("<?php echo $_smarty->_tpl_vars['subj_info']['state']; ?>
"=="2"){
				alert('呜呜~~楼主不要你回复');
				return;
			}
			var content=$(".ke-edit-iframe").contents().find("body").html();
			if(content==''){
				$("#reply_mess").html("请输入内容").css("color",'red');
			}else if(getlength(content,'utf8')<15){
				$("#reply_mess").html("回复的内容不能少于15个字符哈").css("color",'red');
			}else{
				$.ajax({
					async:false,
					type:"post",
					url:"<?php echo $_smarty->_tpl_vars['app']; ?>
/comment/insert",
					data:"uid=<?php echo $_SESSION['user_info']['id']; ?>
&sid=<?php echo $_GET['sid']; ?>
&content="+content,
					success:function(data){
						if(data!=0){
						eval("var info="+data+";");
						var html="";
						html+="<div class='post_content'>";
							html+="<div class='user_info'>";
								html+="<p class='dashed_line'>";
									html+="<a href='<?php echo $_smarty->_tpl_vars['root']; ?>
/space.php/index/index/uid/<?php echo $_SESSION['user_info']['id']; ?>
'>";
										html+="<?php echo $_SESSION['user_info']['name']; ?>
";
									html+="</a>";
								html+="</p>";
								html+="<a href='<?php echo $_smarty->_tpl_vars['root']; ?>
/space.php/index/index/uid/<?php echo $_SESSION['user_info']['id']; ?>
'>";
									html+="<img src='<?php echo $_smarty->_tpl_vars['public']; ?>
/uploads/user/m_<?php echo $_SESSION['user_info']['face_path']; ?>
' />";
								html+="</a>";
								html+="<ul>";
									html+="<li><b>等级:</b>"+info.level+"</li>";
									html+="<li><b>日志:</b>"+info.log_num+"</li>";
									html+="<li><b>主题:</b>"+info.subj_num+"</li>";
									html+="<li><b>帖子:</b>"+info.comm_num+"</li>";
								html+="</ul>";
								html+="<div class='OTA'>";
									html+="<a href='<?php echo $_smarty->_tpl_vars['root']; ?>
/space.php/index/index/uid/<?php echo $_SESSION['user_info']['id']; ?>
' class='home'>串个门</a>";
									html+="<a href='#' class='add_friend'>加好友</a><br />";
									html+="<a href='#' class='say_hello'>打招呼</a>";
									html+="<a href='#' class='send_mess'>发消息</a>";
								html+="</div>";
							html+="</div>";
							html+="<div class='user_content'>";
								html+="<p class='dashed_line'>发表于 "+info.time+"</p>";
								html+="<div class='msg_content'>";
									html+=content;
								html+="</div>";
								html+="<div class='qianming'>";
									html+="<div class='clear'></div>";
									html+="<p class='dashed_line'></p>";
									html+="<p class='user_q'>";
										html+="<?php echo $_SESSION['user_info']['sign']; ?>
";
									html+="</p>";
								html+="</div>";
							html+="</div>";
							html+="<div class='clear'></div>";
						html+="</div>";
						$("#info_box").append(html); 
						alert('发表评论成功!加 '+info.add_grade+' 分');
						$("#counter").text(parseInt($("#counter").text())+1);
						}else{
							alert('您回复的次数过于频繁,请稍后再试');
						}
					}
				})
			}
		})
		
		//内容输入监听(清空原来的提示)
		$("#baidu_editor_0").contents().find("body").keydown(function(){
			$("#reply_mess").html('');
		})
		
		//观点
		$("#yes,#no").click(function(){
			if(check_login()){
				$.ajax({
					type:'GET',
					url:'<?php echo $_smarty->_tpl_vars['app']; ?>
/subject/viewpoint/sid/<?php echo $_GET['sid']; ?>
/type/'+$(this).attr('type'),
					type1:$(this).attr('type'),
					success:function(data){
						if(data==1){
							if(this.type1==1){
								$("#yes b").text(parseInt($("#yes b").text())+1);
							}else{
								$("#no b").text(parseInt($("#no b").text())+1);
							}
							alert('表达观点成功!');
						}else{
							alert('不能对自己的主题发表观点!');
						}
					}
				})			
			}
		})
		//发送短信(赋值)
		$('a.send_mess').click(function(){
			var friend_name=$(this).parent('.OTA').siblings(".dashed_line").children('a').text();
			var friend_uid=$(this).parent('.OTA').siblings(".dashed_line").children('span').text();
			$(".sms_window_content table input[name=f_name]").val(friend_name);
			$(".sms_window_content table input[name=f_uid]").val(friend_uid);
		})
		//添加好友请求(赋值)
		$('a.add_friend').click(function(){
			var friend_name=$(this).parent('.OTA').siblings(".dashed_line").children('a').text();
			var friend_uid=$(this).parent('.OTA').siblings(".dashed_line").children('span').text();
			$(".f_window_content table input[name=f_name]").val(friend_name);
			$(".f_window_content table input[name=f_uid]").val(friend_uid);
		})
		//主题操作
		$("#admin_tool a[type]").click(function(){
			var ptype=$(this).attr('type');
			if(ptype=='0'){
				if(!confirm('确认关闭主题吗?')){
					return;
				}
			}
			if(ptype=='5'){
				if(!confirm('确认删除此主题吗?这将会删除此主题的所有回复')){
					return;
				}
			}			
			$.ajax({
				type:'post',
				url:'<?php echo $_smarty->_tpl_vars['app']; ?>
/subject/subject_opera',
				data:'sid=<?php echo $_GET['sid']; ?>
&type='+ptype,
				success:function(data){
					if(data=='1'){
						alert('操作成功!');
					}else{
						alert('操作失败!');
					}
				}
			})
		})
	})
</script>
<div id="main">
	<?php if ($_smarty->_tpl_vars['subj_info']['uid'] <= 0): ?>
		<p style="border:1px dashed #F26C4F;padding:10px;margin-bottom:10px">未知主题</p>
	<?php else: ?>
		<div class="post">
			<a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/subject/post_subj_page"><img src="<?php echo $_smarty->_tpl_vars['res']; ?>
/images/pn_post.png" /></a>
			<?php if ($_SESSION['home_login'] != 1): ?>
				<a href="javascript:void(0)" class="reply_btn"><img src="<?php echo $_smarty->_tpl_vars['res']; ?>
/images/pn_reply.png" /></a>
			<?php endif; ?>	
			<div class="clear"></div>
		</div>
		<div id="admin_tool">
			<?php if ($_SESSION['user_info']['stand'] == '1' || $_SESSION['user_info']['stand'] == '2'): ?>
					<a href="javascript:void(0)" type='2'>加精</a> 
					<a href="javascript:void(0)" type='1'>置顶</a> 
					<a href="javascript:void(0)" type='3'>推荐</a> 
					<a href="javascript:void(0)" type='0'>关闭</a> 
					<a href="javascript:void(0)" type='4'>普通</a> 
					<?php if ($_SESSION['user_info']['stand'] == '1'): ?>
						<a href="javascript:void(0)" type='5'>删除</a> 
					<?php endif; ?>
			<?php endif; ?>
			<?php if ($_smarty->_tpl_vars['subj_info']['uid'] == $_SESSION['user_info']['id'] || $_SESSION['user_info']['stand'] == '1' || $_SESSION['user_info']['stand'] == '2'): ?>
				<a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/subject/editor/sid/<?php echo $_GET['sid']; ?>
">编辑</a> 
			<?php endif; ?>
		</div>
		<div id='info_box'>
			<div id='post_top'>
				<div class='user_info'>查看: <b><?php echo $_smarty->_tpl_vars['subj_info']['click_num']; ?>
</b> | 回复: <b id="counter"><?php echo $_smarty->_tpl_vars['subj_info']['subj_comm_num']; ?>
</b> </div>
				<div class='user_content'>
					<h2>
					<a href='<?php echo $_smarty->_tpl_vars['app']; ?>
/subject/info/sid/<?php echo $_smarty->_tpl_vars['subj_info']['id']; ?>
' title="<?php echo $_smarty->_tpl_vars['subj_info']['title']; ?>
">
						<?php echo $_smarty->_tpl_vars['subj_info']['title']; ?>

					</a>
						<?php if ($_smarty->_tpl_vars['subj_info']['ptype'] == 1): ?>
							<img src="<?php echo $_smarty->_tpl_vars['res']; ?>
/images/pin_1.gif" />							
						<?php elseif ($_smarty->_tpl_vars['subj_info']['subj_comm_num'] >= $_smarty->_tpl_vars['subj_info']['subj_hot_num']): ?>
							<img src="<?php echo $_smarty->_tpl_vars['res']; ?>
/images/hot_3.gif" />
						<?php elseif ($_smarty->_tpl_vars['subj_info']['ptype'] == 2): ?>
							<img src="<?php echo $_smarty->_tpl_vars['res']; ?>
/images/digest_1.gif" />
						<?php elseif ($_smarty->_tpl_vars['subj_info']['ptype'] == 3): ?>
							<img src="<?php echo $_smarty->_tpl_vars['res']; ?>
/images/006.small.gif" />
						<?php elseif ($_smarty->_tpl_vars['subj_info']['subj_comm_num'] == 0): ?>
							<img src="<?php echo $_smarty->_tpl_vars['res']; ?>
/images/folder_common.gif" />
						<?php else: ?>
							<img src="<?php echo $_smarty->_tpl_vars['res']; ?>
/images/folder_new.gif" />
						<?php endif; ?>				
					</h2>
				</div>
			</div>
			<!--用户的简介信息 主题内容 start-->
			<div class='post_content'>
				<div class='user_info'>
					<p class='dashed_line'>
						<a href='<?php echo $_smarty->_tpl_vars['root']; ?>
/space.php/index/index/uid/<?php echo $_smarty->_tpl_vars['subj_info']['uid']; ?>
'><?php echo $_smarty->_tpl_vars['subj_info']['user_name']; ?>
</a>
						<span style="display:none"><?php echo $_smarty->_tpl_vars['subj_info']['uid']; ?>
</span>
					</p>
					<a href='<?php echo $_smarty->_tpl_vars['root']; ?>
/space.php/index/index/uid/<?php echo $_smarty->_tpl_vars['subj_info']['uid']; ?>
'>
						<img src='<?php echo $_smarty->_tpl_vars['public']; ?>
/uploads/user/m_<?php echo $_smarty->_tpl_vars['subj_info']['user_face_img']; ?>
' />
					</a>
					<ul>
						<li>
							<b>等级:</b><?php echo $_smarty->_tpl_vars['subj_info']['user_level']; ?>

						</li>
						<li>
							<b>日志:</b><?php echo $_smarty->_tpl_vars['subj_info']['user_log_num']; ?>

						</li>
						<li>
							<b>主题:</b><?php echo $_smarty->_tpl_vars['subj_info']['user_subj_num']; ?>

						</li>
						<li>
							<b>帖子:</b><?php echo $_smarty->_tpl_vars['subj_info']['user_commo_num']; ?>

						</li>
					</ul>
					<div class='OTA'>
						<a href='<?php echo $_smarty->_tpl_vars['root']; ?>
/space.php/index/index/uid/<?php echo $_smarty->_tpl_vars['subj_info']['uid']; ?>
' class='home'>串个门</a>
						<a href='javascript:void(0)' class='add_friend'>加好友</a><br />
						<a href='javascript:void(0)' class='say_hello'>打招呼</a>
						<a href='javascript:void(0)' class='send_mess'>发消息</a>
					</div>
				</div>
				<div class='user_content'>
					<p class='dashed_line'>发表于 <?php echo ((is_array($_tmp=$_smarty->_tpl_vars['subj_info']['ptime'])) ? $_smarty->_run_mod_handler('chinadate', true, $_tmp, 'Y-m-d H:i:s') : smarty_modifier_chinadate($_tmp, 'Y-m-d H:i:s')); ?>
</p>
					<div class='msg_content'>
						<?php echo ((is_array($_tmp=$_smarty->_tpl_vars['subj_info']['content'])) ? $_smarty->_run_mod_handler('html_decode', true, $_tmp) : smarty_modifier_html_decode($_tmp)); ?>

					</div>
					<div class='qianming'>
						<span id="yes" type="1"><img src='<?php echo $_smarty->_tpl_vars['res']; ?>
/images/rec_add.gif' />支持 (<b><?php echo $_smarty->_tpl_vars['subj_info']['yes_num']; ?>
</b>) </span>
						<span id="no" type="-1"><img src='<?php echo $_smarty->_tpl_vars['res']; ?>
/images/rec_subtract.gif' />反对 (<b><?php echo $_smarty->_tpl_vars['subj_info']['no_num']; ?>
</b>) </span>
						<div class='clear'></div>
						<p class='dashed_line'></p>
						<p class='user_q'>
							<?php echo $_smarty->_tpl_vars['subj_info']['user_sign']; ?>

						</p>
					</div>
				</div>
				<div class='clear'></div>
			</div>	
			<!--用户的简介信息 主题内容 end-->		
			
			<?php unset($_smarty->_sections['cm']);
$_smarty->_sections['cm']['loop'] = is_array($_loop=$_smarty->_tpl_vars['all_comm']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty->_sections['cm']['name'] = 'cm';
$_smarty->_sections['cm']['show'] = true;
$_smarty->_sections['cm']['max'] = $_smarty->_sections['cm']['loop'];
$_smarty->_sections['cm']['step'] = 1;
$_smarty->_sections['cm']['start'] = $_smarty->_sections['cm']['step'] > 0 ? 0 : $_smarty->_sections['cm']['loop']-1;
if ($_smarty->_sections['cm']['show']) {
    $_smarty->_sections['cm']['total'] = $_smarty->_sections['cm']['loop'];
    if ($_smarty->_sections['cm']['total'] == 0)
        $_smarty->_sections['cm']['show'] = false;
} else
    $_smarty->_sections['cm']['total'] = 0;
if ($_smarty->_sections['cm']['show']):

            for ($_smarty->_sections['cm']['index'] = $_smarty->_sections['cm']['start'], $_smarty->_sections['cm']['iteration'] = 1;
                 $_smarty->_sections['cm']['iteration'] <= $_smarty->_sections['cm']['total'];
                 $_smarty->_sections['cm']['index'] += $_smarty->_sections['cm']['step'], $_smarty->_sections['cm']['iteration']++):
$_smarty->_sections['cm']['rownum'] = $_smarty->_sections['cm']['iteration'];
$_smarty->_sections['cm']['index_prev'] = $_smarty->_sections['cm']['index'] - $_smarty->_sections['cm']['step'];
$_smarty->_sections['cm']['index_next'] = $_smarty->_sections['cm']['index'] + $_smarty->_sections['cm']['step'];
$_smarty->_sections['cm']['first']      = ($_smarty->_sections['cm']['iteration'] == 1);
$_smarty->_sections['cm']['last']       = ($_smarty->_sections['cm']['iteration'] == $_smarty->_sections['cm']['total']);
?>
				<!--用户的简介信息 留言内容 start-->
				<div class='post_content'>
					<div class='user_info'>
						<p class='dashed_line'>
							<a href='<?php echo $_smarty->_tpl_vars['root']; ?>
/space.php/index/index/uid/<?php echo $_smarty->_tpl_vars['all_comm'][$_smarty->_sections['cm']['index']]['uid']; ?>
'><?php echo $_smarty->_tpl_vars['all_comm'][$_smarty->_sections['cm']['index']]['user_name']; ?>
</a>
							<span style="display:none"><?php echo $_smarty->_tpl_vars['subj_info']['uid']; ?>
</span>
						</p>
						<a href='<?php echo $_smarty->_tpl_vars['root']; ?>
/space.php/index/index/uid/<?php echo $_smarty->_tpl_vars['all_comm'][$_smarty->_sections['cm']['index']]['uid']; ?>
'>
							<img src='<?php echo $_smarty->_tpl_vars['public']; ?>
/uploads/user/m_<?php echo $_smarty->_tpl_vars['all_comm'][$_smarty->_sections['cm']['index']]['user_face_img']; ?>
' />
						</a>
						<ul>
							<li><b>等级:</b><?php echo $_smarty->_tpl_vars['all_comm'][$_smarty->_sections['cm']['index']]['user_level']; ?>
</li>
							<li><b>日志:</b><?php echo $_smarty->_tpl_vars['all_comm'][$_smarty->_sections['cm']['index']]['user_log_num']; ?>
</li>
							<li><b>主题:</b><?php echo $_smarty->_tpl_vars['all_comm'][$_smarty->_sections['cm']['index']]['user_subj_num']; ?>
</li>
							<li><b>帖子:</b><?php echo $_smarty->_tpl_vars['all_comm'][$_smarty->_sections['cm']['index']]['user_comm_num']; ?>
</li>
						</ul>
						<div class='OTA'>
							<a href='<?php echo $_smarty->_tpl_vars['root']; ?>
/space.php/index/index/uid/<?php echo $_smarty->_tpl_vars['all_comm'][$_smarty->_sections['cm']['index']]['uid']; ?>
' class='home'>串个门</a>
							<a href='javascript:void(0)' class='add_friend'>加好友</a><br />
							<a href='javascript:void(0)' class='say_hello'>打招呼</a>
							<a href='javascript:void(0)' class='send_mess'>发消息</a>
						</div>
					</div>
					<div class='user_content'>
						<p class='dashed_line'>发表于 <?php echo ((is_array($_tmp=$_smarty->_tpl_vars['all_comm'][$_smarty->_sections['cm']['index']]['ptime'])) ? $_smarty->_run_mod_handler('chinadate', true, $_tmp, 'Y-m-d H:i:s') : smarty_modifier_chinadate($_tmp, 'Y-m-d H:i:s')); ?>
</p>
						<div class='msg_content'>
							<?php echo ((is_array($_tmp=$_smarty->_tpl_vars['all_comm'][$_smarty->_sections['cm']['index']]['content'])) ? $_smarty->_run_mod_handler('html_decode', true, $_tmp) : smarty_modifier_html_decode($_tmp)); ?>

						</div>
						<div class='qianming'>
							<div class='clear'></div>
							<p class='dashed_line'></p>
							<p class='user_q'>
								<?php echo $_smarty->_tpl_vars['all_comm'][$_smarty->_sections['cm']['index']]['sign']; ?>

							</p>
						</div>
					</div>
					<div class='clear'></div>
				</div>	
				<!--用户的简介信息 留言内容 end-->	
			<?php endfor; endif; ?>
		</div>
		<div class="post_page">
			<?php echo $_smarty->_tpl_vars['fpage']; ?>

		</div>		
		<div class="post" style="margin-bottom:10px">
			<a href="<?php echo $_smarty->_tpl_vars['app']; ?>
/subject/post_subj_page"><img src="<?php echo $_smarty->_tpl_vars['res']; ?>
/images/pn_post.png" /></a>
			<?php if ($_SESSION['home_login'] != 1): ?>
				<a href="javascript:void(0)" class="reply_btn"><img src="<?php echo $_smarty->_tpl_vars['res']; ?>
/images/pn_reply.png" /></a>
			<?php endif; ?>			
			<div class="clear"></div>
		</div>
		<?php if ($_SESSION['home_login'] == 1): ?>
			<!--发帖框-->
			<div id="reply_box">
				<table width="100%" border="0" cellspacing="0">
					<tr>
						<td id="face_img_td" valign="top">
							<img src="<?php echo $_smarty->_tpl_vars['public']; ?>
/uploads/user/m_<?php echo $_SESSION['user_info']['face_path']; ?>
">
						</td>
						<td style="padding:5px;" id="reply_box_content">
							<textarea id="ke_content">
								<?php if ($_smarty->_tpl_vars['subj_info']['state'] == 2): ?>
									此贴被楼主设置为禁止回复
								<?php endif; ?>
							</textarea>
							<input type="button" id="fast_btn" value="回复" />
							<span id="reply_mess"></span>
						</td>
					</tr>
				</table>
			</div>		
		<?php endif; ?>
	<?php endif; ?>
</div>
<?php $_smarty_tpl_vars = $_smarty->_tpl_vars;
$_smarty->_smarty_include(array('smarty_include_tpl_file' => "public/friend_window.tpl", 'smarty_include_vars' => array()));
$_smarty->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $_smarty->_tpl_vars;
$_smarty->_smarty_include(array('smarty_include_tpl_file' => "public/sms_window.tpl", 'smarty_include_vars' => array()));
$_smarty->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $_smarty->_tpl_vars;
$_smarty->_smarty_include(array('smarty_include_tpl_file' => "public/hello_box.tpl", 'smarty_include_vars' => array()));
$_smarty->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}



?>
