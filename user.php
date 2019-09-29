<?php
require_once 'controllers/class.php';
$id = Session::GetSession('id');
$obj = new Operations;

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>Create Account</title>
</head>

<body>
    <div class="container main">
        <h4>This page is to demonstrate sessions</h4>
        <br>
        <?php if ($id) {
            $FetchDetails = $obj->SelectByID('users', $id);
            // print_r($FetchDetails);
            ?>
            <p>Hello <b><?= $FetchDetails['name'] ?>,</b></p>
            <p><b>Your Session is started</b></p>
            <p>This page also shows how to fetch single user from database</p>
            <p>To test kindly <a href="logout.php">Logout</a></p>

        <?php } else { ?>
            <p>Session does not Exists, Kindly Login to demonstrate this page</p>
        <?php } ?>
        <br>
        <a href="login.php" class="btn btn-outline-primary">Login</a>
        <a href="create_acc.php" class="btn btn-outline-success">Create Account</a>
        <a href="details.php" class="btn btn-outline-info">View users</a>
    </div>
</body>

</html>