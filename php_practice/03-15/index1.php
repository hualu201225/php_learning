<!-- 作业：
	检测$_GET['page']中的page是否为数字，如果不是显示“页码不正确”，否则显示你将看到XX页 -->

<?php 
header('Content-type:text/html;charset=utf-8');
	$a=$_GET['page'];
	// $b=intval($a);
	// var_dump($b);
	// var_dump($a);
	// echo $a;
	if(is_int($a)){
		echo '你将看到第',$a,'页';
	}else{
		echo '页码不正确';
	}
// 未想出解决办法

 ?>