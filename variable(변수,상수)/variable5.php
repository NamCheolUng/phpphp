<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php  #변수에 담긴 데이터 형을 검사하고 변경하기
$a = 100;
var_dump($a);
echo gettype($a); #integer
settype($a, 'double');
echo '<br />';
echo gettype($a); #double
?>
</body>
</html>