<?php
include("../../koneksi.php");

$id = $_GET['id'];

if (isset($_POST['update'])) {
    $nama = $_POST['nama_gpu'];
    $merk = $_POST['merk_gpu'];
    $tdp = $_POST['tdp_gpu'];
    $memory = $_POST['memory'];
    $baseclock = $_POST['baseclock'];
    $boostclock = $_POST['boostclock'];
    $memoryclock = $_POST['memoryclock'];
    
    $result = mysqli_query($koneksi, "UPDATE gpu SET merk_gpu='$merk', nama_gpu='$nama', tdp_gpu='$tdp', memory_gpu='$memory', baseclock_gpu='$baseclock', boostclock_gpu='$boostclock', memoryclock_gpu='$memoryclock' WHERE id_gpu = $id");

    if ($result){
        echo "<script>alert('berhasil')</script>";
        header("location: ../gpu.php");
    } else {
      echo "error";
    }
}

include 'header.php';

    ?>



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
                      $merk = $item['merk_gpu'];
                      $tdp = $item['tdp_gpu'];
                      $memory = $item['memory_gpu'];
                      $baseclock = $item['baseclock_gpu'];
                      $boostclock = $item['boostclock_gpu'];
                      $memoryclock = $item['memoryclock_gpu'];
                  ?>
                <form role="form" method="post" action="">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="">Name of Unit</label>
                      <input type="text" name="nama_gpu" class="form-control" value="<?= $nama; ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="">Brand of Unit</label>
                      <input type="text" name="merk_gpu" class="form-control" value="<?= $merk; ?>" required>
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
                    <div class="form-group">                      
                      <label>Memory Clock</label>
                      <input type="number" name="memoryclock" class="form-control" value="<?= $memoryclock; ?>" required>
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