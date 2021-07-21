<?php
//i는 패턴 매팅을 할 때 대소문자를 구분하지 않도록 한다.
if (preg_match("/php/i", "PHP is the web scripting language of choice")) { #첫번째 인수는 검색 문자열이며, 두번째 인수는 검색 대상이 됩니다.
 	echo "A match was found";
 } else{
 	 	echo "A match was not found";

 }  #재하면 true를 반환, 존재하지 않으면 false를 반환합니다.

?>
