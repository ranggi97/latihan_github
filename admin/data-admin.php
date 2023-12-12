<?php
Defined ('INDEX') OR exit ('Akses ditolak');
include "koneksi.php";

$sql    = "SELECT * FROM admin ORDER BY id_admin DESC";
$result	= $koneksi->query($sql);
?>
<div class="panel">
    <div class="panel-heading">
        <h2 class="sub-header">Data Admin<span class="pull-right">
                <a href="index.php?page=tambah-admin" class="btn btn-default btn-large">
                    <span class="glyphicon glyphicon-plus"></span> Admin Baru
                </a>
            </span></h2>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="text-center">No.</th>
                        <th class="text-center">Nama Admin</th>
                        <th class="text-center">Email Admin</th>
                        <th class="text-center">Last Login</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            $no = 1;
			                while ($data = $result->fetch_array()) :
			                ?>
                    <tr>
                        <td class="text-center"><?php echo $no++; ?></td>
                        <td class="text-center"><?php echo $data['nama_admin']; ?></td>
                        <td class="text-center">
                            <?php echo $data['email_admin']; ?></td>
                        <td class="text-center">
                            <?php echo $data['last_login']; ?></td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-danger btn-hapus"
                                href="action.php?page=delete-admin&id_admin=<?php echo $data['id_admin'] ?>">
                                <span class="glyphicon glyphicon-trash"></span> Hapus
                            </a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="confirm-artikel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Konfirmasi Hapus Data</h4>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus data ini?
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-danger" id="btn-iya">Iya</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
            </div>
        </div>
    </div>
</div>