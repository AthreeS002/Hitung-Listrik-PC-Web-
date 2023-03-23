<?php
include("../../koneksi.php");

$id = $_GET['id'];

if (isset($_POST['update'])) {
    $nama = $_POST['nama_gpu'];
    $tdp = $_POST['tdp_gpu'];
    $memory = $_POST['memory'];
    $baseclock = $_POST['baseclock'];
    $boostclock = $_POST['boostclock'];
    
    $result = mysqli_query($koneksi, "UPDATE gpu SET nama_gpu='$nama', tdp_gpu='$tdp', memory_gpu='$memory', baseclock_gpu='$baseclock', boostclock_gpu='$boostclock' WHERE id_gpu = $id");

    if ($result){
        echo "<script>alert('berhasil')</script>";
        header("location: ../gpu.php");
    } else {
      echo "error";
    }
}

    ?>
    

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Envy Hotel</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">

<!-- DataTables -->
<link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

<!-- overlayScrollbars -->
<link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="../dist/css/adminlte.min.css">
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
        <li class="nav-item">
          <a class="nav-link" href="">
            Hai, <?= $nama; ?>
          </a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item">
          <a class="nav-link" href="logout.php" onclick="return confirm('Apakah Anda Yakin Ingin Keluar?')">
            Logout
            <i class="fas fa-sign-out-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <i class="fas fa-hotel img-circle elevation-3 ml-3"></i>
        &nbsp;
        <span class="brand-text font-weight-bold">PC Builder</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

        <!-- Sidebar Menu -->
        <div class="mt-3">
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item has-treeview">
                <a href="index.php" class="nav-link">
                  <i class="nav-icon fas fa-home"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-header">DATA MASTER</li>
              <li class="nav-item">
                <a href="../gpu.php" class="nav-link active">
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
                <a href="monitor.php" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Monitor
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

      <!-- Main content -->

      <section class="content">
        <div class="container-fluid">

          <div class="row justify-content-center pt-2">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
              <div class="card card-info">
                <div class="card-header">
                  <h5 class="text-center m-0">Update Data GPU</h5>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <?php
                    $id = $_GET['id'];
                    $result = mysqli_query($koneksi, "SELECT * FROM gpu WHERE id_gpu='$id'");
                    while ($item = mysqli_fetch_array($result)){
                      $nama = $item['nama_gpu'];
                      $tdp = $item['tdp_gpu'];
                      $memory = $item['memory_gpu'];
                      $baseclock = $item['baseclock_gpu'];
                      $boostclock = $item['boostclock_gpu'];
                  ?>
                <form role="form" method="post" action="">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="">Name of Unit</label>
                      <input type="text" name="nama_gpu" class="form-control" value="<?= $nama; ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="">TDP of GPU</label>
                      <input type="number" name="tdp_gpu" class="form-control" value="<?= $tdp; ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="">Memory Size of GPU</label>
                      <input type="number" name="memory" class="form-control" value="<?= $memory; ?>" required>
                    </div>
                    <div class="form-group">
                      <label>Base Clock</label>
                      <input type="number" name="baseclock" class="form-control" value="<?= $baseclock; ?>" required>
                    </div>
                    <div class="form-group">                      
                      <label>Boost Clock</label>
                      <input type="number" name="boostclock" class="form-control" value="<?= $boostclock; ?>" required>
                    </div>

                    <!-- /.card-body -->

                    <div class="card-footer text-center">
                      <a href="../gpu.php" name="batal" class="btn btn-danger">Cancel</a>
                      &nbsp;
                      <button type="submit" name="update" class="btn btn-primary" onclick="return confirm('Apakah Anda Yakin Ingin Menyimpan Perubahan Data?')">Update</button>
                    </div>
                </form>
                <?php } ?>
              </div>
              <!-- /.card -->
            </div>
            <!--/.col (left) -->
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
  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- DataTables -->
  <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

  <!-- overlayScrollbars -->
  <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.js"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="../dist/js/demo.js"></script>

  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="../plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
  <script src="../plugins/raphael/raphael.min.js"></script>
  <script src="../plugins/jquery-mapael/jquery.mapael.min.js"></script>
  <script src="../plugins/jquery-mapael/maps/usa_states.min.js"></script>
  <!-- ChartJS -->
  <script src="../plugins/chart.js/Chart.min.js"></script>

  <!-- PAGE SCRIPTS -->
  <!-- <script src="../../dist/js/pages/dashboard2.js"></script> -->

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