<?php
$servername = "localhost"; // Change this if your MySQL server is running on a different host
$username = "root"; // Default username for MySQL in XAMPP is "root"
$password = ""; // Default password is empty in XAMPP
$database = "agrimovers"; // Replace "your_database_name" with the name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

// Close connection
$conn->close();
?>
