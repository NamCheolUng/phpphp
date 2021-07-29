<?php
$var2=20;
function fun(){
	 // echo $var2; #에러
	global $var2;
   echo $var2.'<br>';
   echo $GLOBALS['var2']; # 글로벌스라는 배열에 변수명이 인덱스 번호 역할을 한다.
} 
fun();
// $_POST['variable'];
?>