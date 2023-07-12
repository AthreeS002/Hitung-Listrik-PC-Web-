<?php
require "../koneksi.php";


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

<?php include 'header.php'; ?>
  

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <!-- <li class="breadcrumb-item"><a href="index.php">Home</a></li> -->
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
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
              <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-chess-board"></i></span>

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
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-fan"></i></span>

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

    <?php include 'footer.php'; ?>
    <!-- BAR CHART -->
  <script>
    $(function() {

      var barChartCanvas = $('#barChart').get(0).getContext('2d')
      var barChartData = jQuery.extend(true, {}, areaChartData)
      var temp0 = areaChartData.datasets[0]
      var temp1 = areaChartData.datasets[1]
      barChartData.datasets[0] = temp0
      barChartData.datasets[1] = temp1

      var barChartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        datasetFill: false
      }

      var barChart = new Chart(barChartCanvas, {
        type: 'bar',
        data: barChartData,
        options: barChartOptions
      })
    });
  </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>