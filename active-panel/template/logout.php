<?php 
include("include/db_connect.php");
unset($_SESSION['logged_user']);
header('Location: /working/login.php');
?>