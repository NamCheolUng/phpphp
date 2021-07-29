<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<h1>정적변수</h1>                                 //함수 안에서만 쓰이는 지역 범위의 변수이면서도 값은 전역 범위 변수처럼 유지하는 변수

<?php
function increment(){   
	static $count=0;
	echo $count.'<br>';
	$count++;
} 
increment();
increment();
increment();
increment();
increment();
increment();
?>
</body>
</html>
