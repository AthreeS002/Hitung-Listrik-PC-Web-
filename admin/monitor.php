<?php
  include("../koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>PC Builder</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

<!-- DataTables -->
<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

<!-- overlayScrollbars -->
<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/adminlte.min.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<?php include 'header.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Data Monitor</h1>
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

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <a class="btn btn-success mb-3" href="tambah/add_monitor.php">Add Data</a>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr class="text-center">
                        <th>Nama Unit</th>
                        <th>TDP</th>
                        <th>Action</th>
                        <!-- <th>Harga</th>
                        <th>Status</th> -->
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      $monitor = mysqli_query($koneksi, "SELECT * FROM monitor ORDER BY id_monitor DESC");

                      while ($row = mysqli_fetch_array($monitor)) {
                        echo "
                <tr>
                  <td>" . $row['nama_monitor'] . "</td>
                  <td>" . $row['tdp_monitor'] . " W</td>
                  <td class='text-center'>
                            ";
                                ?>
                                  <a href="edit/edit_monitor.php?id=<?= $row['id_monitor']; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Mengubah Data?')"><i class=' btn btn-warning py-0 px-1 far fa-edit'></i></a>
                                  <!-- &nbsp; -->
                                  <a href="hapus/hapus_monitor.php?id=<?= $row['id_monitor']; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')"><i class=' btn btn-danger py-0 px-1 far fa-trash-alt'></i></a>
                                <?php
                                  echo "
                            </td>
                </tr>
          ";
                      }
                      ?>
                    </tbody>
                    
                  </table>
                </div>
                <!-- /.card-body -->
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

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>

  <!-- page script -->
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
        searching: true,
        info: false,
      });
    });
  </script>

</body>

</html>