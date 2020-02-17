<?php
require_once 'action/server.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> Register User Management </title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
</head>
<body class="bg-success">
    <h2 class="container text-center">Registrasi Pendaftaran User Baru</h2>
    <hr>
    <h4 class="text-center">Selamat Datang</h4>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
        	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
				<?php include('errors.php'); ?>
				
  				<div class="input-group">
  	  				<label class="mr-sm-3">Username</label>
  	  				<input class="mb-2 mr-sm-2" type="text" name="nama_lengkap" value="<?= (isset($nama_lengkap)) ? $nama_lengkap : ''; ?>">
				  </div>
				  
  				<div class="input-group">
  	  				<label class="mr-sm-3">Email</label>
  	  				<input class="mb-2 mr-sm-2" type="email" name="email" value="<?= (isset($email)) ? $email : ''; ?>">
				  </div>
				  
  				<div class="input-group">
  	  				<label class="mr-sm-3">Password</label>
  	  				<input class="mb-2 mr-sm-2" type="password" name="password_1">
				  </div>
				  
  				<div class="input-group">
  	  				<label class="mr-sm-3">Confirm password</label>
  	  				<input class="mb-2 mr-sm-2" type="password" name="password_2">
				  </div>
				  
  				<div class="input-group">
  	  				<button type="submit" class="btn btn-danger" name="reg_user">Register</button>
				</div>
				  
  				<p class="text-center text-warning">
  					Already a member? <a class="text-dark" href="index.php">Sign in</a>
  				</p>
			</form>
		</div>
	</div>
</div>
</body>
</html>