<?php
session_start();
include("koneksi.php");

$id = $_SESSION['wisataku']['id_admin'];
$email = $_SESSION['wisataku']['email_admin'];
$password_lama = $_POST['password_lama'];
$password_baru = $_POST['password_baru'];
$ulangi_password = $_POST['ulangi_password'];

$sql_user = "SELECT * FROM `admin` WHERE email_admin = '$email' AND pass_admin = '$password_lama' " ;
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

$sql_update = "UPDATE admin SET pass_admin = '".$password_baru."' WHERE id_admin = $id " ;
$result = $koneksi->query($sql_user);

echo "<script>alert('Data Berhasil Diubah');</script>";
echo "<script>window.location = 'index.php';</script>";
// header("location:index.php?page=ganti-password&status=sukses");