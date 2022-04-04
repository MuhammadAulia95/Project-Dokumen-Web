<?php
include("../../function.php");

if(isset($_POST['input-penilaian'])) {
    $nomor_laporan = $_POST['no-laporan'];
    $tanggal_laporan = $_POST['tgl-laporan'];
    $tanggal_penilaian = $_POST['tgl-penilaian'];
    $nama_penilai = $_POST['nama-penilai'];
    $objek_penilaian = $_POST['obj-penilaian'];
    $kategori_objek = $_POST['kat-obj'];
    $rak_penyimpanan = $_POST['rak-penyimpanan'];
    $satuan_kerja = $_POST['sat-kerja'];
    $nilai_wajar = $_POST['nilai-waj'];
    $ket_wajar = $_POST['ket-nilai-waj'];
    $nilai_likuidasi = $_POST['nilai-li'];
    $ket_likuidasi = $_POST['ket-nilai-li'];
    $nilai_lainnya = $_POST['nilai-la'];
    $ket_lainnya = $_POST['ket-nilai-la'];
    $link = $_POST['link'];

    $sql = "INSERT INTO dok_penilaian(nomor_laporan,tanggal_laporan,tanggal_penilaian,nama_penilai,objek_penilaian,kategori_objek,rak_penyimpanan,satuan_kerja,nilai_wajar,ket_wajar,nilai_likuidasi,ket_likuidasi,nilai_lainnya,ket_lainnya,link) VALUES ('$nomor_laporan', '$tanggal_laporan', '$tanggal_penilaian', '$nama_penilai', '$objek_penilaian', '$kategori_objek', '$rak_penyimpanan', '$satuan_kerja', '$nilai_wajar', '$ket_wajar', '$nilai_likuidasi', '$ket_likuidasi', '$nilai_lainnya', '$ket_lainnya', '$link')";

    mysqli_query($koneksi, $sql);
    include 'notif2.html';
    }else{
        header("location:inputPenilaian.php?Gagal");
    }
?>