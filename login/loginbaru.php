<?php 
session_start();
include '../config/koneksi.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="js/sweetalert2.min.css">
	

	<script src="js/sweetalert2.all.min.js"></script>

<body>
	<!--Page Login--->
	<div class="page-login">
	
			<!-- Box -->
		<div class="box box-login">
			<?php 
			if(isset($_GET['msg'])) {
			echo "	<script>Swal.fire({	title: 'Oppss',
 									 	text: 'Harusnya Anda Login Dahulu',
  										icon: 'warning' 
  									}); </script>";



				} ?>
			<!-- header -->
			<div class="header text-center">
				Login </div>

			<!-- Box Header -->
				<div class="box-body">
				<!-- form login -->
					<form action="" method="POST">
						<div class="form-group">
						<label> Username</label>
						<input type="text" name="email" id="email" placeholder="Masukkan Email" required class="input-control">
						</div>

						<div class="form-group">
						<label> Password</label>
						<input type="password" name="password" placeholder="Password" required class="input-control">
						</div>

						<input type="submit" name="submit" value="Login" class="btn">
					</form>

					<?php 
					if(isset($_POST['submit'])){
						$pass=md5($_POST['password']);
						$hasil = $db->query("
							select * from user where email = '$_POST[email]'
							");
					
						if(!$hasil)
							echo "ada masalah ".$db->error;
					
						$d = $hasil->fetch_assoc();
						if($d['password']==$pass)
						{
							//Username Pass Benar
							session_start();
							$_SESSION['email']=$d['email'];
							$_SESSION['password']=$pass;
							header('location:../admin/tampil.php?page=home');
						}
						else{
								echo "<script>Swal.fire('Oops..',
 									 					'Sepertinya Email atau Password Anda Salah',
  														'error' ) </script>";

								echo('<div class="alert alert-error">Password Salah</div>');
							}
						}
					
						
					


					 ?>
				</div>

				<!-- Box Footer -->
					<div class="box-footer text-center">
					<a href="index.php">Halaman Utama</a>	
					</div>
			</div>

		

	</div>

</body>
</html>