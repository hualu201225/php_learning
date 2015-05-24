<?php 
header('Content-type:text/html;charset=utf-8');
// 数组的几种写法
	// 1、索引数组，键名key是数字
	// $arr=array('1','2','3','4');
	// 2、关联数组，键名key是字符串
			/*$arr=array(
				'0' => '1',
				'1' => '2',
				'2' => '3',
				'3' => '4',
				'4 => '5',
				'lu' => '露露是个好孩子'//混合数组


				);
			echo count($arr);//计算数组的长度*/
	// 3、直接写
			// $arr[0] = '1';
			// $arr[1] = '2';
			// $arr[2] = '3';

	// 多维数组
			$arr=array(
				array(
					'1',array(
						'0' => 't')
				
					),
				array(
					'2',array(
						'0' => 'r'
						)
					)
				);
			

		// unset($arr[0]);//删除arr中一个值
		// var_dump($arr);
		//如果要在arr中增加一个值，则直接可用$arr[]=....这种形式
	// 数组的遍历
			foreach($arr[1] as $key => $value){
				echo $key . '=>' . $value;
			}

 ?>