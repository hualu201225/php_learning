<?php 
header('Content-type:text/html;charset=utf-8');
/*作业：创建一个c函数
要求：1、传递框架总配置，存在内存里
	  2、传递自己项目配置，优先级要比总配置高
	  3、不传参数的时候，返回更改过的所有配置项
	  4、传递配置项里面有的键名，返回对应值
	  5、动态配置，可以设置其中键名对应的键值*/

$sysConfig  = include('./sysConfig.php');
$selfConfig = include('./selfConfig.php');

function c($var=null,$v=null){
	static $config = array();
	//当传入的为一个数组即$sysConfig和$selfConfig时，就把它们存在静态变量中
	if(is_array($var)){
		$config = array_merge($config,array_change_key_case($var,CASE_UPPER));
	}
	//当传入的为空时，就返回更改后的所有配置项
	if(is_null($var)){
		return $config;
	}
	//如果传入键名，则返回相应的键值
	if(is_string($var)){
		//如果传入键名和键值，则将相应的键名和键值对应起来，并输出
		$va = strtoupper($var);
		if(!is_null($v)){
			$config[$va] = $v;
			return;
		}
		//如果只传入键名，则返回相应的键值，同时判断传入的键名存不存在
		return isset($config[$va])?$config[$va]:'NULL';
	}
}
c($sysConfig);
c($selfConfig);
// print_r(c());
c('CODE_LEN',20);
echo c('code_len');

 ?>