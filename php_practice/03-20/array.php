<?php 
header('Content-type:text/html;charset=utf-8');
include('../function.php');

	$arr = array(
			
				'top1' => '上装',
				'top2' => '下装',
				'top3' => '时装'
				);
	$arr_2 = array(
			
				'top1' => '上装',
				'top2' => '下装',
				'top3' => '亲子装'
				);
// //in_array检查数组中是否存在某个键值
// 	var_dump(in_array('上装',$arr));
// //array_key_exists检查数组中是否存在某个键名
// 	var_dump(array_key_exists('top',$arr));
	// var_dump(array_key_exists(A,$arr));A表示常量，所以一定要加''
// //用回调函数过滤数组中的单元
	$newArr = array_filter ($arr,'func');
	function func($v){
		if($v == '上装'){
			return false;
		}
		return true;
	}
	p($newArr);
	// echo '<hr/>';
//将回调函数作用到给定数组的单元上
	
	// $newArray = array_map('b',$arr,$arr_2);
	// function b($arr,$arr_2){//有些函数一定要记得传参！！！传参啊！！！
	// 	if($arr == $arr_2){
	// 		return 'same';
	// 	}
	// 	return 'different';
	// }
	// p($newArray);
// //将一个或多个单元压入数组的末尾
// 	$arrNew_1 = array_push($arr,'短装');
// 	p($arr);
// //将数组最后一个单元弹出
// 	$arrNew_2 = array_pop($arr);
// 	p($arr);
// //将数组开头的单元移出数组
// 	$arrNew_3 = array_shift($arr);
// 	p($arr);
// //在数组开头插入一个或多个单元
// 	$arrNew_4 = array_unshift($arr,'短装');
// 	p($arr);
// //返回数组中所有的键名
// 	$arrNew_5 = array_keys($arr);
// 	p($arrNew_5);
// //返回数组中所有的键值
// 	$arrNew_6 = array_values($arr);
// 	p($arrNew_6);
//合并一个或多个数组
	// $arrNew_7 = array_merge($arr,$arr_2);
	// p($arrNew_7);
//返回字符串键名全为小写或大写的数组(UPPER为大写，LOWER为小写)
	// $arrNew_8 = array_change_key_case($arr,CASE_UPPER);
	// p($arrNew_8);
//输出或返回一个变量的字符串表示
	var_export($arr);

 ?>