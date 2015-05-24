<?php 
header('Content-type:text/html;charset=utf-8');
include('./function.php');
	$arr=array(
			
				'top1' => '上装',
				'top2' => '下装',
				'top3' => '时装',
				'top4' => 'nv装'

				

		);
	// p($arr);
	// 取得第一个键名
	// echo key($arr);
	// echo '<hr/>';
	// // //返回数组中当前第一个键值
	// var_dump(current($arr));
	// echo '<hr/>';
	// // //将数组中的内部指针向前移动一位(针对键值)
	// var_dump(next($arr));
	// echo '<hr/>';
	// //将数组的内部指针倒回一位
	// var_dump(prev($arr));
	// echo '<hr/>';

	/*作业：使用key,next,prev等函数对数组进行while循环遍历*/
// 方法一：while
	// while(key($arr)){

	// 	echo key($arr).'=>'.current($arr);
	// 	echo '<hr/>';
	// 	next($arr);

	// };

// 方法二：do while 
	// do(
	// echo key($arr).'=>'.current($arr).'<hr/>';

	// 	)while(key($arr));有语法错误
// 方法三：foreach
	// foreach($arr as $k => $v){
	// 	echo key($arr).'=>'.current($arr).'<hr/>';
	// 	next($arr);
	// }不能输出$arr(0)





 ?>