<?php
session_start();
$id = $_POST['id'];
$pwd = $_POST['pwd'];
if ($_POST['id'] === $id && $_POST['pwd'] === $pwd) {
 	$_SESSION['is_login'] = true;
 	$_SESSION['nickname'] = '웅이';
 	header('Location:session.php');
 	exit;
 } 
 echo '로그인 하지 못했습니다.';
?>