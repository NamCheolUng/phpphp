<?php
$filename = 'writeme.txt';
if (is_writeable($filename)) {
 	 echo 'The file is writeable';
 } else{
 	 echo 'The file is not writeable';

 }
?>