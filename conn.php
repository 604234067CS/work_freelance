<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db_name = "freelance_ds";

    $con = mysqli_connect($host, $username, $password, $db_name); //เชื่อมต่อกับฐานข้อมูล
    if ($con->connect_error) {
      die("Connection failed: " . $con->connect_error);
  }
    mysqli_set_charset($con,"utf8");
?>