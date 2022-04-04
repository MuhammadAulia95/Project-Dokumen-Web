<?php
session_start();
require '../../function.php';
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Dashboard</title>
    <!-- Custom fonts for this template-->
    <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="../../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="../../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <style type="text/css">
        .aksi{
            text-align: center;
        }
        .aksi .fa-edit{
            color: limegreen;
            font-size: 25px;
            margin-bottom: 75%;
        }
        .aksi .fa-trash{
            color: darkred;
            font-size: 25px;
        }
        .aksi3{
            text-align: center;
        }
        .aksi3 .fa-edit{
            color: limegreen;
            font-size: 25px;
            margin-bottom: 25%;
        }
        .aksi3 .fa-trash{
            color: darkred;
            font-size: 25px;
        }
        .nav-pagination{
            float: right;
        }
        .search{
            float: right;
            padding-bottom: 17px;
        }
    </style>
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #054e6f;">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
                <div class="sidebar-brand-icon rotate-n-15"></div>
                    <div class="sidebar-brand-text mx-3">
                        <img src="../../assets/img/logo1.png" style="width: 450px;" alt="">
                    </div>
                </a>
                <?php 
                    if($_SESSION['status']!="logged_in"){
                    echo "<script type='text/javascript'>alert('Login Dulu');
                    window.location.href = '../../index.php';</script>";
                    } 
                ?>
                <!-- Divider -->
                <hr class="sidebar-divider my-0">
                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="akun.php">
                        <i class="fas fa-fw fad fa-user"></i>
                        <span>Akun</span>
                    </a>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider">
                <!-- Heading -->
                <div class="sidebar-heading">
                    Laporan
                </div>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item active">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Dokumen</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Daftar Dokumen :</h6>
                            <a class="collapse-item active" href="allDokumen.php">Semua Dokumen</a>
                            <a class="collapse-item" href="dokumenPenilaian.php">Seksi Penilaian</a>
                            <a class="collapse-item" href="dokumenPiutang.php">Seksi Piutang</a>
                            <a class="collapse-item" href="dokumenLainnya.php">Lainnya</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-pen-square"></i>
                        <span>Input</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Input</h6>
                            <a class="collapse-item" href="inputPenilaian.php">Seksi Penilaian</a>
                            <a class="collapse-item" href="inputPiutang.php">Seksi Piutang</a>
                            <a class="collapse-item" href="inputLainnya.php">Lainnya</a>
                        </div>
                    </div>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">
                <!-- Tombol Minimize Sidebar -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <!-- Sidebar Toggle (Topbar) -->
                        <form class="form-inline">
                            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                            </button>
                        </form>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <div class="topbar-divider d-none d-sm-block"></div>
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['nama'] ?></span>
                                    <img class="img-profile rounded-circle" src="../../assets/img/undraw_profile.svg">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Keluar
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Semua Dokumen</h1>
                        <!-- Garis Dibawah Semua Dokumen-->
                        <div class="col-xl-12 col-lg-5">
                            <div class="card shadow mb-4"></div>
                        </div>
                        <!-- End Garis -->

                        <!-- Data Penilaian -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Data Penilaian</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <!-- Tombol Search -->
                                    <form class="form-inline search" method="POST">
                                        <input class="form-control mr-sm-2" type="search" name="search1" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-outline-success my-2 my-sm-0" name="submit1" type="submit">Search</button>
                                    </form><br>
                                    <!-- Akhir Search -->
                                    <table class="table table-bordered" style="background-color: #7bd7c2; color: #4f4f4f;">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nomor Laporan</th>
                                                <th scope="col">Tanggal Laporan</th>
                                                <th scope="col">Tanggal Penilaian</th>
                                                <th scope="col">Nama Penilai</th>
                                                <th scope="col">Objek Penilaian</th>
                                                <th scope="col">Satuan Kerja</th>
                                                <th scope="col">Link</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                if(!ISSET($_POST['submit1'])){

                                                $limit = 5;
                                                $page1 = isset($_GET['page1'])?(int)$_GET['page1'] : 1;
                                                $halaman_awal = ($page1>1) ? ($page1 * $limit) - $limit : 0;

                                                $sebelum = $page1 - 1;
                                                $selanjutnya = $page1 + 1;

                                                $data = mysqli_query($koneksi,"SELECT * FROM dok_penilaian");
                                                $jumlah = mysqli_num_rows($data);
                                                $total = ceil($jumlah / $limit);

                                                $data_dokumen = mysqli_query($koneksi, "SELECT * FROM dok_penilaian LIMIT $halaman_awal, $limit");
                                                $nomor = $halaman_awal+1;
                                                while ($d = mysqli_fetch_array($data_dokumen)) {
                                            ?>
                                            <tr>
                                                <th scope="row"><?php echo $nomor++; ?></th>
                                                <td><?php echo $d['nomor_laporan']; ?></td>
                                                <td><?php echo $d['tanggal_laporan']; ?></td>
                                                <td><?php echo $d['tanggal_penilaian']; ?></td>
                                                <td><?php echo $d['nama_penilai']; ?></td>
                                                <td><?php echo $d['objek_penilaian']; ?></td>
                                                <td><?php echo $d['satuan_kerja']; ?></td>
                                                <td><?php echo $d['link']; ?></td>
                                                <td>
                                                    <div class="aksi">
                                                        <a href="update-data-penilaian.php?id=<?php echo $d['id']; ?>"><span class="fas fa-edit fa-lg"></span></a>
                                                        <a onclick="return confirm('Yakin Ingin Menghapus Data Ini?')" href="hapus-data-penilaian.php?id=<?php echo $d['id']; ?>"><span class="fas fa-trash fa-lg"></span></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php  
                                                }}
                                            ?>
                                            <?php if (ISSET($_POST['submit1'])){
                                                $cari = $_POST['search1'];
                                                $query2 = "SELECT * FROM dok_penilaian WHERE nomor_laporan LIKE '%$cari%' OR tanggal_laporan LIKE '%$cari%' OR tanggal_penilaian LIKE '%$cari%' OR nama_penilai LIKE '%$cari%' OR kategori_objek LIKE '%$cari%' OR satuan_kerja LIKE '%$cari%' OR link LIKE '%$cari%'";
                                                     
                                                $sql = mysqli_query($koneksi, $query2);
                                                while ($b = mysqli_fetch_array($sql)){
                                            ?>
                                            <tr>
                                                <th scope="row"><?php echo $nomor++; ?></th>
                                                <td><?php echo $b['nomor_laporan']; ?></td>
                                                <td><?php echo $b['tanggal_laporan']; ?></td>
                                                <td><?php echo $b['tanggal_penilaian']; ?></td>
                                                <td><?php echo $b['nama_penilai']; ?></td>
                                                <td><?php echo $b['objek_penilaian']; ?></td>
                                                <td><?php echo $b['satuan_kerja']; ?></td>
                                                <td><?php echo $b['link']; ?></td>
                                                <td>
                                                    <div class="aksi">
                                                        <a href="update-data-penilaian.php?id=<?php echo $b['id']; ?>"><span class="fas fa-edit fa-lg"></span></a>
                                                        <a onclick="return confirm('Yakin Ingin Menghapus Data Ini?')" href="hapus-data-penilaian.php?id=<?php echo $b['id']; ?>"><span class="fas fa-trash fa-lg"></span></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php 
                                            }} 
                                        ?>
                                    </table>

                                    <!-- Tombol next -->
                                    <nav class="nav-pagination" aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item" <?php if ($page1 > 1) { echo "href='?page1=$sebelum'";} ?>>
                                                <a class="page-link">Kembali</a>
                                            </li>
                                            <?php  
                                                for ($i=1; $i <=$total; $i++) { 
                                            ?>
                                            <li class="page-item">
                                                <a class="page-link" href="?page1=<?php echo $i ?>"><?php echo $i; ?></a>
                                            </li>
                                            <?php 
                                                } 
                                            ?>
                                            <li class="page-item">
                                                <a class="page-link" <?php if ($page1 < $total) { echo "href='?page1=selanjutnya'";
                                                } ?>>Selanjutnya</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <!-- Dokumen Piutang -->
                        <div class="dokumen-piutang">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Dokumen Piutang</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <!-- Tombol Search -->
                                        <form class="form-inline search" method="POST">
                                            <input class="form-control mr-sm-2" type="search" name="search2" placeholder="Search" aria-label="Search">
                                            <button class="btn btn-outline-success my-2 my-sm-0" name="submit2" type="submit">Search</button>
                                        </form><br>
                                        <!-- Akhir Search -->
                                        <table class="table table-bordered" style="background-color: #7bd7c2; color: #4f4f4f;">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nomor Registrasi</th>
                                                    <th scope="col">Nama Debitur</th>
                                                    <th scope="col">Nama Penyerah Piutang</th>
                                                    <th scope="col">Tanggal Penyerahan Piutang</th>
                                                    <th scope="col">Jenis Dokumen</th>
                                                    <th scope="col">Jenis Inaktif</th>
                                                    <th scope="col">Link</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    if(!ISSET($_POST['submit2'])){

                                                    $limit = 5;
                                                    $page2 = isset($_GET['page2'])?(int)$_GET['page2'] : 1;
                                                    $halaman_awal = ($page2>1) ? ($page2 * $limit) - $limit : 0;

                                                    $sebelum = $page2 - 1;
                                                    $selanjutnya = $page2 + 1;

                                                    $data = mysqli_query($koneksi,"SELECT * FROM dok_piutang");
                                                    $jumlah = mysqli_num_rows($data);
                                                    $total = ceil($jumlah / $limit);

                                                    $data_dokumen = mysqli_query($koneksi, "SELECT * FROM dok_piutang LIMIT $halaman_awal, $limit");
                                                    $nomor = $halaman_awal+1;
                                                    while ($d = mysqli_fetch_array($data_dokumen)) {
                                                ?>
                                                <tr>
                                                    <th scope="row"><?php echo $nomor++; ?></th>
                                                    <td><?php echo $d['nomor_registrasi']; ?></td>
                                                    <td><?php echo $d['nama_debitur']; ?></td>
                                                    <td><?php echo $d['nama_penyerah_piutang']; ?></td>
                                                    <td><?php echo $d['tanggal_penyerahan_piutang']; ?></td>
                                                    <td><?php echo $d['jenis_dokumen']; ?></td>
                                                    <td><?php echo $d['jenis_inaktif']; ?></td>
                                                    <td><?php echo $d['link']; ?></td>
                                                    <td>
                                                        <div class="aksi">
                                                            <a href="update-data-piutang.php?id=<?php echo $d['id']; ?>"><span class="fas fa-edit fa-lg"></span></a>
                                                            <br>
                                                            <a onclick="return confirm('Yakin Ingin Menghapus Data Ini?')" onclick="return confirm('Yakin Ingin Menghapus Data Ini?')" href="hapus-data-piutang.php?id=<?php echo $d['id']; ?>"><span class="fas fa-trash fa-lg"></span></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php  
                                                    }}
                                                ?>
                                                <?php if (ISSET($_POST['submit2'])){
                                                    $cari = $_POST['search2'];
                                                    $query2 = "SELECT * FROM dok_piutang WHERE nomor_registrasi LIKE '%$cari%' OR nama_debitur LIKE '%$cari%' OR nama_penyerah_piutang LIKE '%$cari%' OR tanggal_penyerahan_piutang LIKE '%$cari%' OR nilai_penyerahan_piutang LIKE '%$cari%' OR jenis_dokumen LIKE '%$cari%' OR jenis_inaktif LIKE '%$cari%' OR no_box LIKE '%$cari%' OR link LIKE '%$cari%'";
                                                     
                                                    $sql = mysqli_query($koneksi, $query2);
                                                    while ($a = mysqli_fetch_array($sql)){
                                                ?>
                                                <tr>
                                                    <th scope="row"><?php echo $nomor++; ?></th>
                                                    <td><?php echo $a['nomor_registrasi']; ?></td>
                                                    <td><?php echo $a['nama_debitur']; ?></td>
                                                    <td><?php echo $a['nama_penyerah_piutang']; ?></td>
                                                    <td><?php echo $a['tanggal_penyerahan_piutang']; ?></td>
                                                    <td><?php echo $a['jenis_dokumen']; ?></td>
                                                    <td><?php echo $a['jenis_inaktif']; ?></td>
                                                    <td><?php echo $a['link']; ?></td>
                                                    <td>
                                                        <div class="aksi">
                                                            <a href="update-data-piutang.php?id=<?php echo $a['id']; ?>"><span class="fas fa-edit fa-lg"></span></a>
                                                            <br>
                                                            <a onclick="return confirm('Yakin Ingin Menghapus Data Ini?')" href="hapus-data-piutang.php?id=<?php echo $a['id']; ?>"><span class="fas fa-trash fa-lg"></span></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <?php 
                                                }} 
                                            ?>
                                        </table>

                                        <!-- Tombol next -->
                                        <nav class="nav-pagination" aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-item" <?php if ($page2 > 1) { echo "href='?page2=$sebelum'";} ?>>
                                                    <a class="page-link">Kembali</a>
                                                </li>
                                                <?php  
                                                for ($i=1; $i <=$total; $i++) { 
                                                    ?>
                                                <li class="page-item">
                                                    <a class="page-link" href="?page2=<?php echo $i ?>"><?php echo $i; ?></a>
                                                </li>
                                                <?php } ?>
                                                <li class="page-item">
                                                    <a class="page-link" <?php if ($page2 < $total) { echo "href='?page2=selanjutnya'";
                                                    } ?>>Selanjutnya</a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <!-- Akhir next -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Piutang -->

                        <!-- Dokumen Lainnya -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Dokumen Lainnya</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <!-- Tombol Search -->
                                    <form class="form-inline search" method="POST">
                                        <input class="form-control mr-sm-2" type="search" name="search3" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-outline-success my-2 my-sm-0" name="submit3" type="submit">Search</button>
                                    </form>
                                    <br>
                                    <!-- Akhir Search -->
                                    <table class="table table-bordered" style="background-color: #7bd7c2; color: #4f4f4f;">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Peraturan</th>
                                                <th scope="col">Tentang</th>
                                                <th scope="col">Link</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                if(!ISSET($_POST['submit3'])){

                                                $limit = 5;
                                                $page3 = isset($_GET['page3'])?(int)$_GET['page3'] : 1;
                                                $halaman_awal = ($page3>1) ? ($page3 * $limit) - $limit : 0;

                                                $sebelum = $page3 - 1;
                                                $selanjutnya = $page3 + 1;

                                                $data = mysqli_query($koneksi,"SELECT * FROM dok_lainnya");
                                                $jumlah = mysqli_num_rows($data);
                                                $total = ceil($jumlah / $limit);

                                                $data_dokumen = mysqli_query($koneksi, "SELECT * FROM dok_lainnya LIMIT $halaman_awal, $limit");
                                                $nomor = $halaman_awal+1;
                                                while ($d = mysqli_fetch_array($data_dokumen)) {
                                            ?>
                                            <tr>
                                                <th scope="row"><?php echo $nomor++; ?></th>
                                                <td><?php echo $d['peraturan']; ?></td>
                                                <td><?php echo $d['tentang']; ?></td>
                                                <td><?php echo $d['link']; ?></td>
                                                <td>
                                                    <div class="aksi3">
                                                        <a href="update-data-lainnya.php?id=<?php echo $d['id']; ?>"><span class="fas fa-edit fa-lg"></span></a>
                                                        <br>
                                                        <a onclick="return confirm('Yakin Ingin Menghapus Data Ini?')" href="hapus-data-lainnya.php?id=<?php echo $d['id']; ?>"><span class="fas fa-trash fa-lg"></span></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php  
                                                } }
                                            ?>
                                            <?php if (ISSET($_POST['submit3'])){
                                                $cari = $_POST['search3'];
                                                $query2 = "SELECT * FROM dok_lainnya WHERE peraturan LIKE '%$cari%' OR tentang LIKE '%$cari%' OR link LIKE '%$cari%'";
                                                 
                                                $sql = mysqli_query($koneksi, $query2);
                                                while ($r = mysqli_fetch_array($sql)){
                                            ?>
                                            <tr>
                                                <th scope="row"><?php echo $nomor++; ?></th>
                                                <td><?php echo $r['peraturan']; ?></td>
                                                <td><?php echo $r['tentang']; ?></td>
                                                <td><?php echo $r['link']; ?></td>
                                                <td>
                                                    <div class="aksi3">
                                                        <a href="update-data-lainnya.php?id=<?php echo $r['id']; ?>"><span class="fas fa-edit fa-lg"></span></a>
                                                        <br>
                                                        <a onclick="return confirm('Yakin Ingin Menghapus Data Ini?')" href="hapus-data-lainnya.php?id=<?php echo $r['id']; ?>"><span class="fas fa-trash fa-lg"></span></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    <?php }} ?>
                                    </table>

                                    <!-- Tombol next -->
                                    <nav class="nav-pagination" aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-item" <?php if ($page3 > 1) { echo "href='?page3=$sebelum'";} ?>>
                                                    <a class="page-link">Kembali</a>
                                                </li>
                                                <?php  
                                                for ($i=1; $i <=$total; $i++) { 
                                                    ?>
                                                <li class="page-item">
                                                    <a class="page-link" href="?page3=<?php echo $i ?>"><?php echo $i; ?></a>
                                                </li>
                                                <?php } ?>
                                                <li class="page-item">
                                                    <a class="page-link" <?php if ($page3 < $total) { echo "href='?page3=selanjutnya'";
                                                    } ?>>Selanjutnya</a>
                                                </li>
                                            </ul>
                                    </nav>
                                    <!-- Akhir next -->
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Lainnya -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; RISIMPAC 2022</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Keluar</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Apakah anda yakin ingin keluar?</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                        <a class="btn btn-danger" href="../../logout.php">Ya</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="../../assets/vendor/jquery/jquery.min.js"></script>
        <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="../../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
        <!-- Custom scripts for all pages-->
        <script src="../../assets/js/sb-admin-2.min.js"></script>
        <!-- Page level plugins -->
        <script src="../../assets/vendor/chart.js/Chart.min.js"></script>
        <!-- Page level custom scripts -->
        <script src="../../assets/js/demo/chart-area-demo.js"></script>
        <script src="../../assets/js/demo/chart-pie-demo.js"></script>
        <!-- Page level plugins -->
        <script src="../../assets/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="../../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Page level custom scripts -->
        <script src="../../assets/js/demo/datatables-demo.js"></script>
    </body>
</html>