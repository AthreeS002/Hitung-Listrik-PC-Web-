<?php
include("../../koneksi.php");

$id = $_GET['id'];

if (isset($_POST['update'])) {
    $nama = $_POST['nama_monitor'];
    $tdp = $_POST['tdp_monitor'];
    
    $result = mysqli_query($koneksi, "UPDATE monitor SET nama_monitor='$nama', tdp_monitor='$tdp' WHERE id_monitor = $id");

    if ($result){
        echo "<script>alert('berhasil')</script>";
        header("location: ../monitor.php");
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
                  <h5 class="text-center m-0">Update Data GPU</h5>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <?php
                    $id = $_GET['id'];
                    $result = mysqli_query($koneksi, "SELECT * FROM monitor WHERE id_monitor='$id'");
                    while ($item = mysqli_fetch_array($result)){
                      $nama = $item['nama_monitor'];
                      $tdp = $item['tdp_monitor'];                    
                  ?>
                <form role="form" method="post" action="">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="">Name of Unit</label>
                      <input type="text" name="nama_monitor" class="form-control" value="<?= $nama; ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="">TDP of Monitor</label>
                      <input type="number" name="tdp_monitor" class="form-control" value="<?= $tdp; ?>" required>
                    </div>

                    <!-- /.card-body -->

                    <div class="card-footer text-center">
                      <a href="../monitor.php" name="batal" class="btn btn-danger">Cancel</a>
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

    <!-- FOOTER -->
    <?php include '../footer.php'; ?>

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