<?php
session_start();
// $_SESSION['isLogin'] = "";
session_unset(); // unset($_SESSION['변수명']);
session_destroy();
header("Location:login.html");
?>
