<?php
	/*+-----------------------------------------------------------------------------------------+
	  | 日志模型
	  +-----------------------------------------------------------------------------------------+
	  | 版权所有 lamp兄弟连源代码小组						
	  +-----------------------------------------------------------------------------------------+
	  | 作者: 范培 (52web@sina.cn)							
	  | 最后修改时间: 2012-01-14 15:49   										
	  +-----------------------------------------------------------------------------------------+
	*/
	class Log extends Pub{
		/*
			返回最新前10条的日志
			@return array(二维数组)
		*/
		public function top10(){
			return parent::top10('log');
		}
	}