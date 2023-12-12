<?php 
include 'admin/koneksi.php';
$total = $_POST['txt_total'];
$jml_orang = $_POST['jml_orang'];

$sqlinsert = "INSERT INTO transaksi(id_user, total_harga, jumlah_pengunjung) 
            VALUES (
                '1',
                '". addslashes($total) ."',
                '". addslashes($jml_orang) ."'
                )";
$result = $koneksi->query($sqlinsert);
echo "<script>alert('Data Berhasil Ditambahlan');</script>";
echo "<script>window.location = 'index.php';</script>";
?>