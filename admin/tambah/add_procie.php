<?php
include("../../koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>PC Builder</title>

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

<?php include 'header.php' ?>

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
                  <h5 class="text-center m-0">Add Data Processor</h5>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <form action="" method="post" enctype="multipart/form-data">
                  <div class="card-body">
                  <!-- <h5 class="card-title">You can add data GPU</h5> -->
                    <hr>
                    <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" name="nama_procie" class="form-control" required>
                    </div>
                    <div class="form" method="post" action="">
                      <label for="">Select Brand Name</label>
                        <select required class="form-control select2" name="merk_procie">
                          <option value="">-- Choose the Brand --</option>
                          <option value="AMD">AMD</option>
                          <option value="Intel">Intel</option>
                        </select>
                    </div>

                    <div class="form" method="post" action="">
                      <label for="">Select Type</label>
                        <select required class="form-control select2" name="type_procie">
                          <option value="">-- Choose the Type --</option>
                          <option value="Desktop">Desktop</option>
                          <option value="Laptop">Laptop</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="">Cores</label>
                      <input type="number" name="cores" class="form-control" required>
                    </div>

                    <div class="form-group">
                      <label for="">Logical</label>
                      <input type="number" name="logical" class="form-control" required>
                    </div>

                    <div class="form-group">
                      <label for="">Base Clock of Processor</label>
                      <input type="number" step="0.01" name="baseclock" class="form-control" required>
                    </div>

                    <div class="form-group">
                      <label for="">Boost Clock of Processor</label>
                      <input type="number" step="0.01" name="boostclock" class="form-control" required>
                    </div>

                    <div class="form-group">
                      <label for="">Socket of Processor</label>
                      <input type="text" name="socket" class="form-control" required>
                    </div>

                    <div class="form-group">
                      <label for="">TJunction</label>
                      <input type="number" name="tjunction" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="">TDP</label>
                      <input type="number" name="tdp_procie" class="form-control" required>
                    </div>

                    <!-- /.card-body -->

                    <div class="my-5 text-center">
                      <a href="../procie.php" name="batal" class="btn btn-danger">Cancel</a>
                      &nbsp;
                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <?php
                      if (isset($_POST['submit'])){
                        $nama = $_POST['nama_procie'];
                        $merk = $_POST['merk_procie'];
                        $type = $_POST['type_procie'];
                        $cores = $_POST['cores'];
                        $logical = $_POST['logical'];
                        $baseclock = $_POST['baseclock'];
                        $boostclock = $_POST['boostclock'];
                        $socket = $_POST['socket'];
                        $tjunction = $_POST['tjunction'];
                        $tdp = $_POST['tdp_procie'];
                        include_once("../../koneksi.php");
                
                        $result = mysqli_query($koneksi, "INSERT INTO procie (id_procie, nama_procie, merk_procie, penggunaan, cores, logical, baseclock_cpu, boostclock_cpu, socket, tjunction, tdp_procie) VALUES (NULL, '$nama', '$merk', '$type', $cores, $logical, $baseclock, $boostclock, '$socket', $tjunction, $tdp)");
                
                        if($result){
                    ?>
                      <hr>
                    <div class="card-footer text-center">
                      <p>Data Added</p>
                      <a href="../index.php" name="view_result" class="btn btn-success">View Result</a>
                    </div>
                    <?php
                      }
                    }
                    ?>
                </form>
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

    <!-- FOOTER -->
    <?php include '../edit/footer.php'; ?>

  <!-- PAGE SCRIPTS -->
  <!-- <script src="../../dist/js/pages/dashboard2.js"></script> -->
  </script>
</body>

</html>