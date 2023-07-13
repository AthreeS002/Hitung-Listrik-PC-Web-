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
<link rel="stylesheet" href="dist/css/tab.css">
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
              <h1 class="m-0 text-dark">Data Processor</h1>
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
                  <a class="btn btn-success mb-3" href="tambah/add_procie.php">Add Data</a>

                  <div class="tab">
                    <button class="tablinks btn btn-primary active" onclick="openCity(event, 'Intel')"  id="defaultOpen">Intel</button>
                    <button class="tablinks btn btn-primary" onclick="openCity(event, 'AMD')">AMD</button>
                  </div>

                  <div id="Intel" class="tabcontent active">
                    <table id="example1" class="table table-bordered table-hover">
                      <thead>
                        <tr class="text-center">
                          <th>Nama Unit</th>
                          <th>Merk</th>
                          <th>Type</th>
                          <th>Total Cores</th>
                          <th>Total Threads</th>
                          <th>Baseclock</th>
                          <th>Boost Clock</th>
                          <th>Socket</th>
                          <th>T Junction</th>
                          <th>TDP</th>
                          <th>Action</th>
                          <!-- <th>Harga</th>
                          <th>Status</th> -->
                        </tr>
                      </thead>
                      <tbody>
                        <?php

                        $procie = mysqli_query($koneksi, "SELECT * FROM procie WHERE merk_procie = 'Intel' ORDER BY id_procie DESC");

                        while ($row = mysqli_fetch_array($procie)) {
                          echo "
                            <tr>
                              <td>" . $row['nama_procie'] . "</td>
                              <td>" . $row['merk_procie'] . "</td>
                              <td>" . $row['penggunaan'] . "</td>
                              <td>" . $row['cores']  . "</td>
                              <td>" . $row['logical'] . "</td>
                              <td>" . $row['baseclock_cpu'] . " GHz</td>
                              <td>" . $row['boostclock_cpu'] . " GHz</td>
                              <td>" . $row['socket'] . "</td>
                              <td>" . $row['tjunction'] . "°C</td>
                              <td>" . $row['tdp_procie'] . " W</td>
                              <td class='text-center'>
                                        ";
                                            ?>
                                              <a href="edit/edit_procie.php?id=<?= $row['id_procie']; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Mengubah Data?')"><i class=' btn btn-warning py-0 px-1 far fa-edit'></i></a>
                                              <!-- &nbsp; -->
                                              <a href="hapus/hapus_procie.php?id=<?= $row['id_procie']; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')"><i class=' btn btn-danger py-0 px-1 far fa-trash-alt'></i></a>
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
                  
                  <div id="AMD" class="tabcontent active">
                    <table id="example1" class="table table-bordered table-hover">
                      <thead>
                        <tr class="text-center">
                          <th>Nama Unit</th>
                          <th>Merk</th>
                          <th>Type</th>
                          <th>Total Cores</th>
                          <th>Total Threads</th>
                          <th>Baseclock</th>
                          <th>Boost Clock</th>
                          <th>Socket</th>
                          <th>T Junction</th>
                          <th>TDP</th>
                          <th>Action</th>
                          <!-- <th>Harga</th>
                          <th>Status</th> -->
                        </tr>
                      </thead>
                      <tbody>
                        <?php

                        $procie = mysqli_query($koneksi, "SELECT * FROM procie WHERE merk_procie = 'AMD' ORDER BY id_procie DESC");

                        while ($row = mysqli_fetch_array($procie)) {
                          echo "
                            <tr>
                              <td>" . $row['nama_procie'] . "</td>
                              <td>" . $row['merk_procie'] . "</td>
                              <td>" . $row['penggunaan'] . "</td>
                              <td>" . $row['cores']  . "</td>
                              <td>" . $row['logical'] . "</td>
                              <td>" . $row['baseclock_cpu'] . " GHz</td>
                              <td>" . $row['boostclock_cpu'] . " GHz</td>
                              <td>" . $row['socket'] . "</td>
                              <td>" . $row['tjunction'] . "°C</td>
                              <td>" . $row['tdp_procie'] . " W</td>
                              <td class='text-center'>
                                        ";
                                            ?>
                                              <a href="edit/edit_procie.php?id=<?= $row['id_procie']; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Mengubah Data?')"><i class=' btn btn-warning py-0 px-1 far fa-edit'></i></a>
                                              <!-- &nbsp; -->
                                              <a href="hapus/hapus_procie.php?id=<?= $row['id_procie']; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')"><i class=' btn btn-danger py-0 px-1 far fa-trash-alt'></i></a>
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
      });
    });


    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
  </script>

</body>

</html>