<?php

//koneksi database
$koneksi = mysqli_connect("localhost", "root", "", "db_kpknlp");

function registrasi($data) {
    global $koneksi;

    $nama = $data["nama"];
    $email = $data["email"];
    $username = $data["username"];
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);
    $level = $data["level"];

    //validasi nama
    $validasi = mysqli_query($koneksi, "SELECT nama FROM tb_user WHERE
                nama = '$nama'");
    if (mysqli_fetch_assoc($validasi)) {
        echo "<script>
                alert('Nama sudah terdaftar!')
                </script>";
        return false;
    }

    //validasi email
    $validasi2 = mysqli_query($koneksi, "SELECT email FROM tb_user WHERE
                email = '$email'");
    if (mysqli_fetch_assoc($validasi2)) {
        echo "<script>
                alert('Nama anda sudah terdaftar!')
                </script>";
        return false;
    }

    //validasi username
    $validasi3 = mysqli_query($koneksi, "SELECT username FROM tb_user WHERE
                username = '$username'");
    if (mysqli_fetch_assoc($validasi3)) {
        echo "<script>
                alert('Username sudah terdaftar!')
                </script>";
        return false;
    }

    //cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
                alert('Password tidak sesuai!');
                </script>";
        return false;
    }

    //tambah data ke database
    mysqli_query($koneksi, "INSERT INTO tb_user(nama,email,username,password,level) VALUES ('$nama', '$email', '$username', 
    '$password', '$level')");

    return mysqli_affected_rows($koneksi);


}

?>