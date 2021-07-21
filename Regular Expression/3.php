<?php
$subject = "coding everybody http://opentutorials.org egoing@egoing.com 010-0000-0000";
preg_match("~(http://\w+\.\w+)\s(\w+@\w+\.\w+)~", $subject, $a); #\w 문자를의미
print_r($a);
echo "<br>";
echo "homepage : $a[1]";
echo "<br>";
echo "email : $a[2]";
?>



