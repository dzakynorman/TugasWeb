<?php 
include('server.php');
require_once('libraries/helpers.php');

render('header', array('title' => 'Masuk'));
?>

<!DOCTYPE html>
<html>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>

  <head>
    <div class="header">
    <title>Login - Nasi Goreng Kebon Sirih</title>
      <p>
        <a href="index.php" style="float: right">
          <span class="glyphicon glyphicon-home"></span>
        </a>
      </p>
      <br><h3>Nasi Goreng Kambing Kebon Sirih</h2>
    </div>
  </head>
  <body class="login-body">
    <form method="post" action="login.php">
      <?php include('errors.php'); ?>
      <div class="input-group">
        <label><i class="glyphicon glyphicon-user"></i> Username</label>
        <input type="text" name="username" class="col-md-6 form-control">
      </div>
      <div class="input-group">
        <label><i class="glyphicon glyphicon-lock"></i> Password</label>
        <input data-toggle="password" type="password" name="password" id="pass" class="form-control" size="32">
      </div>
      <!-- An element to toggle between password visibility -->
      <script type="text/javascript">
        $("#pass").password('toggle');
      </script>
      <div class="input-group">
        <button type="submit" class="btn" name="login_user">Login</button>
      </div>
      <p>
        Belum punya akun? <a href="register.php">Daftar disini!</a>
      </p>
    </form>
  </body>
</html>