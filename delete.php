<?php

require "connect.php";


if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM students WHERE id = '$id'";

    if ($conn->query($sql)) {
        echo "Deleted Successfully";
    } else {
        echo "ERROR";
    }


} else {
    echo "No student ID provided";
}


?>