<?php
$a = array(1,2,3);
var_dump($a); # array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) }
echo "<br>";
var_export($a); # array ( 0 => 1, 1 => 2, 2 => 3, )
echo "<br>";
print_r($a); # Array ( [0] => 1 [1] => 2 [2] => 3 )
?>