<?php 
require_once '../config/config.php';

if ( !isset($_POST) ) {
  header('Location: ../action/index.php');
}

$email 		= $_POST['email'];
$password 	= $_POST['password'];


$sql 	= "SELECT email, password FROM users WHERE email = '".$email."'";
$query 	= $db->query($sql);
$result = $query->fetch_assoc();

if ( password_verify($password, $result['password']) ) { // ini true
  echo "Login Berhasil!";
} else {
  echo "Login Gagal";
}
?>