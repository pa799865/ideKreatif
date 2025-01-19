<?php

$host = "localhost"; // Hostname
$username = "root"; // Username
$password = ""; // Password
$database = "idekreatif"; // Database name

$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if ($conn -> connect_error) {
    die("Database gagal terhubung: " . $conn -> connect_error);
}

?>