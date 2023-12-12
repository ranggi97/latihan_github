<?php
	$host 		= 'localhost';
	$user 		= 'id21607603_rezel';
	$password	= 'Rezel@123';
	$namadb 	= 'id21607603_wisata';
	
	$koneksi = new mysqli($host, $user, $password, $namadb);
	
	if($koneksi->connect_error){
		die('Koneksi Gagal'.$koneksi->connect_error);
	} 
	?>