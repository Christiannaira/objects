<?php

//setting up the database
//inserting data into a database

$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'kodego';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}

?>