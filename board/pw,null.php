<?php
$id = $_POST['id'];
$pw = $_POST['pw']; 
$pwc = $_POST['pwc'];

if ($pw!=$pwc) {  #비밀번호와 비밀번호 확인 문자열이 맞지 않을 경우
 	echo '비밀번호와 비밀번호 확인이 서로 다릅니다.';
 	echo "<a href=sign_up.html>가입다시하러가기</a>";
 	echo "<a href=\"sign_up.html\">".'가입다시하러가기'."</a>";
 	echo "<a href='sign_up.html'>"."가입다시하러가기"."</a>";
 	exit();
 }


 if ($id==NULL || $pw==NULL || $pwc==NULL) {
 	echo '빈 칸을 모두 채워주세요.';
 	echo "<a href=sign_up.html>가입다시하러가기</a>";
 	exit();
 }
?>