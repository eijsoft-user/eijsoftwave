<?php
    require_once "func.php";
    session_start();
    $msg = "";
    $url = @$_POST["url"];
    switch ($_POST["submit"]) {
        case 'login':
            $email = getCleanInput($_POST["email"]);
            $password = getCleanInput($_POST["password"]);

            $query = retrieve("SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'");
            if (count($query) > 0) {
                $msg = "Login successful.";
                $_SESSION["user"] = $email;
                header("location: ../user/index.php");                       
            } else {
                $msg = "Invalid login details.";
            }
            break;
        case 'register':
            $name = getCleanInput($_POST["name"]);
            $email = getCleanInput($_POST["email"]);
            $phone = getCleanInput($_POST["phone"]);
            $password = getCleanInput($_POST["password"]);
            if (valueExists("user", "email", "$email")) {
                $msg = "Email address already exist.";
            } else {
                $sql = "INSERT INTO `user` (`fullname`, `email`, `phone`, `password`) VALUES ('$name', '$email', '$phone', '$password')";
                if (insert($sql) === TRUE) {
                    $msg = "Your registration is successful.";
                    $url = "index.php";
                } else {
                    $msg = "Unable to complete registration.";
                }
            }
            break;
        case 'changePassword':
            $regno = getCleanInput($_POST["regno"]);
            $cpassword = getCleanInput($_POST["cpassword"]);
            $npassword = getCleanInput($_POST["npassword"]);
            $cnpassword = getCleanInput($_POST["cnpassword"]);
            if (valuesAreEqual($npassword, $cnpassword)) {
                $pword = retrieve("SELECT `password` FROM `user` WHERE `email` = '$email'")["password"];
                if (valuesAreEqual($pword, $cpassword)) {
                    $sql = "UPDATE `user` SET `password` = '$npassword' WHERE `email` = '$email'";
                    if (edit($sql) > 0) {
                        $msg = "Password changed successfully.";
                    } else {
                        $msg = "Unable to change password.";
                    }
                } else {
                    $msg = "The current password is incorrect.";
                }
            } else {
                $msg = "The new passwords does not match.";
            }
            break;
        case 'contact':
            $name = getCleanInput($_POST["name"]);
            $email = getCleanInput($_POST["email"]);
            $message = getCleanInput($_POST["message"]);
            $sql = "INSERT INTO `contact`(`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";
            if (insert($sql)) {
                $msg = "Your message was sent successfully.";
            } else {
                $msg = "Unable to send message.";
            }
            break;
        default:
            $msg = "Nothing to process!";
            break;
    }
?>
<script>
    alert("<?= $msg ?>");
    window.location = "../<?= $url ?>";
</script>