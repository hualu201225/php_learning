<!-- 表格数据的上传 -->
<?php 
header('Content-type:text/html;charset=utf-8');
	// $_GET $_POST $_REQUEST都是外部变量
	print_r($_GET['c']);//
	var_dump($_POST);
	var_dump($_REQUEST);//request取出的地址栏的值可能会被post的值(当两者有相同的键名时）覆盖，所以一般不用

	
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<!-- method的值为get时，密码等隐秘信息都会显示在地址栏中；值为post时则不会 -->
 	<form action="index2.php?c=123" method="post">
 		姓名：<input type="text" name="name" ></br>
 		性别：<input type="radio" name="sex" value="男">男<input type="radio" name="sex" value="女">女</br>
 		密码：<input type="password" name="password" ></br>
 		<input type="submit" name="" >






 	</form>
 </body>
 </html>