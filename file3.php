<?php
$uploadfile = $_FILES['upload']['name']; // POST 방식으로 전송

// move_uploaded_file($_FILES['upload']['tmp_name'],"../data/a.png"); //부모디렉토리 이동후 data 폴더에 저장( data폴더 생성되잇어야함)
move_uploaded_file($_FILES['upload']['tmp_name'],"./data/a.png"); //현재디렉토리 datga 폴더에 저장 (data폴더 생성되잇어야함)
?>