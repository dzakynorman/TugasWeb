<?php 

include('server.php');
require_once('libraries/helpers.php');

render('header', array('title' => 'Buat Akun'));
?>
<!DOCTYPE html>
<html>
<head>
  <title>Daftar - NGKKS</title>
  <div class="header">
  <h2>Register</h2>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  </div>
</head>
<title>Profile</title>
<body class="login-body">
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Sudah buat akun? <a href="login.php">Masuk</a>
  	</p>
  </form>
</body>
</html>