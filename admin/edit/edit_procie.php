<?php
include("../../koneksi.php");

$id = $_GET['id'];

if (isset($_POST['update'])) {
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
    
    $result = mysqli_query($koneksi, "UPDATE procie SET nama_procie='$nama', merk_procie='$merk', penggunaan='$type', cores='$cores', logical='$logical', baseclock_cpu='$baseclock' , boostclock_cpu='$boostclock', socket='$socket', tjunction='$tjunction', tdp_procie='$tdp' WHERE id_procie = $id");

    if ($result){
        echo "<script>alert('berhasil')</script>";
        header("location: ../procie.php");
    }
}

    ?>
    

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
                  <h5 class="text-center m-0">Update Data Processor</h5>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <?php
                    $id = $_GET['id'];
                    $result = mysqli_query($koneksi, "SELECT * FROM procie WHERE id_procie='$id'");
                    while ($item = mysqli_fetch_array($result)){
                      $nama = $item['nama_procie'];
                      $merk = $item['merk_procie'];
                      $cores = $item['cores'];
                      $logical = $item['logical'];
                      $baseclock = $item['baseclock_cpu'];
                      $boostclock = $item['boostclock_cpu'];
                      $socket = $item['socket'];
                      $tjunction = $item['tjunction'];
                      $tdp = $item['tdp_procie'];                    
                  ?>
                <form role="form" method="post" action="">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="">Name of Unit</label>
                      <input type="text" name="nama_procie" class="form-control" value="<?= $nama; ?>" required>
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
                      <input type="number" name="cores" class="form-control" value="<?= $cores; ?>" required>
                    </div>

                    <div class="form-group">
                      <label for="">Logical</label>
                      <input type="number" name="logical" class="form-control" value="<?= $logical; ?>" required>
                    </div>

                    <div class="form-group">
                      <label for="">Base Clock of Processor</label>
                      <input type="number" step="0.01" name="baseclock" class="form-control" value="<?= $baseclock; ?>" required>
                    </div>

                    <div class="form-group">
                      <label for="">Boost Clock of Processor</label>
                      <input type="number" step="0.01" name="boostclock" class="form-control" value="<?= $boostclock; ?>" required>
                    </div>

                    <div class="form-group">
                      <label for="">Socket of Processor</label>
                      <input type="text" name="socket" class="form-control" value="<?= $socket; ?>" required>
                    </div>

                    <div class="form-group">
                      <label for="">TJunction</label>
                      <input type="number" name="tjunction" class="form-control" value="<?= $tjunction; ?>" required>
                    </div>

                    <div class="form-group">
                      <label for="">TDP of Processor</label>
                      <input type="number" name="tdp_procie" class="form-control" value="<?= $tdp; ?>" required>
                    </div>

                    <!-- /.card-body -->

                    <div class="card-footer text-center">
                      <a href="../procie.php" name="batal" class="btn btn-danger">Cancel</a>
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
    <?php include 'footer.php'; ?>

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