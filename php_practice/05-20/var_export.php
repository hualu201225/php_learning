<?php 

$arr = array(
	'帽子','就是','一个大笨蛋'
	);
$new_arr = var_export($arr,true);//有第二个参数true，则var_export会返回整个数组的值，不打印
file_put_contents('./database.php',"<?php return ".$new_arr."?>");

 ?>