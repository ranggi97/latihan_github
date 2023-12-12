<?php
include 'header.php';

//ambil data wisata
$sqlIndex = 'SELECT 
    id_wisata,
    nama_wisata,
    harga_weekend,
    harga_weekday,
    deskripsi,
    thumbnail
    FROM wisata 
    WHERE id_wisata = "'.$_GET['id'].'" ';

$qryIndex = $koneksi->query($sqlIndex);
$index = $qryIndex->fetch_array();

// Uncomment the following line to define $id_user
$id_user = $_SESSION['wisataku']['id_user'];

// Check if the user is logged in
if (!isset($_SESSION['wisataku']['nama_user'])) {
    echo "<script>alert('Anda Belum Login');</script>";
    echo "<script>window.location = 'loginUser.php';</script>";
    exit();
}

?>
<div class="container-fluid">
    <div class="row">
        <div class="container konten">
            <div class="panel panel-default">
                <div class="panel-body main">
                    <div class="col-md-8">
                        <div class="about">
                            <div class="row post-title">
                                <div class="col-sm-12">
                                    <img src="<?php echo "admin/image/wisata/".$index['thumbnail'] ; ?>"
                                        style="width:100%">
                                    <p class="deskripsi"><?php echo $index['deskripsi'];?></p>
                                </div>
                            </div>
                            <div class="row post-content">
                                <div class="col-sm-12">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                            if (isset($_POST['btn_bayar'])){
                                if (!isset($_SESSION['wisataku']['nama_user'])){
                                    
                                    echo "<script>alert('Anda Belum Login');</script>";
                                    echo "<script>window.location = 'loginUser.php';</script>";
                                    exit();
                                } else {
                                    $total = $_POST['txt_total'];
                                    $jml_orang = $_POST['jml_orang'];
                                    $tgl = $_POST['tgl_tiket'];
                                    $id_wisata = $_GET['id'];

                                    $sqlinsert = "INSERT INTO transaksi(id_user, total_harga, jumlah_pengunjung) 
                                                    VALUES (
                                                        '". addslashes($id_user) ."',
                                                        '". addslashes($total) ."',
                                                        '". addslashes($jml_orang) ."'
                                                        )";
                                    $trans = $koneksi->query($sqlinsert);

                                    $sqlselect = "SELECT id_trans 
                                    FROM transaksi 
                                    ORDER BY id_trans DESC 
                                    LIMIT 0,1 ";
                                    $hasil = $koneksi->query($sqlselect);
                                    $id_trans = $hasil->fetch_array();

                                    $sqlselect = "SELECT id_trans 
                                    FROM transaksi 
                                    ORDER BY id_trans DESC 
                                    LIMIT 0,1 ";
                      
                                    $hasil = $koneksi->query($sqlselect);
                      
                                    // Fetch the result as a numeric array
                                     $id_trans = $hasil->fetch_row();
                      
                                    // Now $id_trans is an array with a single numeric value, and you can use it in your SQL query
                    $sql = "INSERT INTO tiket(id_trans, id_wisata, tgl_kunjung) 
                              VALUES (
                                  '". addslashes($id_trans[0]) ."',
                                  '". addslashes($id_wisata) ."',
                                  '". addslashes($tgl) ."'
                              )";
                                   // ...

                    $result = $koneksi->query($sql);

                    echo "<script>alert('Data Berhasil Ditambahkan');</script>";
                    // Remove the var_dump and exit lines
                     // var_dump($id_trans);
                    // exit;
                    echo "<script>window.location = 'index.php';</script>";
                    // ...
                                }
                            }
                            ?>
                    <div class="row">
                        <div class="col-md-4">
                            <form class="card-checkout" method="POST" target="frame">
                                <h1><?php echo $index['nama_wisata']; ?></h1>
                                <p class="price">Weekday: Rp
                                    <?php echo number_format($index['harga_weekday'],0,",",".");?></p>
                                <p class="price">Weekend: Rp
                                    <?php echo number_format($index['harga_weekend'],0,",",".");?></p>
                                <label style="margin-top: 20px;">Pilih Hari: </label>
                                <input type="date" id="tgl_tiket" name="tgl_tiket">
                                <label style="margin-bottom: 20px;">Jumlah Orang </label>
                                <input type="number" min="0" placeholder="0" id="jml_orang" name="jml_orang"
                                    onclick="test()">
                                <h2>Total Harga</h2>
                                <h1 id="demo" hidden></h1>
                                <h3 id="demo1"></h3>

                                <!-- Hidden Input -->
                                <input id="weekday" value="<?php echo $index['harga_weekday']; ?>" hidden>
                                <input id="weekend" value="<?php echo $index['harga_weekend']; ?>" hidden>
                                <input id="txt_total" name="txt_total" value="" hidden>
                                <!-- end here -->
                                <p>
                                    <button id="btn_bayar" name="btn_bayar">Bayar</button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php include 'footer.php'; ?>
        </div>
    </div>
</div>
<script>
    function test() {
        const tgl = document.getElementById("tgl_tiket").value;
        const orang = document.getElementById("jml_orang").value;
        const kerja = document.getElementById("weekday").value;
        const libur = document.getElementById("weekend").value;
        
        const d = new Date(tgl);
        const options = {weekday: 'short'};
        const day = d.toLocaleDateString('en-US', options);
        document.getElementById("demo").innerHTML = day;


        const minggu = ["Mon", "Tue", "Wed", "Thu", "Fri"];
        for(var i=0;i<minggu.length;i++){
            if(minggu[i] == day){
            const harga = kerja;
            const total = harga * orang;
            document.getElementById("demo1").innerHTML = total;
            document.getElementById("txt_total").value = total;
        } else if (day == "Sun" || day == "Sat") {
            const harga = libur;
            const total = harga * orang;
            document.getElementById("demo1").innerHTML = total;
            document.getElementById("txt_total").value = total;
        }
    }}
</script>