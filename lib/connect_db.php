<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "noi_that";
    $conn = new mysqli($host,$user,$pass,$db);
    mysqli_set_charset($conn,"utf8");
    if ($conn->connect_error)
        die('Disconnected');
    echo 'connect';

?>