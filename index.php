<!-- Navbar -->
<?php  ?>

<!-- Carousel -->
<?php ?>

  <?php
  
    if (isset($_GET['page'])){
        switch ($_GET['page']){
          case 'login-user':
            include 'loginUser.php'; 
            break;

          case 'register-user';
            include 'registerUser.php';
            break;

            case 'ganti-password';
            include 'ubahPass.php';
            break;

       
          default;
              echo '<h1 align="center">404 - PAGE NOT FOUND!</h1>';
          break;
        }
    } else {
            include 'header.php';
            include 'carousel.php'; 
            include 'rekomendasi.php';
            include 'footer.php';
    }
    ?>

  <!-- /END THE FEATURETTES -->
  <!-- FOOTER -->
  <?php  ?>
</body>

</html>