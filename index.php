<?php
require_once 'includes\config_session.php';
require_once 'includes\signup_view.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="vewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="index.css" />
</head>
<body>
  <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="container mt-3 text-center">
            <h2>Sign UP</h2>
            <form action="includes/signup.php" method="POST">
              <div class="mb-3 mt-3">
                <input type="text" class="form-control w-70 " placeholder="Username" name="username">
              </div>
              <div class="mb-3">
                <input type="password" class="form-control w-70" placeholder="Enter Password" name="pswd">
              </div>
              <div class="mb-3 mt-3">
                <input type="text" class="form-control w-70" placeholder="First Name" name="firstname">
              </div>
              <div class="mb-3 mt-3">
                <input type="text" class="form-control w-70" placeholder="Last Name" name="lastname">
              </div>
              <div class="mb-3 mt-3">
                <input type="email" class="form-control w-70" placeholder="Enter Email" name="email">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
        <div class="col-lg-6">
            <div class="container mt-3 text-center">
            <h2>Login</h2>
            <form action="includes/login.php" method="POST">
              <div class="mb-3 mt-3">
                <input type="email" class="form-control w-70" id="email" placeholder="Enter email" name="email">
              </div>
              <div class="mb-3">
                <input type="password" class="form-control w-70" id="pwd" placeholder="Enter password" name="pswd">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
    </div>
</div>

<?php
check_signup_errors();
?>
</body>
</html>