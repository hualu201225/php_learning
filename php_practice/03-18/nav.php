<?php 
 /*导航栏的写法：
1、设定一个用于遍历的三维数组
2、引入html文件
3、完成html文件和php文件的混排 */
include('../function.php');
header('Content-type:text/html;charset=utf-8');
	$arr = array(
		array(
			'top' => '上衣',
				array(
					'衬衫','短袖','T恤')
			),
		array(
			'top' => '下装',
				array(
					'七分裤','牛仔裤','短裤')
			),
		array(
			'top' => '家庭用品',
				array(
					'牙刷','鞋套','毛巾','脸盆')
			)

		);
	include('./nav.html');





 ?>