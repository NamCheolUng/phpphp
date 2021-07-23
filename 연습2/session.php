<?php
session_start();
if(!isset($_SESSION['is_login'])){
	header('Location:login.html');
} 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
        <?php echo $_SESSION['nickname'];?>님 환영합니다.<br>
        <a href="logout.php">로그아웃</a>
</body>
</html>