<?php		/*+------------------------------------------------+	  | 后台首页模型	  +------------------------------------------------+	  | 版权所有 lamp兄弟连源代码小组							  +------------------------------------------------+	  | 作者: 杜承斌 (jt1dcb@163.com)								  | 最后修改时间: 2012-01-12										  +------------------------------------------------+	*/	class AdminUserModel extends Dpdo {		/**			前后台公用登陆方法			@param1 string 用户名			@param2 string 密码			@param3 string 登陆类型(1=以邮箱登陆 2=以用户id登陆 3=以用户名登陆) 默认name			@return boolean 		*/		public function pub_login(){			$login_type=!empty($_POST['login_type'])?$_POST['login_type']:3;			$logins[1]='email';			$logins[2]='id';			$logins[3]='name';			if($user_info=$this->where(array($logins[$login_type]=>$_POST['name'],'pass'=>md5($_POST['pass']),'state'=>1))->find()){				//后台登陆,自动为前台设置已登陆				$_SESSION['home_login']=1;				$_SESSION['user_info']=$user_info;				$user=D("user",'bbs');				$_SESSION['user_info']['level']=$user->get_level($user_info['id']);			//得到等级				$_SESSION['user_info']['grade_num']+=LOGINREWARD;							//给用户加每次登录的奖励，每天只加一次				$_SESSION['user_info']['last_ip']=long2ip($_SESSION['user_info']['last_ip']);	//将设置到数据库的IP转换成如 192.168.***.***				$info=$_SESSION['user_info'];				$info['last_time']=time();				//$info['last_ip']=D('common')->ip_to_long();			//将IP转成数值类型存入数据库				$info['last_ip']=sprintf('%u',ip2long($_SERVER['REMOTE_ADDR']));				$this->update($info);				// 清除验证码				unset($_SESSION['code']);				return true;			}			return false;		}				/*			前后台公用退出方法			@return boolean		*/		public function pub_logout(){			unset($_SESSION['user_info']);			unset($_SESSION['admin_login']);			unset($_SESSION['home_login']);			return true;		}	}