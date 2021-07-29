<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<h1>정적변수</h1>
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