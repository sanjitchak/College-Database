<?php include('departmentserver.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
         body {
            background-image: url("login.jpg");
background-size:cover;
			}
      </style>

</head>
<body>

	<div class="header">
		<h2>Login for Department</h2>
	</div>
	
	<form method="post" action=""departmentlogin.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
	
	</form>


</body>
</html>
