<?php
$dir = './'; #현재 디렉토리 기호
$files1 = scandir($dir); #디렉토리 검색
$files2 = scandir($dir, 1); #2번째 인자는 정렬순서 바꿈

print_r($files1); #변수를 읽을 수 있게 정보를 출력해줍니다. 배열에 내용을 확인 할 수 있게 해줍니다. 
print_r($files2); 
?>