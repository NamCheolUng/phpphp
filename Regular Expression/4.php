<?php
//          April1,2003
$string = 'April 15, 2003';
$pattern = '/(\w+) (\d+), (\d+)/i';
$relacement = '${1}1,$3';
echo preg_replace($pattern, $replacement, $string); 
// preg_replace(pattern, replacement, subject)
// preg_match(pattern, subject)
?>