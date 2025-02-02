<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "alumni_db";

// MySQLi object for database connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set character set (optional, but recommended)
$conn->set_charset("utf8mb4");

// Now, $conn can be used to execute queries and interact with the database
?>
