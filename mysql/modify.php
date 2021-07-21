<?php
$con = mysqli_connect('localhost', 'root', '111111', 'opentutorials');

// mysqli_select_db('opentutorials');
$result = mysqli_query($con, 'SELECT * FROM topic WHERE id = '.$con,mysqli_real_escape_string($_GET['id']));
$topic = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
    </head>   
    <body>
        <form action="./process.php?mode=modify" method="POST">
            <input type="hidden" name="id" value="<?=$topic['id']?>" />
            <p>제목 : <input type="text" name="title" value="<?=htmlspecialchars($topic['title'])?>"></p>
            <p>본문 : <textarea name="description" id="" cols="30" rows="10"><?=htmlspecialchars($topic['description'])?></textarea></p>
            <p><input type="submit" /></p>
        </form>
    </body>
</html>