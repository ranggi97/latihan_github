<?php
session_start();

if (!isset($_SESSION['wisataku']['email_admin'])){
	header("location:page/login/login.php");
	exit();
}
const INDEX = 'yes';

if (isset($_GET['page'])){
		switch ($_GET['page']){
			case 'insert-wisata':
				include("page/wisata/insert-wisata.php");
			break;

			case 'delete-wisata':
				include("page/wisata/delete-wisata.php");
			break;

			case 'update-wisata':
				include("page/wisata/update-wisata.php");
			break;

			case 'validasi-login':
				include("page/login/validasi-login.php");
			break;

			case 'delete-admin':
				include("delete-admin.php");
			break;

			default;
				header ("location:index.php?page=404");
			break;
		}
	} else {
		header("location:index.php");
	}
?>