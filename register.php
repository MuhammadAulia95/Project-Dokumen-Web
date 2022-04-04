<?php
require 'function.php';

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0 ) {
        ?>
        <script type="text/javascript">
            alert("Data Berhasil Ditambahkan!");
            window.location.href="index.php";
        </script>
        <?php
    	}else{
        	echo mysqli_error($koneksi);
        }
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
	<title>Register Form</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<hr class="header-line">
			<div class="input-group">
				<span class="details">Nama Lengkap</span>
				<input type="text" placeholder="Masukan Nama Lengkap" name="nama" required="">
			</div>
			<hr>
			<div class="input-group">
				<span class="details">Email</span>
				<input type="email" placeholder="Masukan username" name="email" required="">
			</div>
			<hr>
			<div class="input-group">
				<span class="details">username</span>
				<input type="text" placeholder="Masukan email" name="username" pattern="(?=.*[a-z])(?=.*[A-Z]).{5,}" title="Harus berisi setidaknya satu huruf besar dan kecil, dan setidaknya 8 karakter atau lebih" required="">
			</div>
			<hr>
			<div class="input-group">
				<span class="details">Password</span>
				<input type="password" placeholder="Masukan Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Harus berisi setidaknya satu angka dan satu huruf besar dan kecil, dan setidaknya 8 karakter atau lebih" required="">
            </div>
			<hr>
            <div class="input-group">
				<span class="details">Konfirmasi Password</span>
				<input type="password" placeholder="Konfirmasi Password" name="password2" required="">
			</div>
			<input type="hidden" name="level" value="User Biasa">
			<hr>
			<div class="input-group">
				<button name="register" type="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Sudah punya akun? <a href="index.php">Login disini</a></p>
		</form>
	</div>
</body>
</html>