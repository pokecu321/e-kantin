<?php
    
    $host = "my-database"; 
    $user = "root";
    $pass = "inikantin";
    $db   = "kantin";

    $conn = new mysqli($host, $user, $pass, $db);
    
    if ($conn->connect_error) {
        die("Koneksi Gagal: " . mysqli_connect_error());
    }
    // echo 'koneksi berhasil';
?>
