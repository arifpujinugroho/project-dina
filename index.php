<?php
require_once 'config/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Management System</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
</head>
<body>
    <div class="jumbotron text-danger text-center bg-dark">
        <h2> User Management System </h2>
    </div>
    <div class="container btn-danger kotak_login">
    <nav class="navbar navbar-expand-sm-2 bg-success navbar-dark">
        <form action="action/login.php" method="post" accept-charset="utf-8" autocomplete="off">
            <div class="form-group">
    			<label for="email" class="mr-sm-2">Email</label> <br>
    			<input type="email" name="email" class="form-control mb-2 mr-sm-2" placeholder="Masukkan Alamat Email" required>
    		</div>
    		<div class="form-group">
    			<label for="password" class="mr-sm-2">Password</label> <br>
    			<input type="password" name="password" class="form-control mb-2 mr-sm-2" placeholder="Masukkan Password" required>
    		</div>
    			<button type="submit" class="btn btn-primary mb-2 btn-block tm_login">Login</button>
    			<hr>
    			<p class="text-center btn-warning">Belum punya akun? <a href="registration.php">Daftar Sekarang</a></p>
        </form>
    </nav>
    </div>
</body>
</html>