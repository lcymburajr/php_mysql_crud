<?php

// Include config file
require_once '../db/config.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];

$sql = "INSERT INTO users (first_name, last_name)
VALUES ('$fname', '$lname')";

if (mysqli_query($conn, $sql)) {
    echo "<h4 style='color: green;'>" . "User Created!" . "</h4>";
} else {
    echo "<span style='color:red;'>" . "Error: " . $sql . "<br>" . mysqli_error($conn) . "</span>";
}

mysqli_close($conn);
?>