<?php 
function c($var=null,$v=null){
	static $config = array();
	//当什么都不传的时候,返回最新配置项
	if(is_null($var)){
		return $config;
	}
	//传递框架总配置，存在内存里，且自己项目的配置要比系统配置优先级高
	if(is_array($var)){
		$config = array_merge($config,array_change_key_case($var,CASE_UPPER));
		return $config;
	}

	//如果传递的是配置项里的键名，则返回其键值
	if(is_string($var)){
		//如果还传了键值，则表示修改配置项
		if(!is_null($v)){
			$config[$var] = $v;
			return;
		}
		return isset($config[$var])?$config[$var]:NULL;
	}

}

$sysConfig = include('./sysConfig.php');
$selfConfig = include('./selfConfig.php');
c($sysConfig);
c($selfConfig);
// print_r(c());
C('CODE_LEN',20);
echo c('CODE_LEN');


 ?>