<?php
session_start();

if (isset($_SESSION['wisataku']['email_admin'])){
	header("location:../../index.php");
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/login.css">
	<link rel="icon" href="../../ico/wisataku.ico">

	<title>Login Admin</title>
</head>

<body>
	<main>
		<div class="wrapper fadeInDown">
			<div id="formContent">
				<form method="post" action="validasi-login.php">

					<?php if (isset($_GET['status']) && $_GET['status'] == 'gagal-login') : ?>
					<div class="alert alert-danger alert-dismissible text-center" role="alert">
						<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
						<strong>Login Gagal!</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<?php endif; ?>
					<div class="fadeIn first">
						<img src="../../image/logo/rpl3.png" id="icon" />
					</div>
					<br>
					<input type="text" id="email" class="fadeIn second" name="email" placeholder="Email">
					<input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
					<input type="submit" class="fadeIn fourth" value="Log In">
				</form>

				<!-- <div id="formFooter">
					<a class="underlineHover" href="#">Forgot Password?</a>
				</div> -->
			</div>
		</div>
	</main>
	<script src="../../js/jquery.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function () {
			setTimeout(function () {
				$(".alert").fadeOut(5000);
			}, 300);
		});
	</script>
</body>

</html>