<?php
// db_connection.php

$servername = "localhost";  // Your database server
$username = "root";         // Your database username
$password = "12345";             // Your database password
$dbname = "havenist";  // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
