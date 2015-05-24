<!-- 计算器 -->
<?php 
header('Content-type:text/html;charset=utf-8');

	$number_1=isset($_POST['number_1'])?(int)$_POST['number_1']:0;
	$number_2=isset($_POST['number_2'])?(int)$_POST['number_2']:0;
	$count=isset($_POST['count'])?$_POST['count']:'+';
	// $resulte = $number_1 + $number_2;
	switch($count){
		case '+':$resulte = $number_1 + $number_2;break;
		case '-':$resulte = $number_1 - $number_2;break;
		case '*':$resulte = $number_1 * $number_2;break;
		case '/':$resulte = $number_1 / $number_2;break;
		default :null;break;
	}

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title></title>
	<style type="text/css">
	#box{
		width:300px;
		height:150px;
		border:2px black solid;
		margin:100px 100px;
	}


	</style>
</head>
<body>
	
		<form method="post" action="calculator.php" id="box"><!-- action中没有写php文件即表示传到本文件 -->
		结果：<span ><?php echo $resulte; ?></span></br>
		第一个数：<input type="text" name="number_1"></br>
		第二个数：<input type="text" name="number_2"></br>
		运算方式：<tr><td><input type="radio" name="count" checked="checked" value="+">&nbsp+</td>
				  <td><input type="radio" name="count" value="-">&nbsp-</td>
				  <td><input type="radio" name="count" value="*">&nbsp*</td>
				  <td><input type="radio" name="count" value="/">&nbsp/</td></tr></br>
		结果提交：<input type="submit" value="提交" name="submit">
		</form>

	
</body>
</html>