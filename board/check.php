<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
     $conn = mysqli_connect("localhost", "root", "111111", "abc_corp");
	
	$uid = $_GET['uid'];
	 $sql = "SELECT * FROM members WHERE uid = '$uid'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
	
	if($row==0){ #값이 참인지 거짓인지 판별하는것을 의미합니다. #이미 잇는 아이디 잇을시 중복된아이디입니다. 없을시 사용가능한 아이디입니다.
		echo $uid.'사용가능한 아이디입니다.';
    }else{
		echo $uid.'중복된 아이디입니다.';

    }
?>
<button type="button" onclick="window.close()">닫기</button>
</body>
</html>


