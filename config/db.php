<?php 

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "final";

    $conn = new mysqli($hostname, $username, $password, $database);

    if ($conn->errno) {
        echo "Error: " . $conn->errno;
    }

    $baseUrl = "http://localhost/final/";

    $title = "วิทยาลัยนวมินทราชินีมุกดาหาร";

    session_start();

?>