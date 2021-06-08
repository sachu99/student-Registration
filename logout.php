<?php session_start();
session_destroy();  // this line will distroy login session their page
header('location:login.php')  // this will remote page to login page
?>