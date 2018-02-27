<?php

// Include config file
require_once '../db/config.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];

$sql = "SELECT id FROM users WHERE first_name='$fname' AND last_name='$lname'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Output data
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
    }

    // Delete a record
    $sql = "DELETE FROM users WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<h4 style='color: green;'>" . "User Deleted Successfully!" . "</h4>";
    } else {
        echo "<h4 style='color:red;'>" . "Error Deleting Record: " . $conn->error . "</h4>";
    }

} else {
    echo "<h4 style='color:red;'>" . "Name does not match." . "</h4>";
}

$conn->close();
?>

