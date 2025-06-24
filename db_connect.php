<?php
$servername = "localhost"; // Change this to your server name if needed
$username = "root"; // Database username
$password = ""; // Database password
$database = "rotaract_club"; // Database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
