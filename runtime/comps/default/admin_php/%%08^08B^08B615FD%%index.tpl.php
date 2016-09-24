<?php /* Smarty version 2.6.18, created on 2016-07-15 14:08:42
         compiled from search/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'select_date', 'search/index.tpl', 32, false),)), $this); ?>
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
/index'>空间管理</a> >> <font class=\"Cf60\">搜索用户</font>");
	}
</script>
<div class="border main">
	<form action="<?php echo $this->_tpl_vars['url']; ?>
/condition" method="post">
    <table width="99%" border="0" align="center"  cellpadding="5 	" cellspacing="1">
        <tbody>
			<tr>
				<td>编号：</td><td><input type="text" name="id"/><span>  </span></td>
            </tr>
			<tr>
				<td>用户名：</td><td><input type="text" name="name"/></td>
            </tr>
			<tr>
				<td>Email：</td><td><input type="text" name="email"/></td>
            </tr>
			<tr>
				<td>注册时间：</td>
				<td>
					<select name="reg_day">
						<option value="请选择">请选择</option>
						<option value="0">今天</option>
						<option value="1">昨天</option>
						<option value="7">一周内</option>
						<option value="30">一月内</option>
					</select>
					<?php echo smarty_function_select_date(array('name' => 'reg_time','id' => 'reg_time','value' => "0000-00-00 00:00:00",'is_time' => true), $this);?>

					<span>可以直接选择某天进行搜索</span>
				</td>
            </tr>
			<tr>
				<td>状态：</td>
				<td>
					<input type="radio" name="state" value="1" id="normal" checked /><label for="normal">正常</label>
					<input type="radio" name="state" value="0" id="forbidden" /><label for="forbidden">禁用</label>
				</td>
			</tr>
			<tr>
				<td>最后登录：</td>
				<td>
					<select name="last_day">
						<option value="请选择">请选择</option>
						<option value="0">今天</option>
						<option value="1">昨天</option>
						<option value="7">一周内</option>
						<option value="30">一月内</option>
					</select>
					<?php echo smarty_function_select_date(array('name' => 'last_time','id' => 'last_time','value' => "0000-00-00 00:00:00",'is_time' => true), $this);?>

					<span>可以直接选择某天进行搜索</span>
				</td>
            </tr>
			<tr>
				<td>用户类型：</td>
				<td>
					<input type="radio" name="stand" value="3" checked />普通用户
					<input type="radio" name="stand" value="2" />版主
					<input type="radio" name="stand" value="1" />管理员
				</td>
			</tr>
			<tr>
				<td>搜索类型</td>
				<td>
					<input type="radio" name="operate" value="album" checked />相册
					<input type="radio" name="operate" value="speak" />说说
					<input type="radio" name="operate" value="message" />留言
					<input type="radio" name="operate" value="sms" />站内信
				</td>
			</tr>
        </tbody>

        <tfoot>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="submit" value="搜索" />
					<input type="reset" name="reset" value="重置" />
				</td>
			</tr>
        </tfoot>
    </table>
	</form>
</div>
<script type="text/javascript">partition();mouse();</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'public/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>