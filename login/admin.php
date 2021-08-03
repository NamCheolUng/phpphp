<?php
session_start();
require_once 'config.php';
require_once 'functions.php';
include 'header.php';

ensure_user_is_authenticated();

echo $_SESSION['email'];
?>
<a href="logout.php">logout</a>
<?php
    include 'footer.php';
    ?>