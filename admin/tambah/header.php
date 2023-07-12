<?php $activePage = basename($_SERVER['PHP_SELF']); // Mendapatkan nama halaman aktif ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Envy</title>

  <!-- Bootstrap -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
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
            Hai
          </a>
        </li> -->
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item">
          <a class="nav-link" href="logout.php" onclick="return confirm('Apakah Anda Yakin Ingin Keluar?')">
            Logout &nbsp;
            <i class="fas fa-sign-out-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <i class="fas fa-hotel img-circle elevation-3 ml-3"></i>
        &nbsp;
        <span class="brand-text font-weight-bold">Envy</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

        <!-- Sidebar Menu -->
        
        <div class="mt-3">
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              
                <li class="nav-item">
                    <a href="../index.php" class="nav-link <?php echo ($activePage == '../index.php') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

              <li class="nav-header">DATA MASTER</li>
              
                <li class="nav-item">
                    <a href="../gpu.php" class="nav-link <?php echo ($activePage == 'add_gpu.php') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-person-booth"></i>
                        <p>
                            Graphic Card
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="../procie.php" class="nav-link <?php echo ($activePage == 'add_procie.php') ? 'active' : ''; ?>">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Prosesor
                    </p>
                    </a>
                </li>

              <li class="nav-item">
                <a href="../motherboard.php" class="nav-link <?php echo ($activePage == 'add_motherboard.php') ? 'active' : ''; ?>">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Motherboard
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../ram.php" class="nav-link <?php echo ($activePage == 'add_ram.php') ? 'active' : ''; ?>">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    RAM
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../monitor.php" class="nav-link <?php echo ($activePage == 'add_monitor.php') ? 'active' : ''; ?>">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Monitor
                  </p>
                </a>
              </li>
              <!-- <li class="nav-header">DATA ADMIN</li>
              <li class="nav-item">
                <a href="admin/index.php" class="nav-link">
                  <i class="nav-icon fas fa-user-shield"></i>
                  <p>
                    Administrator
                  </p>
                </a>
              </li> -->
            </ul>
          </nav>
        </div>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>