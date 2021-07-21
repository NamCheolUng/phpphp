<?php
$grades = array('egoing'=>10, 'k8805'=>6, 'sorialgi'=>80);
echo $grades['egoing'];
// echo $grades; #에러 Array to string conversion in C:\Bitnami\wampstack-8.0.8-0\apache2\htdocs\firstapp\1.php on line 3
echo "<br>";
print_r($grades);
// print($grades); #Array to string conversion in C:\Bitnami\wampstack-8.0.8-0\apache2\htdocs\연습\1.php on line 8
echo "<br>";
var_dump($grades);
?>