<!-- 常量、数据类型、检测数据是否存在等 -->
<?php 
header('Content-type:text/html;charset=utf-8');
// 常量的定义,常量一般用大写表示
	// define('AAA','123');
	// echo AAA;
// 系统自带常量
	// echo PHP_VERSION;//输出服务器版本号
	// echo PHP_OS;//显示服务器的操作系统的版本
	// echo TRUE;//真、假常量，输出值分别为1、0
// 变量与常量的检测
	// 变量的检测
		// $a=123;
		// if(isset($a)){
		// 	echo '$a存在！';
		// }else{
		// 	echo '$a不存在！';
		// }
	// 常量的检测
		// define('AAA','null');
		// $bool=defined('AAA');
		// var_dump($bool);
		// if(defined('AAA')){
		// 	echo 'AAA这个常量存在';
		// }
		// else{
		// 	echo 'AAA这个常量不存在';
		// }
// 删除变量
	// $a=123;
	// var_dump($a);
	// unset($a);
	// var_dump($a);
// 获取变量的类型
	/*$a=12.12;
	$b=getTYPE($a);
	var_dump($a);*/
// 检测变量是否为整形、浮点型等
	// $a=123.123;
	// if(is_int($a)){
	// 	echo 'a为整型变量';
	// }
// 数据的强制转换
	// $a='agoadhg';
	// settype($a,'float');方式一
	// echo $a;
	// $b=intval($a);方式二
	// echo $b;


		
	




 ?>	
