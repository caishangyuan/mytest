<?php /* Smarty version 2.6.18, created on 2016-07-13 12:58:09
         compiled from set/bbs.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'public/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script>
	if($(".info").html()==""){
		$(".info")
		.html("<a href='<?php echo $this->_tpl_vars['app']; ?>
/index/main'>首页</a> >> 网站配置 >> <font class=\"Cf60\">论坛设置</font>");
	}
</script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['res']; ?>
/js/common.js" ></script>
	<div class="border main">
		<form action="<?php echo $this->_tpl_vars['url']; ?>
/mod" method="post" enctype="multipart/form-data"/>
		<table width="99%" border="0" align="center"  cellpadding="3" cellspacing="1">
			<input type="hidden" name="type" value=2 />
			<thead>
				<tr>
					<th colspan="4">BBS设置</th>
				</tr>
			</thead>
			
			<tr>
				<td>主题</td>
				<td><input type="text" name="B_SUBJECTPZ" value="<?php echo $this->_tpl_vars['data']['B_SUBJECTPZ']; ?>
"/> 条/页</td>
				<td>帖子</td>
				<td><input type="text" name="B_COMMENTPZ" value="<?php echo $this->_tpl_vars['data']['B_COMMENTPZ']; ?>
" /> 条/页</td>
			</tr>
			<tr>
				<td>回复</td>
				<td><input type="text" name="B_HOT_NUM" value="<?php echo $this->_tpl_vars['data']['B_HOT_NUM']; ?>
"/> 算火热</td>
				<td>发表主题间隔</td>
				<td><input type="text" name="PUBLISH_INTERVAL_SUBJECT" value="<?php echo $this->_tpl_vars['data']['PUBLISH_INTERVAL_SUBJECT']; ?>
" /> 秒</td>
			</tr>
			<tr>
				<td>发表帖子间隔</td>
				<td><input type="text" name="PUBLISH_INTERVAL_COMMENT" value="<?php echo $this->_tpl_vars['data']['PUBLISH_INTERVAL_COMMENT']; ?>
"/> 秒</td>
				<td>新闻</td>
				<td><input type="text" name="B_NEWS_LIST_NUM" value="<?php echo $this->_tpl_vars['data']['B_NEWS_LIST_NUM']; ?>
" /> 条/页</td>
			</tr>
			<tr>
				<td>公告</td>
				<td><input type="text" name="B_NOTICE_LIST_NUM" value="<?php echo $this->_tpl_vars['data']['B_NOTICE_LIST_NUM']; ?>
"/> 条/页</td>
				<td colspan=2>&nbsp;</td>
			</tr>
			<tr>
				<th>积分设置</th>
				<th colspan=3>每个/条奖励的积分数</th>
			</tr>
			<tr>
				<td>发表主题</td>
				<td><input type="text" name="B_SUBJECT_REWARD" value="<?php echo $this->_tpl_vars['data']['B_SUBJECT_REWARD']; ?>
" />
				<td>发表帖子</td>
				<td><input type="text" name="B_COMMENT" value="<?php echo $this->_tpl_vars['data']['B_COMMENT']; ?>
" />
			</tr>
			<tr>
				<td>置顶主题</td>
				<td><input type="text" name="B_SUBJECT_TOP" value="<?php echo $this->_tpl_vars['data']['B_SUBJECT_TOP']; ?>
" />
				<td>精华主题</td>
				<td><input type="text" name="B_SUBJECT_ESS" value="<?php echo $this->_tpl_vars['data']['B_SUBJECT_ESS']; ?>
" />
			</tr>
			<tr>
				<td>推荐主题</td>
				<td><input type="text" name="B_SUBJECT_RECOM" value="<?php echo $this->_tpl_vars['data']['B_SUBJECT_RECOM']; ?>
" /></td>
				<td>会员登录</td>
				<td><input type="text" name="LOGINREWARD" value="<?php echo $this->_tpl_vars['data']['LOGINREWARD']; ?>
" /></td>
			</tr>			
			<tr>
				<td colspan=4 align=center>
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