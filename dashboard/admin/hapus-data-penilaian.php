<?php  
require '../../function.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM dok_penilaian WHERE id='$id'");
header("location:allDokumen.php");
?>