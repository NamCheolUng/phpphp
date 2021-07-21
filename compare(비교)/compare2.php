<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
echo "1!=2 : ";
var_dump(1!=2); #어떠한 형식의 데이터인지 알수잇다.   #bool(true)
echo '<br />';
echo "1!=1 : ";
var_dump(1!=1);     #false
echo '<br />';
echo '"one"!="two" : ';
var_dump("one"!="two");   #true
echo '<br />';
echo '"one"!="one" : ';
var_dump("one"!="one");   #false
echo '<br />';
?>
</body>
</html>