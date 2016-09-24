<?php /* Smarty version 2.6.18, created on 2016-07-15 17:49:07
         compiled from public/ck.tpl */ ?>
<script charset="utf-8" src="<?php echo $this->_tpl_vars['public']; ?>
/ke/kindeditor.js"></script>
<script>
	KindEditor.ready(function(K) {
		var editor1 = K.create('textarea[name="content"]', {
			width:'100%',
			height:'250px',
			afterCreate : function() {
				var self = this;
				K.ctrl(document, 3, function() {
					self.sync();
					K('form[name=notice]')[0].submit();
				});
				K.ctrl(self.edit.doc, 2, function() {
					self.sync();
					K('form[name=notice]')[0].submit();
				});
			},
			items : [
					'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
					'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
					'insertunorderedlist', '|', 'emoticons', 'link']
		});
		prettyPrint();
	});
</script>