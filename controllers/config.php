<?php

/**
 * Database connection 
 * @Author: Mohammed Saad
=====================================
   PROPERTY OF MOHAMMED SAAD
 * instagram = https://www.instagram.com/mohammed.__.saad/
 */
abstract class DB
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $DBName = "rb_test";

    protected function DB_Connect(bool $flag)
    {
        if ($flag == TRUE) {
            R::setup("mysql:host=" . $this->host . ";dbname=" . $this->DBName, $this->username, $this->password);
            R::useFeatureSet("novice/latest");
        } else if ($flag == FALSE) {
            R::close();
        }
    }
}
// R::setup('mysql:host=localhost; dbname=rb_test', 'root', '');



// $obj->DB_Connect(true);



/* CODE TO CREATE DB

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
    echo "Error creating database: " . $conn->error;
}
// closing connection
$conn->close();*/
