<?php 
header('Content-type:text/html;charset=utf-8');
//
/**
 * [p 打印数组函数]
 * @param  [type] $arr
 * @return [type]
 */
	function p($arr){
		echo '<pre>';
		print_r($arr);
		echo '</pre>';
	}


//
	/**
	 * [up_to_low 递归大小写转换函数]
	 * @param  [type] $arr
	 * @param  [type] $case
	 * @return [type] 
	 */
	function up_to_low($arr,$case=CASE_UPPER){
 		$arr =array_change_key_case($arr,$case);
 		foreach($arr as $k => $v){
 			if(is_array($v)){
 				$arr[$k] = up_to_low($v,$case);
 			}

 		}		
 		return $arr;
 	}

 ?>