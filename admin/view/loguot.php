<?php
session_start();
session_unset();
unset($_SESSION['dangnhap']);
header("location:./index.php");
?>