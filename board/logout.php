<?php
session_start();
// $_SESSION['isLogin'] = "";
session_unset();
session_destroy();
header("Location:login.html");
?>
