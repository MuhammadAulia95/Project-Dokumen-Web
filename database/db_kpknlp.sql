-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 04, 2022 at 04:24 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kpknlp`
--

-- --------------------------------------------------------

--
-- Table structure for table `dok_lainnya`
--

CREATE TABLE `dok_lainnya` (
  `id` int(10) NOT NULL,
  `peraturan` varchar(255) NOT NULL,
  `tentang` varchar(255) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dok_lainnya`
--

INSERT INTO `dok_lainnya` (`id`, `peraturan`, `tentang`, `link`) VALUES
(21, 'PP NO. 12 TAHUN 2022', 'FORUM KOORDINASI PIMPINAN DI DAERAH', 'https://peraturan.go.id/pp.html'),
(30, 'PP NO. 8 TAHUN 2022', 'KOORDINASI PENYELENGGARAAN IBADAH HAJI', 'drive.google.com'),
(31, 'PP NO. 1 TAHUN 2022', 'REGISTER NASIONAL DAN PELESTARIAN CAGAR BUDAYA', 'drive.google.com'),
(32, 'PP NO. 13 TAHUN 2022', 'PENYELENGGARAAN KEAMANAN, KESELAMATAN, DAN PENEGAKAN HUKUM DI WILAYAH PERAIRAN INDONESIA DAN WILAYAH YURISDIKSI INDONESIA', 'drive.google.com'),
(33, 'PP NO. 3 TAHUN 2021', 'PERATURAN PELAKSANAAN UNDANG-UNDANG NOMOR 23 TAHUN 2019 TENTANG PENGELOLAAN SUMBER DAYA NASIONAL UNTUK PERTAHANAN NEGARA', 'drive.google.com'),
(34, 'PP NO. 6 TAHUN 2021', 'PENYELENGGARAAN PERIZINAN BERUSAHA DI DAERAH', 'drive.google.com');

-- --------------------------------------------------------

--
-- Table structure for table `dok_penilaian`
--

CREATE TABLE `dok_penilaian` (
  `id` int(5) NOT NULL,
  `nomor_laporan` varchar(100) NOT NULL,
  `tanggal_laporan` date NOT NULL,
  `tanggal_penilaian` date NOT NULL,
  `nama_penilai` varchar(100) NOT NULL,
  `objek_penilaian` text NOT NULL,
  `kategori_objek` varchar(100) NOT NULL,
  `rak_penyimpanan` varchar(25) NOT NULL,
  `satuan_kerja` varchar(100) NOT NULL,
  `nilai_wajar` varchar(30) NOT NULL,
  `ket_wajar` text NOT NULL,
  `nilai_likuidasi` varchar(30) NOT NULL,
  `ket_likuidasi` text NOT NULL,
  `nilai_lainnya` varchar(30) NOT NULL,
  `ket_lainnya` text NOT NULL,
  `link` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dok_penilaian`
--

INSERT INTO `dok_penilaian` (`id`, `nomor_laporan`, `tanggal_laporan`, `tanggal_penilaian`, `nama_penilai`, `objek_penilaian`, `kategori_objek`, `rak_penyimpanan`, `satuan_kerja`, `nilai_wajar`, `ket_wajar`, `nilai_likuidasi`, `ket_likuidasi`, `nilai_lainnya`, `ket_lainnya`, `link`) VALUES
(15, 'LAP-0003/1/1/WKN.04/KNL.02/2021', '2022-04-06', '2022-04-06', 'Mamad Suparjo', 'Sebagian Tanah dan Bangunan untuk Tempat Usaha', 'Tanah da/atau Bangunan', 'D', 'Dinas Pekerjaan Umum', 'Rp1.000.000', 'Berdasarkan Pasar', 'Rp1.000.000', 'Tertera berdasarakan laporan penilaian', 'Rp1.000.000', 'dari keterangan tambahan', 'drive.google.com');

-- --------------------------------------------------------

--
-- Table structure for table `dok_piutang`
--

CREATE TABLE `dok_piutang` (
  `id` int(10) NOT NULL,
  `nomor_registrasi` varchar(40) NOT NULL,
  `nama_debitur` varchar(40) NOT NULL,
  `nama_penyerah_piutang` varchar(50) NOT NULL,
  `tanggal_penyerahan_piutang` date NOT NULL,
  `nilai_penyerahan_piutang` varchar(40) NOT NULL,
  `jenis_dokumen` varchar(20) NOT NULL,
  `jenis_inaktif` varchar(20) NOT NULL,
  `no_box` varchar(255) NOT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dok_piutang`
--

INSERT INTO `dok_piutang` (`id`, `nomor_registrasi`, `nama_debitur`, `nama_penyerah_piutang`, `tanggal_penyerahan_piutang`, `nilai_penyerahan_piutang`, `jenis_dokumen`, `jenis_inaktif`, `no_box`, `link`) VALUES
(16, '1309008924', 'Udin Serut', 'UNTAN', '2022-04-13', 'Rp450.000', 'InAktif', 'PSBDT', '12-01', 'drive.google.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `email`, `username`, `password`, `level`) VALUES
(14, 'Muhammad Rafasha Ghifari', 'rafasha@gmail.com', 'Admin', 'Uzumakiboruto1*', 'Admin'),
(15, 'Cahyo Prakoso Pramutigna', 'Cahyo99@gmail.com', 'Cahyo', 'Uzumakiboruto1*', 'User Biasa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dok_lainnya`
--
ALTER TABLE `dok_lainnya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dok_penilaian`
--
ALTER TABLE `dok_penilaian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dok_piutang`
--
ALTER TABLE `dok_piutang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dok_lainnya`
--
ALTER TABLE `dok_lainnya`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `dok_penilaian`
--
ALTER TABLE `dok_penilaian`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `dok_piutang`
--
ALTER TABLE `dok_piutang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
