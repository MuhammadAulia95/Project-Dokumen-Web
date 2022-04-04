<?php 
require '../../function.php';

if(isset($_POST['update-akun'])) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    mysqli_query($koneksi, "UPDATE tb_user SET nama='$nama', username='$username', password='$password' WHERE id='$id'");
    header("location:notif.html?Berhasil");
    }
?>