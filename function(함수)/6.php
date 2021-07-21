<?php
$test =1; #전역변수
function get_argument($arg1=100){
	return $arg1;      #지역변수
}

echo get_argument(1);  #1
echo ',';
echo get_argument();  #100     
?>