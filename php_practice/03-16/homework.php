<?php 
header('Content-type:text/html;charset=utf-8');
	// 1、在php文件中通过include/require包含index.html文件，然后在php文件中编写文字在html文件中显示
	$a = '啦啦啦啦啦，今天天气真不错！';
	include('./index.html');
	// 2、创建计算脚本执行时间的函数
	echo '<hr/>';
	start_end();
	for($i=0;$i<100000;$i++){
		$a=1;
	}
	$time=start_end('end');
	echo $time;


	function start_end($flag='start'){
		// 声明静态变量
		static $starTime;
		if($flag=='start'){
			$starTime = microtime(true);
		
		}else{
			$endtime = microtime(true);
			return $endtime-$starTime;//这一句必须放在else里面，放在外面则会提示
			// endtime为未定义变量
		}

	}
	

	


 ?>