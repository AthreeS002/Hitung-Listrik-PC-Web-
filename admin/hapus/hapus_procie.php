<?php
require_once("../../koneksi.php");
$id = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM procie WHERE id_procie=$id");
if($result){
    header("Location: ../procie.php");
}
else{
    echo "error";
}
?>