<?php
    $host = "localhost";
    $port = 5432;
    $database = "ecommerce";
    $user = "postgres";
    $password = "1";

    try {
        $conn = new PDO("pgsql:host=$host;port=$port;dbname=$database;user=$user;password=$password;");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
?>