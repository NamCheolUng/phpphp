<?php
session_start();
if(!isset($_SESSION['is_login'])){   #로그인 됫는지 확인 하는 세션 전역변수
    header('Location: ./login.html'); #로그인 안됫으면 저기로 보냄
}
?>
<html>
    <body>
        <?php echo $_SESSION['nickname'];?>님 환영합니다<br />
        <a href="./logout.php">로그아웃</a>    
    </body>
</html>
  