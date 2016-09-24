<?php /* Smarty version 2.6.18, created on 2016-07-15 17:49:07
         compiled from news/add.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'public/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'public/ck.tpl', 'smarty_include_vars' => array()));
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
/index'>新闻管理</a> >> <font class=\"Cf60\">添加新闻</font>");
	}
	function check_null(){
		var status = true;
		var title=$("input[name='title']");
		var content=$("textarea[name='content']");
		var info="";
		if($(title).val()=="" || $(title).val()==title[0].defaultValue){
			info="新闻标题不能为空！";
			status = false;
		}else if($(content).val().length<10){
			info="新闻内容不得少于10个字符！";
			status = false;
		}
		if(!status){
			$(".info")
					.removeClass('notice')
					.removeClass('success')
					.addClass('error')
					.html(info);
		}
		return status;
	}
</script>
<div class="border main">
	<form action="<?php echo $this->_tpl_vars['url']; ?>
/addition" method="post" onsubmit="return check_null()">
    <table width="99%" border="0" align="center"  cellpadding="3" cellspacing="1">
        <tbody>
            
            <tr>
				<td width=20%>标题</td>
				<td><input type='text' name='title' maxlength =100 size=40 class="default_click" value="请在此输入标题"/></td>
            </tr>
			<tr>
				<td colspan=2>
					<textarea name="content"></textarea>
				</td>
            </tr>
			<tr>
				<td colspan=2 align="center">
					<input type="submit" name="submit" class="button_a border" value="添加" />
					<input type="reset" name="reset" class="button_a border" value="清空" />
				</td>
			</tr>
        </tbody>
    </table>
	</form>
</div>
<script>default_click();</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'public/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>