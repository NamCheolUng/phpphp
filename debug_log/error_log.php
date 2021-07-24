<?php
$a = array(1,2,3);
// error_log($a); #에러발생 첫번째 파라미터에 스트링으로 시작해야된다고 에러뜸.
error_log(var_export($a,1)); #이리해줘야 에러안남  error_log와 var_export()는 같이 쌍으로 쓴다. 사람이 읽기 쉬운모습으로 풀어내줌
?>