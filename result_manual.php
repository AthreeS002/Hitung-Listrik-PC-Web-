<?php
function calculate($procie, $gpu, $mobo, $cooler, $monitor, $ram, $penggunaan){
  $total = ($procie + $gpu + $mobo + $cooler + $monitor + $ram) /1000;
  $harian = ($total * $penggunaan) * 605;
  $hasil = $harian * 30;

  return [
    'total' => $total,
    'harian' => $harian,
    'hasil' => $hasil
  ];
}

$procie = floatval($_POST['procie']);
$gpu = floatval($_POST['gpu']);
$mobo = floatval($_POST['mobo']);
$cooler = floatval($_POST['cooler']);
$monitor = floatval($_POST['monitor']);
$ram = floatval($_POST['ram']);
$penggunaan = floatval($_POST['penggunaan']);

$result = calculate($procie, $gpu, $mobo, $cooler, $monitor, $ram, $penggunaan);
$total = $result['total'];
$harian = $result['harian'];
$hasil = $result['hasil'];


//$total = ($procie + $gpu + $mobo + $cooler + $monitor + $ram);
include('header.php');
?>

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
                      <div class="col-md-12">
                        <div class="form-group">
                          <label type="text" for="total">Total (Watt)</label>
                          <input type="text" class="form-control col-md-6" name="total" value="<?= $total*1000 ?> W" readonly>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label type="text" for="total">Total Biaya Listrik per Bulan</label>
                          <input type="text" step="0.01" class="form-control" name="total" value="Rp <?= $hasil ?>,-" readonly>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label type="text" for="total">Total Biaya Listrik per Hari</label>
                          <input type="text" step="0.01" class="form-control" name="total" value="Rp <?= $harian ?>,-" readonly>
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
							<!-- END OF RESULT -->
              
              
              <!-- CARD -->
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