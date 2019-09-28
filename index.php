<?php
// CODE TO CREATE DB

$servername = "localhost";
$username = "root";
$password = "";

// Creating a connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Creating a database named newDB
$sql = "CREATE DATABASE rb_test";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully with the name newDB";
} else {
    echo $conn->error;
}
// closing connection
$conn->close();
