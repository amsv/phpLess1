<?php
  include_once 'models/config.php';


if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE images SET seen='10' WHERE id=1";

if (mysqli_query($link, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($link);
}

mysqli_close($link);