<?php include 'header.php'; ?>

    <!-- Isi Side Menu -->
    <div class="container-fluid">
        <?php include 'sidemenu.php'; ?>

        <!-- Isi konten -->
        <main class="container col-md-offset-2 col-md-10">
            <?php
            if (isset($_GET['page'])){
                switch ($_GET['page']){
                    case "data-wisata":
                        include("page/wisata/data-wisata.php");
                    break;

                    case "wisata-baru":
                        include("page/wisata/wisata-baru.php");
                    break;

                    case "edit-wisata":
                        include("page/wisata/edit-wisata.php");
                    break;

                    case "data-admin":
                        include ("data-admin.php");
                    break;

                    case "tambah-admin":
                        include ("tambah-admin.php");
                    break;
                        
                    default;
                        echo '<h1 align="center">404 - PAGE NOT FOUND!</h1>';
                    break;
                }
            } else {
                include("Home.php");
            }
            ?>
        </main>


        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
            window.jQuery || document.write('<script src="./js/jquery.min.js"><\/script>')
        </script>
        <script src="./js/bootstrap.min.js"></script>
        <!-- <script src="../../assets/js/vendor/holder.min.js"></script> -->

        <!-- include summernote css/js -->
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <script src="./js/jquery.fancybox.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $("#deskripsi").summernote({
                    height: 250
                })

                $(".btn-hapus").on("click", function (e) {
                    e.preventDefault();

                    var urlhapus = $(this).attr("href");
                    $("#btn-iya").attr("href", urlhapus)

                    $("#confirm-artikel").modal({
                        backdrop: 'static',
                        keyboard: false
                    });
                });
            });
        </script>
</body>

</html>