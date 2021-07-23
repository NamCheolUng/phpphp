<?php 
session_save_path('./sesion'); #파일저장경로
session_start(); #반드시 초입에 작성 , 웹페이지에 쿠키가 구워져잇지 않으면 PHPSESSID이름 생성 값 생성 쿠키의 값과 일치하는 세션 파일 만듬
$_SESSION['title'] = '생활코딩'; # 전역변수안에 잇는 내용을 세션 파일안에 저장
?>