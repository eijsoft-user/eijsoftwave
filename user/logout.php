<?php 
    require_once "auth.php";
    session_destroy(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>

<body>
    <script>
        alert("Logout successful!");
        window.location = "../index.php";
    </script>
</body>

</html>