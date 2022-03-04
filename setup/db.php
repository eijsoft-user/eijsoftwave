<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "eijsoftwave";

    $conn = mysqli_connect($servername, $username, $password);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS $dbname");
    mysqli_select_db($conn, $dbname);
    mysqli_query($conn, "CREATE TABLE IF NOT EXISTS `user` (
        `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `fullname` VARCHAR(50) NOT NULL,
        `email` VARCHAR(50) NOT NULL,
        `phone` VARCHAR(50) NOT NULL,
        `password` VARCHAR(50) NOT NULL,
        `regdate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
    );");
    mysqli_query($conn, "CREATE TABLE IF NOT EXISTS `history` (
        `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `user` TEXT NOT NULL,
        `links` TEXT NOT NULL,
        `viewdate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
    );");
    mysqli_query($conn, "CREATE TABLE IF NOT EXISTS `contact` (
        `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `name` VARCHAR(50) NOT NULL,
        `email` VARCHAR(50) NOT NULL,
        `message` TEXT NOT NULL,
        `sentdate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
    );");
?>