<?php 
header('Content-type:text/html;charset=utf-8');
include('../function.php');
/*创建【递归】函数完成多维数组key的大小写转换，弥补
array_change_key_case函数功能的不足。用到foreach函数*/
 $arr = array(
 			array(
 				array(array(
 				'top1' => '上装',
				'top2' => '下装',
				'top3' => '时装'))
 				),
 			array(
 				'top1' => '短裤',
				'top2' => '牛仔裤',
				'top3' => '七分裤'
 				)

 	);
 	p(current($arr));
 	echo '<hr/>';

 
 	p(up_to_low($arr));




 ?>