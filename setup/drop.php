<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "eijsoftwave";

    try {
        $conn = new PDO("mysql:host=$servername", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DROP DATABASE IF EXISTS $dbname";
        $conn->exec($sql);
        header("location: ../index.php");
    }
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
?>