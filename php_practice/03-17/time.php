<?php 
header('Content-type:text/html;charset=utf-8');

	date_default_timezone_set('PRC');//取得当前使用时区，若为set，则为设置
	// 当前使用时区
	echo '<hr/>';
	echo date('Y-m-d H:i:s');//返回年月日等具体时间，date是一个函数
	echo '<hr/>';
	$time=time()-3600;
	echo date('Y-m-d H:i:s',$time);//若传递参数，则date显示的就是所传参数的时间
	echo '<hr/>';
	echo time();//返回秒数，即时间戳(1970-1-1-00:00:00到现在的时间)
	echo '<hr/>';
	echo microtime();//返回时间戳和微秒数
	echo '<hr/>';
	$t = strtotime('+1 day');//获得指定时间的时间戳
	$i = strtotime('2012-12-12');
	echo date('Y-m-d H:i:s',$t);
	echo '<hr/>';
	echo date('Y-m-d H:i:s',$i);




 ?>