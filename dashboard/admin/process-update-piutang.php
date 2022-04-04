<?php 
require '../../function.php';

$id = $_POST['id'];
$nomor_registrasi = $_POST['nomor_registrasi'];
$nama_debitur = $_POST['nama_debitur'];
$nama_penyerah_piutang = $_POST['nama_penyerah_piutang'];
$tanggal_penyerahan_piutang = $_POST['tanggal_penyerahan_piutang'];
$nilai_penyerahan_piutang = $_POST['nilai_penyerahan_piutang'];
$jenis_dokumen = $_POST['jenis_dokumen'];
$jenis_inaktif = $_POST['jenis_inaktif'];
$no_box = $_POST['no_box'];
$link = $_POST['link'];

mysqli_query($koneksi, "UPDATE dok_piutang SET nomor_registrasi='$nomor_registrasi', nama_debitur='$nama_debitur', nama_penyerah_piutang='$nama_penyerah_piutang', tanggal_penyerahan_piutang='$tanggal_penyerahan_piutang', nilai_penyerahan_piutang='$nilai_penyerahan_piutang', jenis_dokumen='$jenis_dokumen', jenis_inaktif='$jenis_inaktif', link='$link', no_box='$no_box' WHERE id='$id'");
echo "<script type='text/javascript'>alert('Data Berhasil Diupdate');
    window.location.href = 'allDokumen.php';</script>";
?>