<?php
Defined ('INDEX') OR exit ('Akses ditolak');

include("koneksi.php");

$id = $_GET['id_admin'];

$sql_delete = "DELETE FROM admin WHERE id_admin = $id";
$result = $koneksi->query($sql_delete);

echo "<script>alert('Data Berhasil Dihapus');</script>";
echo "<script>window.location = 'index.php?page=data-admin';</script>";
// header("location:index.php?page=data-admin");
?>