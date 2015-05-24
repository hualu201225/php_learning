<!-- 变量与赋值等 -->
<?php 
header('Content-type:text/html;charset=utf-8');
// echo '师傅是个大逗比！！';
// 变量
// $a='你是猪么@';
// $b="你才是猪呢";
// // $_a='你是猪么@';变量名为字母或下划线，不能为数字
// echo $a,'</br>';
// print($a);
// echo '</br>';

//  $b = array ('m' => 'monkey', 'foo' => 'bar', 'x' => array ('x', 'y', 'z'));
//  $results = print_r ($b,true); //$results 包含了 print_r 的输出结果



 $a = array (1, 2, array ("a", "b", "c"));
 var_export ($a);
 echo '</br>';
var_export($a, TRUE);
 /* 结果将输出：
array (
   0 => 1,
   1 => 2,
   2 => 
   array (
     0 => 'a',
     1 => 'b',
     2 => 'c',
   ),
 )
 */

 // $b = 3.1;
 // $v = var_export($b, TRUE);
 // echo $v;

 /* 结果将输出：
3.1
 */


// 打印变量的相关信息
// var_dump($a);//utf-8编码的汉字占3个字节

// // 传值赋值
// $e="a23";
// // 传址赋值
// $d=&$e;
// $d='lalalla';
// // echo $d;
// // 变量赋值
// $c="a23";
// $$c="456";
// echo $a23,$d,$e;
 ?>