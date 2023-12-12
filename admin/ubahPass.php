<?php include 'header.php'; ?>

<?php if (!empty($_SESSION['error'])) : ?>
	<div class="alert alert-danger"><?php echo $_SESSION['error'] ;?></div>
<?php 
	unset($_SESSION['error']);
	endif;
?>

<div class="container" style="margin-top: 30px;">
<div class="panel panel-primary">
	<div class="panel-heading">Ganti Password</div>
	<div class="panel-body">
	<form action="update_password.php" method="post" class="form-horizontal">
		<div class="form-group">
			<label class="col-md-2 control-label">Password Lama</label>
			<div class="col-md-5">
				<input type="password" name="password_lama" id="pass_lama" class="form-control" required="required">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label">Password Baru</label>
			<div class="col-md-5">
				<input type="password" name="password_baru" id="pass_baru" class="form-control" required="required">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label">Ulangi Password Baru</label>
			<div class="col-md-5">
				<input type="password" name="ulangi_password" id="ulangi_password" class="form-control" required="required">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-offset-2 col-md-3">
				<input type="submit" name="submit" class="btn btn-primary" value="Simpan Password">
			</div>
		</div>
</div>
</div>
