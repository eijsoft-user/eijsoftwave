<?php
    require_once "../setup/func.php";
    session_start();

    if (!isset($_SESSION["user"])) {
        $msg = 'Login to continue!';
        header("location: ../index.php?msg=$msg");
    } else {
        $user = $_SESSION["user"];
    }

    extract(retrieve("SELECT * FROM `user` WHERE `email` = '$user'"));
?>