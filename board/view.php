<?php
session_start();
if(!isset($_SESSION['isLogin'])){
    echo '회원만 접근 가능합니다.!';
    exit;
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view - abc 게시판</title>
    <style>
        table{
            border:3px solid powderblue;
        }
    </style>
</head>
<body>
<?php
        $conn = mysqli_connect("localhost", "root", "111111", "abc_corp");
        if (!$conn) {
            echo 'db에 연결하지 못했습니다.'.mysqli_connect_error();
        }else {
            echo 'db에 접속했습니다.';
        }
       
        $view_num = $_GET['number'];
        $sql = "SELECT * FROM msg_board WHERE number = '$view_num'";
        $result = mysqli_query($conn,$sql);
       

    ?>
    <h1>게시판</h1>
    <h2>글 내용!!</h2>
    <?php
     if ($row = mysqli_fetch_array($result)) {
         
     
    ?>
    <table>
        <thead>
        <tr>
            <th>글번호</th>
            <th>글쓴이</th>
            <th>내용</th>
        </tr>
     </thead>
     <tbody>
     <tr>
            <td><?=$row['number']?></td>
            <td><?=$row['name']?></td>
            <td><?=$row['message']?></td>
        </tr>
     </tbody>
     </table>
    <!-- <h3>글번호 : <?=$row['number']?>/ 글쓴이 : <?=$row['name']?></h3>
    <div>
    <?=$row['message']?>
     </div> -->
     

     <div>
  <!-- <a href="update.php?number=<?=$row['number']?>">수정</a> -->
  <button type="button" onclick="location.href='update.php?number=<?=$row['number']?>'">수정</button>

     </div>
     <?php
  }
  mysqli_close($conn);
  ?>
  <a href="index.php"><button type="button">메인화면으로 이동하기</button></a>
  
</body>
</html>
