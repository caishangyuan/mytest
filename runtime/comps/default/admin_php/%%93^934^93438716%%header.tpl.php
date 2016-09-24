<?php /* Smarty version 2.6.18, created on 2016-07-12 15:48:05
         compiled from public/header.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['res']; ?>
/css/common.css" type="text/css" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['public']; ?>
/js/jquery.js"></script>
<title>---无标题---</title>
</head>
<body>
<div id="info_board" class="border">
	<div class="<?php if ($_GET['status'] == 1): ?>
					success
				<?php elseif ($_GET['status'] == 2): ?>
					error
				<?php else: ?>
					notice
				<?php endif; ?> info" ><?php echo $_GET['mess']; ?>
</div>
</div>
<div class="clear"></div>