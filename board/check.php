<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
// error_reporting(0);
  // header("Content-Type: application/json");
      $conn = mysqli_connect("localhost", "root", "111111", "abc_corp");
	
	   $uid = $_POST['uid'];

	 $sql = "SELECT * FROM members WHERE uid = '$uid'";
	        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
	
	if($row==0){             #값이 참인지 거짓인지 판별하는것을 의미합니다. #이미 잇는 아이디가 존재할 시 중복된아이디입니다. 없을 시 사용가능한 아이디입니다.
	 echo $uid.'는 사용가능한 아이디입니다.';
		
    }else{
		echo $uid.'는 중복된 아이디입니다.';
		 }
mysqli_close($conn);    
?>
</body>
</html>



