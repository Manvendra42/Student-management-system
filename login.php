
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="style1.css">


  </head>
  <body background="hello.jpeg" class="body">
 <center>
<div class="form_deg">
<center class="title">
  LOGIN
  <h4>
					<?php

					error_reporting(0);
					session_start();
					session_destroy();

				echo $_SESSION['loginMessage'];


					?>

				</h4>
</center>
<form action="login_check.php" method="POST" class="login_form">

  <div>
    <label class="label">Username</label>
    <input type="text" name="username">
  </div>


  <div>
    <label class="label">Password</label>
    <input type="password" name="password">
  </div>


  <div class>
    <input class="btn" type="submit" name="submit" value="Login">
  </div>

</form>


</div>
 </center>
  </body>
</html>
