<?php
$file = 'readme.txt';
$newfile = 'example.txt.bak';  #파일복제
if(!copy($file, $newfile)) {
	echo "failed to copy $file...\n";
}
// if (copy(source, dest)) {
// 	// code...
// }
?>