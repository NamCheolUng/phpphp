<?php
session_start();
session_unset();
session_destroy();
require_once 'functions.php';
redirect('login.php');
die();

?>