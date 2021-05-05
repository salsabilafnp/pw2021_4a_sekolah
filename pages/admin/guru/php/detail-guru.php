<?php

if (!isset($_GET['NIP'])) {
  header("location: guru.php");
}
require '../functions.php';
$NIP = $_GET['NIP'];

$guru = query("SELECT * FROM guru WHERE NIP = $NIP")[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href=""><img src="../../../../images/logo.svg" class="mr-2" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href=""><img src="../../../../images/logo-mini.svg" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="../../../../images/faces/face28.jpg" alt="profile" />
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-profile text-primary"></i>
                Profile
              </a>
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../../../admin.html">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../php/guru.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Guru</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#siswa" aria-expanded="false" aria-controls="siswa">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Siswa</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="siswa">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../siswa/siswa.html">Siswa Aktif</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../alumni/kelulusan.html">Kelulusan</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../alumni/alumni.html">Alumni</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#kelas" aria-expanded="false" aria-controls="kelas">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Kelas</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="kelas">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../kelas/kelas.html">Kelas</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../kelas/mapel.html">Mata Pelajaran</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../kelas/ujian.html">Ujian</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../kegiatan/kegiatan.html">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Kegiatan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../ekskul/ekskul.html">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Ekstrakurikuler</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../prestasi.html">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Prestasi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../spp.html">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">SPP</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-3 mb-xl-0">
                  <h3 class="font-weight-bold mt-3">Profil Guru</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="card py-1">
                <div class="card-body">
                  <img src="../../../../images/faces/<?= $guru["foto"]; ?>" alt="" style="width: 125px; margin-left: 22px;">
                </div>
                <div class="card-body">
                  <div class="table-responsive" style="border-radius: 15px;">
                    <table class="expandable" style="width: 100%; font-size:14px;">
                      <tr>
                        <td style="width: 30%;">NIP</td>
                        <td style="width: 4%;">:</td>
                        <td><?= $guru['NIP']; ?></td>
                      </tr>
                      <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td class="text-capitalize"><?= $guru['nama_lengkap']; ?></td>
                      </tr>
                      <tr>
                        <td>TTL (Tempat, Tanggal, Lahir)</td>
                        <td>:</td>
                        <td class="text-capitalize"><?= $guru['tempat_lahir']; ?>, <?= $guru['tanggal_lahir']; ?></td>
                      </tr>
                      <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td class="text-capitalize"><?= $guru['jenis_kelamin']; ?></td>
                      </tr>
                      <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td class="text-capitalize">Jalan <?= $guru['alamat_jalan']; ?>, RT/RW <?= $guru['alamat_rt']; ?>/<?= $guru['alamat_rw']; ?> No.<?= $guru['no_rumah']; ?></td>
                      </tr>
                      <tr>
                        <td>Kecamatan</td>
                        <td>:</td>
                        <td class="text-capitalize"><?= $guru['alamat_kecamatan']; ?></td>
                      </tr>
                      <tr>
                        <td>Kab/Kota</td>
                        <td>:</td>
                        <td class="text-capitalize"><?= $guru['alamat_kab_kota']; ?></td>
                      </tr>
                      <tr>
                        <td>Provinsi</td>
                        <td>:</td>
                        <td class="text-capitalize"><?= $guru['alamat_provinsi']; ?></td>
                      </tr>
                      <tr>
                        <td>Kode Pos</td>
                        <td>:</td>
                        <td><?= $guru['kode_pos']; ?></td>
                      </tr>
                      <tr>
                        <td>No Hp</td>
                        <td>:</td>
                        <td><?= $guru['no_hp']; ?></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><?= $guru['email']; ?></td>
                      </tr>
                      <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td class="text-capitalize"><?= $guru['agama']; ?></td>
                      </tr>
                      <tr>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td class="text-capitalize"><?= $guru['jabatan']; ?></td>
                      </tr>
                      <tr>
                        <td>Mapel yang dipegang </td>
                        <td>: </td>
                        <td class="text-capitalize"><?= $guru['mapel']; ?></td>
                      </tr>
                      <tr>
                        <td>Tingkat Pendidikan Terakhir</td>
                        <td>:</td>
                        <td class="text-capitalize"><?= $guru['tingkat_pendidikan_terakhir']; ?></td>
                      </tr>
                      <tr>
                        <td>Kampus Pendidikan Terkahir</td>
                        <td>:</td>
                        <td><?= $guru['kampus_pendidikan_terakhir']; ?></td>
                      </tr>
                      <tr>
                        <td>Tahun Lulus Pendidikan Terakhir</td>
                        <td>:</td>
                        <td class="text-capitalize"><?= $guru['tahun_lulus_pendidikan_terakhir']; ?></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Kelompok 4A<i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="../../../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../../../vendors/chart.js/Chart.min.js"></script>
  <script src="../../../../vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../../../../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="../../../../js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../../../js/off-canvas.js"></script>
  <script src="../../../../js/hoverable-collapse.js"></script>
  <script src="../../../../js/template.js"></script>
  <script src="../../../../js/settings.js"></script>
  <script src="../../../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../../../js/dashboard.js"></script>
  <script src="../../../../js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>