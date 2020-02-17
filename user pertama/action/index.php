<?php
require_once '../config/config.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>User Management</title>
  </head>
  <body>
    
    <div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
    	<div class="card" style="width: 45%;">
    		<div class="card-body">
    			<h2 class="text-center">Login - User Management</h2>
    			<form action="login.php" method="POST" autocomplete="off">
    				<div class="form-group">
    					<label for="email">Email</label>
    					<input type="email" name="email" class="form-control" placeholder="Masukkan Alamat Email" required>
    				</div>
    				<div class="form-group">
    					<label for="password">Password</label>
    					<input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
    				</div>
    				<button type="submit" class="btn btn-dark btn-block">Login</button>
    				<hr>
    				<p class="text-center">Belum punya akun? <a href="register.php">Daftar Sekarang</a></p>
    			</form>
    		</div>
    	</div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>