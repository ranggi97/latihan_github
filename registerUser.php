<?php
include ("admin/koneksi.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Register User Baru</title>

    <!-- Bootstrap core CSS -->
    <link href="admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="admin/css/depan.css" rel="stylesheet">
</head>

<body>
    <main>

        <?php if (isset($_POST['btn_simpan'])){
            $pass = $_POST['txt_pass'];

            if(!empty($pass)){
                if($_POST['txt_repass'] != $pass){
                    ?>
                        <div class="alert alert-danger alert-dismissable fade in">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <?php
                                echo "Konfirmasi Password Tidak Sama";
                                // echo "<script>window.location = 'index.php?page=tambah-admin'</script>";
                                // echo "<script>alert('Data Gagal Ditambahkan');</script>";
                            ?>
                        </div> 
                    <?php
                } else {
                    $nama_user = $_POST['txt_nama'];
                    $email_user = $_POST['txt_email'];
                    $telp = $_POST['txt_telp'];

                    $sql = "INSERT INTO user VALUES(
                        '',
                        '". addslashes($nama_user) ."',
                        '". addslashes($email_user) ."',
                        '". addslashes($pass) ."',
                        '". addslashes($telp) ."'
                    )";

                    $result = $koneksi->query($sql);
                                                
                    echo "<script>alert('Data Berhasil Ditambahlan');</script>";
                    echo "<script>window.location = 'index.php';</script>";
                }
            }
        } 
        ?>

        <div class="container border col-md-4 col-md-offset-4">
            <div class="logo">
                <img class="img-logo" src="admin/image/logo/m.jpg" alt="">
            </div>
            <h1 class="text-center">Buat Akun Wisata</h1>
            <form action="" class="form-horizontal" method="POST">
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="txt_nama" placeholder="Nama Lengkap" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="txt_email" placeholder="mail@mail.com" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="">Password</label>
                        <input type="text" class="form-control" name="txt_pass" placeholder="Password" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="">Re-Password</label>
                        <input type="text" class="form-control" name="txt_repass" placeholder="Konfirmasi Password" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="">No. Telepon</label>
                        <input type="text" class="form-control" name="txt_telp" placeholder="08123456789" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3 col-md-push-3">
                        <button class="btn btn-lg btn-danger center-block" name="btn_batal">Batal</button>
                    </div>
                    <div class="col-md-3 col-md-push-2">
                        <button class="btn btn-lg btn-primary center-block" name="btn_simpan" style="margin-left: 10px;">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <!--Script  -->
    <script type="text/javascript" src="admin/js/jquery-3.6.0.min.js"></script>
    <script src="admin/js/bootstrap.min.js"></script>
</body>