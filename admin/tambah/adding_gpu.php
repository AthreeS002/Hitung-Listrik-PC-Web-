<?php
    if (isset($_POST['submit'])){
        $nama = $_POST['nama_gpu'];
        $tdp = $_POST['tdp_gpu'];
        include_once("../../koneksi.php");

        $result = mysqli_query($koneksi, "INSERT INTO gpu(id_gpu, nama_gpu, tdp_gpu) VALUES (NULL, '$nama', '$tdp')");

        if($result){
            echo "Data Added";
            header("location: ../index.php");
        }
    }
    ?>