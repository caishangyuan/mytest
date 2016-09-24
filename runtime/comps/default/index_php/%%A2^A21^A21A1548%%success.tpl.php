<?php /* Smarty version 2.6.18, created on 2016-07-07 14:07:58
         compiled from public/success.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'public/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<style>
		.column{
			width:100%;
			margin:0 auto;
			text-align:center;
			border:1px solid #ccc;
			margin-bottom:10px;
			padding-bottom:5px;
		}
		.column_title{
			font-size:16px;
			font-weight:700;
			height:22px;
			background:#EDF3F6;
			border-bottom:1px solid #ccc;
			padding:5px;
		}
	</style>
	<div id="main">
	<div class="column" style="width:950px">
		<div class="column_title">
			<?php if ($this->_tpl_vars['mark']): ?>
				<span style="color:green"><?php echo $this->_tpl_vars['mess']; ?>
</span>
			<?php else: ?>
				<span style="color:red"><?php echo $this->_tpl_vars['mess']; ?>
</span>
			<?php endif; ?>
		</div>
			<div class="column_content">
				<?php if ($this->_tpl_vars['mark']): ?>
					<p style="font: italic bold 2cm cursive,serif; color:green">
					<img src="<?php echo $this->_tpl_vars['public']; ?>
/images/success.png" width="300px"> 
					</p>
				<?php else: ?>
					<p style="font: italic bold 2cm cursive,serif; color:red">
					<img src="<?php echo $this->_tpl_vars['public']; ?>
/images/error.png">
					</p>

				<?php endif; ?>		
					<p>
						在( <span id="sec" style="color:blue;font-weight:bold"><?php echo $this->_tpl_vars['timeout']; ?>
</span> )秒后自动跳转，或直接点击 <a href="javascript:<?php echo $this->_tpl_vars['location']; ?>
">这里</a> 跳转<br>
					</p>
			</div>
	</div>
	</div>
		 <script type="text/javascript">
		 		var seco=document.getElementById("sec");
				var time=<?php echo $this->_tpl_vars['timeout']; ?>
;
				var tt=setInterval(function(){
						time--;
						seco.innerHTML=time;	
						if(time<=0){
							stop();
							<?php echo $this->_tpl_vars['location']; ?>

							return;
						}
					}, 1000);
				function stop(){
					clearInterval(tt);
				}
		</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'public/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>