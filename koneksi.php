<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "komputer";

    $koneksi = mysqli_connect($host, $username, $password, $database);
    if (mysqli_connect_errno()) {
        echo "Connection failed: " . mysqli_connect_error();
    }
    
?>