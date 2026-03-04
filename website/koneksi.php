<?php
    $host = "my-database"; 
    $user = "root";
    $pass = "inikantin";
    $db   = "kantin";

    $conn = mysqli_connect($host, $user, $pass, $db);

    if (!$conn) {
        die("Koneksi Gagal: " . mysqli_connect_error());
    }
    
    echo "Mantap! Web sudah nyambung ke Docker.";
    echo "<br>";
?>