<?php
$total_pizza = 10;
$my_pizza = 3;

$format = '피자 조각 %2$s개 중 나의 피자 조각은 %1$s개입니다. 나는 %1$s개를 가진다고!';
printf($format, $my_pizza, $total_pizza);  #형식화한 문자열을 출력합니다.

?>