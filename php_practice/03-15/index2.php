<!-- 隔行变色效果 -->
<?php 
header('Content-type:text/html;charset=utf-8');
	$str = '<table border=1>';
	for($i = 0; $i <= 10 ; $i++){
		$a=$i%2;
		if($a==0){
			$str .= '<tr style="background:red;"><td>啦啦啦啦啦</td></tr></br>';
		}else{
			$str .= '<tr style=""><td>吼吼吼吼吼吼</td></tr></br>';
		}
	}
	$str .= '</table>';
	echo $str;
 ?>