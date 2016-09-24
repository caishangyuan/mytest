<?php /* Smarty version 2.6.18, created on 2016-07-12 22:06:17
         compiled from set/index.tpl */ ?>
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
/index/main'>首页</a> >> 网站配置 >> <font class=\"Cf60\">网站配置</font>");
	}
</script>
<div class="border main">
	<form action="<?php echo $this->_tpl_vars['url']; ?>
/mod" method="post" enctype="multipart/form-data"/>
	<input type="hidden" name="type" value=1 />
	<table width="99%" border="0" align="center"  cellpadding="3" cellspacing="1">
		<thead>
			<tr>
				<th colspan="2">网站配置</th>
			</tr>
		</thead>
		<tr>
			<td>网站标题</td>
			<td><input type="text" name="TITLE" value="<?php echo $this->_tpl_vars['data']['TITLE']; ?>
"/></td>
		</tr>
		<tr>
			<td>网站关键字</td>
			<td><input type="text" name="KEYWORDS" size=50 value="<?php echo $this->_tpl_vars['data']['KEYWORDS']; ?>
" /></td>
		</tr>
		<tr>
			<td>网站描述</td>
			<td><textarea name="DESC" cols=45 rows=5><?php echo $this->_tpl_vars['data']['DESC']; ?>
</textarea></td>
		</tr>
		<tr>
			<td>网站LOGO</td>
			<td><img src="<?php echo $this->_tpl_vars['public']; ?>
/images/<?php echo $this->_tpl_vars['data']['LOGO']; ?>
" />
			<button onclick="mod_logo(this)">更改</button>
		</tr>
		<!--tr>
			<td>会员登录积分</td>
			<td><input type="text" name="LOGINREWARD" value="<?php echo $this->_tpl_vars['data']['LOGINREWARD']; ?>
" /></td>
		</tr-->
		<tr>
			<td>缓存设置</td>
			<td>
				<?php if ($this->_tpl_vars['data']['CSTART'] == 1): ?>
					<input type="radio" name="CSTART" value="1" checked />开启
					<input type="radio" name="CSTART" value="0" />关闭
				<?php else: ?>
					<input type="radio" name="CSTART" value="1" />开启
					<input type="radio" name="CSTART" value="0" checked />关闭
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td>缓存时间</td>
			<td><input type="text" name="CTIME" value="<?php echo $this->_tpl_vars['data']['CTIME']; ?>
" /></td>
		</tr>
		<tr>
			<td>memcache 设置</td>
			<td>
				<?php if ($this->_tpl_vars['data']['memcache_status'] == 1): ?>
					<input type="radio" name="memcache_status" value="1" checked />开启
					<input type="radio" name="memcache_status" value="0" />关闭
				<?php else: ?>
					<input type="radio" name="memcache_status" value="1" />开启
					<input type="radio" name="memcache_status" value="0" checked />关闭
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td>memcache 服务器</td>
			<td><textarea name="memcache_servers" cols=45 rows=3 ><?php echo $this->_tpl_vars['data']['memcache_servers']; ?>
</textarea> <span align=top>多个用","逗号隔开 例：192.168.255.255</span></td>
		</tr>
		<tr>
			<td>数据库驱动</td>
			<td>
				<?php if ($this->_tpl_vars['data']['DRIVER'] == 'pdo'): ?>
					<input type="radio" name="DRIVER" value="pdo" checked />pdo
					<input type="radio" name="DRIVER" value="mysqli" />mysqli
				<?php else: ?>
					<input type="radio" name="DRIVER" value="pdo" />pdo
					<input type="radio" name="DRIVER" value="mysqli" checked />mysqli
				<?php endif; ?>
				
			</td>
		</tr>
		<tr>
			<td>是否开启调试模式</td>
			<td>
				<?php if ($this->_tpl_vars['data']['DEBUG'] == '1'): ?>
					<input type="radio" name="DEBUG" value="1" checked />开启
					<input type="radio" name="DEBUG" value="0" />关闭
				<?php else: ?>
					<input type="radio" name="DEBUG" value="1" />开启
					<input type="radio" name="DEBUG" value="0" checked />关闭
				<?php endif; ?>
			</td>
		</tr>
		
		<tr>
			<td colspan=2 align=center>
				<input type="submit" name="submit" value="修改" />
				<input type="reset" name="reset" value="重置" />
			</td>
		</tr>
	</table>
	</form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'public/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>