<?php 
/*文件上传类型判断:
思路：
1、首先获得上传的文件的类型
2、建立一个数组存放允许上传的文件的类型
3、将上传的文件的类型与允许上传的类型相比较*/
header('Content-type:text/html;charset=utf-8');
	if(isset($_POST)){
		$type = $_POST['pic'];
		$arr = array('doc','jpg','png');
		$judge = in_array($type,$arr);
		var_dump($judge);
		if($judge){
			echo '文件上传成功';
		}else{
			echo '此文件不支持上传';
		}
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
 </head>
 <body>
 <form method="post"> 
 	<input type="radio" name="pic" value="jpg">jpg
 	<input type="radio" name="pic" value="png">png
 	<input type="radio" name="pic" value="gif">gif</br>
 	<input type="submit" value="提交"></form>

 </body>
 </html>