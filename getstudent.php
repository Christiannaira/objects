<?php

require "connect.php";


if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "SELECT * FROM students WHERE id = '$id'";

    $results = $conn->query($sql);

    if ($results->num_rows > 0) {

        $row = $results->fetch_assoc();

        $student = array(
            "id" => $row['id'],
            "firstname" => $row['firstname'],
            "lastname" => $row['lastname'],
            "grade" => $row['grades']
        );

        $json = json_encode($student);
        header('Content-Type: application/json');
        echo $json;

    } else {
        echo "No students found";
    }
} else {
    echo "No student ID provided";
}


?>