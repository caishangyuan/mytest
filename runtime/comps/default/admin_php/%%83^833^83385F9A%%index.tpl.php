<?php /* Smarty version 2.6.18, created on 2016-07-12 13:26:46
         compiled from index/index.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['res']; ?>
/css/common.css" type="text/css" />
<title>源代码后台管理</title>
</head>
<frameset rows="60,*" cols="*" frameborder="no" border="0" framespacing="0" scrolling="No">
  <frame src="<?php echo $this->_tpl_vars['url']; ?>
/top" name="topFrame" frameborder="no" scrolling="No" noresize="noresize" id="topFrame" title="topFrame" />
  <frameset name="myFrame" cols="210,*" frameborder="no" border="0" framespacing="0">
    <frame src="<?php echo $this->_tpl_vars['url']; ?>
/menu" name="menu" frameborder="no" scrolling="No" noresize="noresize" id="leftFrame" title="leftFrame" />
    <frameset rows="26,*" cols="*" frameborder="no" border="0" framespacing="0">
         <frame src="<?php echo $this->_tpl_vars['url']; ?>
/nav" name="nav" frameborder="no" scrolling="No"  noresize="noresize" id="mainFrame" title="mainFrame" />
         <frame src="<?php echo $this->_tpl_vars['url']; ?>
/main" name="main" frameborder="no" id="manFrame" title="manFrame"/>
     </frameset>
  </frameset>
</frameset>
<noframes><body>
</body>
</noframes>
</html>