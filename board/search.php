<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>abc 게시판</title>
</head>
<body>
    <h1>게시판</h1>
    <h2>검색결과</h2>
    <ul>
    <?php
        $conn = mysqli_connect("localhost", "root", "111111", "abc_corp");
        if (!$conn) {
            echo 'db에 연결하지 못했습니다.'.mysqli_connect_error();
        }else {
            echo 'db에 접속했습니다.';
        }
       
        $user_skey = $_POST['skey'];
        $sql = "SELECT * FROM msg_board WHERE message LIKE '%$user_skey%'";
        $result = mysqli_query($conn,$sql);
        
        while ($row = mysqli_fetch_array($result)) {
        echo "<li>{$row['number']} : <a href=\"view.php?number={$row['number']}\">{$row['name']}</a></li>";
        }
       
         mysqli_close($conn);

    ?>
    </ul>

  <a href="index.php">메인화면으로 이동하기</a>
    
</body>
</html>