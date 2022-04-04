<?php 
require '../../function.php';

$id = $_POST['id'];
$peraturan = $_POST['peraturan'];
$tentang = $_POST['tentang'];
$link = $_POST['link'];

mysqli_query($koneksi, "UPDATE dok_lainnya SET peraturan='$peraturan', tentang='$tentang', link='$link' WHERE id='$id'");
echo "<script type='text/javascript'>alert('Data Berhasil Diupdate');
    window.location.href = 'allDokumen.php';</script>";
?>