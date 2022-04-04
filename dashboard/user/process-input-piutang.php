<?php
include("../../function.php");
error_reporting(0);

if(isset($_POST['input-piutang'])) {
    $nomor_registrasi = $_POST['nomor-registrasi'];
    $nama_debitur = $_POST['nama-debitur'];
    $nama_penyerah_piutang = $_POST['nama-penyerahan-piutang'];
    $tanggal = $_POST['tanggal-penyerahan-piutang'];
    $nilai = $_POST['nilai-penyerahan-piutang'];
    $jenis_dokumen = $_POST['jenis-dokumen'];
    $jenis = $_POST['jenis-inaktif'];
    $no_box = $_POST['no-box'];
    $link = $_POST['link'];

    $sql = "INSERT INTO dok_piutang(nomor_registrasi,nama_debitur,nama_penyerah_piutang,tanggal_penyerahan_piutang,nilai_penyerahan_piutang,jenis_dokumen,jenis_inaktif,no_box,link) VALUES ('$nomor_registrasi', '$nama_debitur', '$nama_penyerah_piutang', '$tanggal', '$nilai', '$jenis_dokumen', '$jenis', '$no_box', '$link')";

    mysqli_query($koneksi, $sql);
    include 'notif3.html';
    }else{
        header("location:allDokumen.php");
    }
?>