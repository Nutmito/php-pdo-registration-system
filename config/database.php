<?php 

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "game";

    try {
        $conn = new PDO ("mysql:host=$hostname;dbname=$database",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $title = "Mkatezy";


?>