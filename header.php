<?php
session_start();
include 'admin/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Wisataku</title>

    <!-- Bootstrap core CSS -->
    <link href="admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="admin/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="admin/css/jquery.fancybox.min.css" />

    <!-- Script -->
    <script type="text/javascript" src="admin/js/jquery-3.6.0.min.js"></script>
    <script src="admin/js/bootstrap.min.js"></script>
    <script src="admin/js/jquery.fancybox.min.js"></script>

    <style>
        /* Custom styles for navbar */
        .navbar-inverse {
            background-color: #000; /* Set the background color to black */
            border-color: #080808; /* Set the border color to a slightly darker shade of black */
        }

        .navbar-inverse .navbar-nav > li > a {
            color: #fff !important; /* Set the text color to white */
        }

        .navbar-inverse .navbar-toggle {
            border-color: #fff; /* Set the border color of the toggle button to white */
        }

        .navbar-inverse .navbar-toggle .icon-bar {
            background-color: #fff; /* Set the background color of the toggle button bars to white */
        }
    </style>
</head>

<body>
    <div class="navbar-wrapper">
        <div class="container-fluid">

            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                            <img src="admin/image/logo/m.jpg" alt="Wisataku Logo">
                        </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-left">
                            <li class="#"><a href="index.php">Home</a></li>
                            <li><a href="tampil-wisata.php">Wisata</a></li>
                            <li><a href="tentang.php">Tentang Kami</a></li>
                            <li><a href="transportasi.php">Transportasi</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <?php if (isset($_SESSION['wisataku']['nama_user'])) { ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="glyphicon glyphicon-user"></span>
                                    <?php echo $_SESSION['wisataku']['nama_user']; ?>
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php?page=ganti-password">Ganti Password</a></li>
                                    <li><a href="logoutUser.php">Logout</a></li>
                                </ul>
                            </li>
                            <?php } else { ?>
                            <li><a href="index.php?page=login-user">Login</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</body>

</html>
