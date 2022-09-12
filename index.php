<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <div class="header">
  	<h2>Registration Form</h2>
  </div>

  <form method="post" action="index.php">
  	<?php include('errors.php'); ?>
    <div class="input-group">
  	  <label>Firstname</label>
  	  <input type="text" name="firstname">
  	</div>
    <div class="input-group">
  	  <label>Middlename</label>
  	  <input type="text" name="middlename">
  	</div>
    <div class="input-group">
  	  <label>Lastname</label>
  	  <input type="text" name="lastname">
  	</div>
    <div class="input-group">
  	  <label>Gender</label>
  	  <input type="text" name="gender">
  	</div>
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
  	  <input type="password_1" name="password">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password_2" name="confirmpassword">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  </form>
</body>
</html>
