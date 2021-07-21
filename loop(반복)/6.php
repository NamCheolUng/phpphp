<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
	$i=0;
for ($i=0; $i < 10; $i++) { 
	if($i===5){
		continue; #반복문의 continue 밑에 소스 중지 시키고 값을 증가시킴.
	}
	echo "coding everybody{$i}<br>";
}
?>

</body>
</html>