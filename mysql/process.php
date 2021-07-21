
<?php
$con = mysqli_connect('localhost', 'root', '111111');
mysqli_select_db($con,'opentutorials'); 
switch($_GET['mode']){
 case 'insert':
 $result = mysqli_query($con, "INSERT INTO topic (title, description, created) VALUES ('".mysqli_real_escape_string($con,$_POST['title'])."', '".mysqli_real_escape_string($con,$_POST['description'])."', now()");
 header("Location: list.php"); 
 break;
 case 'delete':
 mysqli_query($con, 'DELETE FROM topic WHERE id = '.mysqli_real_escape_string($con,$_POST['id']));
 header("Location: list.php"); 
 break;
 case 'modify':
 mysqli_query($con, 'UPDATE topic SET title = "'.mysqli_real_escape_string($con,$_POST['title']).'", description = "'.mysqli_real_escape_string($con,$_POST['description']).'" WHERE id = '.mysqli_real_escape_string($con,$_POST['id']));
 header("Location: list.php?id={$_POST['id']}");
 break;
}
?>


<?php
mysql_connect('localhost', 'root', '111111');
mysql_select_db('opentutorials');
switch($_GET['mode']){
 case 'insert':
 $result = mysql_query("INSERT INTO topic (title, description, created) VALUES ('".mysql_real_escape_string($_POST['title'])."', '".mysql_real_escape_string($_POST['description'])."', now()");
 header("Location: list.php"); 
 break;
 case 'delete':
 mysql_query('DELETE FROM topic WHERE id = '.mysql_real_escape_string($_POST['id']));
 header("Location: list.php"); 
 break;
 case 'modify':
 mysql_query('UPDATE topic SET title = "'.mysql_real_escape_string($_POST['title']).'", description = "'.mysql_real_escape_string($_POST['description']).'" WHERE id = '.mysql_real_escape_string($_POST['id']));
 header("Location: list.php?id={$_POST['id']}");
 break;
}
?>

