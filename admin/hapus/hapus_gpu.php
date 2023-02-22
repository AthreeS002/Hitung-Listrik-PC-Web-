<?php
require_once("../../koneksi.php");
$id = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM gpu WHERE id_gpu=$id");
if($result){
    header("Location: ../gpu.php");
}
else{
    echo "error";
}
?>