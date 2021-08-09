<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>sign_up</title>
</head>
<body>
<?php
$conn = mysqli_connect("localhost", "root", "111111", "abc_corp");

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

if ($uid==NULL || $pwd==NULL) {
    echo '빈 칸을 모두 채워주세요.';
    echo "<a href=sign_up.html>가입다시하러가기</a>";
    exit();
 }

$uid = mysqli_real_escape_string($conn,$uid);  #필터링
$pwd = mysqli_real_escape_string($conn,$pwd);  #필터링



$pwd = password_hash($pwd, PASSWORD_DEFAULT);
//$pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);



$sql = "INSERT INTO members(uid,pwd) VALUES('$uid','$pwd')";

$result = mysqli_query($conn,$sql);

if ($result === false) {
    echo '가입하지 못했습니다.';
    error.log(mysqli_error($conn));//에러 로그 기록
}else {
    ?>
     <script>                               
        alert("회원가입이 완료되었습니다");
        location.href = "login.html";
    </script>
    <?php
    // echo '가입이 성공적으로 완료되었습니다.';
    }

  mysqli_close($conn);
// echo "<hr/><a href='login.html'>로그인하러가기</a>";
?>

</body>
</html>


