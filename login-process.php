<?php  
session_start();
require 'function.php';

$username = $_POST['username'];
$password = $_POST['password']; 

// Query Select untuk login
$login = mysqli_query($koneksi,"SELECT * FROM tb_user WHERE username='$username' AND password='$password'");

// Nanti dia bakal ngecek ada berapa banyak yang menggunakan fungsi mysqli_query
$cek = mysqli_num_rows($login);

// Cek apakah user sebelumnya udh login?
if ($cek > 0){
  $data = mysqli_fetch_assoc($login);

  // Logika IF kalo levelnya Admin nanti bakal direct ke halaman admin, begitu juga sebaliknya
  if ($data['level']=="Admin") {
    $_SESSION['id'] = $data['id'];
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['email'] = $data['email'];
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['status'] = "logged_in";
    $_SESSION['level'] = "Admin";
    header("location:dashboard/index.php");

  }else if ($data['level']=="User Biasa") {
    $_SESSION['id'] = $data['id'];
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['email'] = $data['email'];
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['status'] = "logged_in";
    $_SESSION['level'] = "User Biasa";
    header("location:dashboard/index.php");

  // Ini kalo data yang dimasukin user gak ada nanti dia bakal jalanin perintah yang Else ini.
  }else{
    echo "<script type='text/javascript'>alert('Username Dan Password Salah!');
    history.back(self);</script>";
  }
  }else{
    echo "<script type='text/javascript'>alert('Username Dan Password Salah!');
    history.back(self);</script>";
  }
?>