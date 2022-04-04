<?php
session_start();
require 'function.php';

if (isset($_SESSION["login"])) {
    header("location:index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style-LogReg.css">
	<style type="text/css">
		body{
			background-image: url("assets/img/img.jpeg");
		}
	</style>
	<title>Login Form</title>
</head>
<body>
	<?php if (isset($error)) {
        echo "<script> alert('Login gagal, Username / Password salah!'); </script>";
        } 
    ?>
	<div class="container">
		<form action="login-process.php" method="POST">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<hr class="header-line">
			<div class="input-group">
				<p>Username</p>
				<input type="text" placeholder="Masukan Username" name="username">
			</div>
			<hr>
			<div class="input-group">
				<p>Password</p>
				<input type="password" placeholder="Masukan Password" name="password">
			</div>
			<hr>
			<div class="input-group">
				<button name="login" class="btn">Login</button>
			</div>
			<p class="login-register-text">Belum punya akun? <a href="register.php">Register disini</a></p>
		</form>
	</div>
</body>
</html>