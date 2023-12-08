<?php

$host = "localhost";  // Hostname or IP address of your MySQL server
$username = "root";  // Your MySQL username
$password = "";  // Your MySQL password
$database = "bugtrackerdb";  // Your MySQL database name


$conn = mysqli_connect($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection Failed" . $conn->connect_error);
}
