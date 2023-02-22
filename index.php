<?php
include("koneksi.php");

$gpu = mysqli_query($koneksi, "SELECT COUNT(id_gpu) AS gpu FROM gpu");
$gpu = mysqli_fetch_array($gpu);
$gpu = $gpu['gpu'];

$procie = mysqli_query($koneksi, "SELECT COUNT(id_procie) AS procie FROM procie");
$procie = mysqli_fetch_array($procie);
$procie = $procie['procie'];

$mobo = mysqli_query($koneksi, "SELECT COUNT(id_mobo) AS mobo FROM mobo");
$mobo = mysqli_fetch_array($mobo);
$mobo = $mobo['mobo'];

$cooler = mysqli_query($koneksi, "SELECT COUNT(id_cooler) AS cooler FROM cooler");
$cooler = mysqli_fetch_array($cooler);
$cooler = $cooler['cooler'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>PC Calculator</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://kit.fontawesome.com/f8b26cae5f.css" crossorigin="anonymous">
  <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">

<!-- DataTables -->
<link rel="stylesheet" href="admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

<!-- overlayScrollbars -->
<link rel="stylesheet" href="admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

  <div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="">
            Hai, <?= $nama; ?>
          </a>
        </li> -->
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item">
          <a class="nav-link" href="login.php" onclick="return confirm('Apakah Anda Yakin Ingin Keluar?')">
            Login &nbsp;
            <i class="fas fa-sign-out-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <i class="fas fa-hotel img-circle elevation-3 ml-3"></i>
        &nbsp;
        <span class="brand-text font-weight-bold">Envy Hotel</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

        <!-- Sidebar Menu -->
        <div class="mt-3">
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item has-treeview menu-open">
                <a href="index.php" class="nav-link active">
                  <i class="nav-icon fas fa-home"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-header">DATA MASTER</li>
              <li class="nav-item">
                <a href="gpu.php" class="nav-link">
                  <i class="nav-icon fas fa-person-booth"></i>
                  <p>
                    Graphic Card
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="procie.php" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Prosesor
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="motherboard.php" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Motherboard
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ram.php" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    RAM
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="manual.php" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Manual
                  </p>
                </a>
              </li>
              <li class="nav-header">DATA ADMIN</li>
              <li class="nav-item">
                <a href="admin/index.php" class="nav-link">
                  <i class="nav-icon fas fa-user-shield"></i>
                  <p>
                    Administrator
                  </p>
                </a>
              </li>
            </ul>
          </nav>
        </div>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Data Kamar</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">

            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-gamepad"></i></span>

                <div class="info-box-content">
                  <a href="gpu.php" class="text-dark">
                    <span class="info-box-text">GPU</span>
                    <span class="info-box-number">
                      <?= $gpu; ?>
                      <small>Unit</small>
                    </span>
                  </a>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-microchip"></i></span>

                <div class="info-box-content">
                  <a href="procie.php" class="text-dark">
                    <span class="info-box-text">Processor</span>
                    <span class="info-box-number">
                      <?= $procie; ?>
                      <small>Unit</small>
                    </span>
                  </a>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-bed"></i></span>

                <div class="info-box-content">
                  <a href="mobo.php" class="text-dark">
                    <span class="info-box-text">Motherboard</span>
                    <span class="info-box-number">
                      <?= $mobo; ?>
                    </span>
                  </a>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-snowflake"></i></span>

                <div class="info-box-content">
                  <a href="cooler.php" class="text-dark">
                    <span class="info-box-text">Cooler</span>
                    <span class="info-box-number">
                      <?= $cooler; ?>
                    </span>
                  </a>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <div class="row">
            <div class="col-12">
              <!-- BAR CHART -->
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Grafik Transaksi Tahun 2020</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart">
                    <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>

        </div>
        <!--/. container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer text-sm text-center">
      <strong>Copyright &copy; 2022 Envy Hotel</strong>
    </footer>

  </div>

  <!-- REQUIRED SCRIPTS -->

  <script src="https://kit.fontawesome.com/f8b26cae5f.js" crossorigin="anonymous"></script>
  <!-- jQuery -->
  <script src="admin/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- DataTables -->
  <script src="admin/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

  <!-- overlayScrollbars -->
  <script src="admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="admin/dist/js/adminlte.js"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="admin/dist/js/demo.js"></script>

  <!-- PAGE admin/PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="admin/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
  <script src="admin/plugins/raphael/raphael.min.js"></script>
  <script src="admin/plugins/jquery-mapael/jquery.mapael.min.js"></script>
  <script src="admin/plugins/jquery-mapael/maps/usa_states.min.js"></script>
  <!-- ChartJS -->
  <script src="admin/plugins/chart.js/Chart.min.js"></script>

  <!-- PAGE SCRIPTS -->
  <!-- <script src="../admin/dist/js/pages/dashboard2.js"></script> -->

  <!-- page script -->
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
    });
  </script>

</body>

</html>