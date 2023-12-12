<?php
Defined ('INDEX') OR exit ('Akses ditolak');
include "koneksi.php";

$sql	= "SELECT * 
FROM transportasi 
ORDER BY id_wisata DESC ";

$result	= $koneksi->query($sql);
?>
<div class="panel">
    <div class="panel-heading">
        <h2 class="sub-header">Data Transportasi<span class="pull-right">
                <a href="index.php?page=transportasi" class="btn btn-default btn-large">
                    <span class="glyphicon glyphicon-plus"></span> Wisata Baru
                </a>
            </span></h2>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="text-center">No.</th>
                        <th class="text-center">Nama Wisata</th>
                        <th class="text-center">Harga Weekend</th>
                        <th class="text-center">Harga Weekday</th>
                        <th class="text-center">Deskripsi</th>
                        <th class="text-center">Thumbnail</th>
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
                        <td class="text-center"><?php echo $data['nama_wisata']; ?></td>
                        <td class="text-center">Rp
                            <?php echo number_format($data['harga_weekend'],0,",","."); ?></td>
                        <td class="text-center">Rp
                            <?php echo number_format($data['harga_weekday'],0,",","."); ?></td>
                        <td class="text-center"><?php echo substr(strip_tags($data['deskripsi']), 0, 100) . "..."; ?></td>
                        <td class="text-center">
                            <?php if (!empty($data['thumbnail'])) : ?>
                            <a data-fancybox="gallery" href="image/wisata/<?php echo $data['thumbnail']; ?>"
                                class="btn btn-xs btn-primary" target="_blank">
                                <span class="glyphicon glyphicon-picture"></span> Foto
                            </a>
                            <?php endif; ?>
                        </td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-primary"
                                href="index.php?page=edit-wisata&id_wisata=<?php echo $data['id_wisata'] ?>">
                                <span class="glyphicon glyphicon-cog"></span> Sunting
                            </a>
                            <a class="btn btn-xs btn-danger btn-hapus"
                                href="action.php?page=delete-wisata&id_wisata=<?php echo $data['id_wisata'] ?>">
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