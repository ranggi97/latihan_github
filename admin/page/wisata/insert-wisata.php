<?php
Defined ('INDEX') OR exit ('Akses ditolak');

include ("koneksi.php");

$folder = "image/wisata";
$thumbnail	= "";

if(!empty($_FILES['thumbnail']['name'])) {
	if ($_FILES['thumbnail']['size'] >= 2048000){

		echo "<script>alert('Data Foto Terlalu Besar');</script>";
        echo "<script>window.location = 'index.php?page=wisata-baru';</script>";
	} else {
		$nama_file = md5(date("YmdHis") . rand(100, 99999));
	
		$path		= $_FILES['thumbnail']['name'];
		$extension	= pathinfo($path, PATHINFO_EXTENSION);
		
		$destination = $folder . "/". $nama_file . "." . $extension;
		
		if (move_uploaded_file($_FILES['thumbnail']['tmp_name'], $destination)) {
			$thumbnail = $nama_file . "." . $extension;
            $id_wisata = 0;
			$sql = "INSERT INTO wisata VALUES(
				'$id_wisata',
				'". addslashes($_POST['nama-wisata']) ."',
				'". addslashes($_POST['harga-weekend']) ."',
				'". addslashes($_POST['harga-weekday']) ."',
				'". addslashes($_POST['deskripsi']) ."',
				'$thumbnail'
			)";
			$result = $koneksi->query($sql);
			
			echo "<script>alert('Data Berhasil Ditambahkan');</script>";
        	echo "<script>window.location = 'index.php?page=data-wisata';</script>";
		}
	}
}
?>