<?php
$var2=20;
function fun(){
	 // echo $var2; #에러
	global $var2;
	echo $var2;
} 
fun();
?>