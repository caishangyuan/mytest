<?php /* Smarty version 2.6.18, created on 2016-07-20 18:37:00
         compiled from friend/send.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'nocache', 'friend/send.tpl', 11, false),)), $this); ?>
<?php $this->_cache_serials['./runtime/comps/default/space_php/\%%DF^DF5^DF547C64%%send.tpl.inc'] = '412be1630854cb14646bdd3bb50f9a96'; ?><div id="frsend" class="send">
	<div class="column" style="width:400px;">
		<div class="column_title">发送添加好友请求</div>
		<div class="column_content">
			<form action="<?php echo $this->_tpl_vars['app']; ?>
/friend/send" method="post">
				<table width="100%">
					<tr>
						<td style="color:#444" height="50px" width="150px" align="center">发送给:</td>
						<td align="left">
							<input type="hidden" name="fid" id="fid" />
							<input type="hidden" name="uid" value="<?php if ($this->caching && !$this->_cache_including): echo '{nocache:412be1630854cb14646bdd3bb50f9a96#0}'; endif;$this->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo $_SESSION['user_info']['id']; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:412be1630854cb14646bdd3bb50f9a96#0}'; endif;?>" />
							<input type="text" name="name" size="25" id="frs_name" readonly />
						</td>
					</tr>
					<tr>
						<td style="color:#444" height="50px" width="150px">请求验证:</td>
						<td align="left"><textarea cols="30" rows="5" name="content"></textarea></td>
					</tr>
					<tr>
						<td></td>
						<td align="left" height="50px"><input type="submit" value="确认发送" class="pn"></td>
					</tr>
					</table>
				</form>
			</div>
		</div>
		<div class="close"><a href="javascript:void(0);" onclick="show('frsend','none');show('bottom','none')"></a></div>
	</div>
	<script type="text/javascript">
		function getfrValue(){
			document.getElementById("frs_name").value=document.getElementById("friend_name").childNodes[0].nodeValue;
			document.getElementById("fid").value=document.getElementById("friend_uid").childNodes[0].nodeValue;
		}
	</script>