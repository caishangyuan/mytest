<?php
	/**
	 * 单一入口文件
	 */
	define("CSTART", 1);			//关闭缓存
	define("BROPHP", "./brophp/");  //框架源文件的位置
	define("APP", "./admin");       //设置当前应用的目录
	require_once(BROPHP.'/brophp.php'); //加载框架的入口文件
	//echo "hello";
