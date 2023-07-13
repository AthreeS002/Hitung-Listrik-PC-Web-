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

<?php include 'header.php'; ?>

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
                      <input type="text" name="nama_monitor" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="">TDP</label>
                      <input type="number" name="tdp_monitor" class="form-control" required>
                    </div>

                    <!-- /.card-body -->

                    <div class="my-5 text-center">
                      <a href="../monitor.php" name="batal" class="btn btn-danger">Cancel</a>
                      &nbsp;
                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <?php
                      if (isset($_POST['submit'])){
                        $nama = $_POST['nama_monitor'];
                        $tdp = $_POST['tdp_monitor'];
                        include_once("../../koneksi.php");
                
                        $result = mysqli_query($koneksi, "INSERT INTO monitor (id_monitor, nama_monitor, tdp_monitor) VALUES (NULL, '$nama', '$tdp')");
                
                        if($result){
                    ?>
                      <hr>
                    <div class="card-footer text-center">
                      <p>Data Added</p>
                      <a href="../monitor.php" name="view_result" class="btn btn-success">View Result</a>
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
    <?php include '../footer.php'; ?>

  <!-- PAGE SCRIPTS -->
  <!-- <script src="../../dist/js/pages/dashboard2.js"></script> -->
  </script>
</body>

</html>