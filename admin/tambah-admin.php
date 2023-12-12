<?php
include ("koneksi.php");
Defined ('INDEX') OR exit ('Akses ditolak');
?>

<div class="col-md-pull-1">
    <div class="panel">
        <div class="panel-heading">
            <h2 class="sub-header">Tambah Admin<span class="pull-right"></h2>
        </div>

        <?php 
            if (isset($_POST['btn_tambah'])){
                $pass = $_POST['txt_pass_admin'];

                if (!empty($pass)){
                    if ($_POST['txt_repass'] != $pass){ 
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
                    }
                    else {
                        $currentDateTime = date('Y-m-d H:i:s');
                            $nama_admin = $_POST['txt_nama_admin'];
                            $email_admin = $_POST['txt_email_admin'];

                            $sql = "INSERT INTO admin VALUES(
                                '". addslashes($id_admin=0) ."',
                                '". addslashes($nama_admin) ."',
                                '". addslashes($email_admin) ."',
                                '". addslashes($pass) ."',
                                '$currentDateTime'
                            )";
                            $result = $koneksi->query($sql);
                            
                            echo "<script>alert('Data Berhasil Ditambahkan');</script>";
                            echo "<script>window.location = 'index.php?page=data-admin';</script>";
                    }
                }
            }
        ?>

        <div class="panel-body">
            <form action="" method="post" class="form-horizontal"
                enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-md-2 control-label">Nama Admin</label>
                    <div class="col-md-9">
                        <input type="text" name="txt_nama_admin" id="txt_nama_admin" class="form-control" placeholder="Nama Admin" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Email</label>
                    <div class="col-md-9">
                        <input type="text" name="txt_email_admin" id="txt_email_admin" class="form-control" placeholder="email@email.com" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Password</label>
                    <div class="col-md-9">
                        <input type="password" name="txt_pass_admin" id="txt_pass_admin" class="form-control" placeholder="Password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Konfirmasi Password</label>
                    <div class="col-md-9">
                        <input type="password" name="txt_repass" id="txt_repass" class="form-control" placeholder="Konfirmasi Password" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-2">
                        <input type="submit" name="btn_tambah" id="btn_tambah" class="btn btn-primary" value="Tambah Admin">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>