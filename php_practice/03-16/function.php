<?php 
header ('Content-type:text/html;charset=utf-8');
// 函数
	// 普通函数
		// function a(){
		// 	echo '早起早睡身体好~';
		// }
		// a();
	// 传参函数(传的参数可以直接设默认值，一般放在参数的最后面写)
		// $e=0;//全局变量,不能改变值的大小，但是可以通过传参的方式改变
		// function a($b,$e,$c=1){
		// 	$d=$c+$b;//局部变量
		// 	//函数要使用全局变量，必须要利用global引入。
		// 	// global $e;
		// 	echo $e=2;
		// 	echo $d;
		// }
		// a(1,3);
		// // 可以使用全局数组$GLOBALS调用全局变量。
		// echo $GLOBALS['e'];

	// 静态变量，一个静态变量在所有对该函数的调用之间共享，并且仅在脚本的执行期间函数第一次被调用时被初始化。
		// function b(){
		// 	static $a=0;//声明静态变量
		// 	$a++;
		// 	echo $a;
		// }
		// b();
		// b();
		// b();
		// b();
		// b();
		// b();
		// b();

	// 变量函数
	// 1、	$a = 'hello';
	// 	function hello(){
	// 		echo 'hello,world!';
	// 	}
	// 	hello();
	// 2、
		// $type = 'png';
		// function type_jpg(){
		// 	echo '我是jpg形式的图片';
		// }
		// function type_png(){
		// 	echo '我是png形式的图片';
		// }
		// function type_gif(){
		// 	echo '我是gif形式的图片';
		// }
		// $func = 'type_' . $type;
		// $func();


	// 递归函数，这里函数的作用是输出一个数字的阶乘
	// function a($a){
	// 	if($a>1){
	// 		 $b=$a*a($a-1);
	// 	}else{
	// 		$b=$a;
	// 	}
	// 	return $b;
	// }
	// echo a(5);




 ?>