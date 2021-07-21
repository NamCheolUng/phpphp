<?php
$a = 1;
echo $a;      #1
echo '<br>';
print($a);    #1
echo '<br>';
print $a;    #1
echo '<br>';
print_r($a);   #1
// print_r $a; #에러 syntax error, unexpected variable "$a" in C:\Bitnami\wampstack-8.0.8-0\apache2\htdocs\연습\2.php on line 11
echo '<br>';
printf($a);   #1  형식화한 문자열을 출력합니다.
// printf $a; #에러 syntax error, unexpected variable "$a" in C:\Bitnami\wampstack-8.0.8-0\apache2\htdocs\연습\2.php on line 11
echo '<br>';
var_dump($a);  #int(1)
echo '<br>';
echo var_dump($a);  #int(1)
// var_dump $a; #에러 syntax error, unexpected variable "$a" in C:\Bitnami\wampstack-8.0.8-0\apache2\htdocs\연습\2.php on line 11
?>



