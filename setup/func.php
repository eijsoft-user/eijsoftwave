<?php
    require_once "db.php";

    function getCleanInput($input) {
        return htmlspecialchars(addslashes($input));
    }

    function insert($sql) {
        global $conn;
        $result = $conn->query($sql);
        return $result;
    }

    function insertNewUser($sql, $value) {
        global $conn;
        $result = "unknown";
        if (valueExists("user", "user_email", $value)) {
            $result = "alreadyExist";
        } else {
            if ($conn->query($sql)) {
                $result = "ok";
            }
        }
        return $result;
    }

    function valueExists($table, $field, $value) {
        $result = false;
        global $conn;
        $sql = "SELECT * FROM $table WHERE $field = '$value'";
        $query = $conn->query($sql);
        if ($query->num_rows > 0) {
            $result = true;
        }
        return $result;
    }

    function twoValueExists($table, $field1, $value1, $field2, $value2) {
        $result = false;
        global $conn;
        $sql = "SELECT * FROM $table WHERE $field1 = '$value1' AND $field2 = '$value2'";
        $query = $conn->query($sql);
        if ($query->num_rows > 0) {
            $result = true;
        }
        return $result;
    }

    function threeValueExists($table, $field1, $value1, $field2, $value2, $field3, $value3) {
        $result = false;
        global $conn;
        $sql = "SELECT * FROM $table WHERE $field1 = '$value1' AND $field2 = '$value2' AND $field3 = '$value3'";
        $query = $conn->query($sql);
        if ($query->num_rows > 0) {
            $result = true;
        }
        return $result;
    }

    function retrieve($sql) {
        $row = array();
        global $conn;
        $result = $conn->query($sql);
        if (!$result) {
            $row = array();
        } else {
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
            }
        }
        return $row;
    }

    function retrieveAll($sql) {
        $row = array();
        global $conn;
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
           $row = $result->fetch_all(MYSQLI_ASSOC);
        }
        return $row;
    }

    function edit($sql) {
        global $conn;
        $result = $conn->query($sql);
        return $conn->affected_rows;
    }

    function remove($sql) {
        global $conn;
        $result = $conn->query($sql);
        return $conn->affected_rows;
    }

    function valuesAreEqual($value1, $value2) {
        
        return $value1 == $value2;
    }

    function displayAlert($msg, $type = "success") {
        if ($type == "success") {
            echo "<div class='alert alert-success alert-dismissible fade in'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                $msg
            </div>";
        } else {
            echo "<div class='alert alert-danger alert-dismissible fade in'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                $msg
            </div>";
        }
    }

    function getRecordCount($table) {
        global $conn;
        $sql = "SELECT * FROM `$table`";
        $result = $conn->query($sql);
        return $result ? $result->num_rows : 0;
    }

    function getStatusColor($status) {
        if ($status == "Pending") {
            $color = "badge-danger";
        } elseif ($status == "In progress") {
            $color = "badge-info";
        } elseif ($status == "Received") {
            $color = "badge-info";
        } else {
            $color = "badge-success";
        }
        return $color;
    }

    function getDetails($val) {
        $query = retrieve("SELECT `fullname`, `dept` FROM `student` WHERE `regno` = '$val'");
        $fullname = $query["fullname"];
        $dept = $query["dept"];
        return "$fullname ($val) <br> $dept";
    }
?>