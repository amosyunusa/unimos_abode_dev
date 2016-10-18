<?php
$servername = "localhost";
$username = "root";
$password = "pass";
$dbname = "multiple_tbl";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>
