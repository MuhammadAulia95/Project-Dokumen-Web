<?php
include("../../function.php");

if(isset($_POST['input-lainnya'])) {
    $peraturan = $_POST['peraturan'];
    $tentang = $_POST['tentang'];
    $link = $_POST['link'];
    
    $sql = "INSERT INTO dok_lainnya(peraturan,tentang,link) VALUES ('$peraturan', '$tentang', '$link')";

    mysqli_query($koneksi, $sql);
    include 'notif4.html';
    }else{
        header("location:allDokumen.php");
    }
?>