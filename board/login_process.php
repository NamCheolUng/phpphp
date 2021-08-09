<?php
session_start();

$conn = mysqli_connect("localhost", "root", "111111", "abc_corp");


$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

if ($uid==NULL || $pwd==NULL) {
    echo '빈 칸을 모두 채워주세요.';
    echo "<a href=login.html>로그인하러가기</a>";
    exit();
 }

$uid = mysqli_real_escape_string($conn,$uid);  #필터링
$pwd = mysqli_real_escape_string($conn,$pwd);  #필터링


$sql = "SELECT * FROM members WHERE uid='$uid'";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($result);

$hash = $row['pwd'];


if (password_verify($pwd, $hash)) {       #암호화된 비밀번호를 복호화 시켰을 때 일치하냐 를 물어보는 내용입니다.
	$_SESSION['userId'] = $row['uid'];
	$_SESSION['isLogin'] = true;
	header("Location:index.php");
	 exit;  #안적어도됨
 } else{
	echo '로그인 정보가 올바르지 않습니다.';
}

mysqli_close($conn);





// $data = mysqli_fetch_array($result);
// if($data){
// $_SESSION['isLogin'] = true;
// header("Location:index.php");
// exit;
// }else{
// echo '로그인 정보가 올바르지 않습니다.';
// }

 

?>