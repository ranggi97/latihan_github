<?php
Defined ('INDEX') OR exit ('Akses ditolak');
?>

<div class="col-md-pull-1">
    <div class="panel">
        <div class="panel-heading">
            <h2 class="sub-header">Wisata Baru<span class="pull-right"></h2>
        </div>
        <div class="panel-body">
            <form action="action.php?page=insert-wisata" method="post" class="form-horizontal"
                enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-md-2 control-label">Nama Wisata</label>
                    <div class="col-md-9">
                        <input type="text" name="nama-wisata" id="nama-wisata" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Harga Weekday</label>
                    <div class="col-md-9">
                        <input type="text" name="harga-weekday" id="harga-weekday" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Harga Weekend</label>
                    <div class="col-md-9">
                        <input type="text" name="harga-weekend" id="harga-weekend" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Thumbnail</label>
                    <div class="col-md-9">
                        <input type="file" name="thumbnail" id="thumbnail" class="form-control" accept="image/*">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Deskripsi</label>
                    <div class="col-md-9">
                        <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-2">
                        <input type="submit" name="submit" class="btn btn-primary" value="Simpan Wisata">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>