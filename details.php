<?php
require_once 'controllers/class.php';

$obj = new Operations;
$FetchDetails = $obj->SelectAll('users');
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

    <title>Details</title>
</head>

<body>
    <div class="container">
        <div style="padding-bottom: 60px;">
            <a href="login.php" class="btn btn-primary" style="float: left;">Login</a>
            <a href="create_acc.php" class="btn btn-primary" style="float: right;">Create Account</a>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($FetchDetails as $FetchDetails) { ?>
                    <tr>
                        <th scope="row"><?= $FetchDetails['id'] ?></th>
                        <td><?= $FetchDetails['name'] ?></td>
                        <td><?= $FetchDetails['email'] ?></td>
                        <td><?= $FetchDetails['password'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>