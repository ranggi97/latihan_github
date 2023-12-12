<?php
session_start();
include("admin/koneksi.php");

$id = $_SESSION['wisataku']['id_user'];
$email = $_SESSION['wisataku']['email_user'];
$password_lama = $_POST['password_lama'];
$password_baru = $_POST['password_baru'];
$ulangi_password = $_POST['ulangi_password'];

$sql_user = "SELECT * FROM `user` WHERE email_user = '$email' AND pass_user = '$password_lama' " ;
$result = $koneksi->query($sql_user);

if ($result->num_rows <= 0){
echo "<script>alert('password lama salah');</script>";
echo "<script>window.location = 'index.php';</script>";
	exit;
}

if ($password_baru != $ulangi_password){
echo "<script>alert('Password baru tidak sama');</script>";
echo "<script>window.location = 'index.php';</script>";
	// $_SESSION['error'] = "Password Baru Tidak Sama";
	// header("location:index.php?page=ganti-password");
	exit;
}

$sql_update = "UPDATE user SET pass_user = '".$password_baru."' WHERE id_user = $id " ;
$result = $koneksi->query($sql_update);

echo "<script>alert('Data Berhasil Diubah');</script>";
echo "<script>window.location = 'index.php';</script>";
// header("location:index.php?page=ganti-password&status=sukses");