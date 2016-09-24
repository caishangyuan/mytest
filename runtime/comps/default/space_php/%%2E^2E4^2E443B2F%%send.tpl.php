<?php /* Smarty version 2.6.18, created on 2016-07-20 18:37:01
         compiled from sms/send.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'nocache', 'sms/send.tpl', 5, false),)), $this); ?>
<?php $this->_cache_serials['./runtime/comps/default/space_php/\%%2E^2E4^2E443B2F%%send.tpl.inc'] = 'fec8ed4fae33081b1242a61c71dfdcaf'; ?><div id="pmsend" class="send">
	<div class="column" style="width:400px;">
		<div class="column_title">发送短信息</div>
		<div class="column_content">
			<form action="<?php echo $this->_tpl_vars['app']; ?>
/sms/dosend/uid/<?php if ($this->caching && !$this->_cache_including): echo '{nocache:fec8ed4fae33081b1242a61c71dfdcaf#0}'; endif;$this->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($_SESSION['user_info']['id']): ?><?php echo $_SESSION['user_info']['id']; ?>
<?php else: ?><?php echo $_GET['uid']; ?>
<?php endif; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:fec8ed4fae33081b1242a61c71dfdcaf#0}'; endif;?>" method="post">
				<table>
					<tr>
						<td style="color:#444" height="50px" width="150px" align="center">发送给:</td>
						<td align="left">
							<input type="text" id="in_name" name="name" size="25" readonly />
							<input type="hidden" name="dst_id" id="dst_id" />
							<input type="hidden" name="src_id" value="<?php if ($this->caching && !$this->_cache_including): echo '{nocache:fec8ed4fae33081b1242a61c71dfdcaf#1}'; endif;$this->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo $_SESSION['user_info']['id']; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:fec8ed4fae33081b1242a61c71dfdcaf#1}'; endif;?>" />
						</td>
					</tr>
					<tr>
						<td style="color:#444" height="50px" width="150px">信息内容:</td>
						<td align="left"><textarea cols="30" rows="5" name="content"></textarea></td>
					</tr>
					<tr>
						<td></td>
						<td align="left" height="60px"><input type="submit" value="确认发送" class="pn"></td>
					</tr>
					</table>
				</form>
			</div>
		</div>
		<div class="close"><a href="javascript:void(0);" onclick="show('pmsend','none');show('bottom','none')"></a></div>
	</div>
<script type="text/javascript">
	function getValue(){
		document.getElementById("in_name").value=document.getElementById("send_name").childNodes[0].nodeValue;
		document.getElementById("dst_id").value=document.getElementById("send_uid").childNodes[0].nodeValue;
	}
</script>