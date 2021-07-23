<?php
ini_set("display_errors", "1");
session_save_path('./sesion'); #파일저장경로
session_start(); #반드시 초입에 작성 , 웹페이지에 쿠키가 구워져잇지 않으면 PHPSESSID이름 생성 값 생성 쿠키의 값과 일치하는 세션 파일 만듬
echo $_SESSION['title'];
echo file_get_contents('./session/sess_',session_id());

?>