<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
// 	ini_set("display_errors", "1");
// $uploaddir = 'C:\Bitnami\wampstack-8.0.8-0\apache2\htdocs\upload\file\\'; # 임시디렉토리에서 이동시키려고하는 파일디렉토리로 이동  \\끝에2개 해야됨.
// $uploadfile = $uploaddir.basename($_FILES['userfile']['name']); # 임시디렉토리 어느 파일명으로 되야하는지 지정 , $_FILES[] 업로드된 파일의 정보를 담고잇는 변수 , ['name']= 파일의 원래이름
// echo '<pre>';
// if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) { #파일이동
// 	echo "파일이 유효하고, 성공적으로 업로드 되었습니다.\n";
// }else{
// 	print "파일 업로드 공격의 가능성이 있습니다!\n";
// }
// echo '자세한 디버깅 정보입니다.:';
// print_r($_FILES);
// print '</pre>';
move_uploaded_file($_FILES['test']['tmp_name'],'./abcd'.$_FILES['test']['name']); //abcd 폴더에 파일원래이름 그대로 저장
?>
<!-- <img src="file/<?=$_FILES['userfile']['name']?>" /> -->
</body>
</html>
