<?php
session_start();

if ( !isset($_SESSION["login"]) ) {
  ?>

    <script type="text/javascript">
      alert("Kamu belum login!");
      window.location.href="Login.php";
    </script>
  <?php

  exit;
  
}


//koneksi database
require 'function.php';
?>
<!DOCTYPE html>
<.php lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/allDokumen.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-3"><img src="img/logo1.png" style="width: 450px;" alt=""></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="akun.php">
                    <i class="fas fa-fw fad fa-user"></i>
                    <span>Akun</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Laporan
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Dokumen</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Daftar Dokumen :</h6>
                        <a class="collapse-item" href="allDokumen.php">Semua Dokumen</a>
                        <a class="collapse-item" href="s.penilaian.php">Seksi Penilaian</a>
                        <a class="collapse-item" href="s.piutang.php">Seksi Piutang</a>
                        <a class="collapse-item" href="DokumenLainnya.php">Lainnya</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-pen-square"></i>
                    <span>Input</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
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
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
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
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['nama'] ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
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
                        <div class="card shadow mb-4">  
                        </div>
                    </div>
                    <!-- End Garis -->


                    <!-- Dokumen Penilaian -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-gray">Dokumen Penilaian</h6>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <!-- Tombol Search -->
                                <form class="form-inline">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                </form><br>
                                <!-- Akhir Search -->

                                <table class="table table-bordered table-dark">
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
                                      <tr>
                                        <th scope="row">1</th>
                                        <td>LAP-0003/1/1/WKN.04/KNL.02/2021</td>
                                        <td>2021-01-11</td>
                                        <td>2020-12-29</td>
                                        <td>Mamad</td>
                                        <td>Sebagian Tanah dan Bangunan untuk Tempat Usaha</td>
                                        <td>Dinas Pekerjaan Umum</td>
                                        <td>http://drive.goole.com/</td>
                                        <td>
                                            <div class="aksi">
                                                <button type="button" class="btn btn-warning">Edit</button>
                                                <button type="button" class="btn btn-danger">Hapus</button>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">2</th>
                                        <td>LAP-0013/1/2/WKN.04/KNL.05/2020</td>
                                        <td>2020-06-21</td>
                                        <td>2019-12-09</td>
                                        <td>Rezal</td>
                                        <td>Sebagian Tanah dan Bangunan untuk Pendidikan</td>
                                        <td>Dinas Pekerjaan Umum</td>
                                        <td>http://drive.goole.com/</td>
                                        <td>
                                            <div class="aksi">
                                                <button type="button" class="btn btn-warning">Edit</button>
                                                <button type="button" class="btn btn-danger">Hapus</button>
                                            </div>
                                        </td>
                                      </tr>
                                      
                                    </tbody>
                                  </table>

                                  <!-- Tombol next -->
                                  <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                      <li class="page-item"><a class="page-link" href="#">Kembali</a></li>
                                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                                      <li class="page-item"><a class="page-link" href="#">Selanjutnya</a></li>
                                    </ul>
                                  </nav>
                                  <!-- Akhir next -->
                                 
                            </div>
                        </div>    
                        </div>
                        <!-- Akhir Penilaian -->

                        <!-- Dokumen Piutang -->
                        <div class="dokumen-piutang">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-gray">Dokumen Piutang</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <!-- Tombol Search -->
                                        <form class="form-inline">
                                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                        </form><br>
                                        <!-- Akhir Search -->
    
                                        <table class="table table-bordered table-dark">
                                            <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nomor Registrasi</th>
                                                <th scope="col">Nama Debitur</th>
                                                <th scope="col">Nama Penyerah Piutang</th>
                                                <th scope="col">Jenis Dokumen</th>
                                                <th scope="col">Jenis Inaktif</th>
                                                <th scope="col">Link</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                            </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>1309008924</td>
                                                <td>Udin Serut</td>
                                                <td>UNTAN</td>
                                                <td>Aktif</td>
                                                <td> - </td>
                                                <td>http://drive.goole.com/</td>
                                                <td>
                                                    <div class="aksi">
                                                        <button type="button" class="btn btn-warning">Edit</button>
                                                        <button type="button" class="btn btn-danger">Hapus</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>1309008821</td>
                                                <td>Douglas</td>
                                                <td>POLITEKNIK</td>
                                                <td>Inaktif</td>
                                                <td>PSBDT</td>
                                                <td>http://drive.goole.com/</td>
                                                <td>
                                                    <div class="aksi">
                                                        <button type="button" class="btn btn-warning">Edit</button>
                                                        <button type="button" class="btn btn-danger">Hapus</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                      </table>
    
                                      <!-- Tombol next -->
                                      <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                          <li class="page-item"><a class="page-link" href="#">Kembali</a></li>
                                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                                          <li class="page-item"><a class="page-link" href="#">Selanjutnya</a></li>
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
                                <h6 class="m-0 font-weight-bold text-gray">Dokumen Lainnya</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <!-- Tombol Search -->
                                    <form class="form-inline">
                                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                    </form><br>
                                    <!-- Akhir Search -->
    
                                    <table class="table table-bordered table-dark">
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
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>PP NO. 1 TAHUN 2022</td>
                                            <td>REGISTER NASIONAL DAN PELESTARIAN CAGAR</td>
                                            <td>https://www.youtube.com/watch?v=OJaxwQqkcXg</td>
                                            <td>
                                                <div class="aksi">
                                                    <button type="button" class="btn btn-warning">Edit</button>
                                                    <button type="button" class="btn btn-danger">Hapus</button>
                                                </div>
                                            </td>
                                            
                                            
                                          </tr>
                                          <tr>
                                            <th scope="row">2</th>
                                            <td>PP NO. 8 TAHUN 2022</td>
                                            <td>KOORDINASI PENYELENGGARAAN IBADAH HAJI</td>
                                            <td>https://www.youtube.com/watch?v=OJaxwQqkcXg</td>
                                            <td>
                                                <div class="aksi">    
                                                    <button type="button" class="btn btn-warning">Edit</button>
                                                    <button type="button" class="btn btn-danger">Hapus</button>
                                                </div>
                                            </td>
                                            
                                          </tr>
                                          <tr>
                                            <th scope="row">3</th>
                                            <td>PP NO. 12 TAHUN 2022</td>
                                            <td>FORUM KOORDINASI PIMPINAN DI DAERAH</td>
                                            <td>https://www.youtube.com/watch?v=OJaxwQqkcXg</td>
                                            <td>
                                                <div class="aksi">    
                                                    <button type="button" class="btn btn-warning">Edit</button>
                                                    <button type="button" class="btn btn-danger">Hapus</button>
                                                </div>
                                            </td>
                                            
                                          </tr>
                                        </tbody>
                                      </table>
    
                                      <!-- Tombol next -->
                                      <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                          <li class="page-item"><a class="page-link" href="#">Kembali</a></li>
                                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                                          <li class="page-item"><a class="page-link" href="#">Selanjutnya</a></li>
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
                        <span>Copyright &copy; P2D 2022</span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</.php>