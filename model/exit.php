<?php
session_start();

unset($_SESSION['login']);
unset($_SESSION['id']);
 
header("location: /view/comment.php");
?>
