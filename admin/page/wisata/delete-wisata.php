<?php
Defined ('INDEX') OR exit ('Akses ditolak');

include("koneksi.php");

$id = $_GET['id_wisata'];

$sql_gambar = "SELECT * FROM wisata WHERE id_wisata = '$id'";
$hasil = $koneksi->query($sql_gambar);
$data = $hasil->fetch_array();
unlink('image/wisata/' . $data['thumbnail']);

$sql_delete = "DELETE FROM wisata WHERE id_wisata = $id";
$result = $koneksi->query($sql_delete);

header("location:index.php?page=data-wisata");
?>