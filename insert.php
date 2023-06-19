<?php

require "connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data = json_decode(file_get_contents('php://input'), true);

    $firstname = $data["firstname"];
    $lastname = $data["lastname"];
    $grade = $data["grades"];

    $sql = 'INSERT INTO students(firstname, lastname, grades)
        VALUES ("' . $firstname . '", "' . $lastname . '", ' . $grade . ')';

    if ($conn->query($sql)) {
        echo "Student Added.";
    }

} else {
    echo "Invalid Request";
}

?>