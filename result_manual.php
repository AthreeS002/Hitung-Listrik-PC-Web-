<?php
$procie = $_POST['procie'];
$gpu = $_POST['gpu'];
$mobo = $_POST['mobo'];
$cooler = $_POST['cooler'];
$monitor = $_POST['monitor'];
$ram = $_POST['ram'];
$total = $procie + $gpu + $mobo + $cooler + $monitor + $ram;

//$total = ($procie + $gpu + $mobo + $cooler + $monitor + $ram);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manual Calculator</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://kit.fontawesome.com/f8b26cae5f.css" crossorigin="anonymous">
    <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
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
        <!-- coolers Dropdown Menu -->
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
                <a href="#" class="nav-link active">
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
              <h1 class="m-0 text-dark">Manual Calculator</h1>
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
          <!-- form -->
          <div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5">
                                    <!-- form post -->
									<form id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="procie">Processor</label>
													<input type="text" class="form-control" name="procie" id="procie" value="<?= $procie ?> W" readonly>
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="gpu">Graphic Card</label>
													<input type="text" class="form-control" name="gpu" id="gpu" value="<?= $gpu ?> W" readonly>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="mobo">Motherboard</label>
													<input type="text" class="form-control" name="mobo" id="mobo" value="<?= $mobo ?> W" readonly>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="cooler">Cooler</label>
													<input type="text" class="form-control" name="cooler" id="cooler" value="<?= $cooler ?> W" readonly>
												</div>
											</div>
                      <div class="col-md-12">
												<div class="form-group">
													<label class="label" for="monitor">Monitor</label>
													<input type="text" class="form-control" name="monitor" id="monitor" value="<?= $monitor ?> W" readonly>
												</div>
											</div>
                      <div class="col-md-12">
												<div class="form-group">
													<label class="label" for="ram">RAM</label>
													<input type="text" class="form-control" name="ram" id="ram" value="<?= $ram ?> W" readonly>
												</div>
											</div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label type="text" for="total">Total (Watt)</label>
                          <input type="text" class="form-control" name="total" value="<?= $total ?> W" readonly>
                        </div>
                      </div>
											<div class="col-md-12">
												<div class="form-group">
													<a href="manual.php" class="btn btn-danger"> Back </a>
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-lg-4 col-md-5 d-flex align-items-stretch">
								<div class="info-wrap bg-primary w-100 p-md-5 p-4">
									<h3>Let's get in touch</h3>
									<p class="mb-4">We're open for any suggestion or just to have a chat</p>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-map-marker"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-phone"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-paper-plane"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-globe"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Website</span> <a href="#">yoursite.com</a></p>
					          </div>
				          </div>
			          </div>
							</div>
						</div>
					</div>
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


  <script src="https://kit.fontawesome.com/f8b26cae5f.js" crossorigin="anonymous"></script>
  <!-- jQuery -->
  <script src="admin/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
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
</body>
</html>