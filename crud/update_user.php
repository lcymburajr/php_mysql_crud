<?php

// Include config file
require_once '../db/config.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];

$update_fname = $_POST['update_fname'];
$update_lname = $_POST['update_lname'];

$sql = "SELECT id FROM users WHERE first_name='$fname' AND last_name='$lname'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Output data
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
    }

    $sql = "UPDATE users SET first_name='$update_fname', last_name='$update_lname' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<h4 style='color: green;'>" . "User updated Successfully!" . "</h4>";
    } else {
        echo "<h4 style='color:red;'>" . "Error Updating Record: " . $conn->error . "</h4>";
    }
} else {
    echo "<h4 style='color:red;'>" . "Name does not match." . "</h4>";
}

mysqli_close($conn);
?>