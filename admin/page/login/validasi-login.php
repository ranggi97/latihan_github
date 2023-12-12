<?php 
include ("../../koneksi.php");

$email 	= $_POST['email'];
$password 	= $_POST['password'];

$perintah 	= "SELECT * FROM `admin` WHERE email_admin = '$email' AND pass_admin = '$password'";

$hasil		= $koneksi->query($perintah); 

if ($hasil->num_rows > 0){
	$data 	= $hasil->fetch_array();
	session_start();
	$_SESSION['wisataku']['id_admin'] = $data['id_admin'];
	$_SESSION['wisataku']['nama_admin'] = $data['nama_admin'];
	$_SESSION['wisataku']['email_admin'] = $data['email_admin'];
	
	$koneksi->query("UPDATE `admin` SET last_login = NOW() WHERE id_admin = '$data[id_admin]'");
	
	header('location:../../index.php');
} 
else {
	header('location:login.php?status=gagal-login');
}

?>