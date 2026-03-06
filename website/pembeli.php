<?php
    
    session_start();
    if(!isset($_SESSION['status']) || $_SESSION['status'] != 'success'){
        header("location: login.php");
        exit();
    }

    echo 'pembeli';
?>