<?php
session_start();

if (isset($_SESSION["login"])) {
    header("location:index.php");
    exit;
}

require 'function.php';

if (isset($_POST['login'])) {
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username 
    = '$username'");

    //cek nomor pegawai
    if (mysqli_num_rows($result) === 1 ) {
        
        //cek password 
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"]) ) {
            //set session
            $_SESSION["login"] = true;
			$_SESSION["nama"] = $row['nama'];
            $_SESSION["email"] = $row['email'];
            ?>

            <script type="text/javascript">
                alert("Berhasil Melakukan Login!");
                window.location.href="index.php";
            </script>

        <?php
            exit;
        }
    }

    $error = true;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php if (isset($error)) {
            echo "<script>
                alert('Login gagal, Username / Password salah!');
                </script>";
        } ?>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style-LogReg.css">

	<title>Login Form</title>
</head>
<body>
	<div class="container">
		<form action="Login.php" method="POST">
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