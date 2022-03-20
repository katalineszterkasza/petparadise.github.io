<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "y2022";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) { 
    die("Kapcsolódás sikertelen: " . $conn->connect_error);
}

$conn->close();
?>