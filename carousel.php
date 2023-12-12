<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0"></li>
        <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide" src="admin/image/z/kocak.jpg" alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Healing</h1>
                    <p>Mending Healing Daripada overthinking.</p>
                    <?php
                    // Check if the user is not logged in
                    if (!isset($_SESSION['wisataku']['nama_user'])) {
                        // Display the button if the user is not logged in
                        echo '<p><a class="btn btn-lg btn-primary" href="registerUser.php" role="button">Daftar dulu cuy</a></p>';
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="second-slide" src="admin/image/z/h.jpeg" alt="Second slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Ngoding</h1>
                    <p>Ngoding Bikin Pusing Kamu Bikin Salting >//<.</p>
                    <?php
                    // Check if the user is not logged in
                    if (!isset($_SESSION['wisataku']['nama_user'])) {
                        // Display the button if the user is not logged in
                        echo '<p><a class="btn btn-lg btn-primary" href="registerUser.php" role="button">Registrasi sekarang</a></p>';
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="third-slide" src="admin/image/z/tiiz.jpg" alt="Third slide">
            <div class="container">
                <div class="carousel-caption">
                    <h3>Dingin</h3>
                    <p>Tempatnya Dingin Kayak Sifat kamu.</p>
                    <?php
                    // Check if the user is not logged in
                    if (!isset($_SESSION['wisataku']['nama_user'])) {
                        // Display the button if the user is not logged in
                        echo '<p><a class="btn btn-lg btn-primary" href="registerUser.php" role="button">Ayo Daftar!</a></p>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->
