<?php
//Jumlah Perhalaman
$limit = 4;
if(isset($_GET['p']))
{
    $noPage = $_GET['p'];
}
else $noPage = 1;

$offset = ($noPage - 1) * $limit;

//ambil data wisata
$sqlIndex = "SELECT 
id_wisata,
nama_wisata,
harga_weekend,
harga_weekday,
deskripsi,
thumbnail
FROM wisata
LIMIT ".$koneksi->real_escape_string($offset).",". $limit;

//data untuk dihitung
$sql_rec = "SELECT id_wisata FROM wisata";
$total_rec = $koneksi->query($sql_rec);

//menghitung data yang diambil
$total_rec_num = $total_rec->num_rows;
$qryIndex = $koneksi->query($sqlIndex);

//Total semua data
$total_page = ceil($total_rec_num/$limit);
  ?>

<!-- Marketing messaging and featurettes
    ================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->
<div class="container marketing">
  <!-- START THE FEATURETTES -->
  <main>
    <h2 class="text-center">Rekomendasi Wisata</h2>
    <content class="container">
      <div class="row">
        <?php while ($index = $qryIndex->fetch_array()) { ?>
        <div class="col-md-3 col-xs-6">
          <div class="card">
            <img src="<?php echo "admin/image/wisata/".$index['thumbnail'] ; ?>" style="width:100%">
            <h1><?php echo $index['nama_wisata']; ?></h1>
            <p class="price">Weekday: Rp <?php echo number_format($index['harga_weekday'],0,",",".");?></p>
            <p class="price">Weekend: Rp <?php echo number_format($index['harga_weekend'],0,",",".");?></p>
            <p class="deskripsi"><?php echo substr(strip_tags($index['deskripsi']), 0,200) . "...";?></p>
            <p>
              <a href="<?php echo "detail.php?id=".$index['id_wisata']; ?>">
                <button>See Details</button>
              </a>
            </p>
          </div>
        </div>
        <?php } ; ?>
      </div>
      <div class="col-md-12 text-center">
        <ul class="pagination">
          <?php if ($total_rec_num > $limit) { ?>
          <?php if ($noPage > 1 ) { ?>

          <li>
            <a href="<?php echo "index.php?p=".($noPage-1);?>">
              <i class="glyphicon glyphicon-chevron-left"></i>
            </a>
          </li>

          <?php } ?>

          <?php for ($page=1; $page <= $total_page ; $page++) { ?>
          <?php if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $total_page)) { ?>
          <?php
									$showPage = $page;
									if ($page==$total_page && $noPage <= $total_page-5) echo "<li class='active'><a>...</a></li>";
            						if ($page == $noPage) echo "<li class='active'><a href='#'>".$page."</a></li> ";
            						else echo " <li><a href='".$_SERVER['PHP_SELF']."?p=".$page."'>".$page."</a></li> ";
            						if ($page == 1 && $noPage >=6) echo "<li class='active'><a>...</a></li>";
								?>
          <?php } ?>
          <?php } ?>

          <?php if ($noPage < $total_page) { ?>
          <li>
            <a href="<?php echo "index.php?p=".($noPage+1); ?>">
              <i class="glyphicon glyphicon-chevron-right"></i>
            </a>
          </li>
          <?php } ?>
          <?php } ?>
        </ul>
      </div>
    </content>
  </main>