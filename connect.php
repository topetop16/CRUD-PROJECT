<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "fav_movies";

    $connect = mysqli_connect($host, $user, $password, $database);

    // if($connect){
    //     echo "Successfully Connected!";
    // }else{
    //     echo "Connection Failed!";
    // }
    // echo ($connect) ? "Successfully Connected!" : "Connection Failed";
?>