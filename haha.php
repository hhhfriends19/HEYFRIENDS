<!DOCTYPE html>
<html>
<body>

<?php
	header('Content-Type:text/html;charset=utf-8'); #这一行只有在这里才能使中文正确显示。
	echo "创建了一个对大小写敏感的常量，值为“welcome to my blog!：”";
	define("GREETING","welcome to my blog!");
	echo GREETING;
	
	echo "<h2>1.使用超级全局变量$GLOBALS:</h2>";
	$x=75;
	$y=25;
	function addition(){
		$GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
	}
	addition();
	echo $z;
	

	?>

</body>
</html>