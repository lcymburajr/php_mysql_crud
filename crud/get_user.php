<?php

// Include config file
require_once '../db/config.php';

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Output data
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['first_name'] . "</td>";
        echo "<td>" . $row['last_name'] . "</td>";
        echo "<td>" . $row['reg_date'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "0 Results";
}

mysqli_close($conn);
?>

