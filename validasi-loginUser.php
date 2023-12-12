<?php 
include ("admin/koneksi.php");

$email 	= $_POST['email_user'];
$password 	= $_POST['password_user'];

$perintah 	= "SELECT * FROM `user` WHERE email_user = '$email' AND pass_user = '$password'";

$hasil		= $koneksi->query($perintah); 

if ($hasil->num_rows > 0){
	$data 	= $hasil->fetch_array();
	session_start();
	$_SESSION['wisataku']['id_user'] = $data['id_user'];
	$_SESSION['wisataku']['nama_user'] = $data['nama_user'];
	$_SESSION['wisataku']['email_user'] = $data['email_user'];
	
	// $koneksi->query("UPDATE `admin` SET last_login = NOW() WHERE id_admin = '$data[id_admin]'");
	
	header('location:index.php');
} 
else {
	header('location:loginUser.php?status=gagal-login');
}

?>