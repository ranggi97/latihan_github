<?php
Defined ('INDEX') OR exit ('Akses ditolak');

include("koneksi.php");

$id = isset($_POST['id_wisata']) ? $_POST['id_wisata'] : '';

$folder = "image/wisata";
$thumbnail	= "";

if(!empty($_FILES['thumbnail']['name'])) {
	$nama_file = md5(date("YmdHis") . rand(100, 99999));
	
	$path		= $_FILES['thumbnail']['name'];
	$extension	= pathinfo($path, PATHINFO_EXTENSION);
	
	$destination = $folder . "/". $nama_file . "." . $extension;
	
	if (move_uploaded_file($_FILES['thumbnail']['tmp_name'], $destination)) {
		$thumbnail = $nama_file . "." . $extension;
	}
}

$sql_thumbnail = "";
if (!empty($thumbnail)) {
	$sql_thumbnail = ", thumbnail	=	'$thumbnail'";
	
	$sql_edit = "SELECT * FROM wisata WHERE id_wisata = '$id'";

	$result = $koneksi->query($sql_edit);
	$data = $result->fetch_array();
	
	unlink('image/wisata/' . $data['thumbnail']);
}

$sql = "UPDATE wisata SET
				nama_wisata		= '". addslashes($_POST['nama-wisata']) ."',
				harga_weekend	= '". addslashes($_POST['harga-weekend']) ."',
				harga_weekday	= '". addslashes($_POST['harga-weekday']) ."',
                deskripsi	    = '". addslashes($_POST['deskripsi']) ."'
				$sql_thumbnail 
				WHERE id_wisata = '$id'";

$result = $koneksi->query($sql);

header("location:index.php?page=data-wisata");
?>