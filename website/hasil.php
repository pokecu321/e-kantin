<?php
    require_once 'pembeli.php';
    include 'koneksi.php';

    
    $user = $_POST['user_input'];
    $pass = $_POST['pass'];

    $query = "SELECT * FROM user WHERE username = '$user'";

    $result = mysqli_query($conn,$query);
    $pm = new pembeli();

    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);

        if($pass == $data['password']){
            echo "selamat datang " . $data['nama_lengkap'] . "!";
            $pm->kucing();
            $pm->anjing(); 
            
        }

        else{
            echo "password tidak ditemukan!";
        }
    }
    else{
        echo "";
    }
?>
