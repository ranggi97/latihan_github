<?php
session_start();

$_SESSION['wisataku'] = array();

echo "<script>alert('Anda Telah Log out');</script>";
echo "<script>window.location = 'index.php';</script>";
//header("location:index.php");
?>