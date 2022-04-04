<?php 
require '../../function.php';

$id = $_POST['id'];
$nomor_laporan = $_POST['nomor_laporan'];
$tanggal_laporan = $_POST['tanggal_laporan'];
$tanggal_penilaian = $_POST['tanggal_penilaian'];
$nama_penilai = $_POST['nama_penilai'];
$objek_penilaian = $_POST['objek_penilaian'];
$kategori_objek = $_POST['kategori_objek'];
$rak_penyimpanan = $_POST['rak_penyimpanan'];
$satuan_kerja = $_POST['satuan_kerja'];
$nilai_wajar = $_POST['nilai_wajar'];
$ket_wajar = $_POST['ket_wajar'];
$nilai_likuidasi = $_POST['nilai_likuidasi'];
$ket_likuidasi = $_POST['ket_likuidasi'];
$nilai_lainnya = $_POST['nilai_lainnya'];
$ket_lainnya = $_POST['ket_lainnya'];
$link = $_POST['link'];

mysqli_query($koneksi, "UPDATE dok_penilaian SET nomor_laporan='$nomor_laporan', tanggal_laporan='$tanggal_laporan', tanggal_penilaian='$tanggal_penilaian', nama_penilai='$nama_penilai', objek_penilaian='$objek_penilaian', kategori_objek='$kategori_objek', rak_penyimpanan='$rak_penyimpanan', satuan_kerja='$satuan_kerja', nilai_wajar='$nilai_wajar', ket_wajar='$ket_wajar', nilai_likuidasi='$nilai_likuidasi', ket_likuidasi='$ket_likuidasi',
	nilai_lainnya='$nilai_lainnya', ket_lainnya='$ket_lainnya', link='$link' WHERE id='$id'");
	echo "<script type='text/javascript'>alert('Data Berhasil Diupdate');
    window.location.href = 'allDokumen.php';</script>";
?>