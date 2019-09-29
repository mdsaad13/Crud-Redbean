<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">

  <title>Login</title>
</head>

<body>
  <div class="container main">
    <?php
    if (isset($_REQUEST['status'])) {
      if ($_REQUEST['status'] == 1) { ?>
        <div class="alert alert-success" role="alert">
          Login Success!
        </div>
      <?php
        } else if ($_REQUEST['status'] == 2) { ?>
        <div class="alert alert-danger" role="alert">
          Invalid Credentials!
        </div>
      <?php
        } else if ($_REQUEST['status'] == 3) { ?>
        <div class="alert alert-warning" role="alert">
          Email does not exists!
        </div>
    <?php
      }
    }

    ?>

    <h1>Login</h1>
    <form action="create_login_controller.php" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" required>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" name="password" required>
      </div>
      <div class="center">
        <button type="submit" class="btn btn-primary" name="login">Login</button>
      </div>
      <div class="form-group">
        <a href="create_acc.php">Create Account</a>
        <br>
        <a href="details.php">View users</a>
      </div>
    </form>
  </div>
</body>

</html>