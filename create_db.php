<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Create Data base</title>
</head>
<style>
    .main {
        max-width: 600px;
        margin-top: 100px;
        background: #E9ECEF;
        padding: 25px 30px;
        border-radius: 20px;
    }
</style>

<body>
    <div class="container main">
        <h2 style="text-align:center">Generate config.php file</h2>
        <br>
        <form method="post" action="create_db.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Data base name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter database name" name="dbname">
                <small class="form-text text-muted">If you've already created database, please specify the name</small>
            </div>

            <div class="form-group" style="text-align: center;">
                <button type="submit" class="btn btn-primary">Create database</button>
            </div>
        </form>
    </div>
</body>

</html>
<?php
if (isset($_POST['dbname'])) {

    // CODE TO CREATE DB
    $servername = "localhost";
    $username = "root";
    $password = "";
    $DBName = $_POST['dbname'];

    // Creating a connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Creating a database named newDB
    $sql = "CREATE DATABASE $DBName";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully with the name $DBName";
    } else {
        echo "Database '$DBName' exists!<br>Skipping Database create...";
    }
    // closing connection
    $conn->close();
    echo "<br>";
    $content = '<?php

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
        private $DBName = "' . $DBName . '";
    
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
    ';

    // $file = fopen('controllers/config.php', 'w');
    // fwrite($file, $content);
    // fclose($file);
    // echo "File generate successful - ./controllers/config.php";
    // echo "<br>";
}
?>