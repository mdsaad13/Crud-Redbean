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
    <h1>Create account</h1>
    <form action="create_login_controller.php" method="post">
      <div class="form-group">
        <label for="exampleDropdownFormname1">Name</label>
        <input type="text" class="form-control" id="exampleDropdownFormname" placeholder="Name" name="name">
      </div>
      <div class="form-group">
        <label for="exampleDropdownFormEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com" name="email">
      </div>
      <div class="form-group">
        <label for="exampleDropdownFormPassword1">Password</label>
        <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password" name="password">
      </div>
      <div class="center">
        <button type="submit" class="btn btn-primary" name="create">Create account</button>
      </div>
      <div class="form-group">
        <a href="login.php">Login</a>
        <br>
        <a href="details.php">View users</a>
      </div>
    </form>
  </div>
</body>

</html>