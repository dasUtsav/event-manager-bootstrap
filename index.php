<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<link rel="stylesheet" href="index.css">
  </head>
  <body>
		<div class="container col-8">
			<div class="d-flex justify-content-between">
				<h2 class="display-4">Sign Up</h2>
				<a href="login.php">Already signed in?</a>
			</div>
	    <form class="" action="signUpControl.php" method="post" name="registration">
				<div class="form-group">
					<label for="fn" class="lead">First Name</label>
					<input type="text" name="fn" placeholder="First name" class="form-control"><br>

					<label for="ln" class="lead">Last Name</label>
					<input type="text" name="ln" placeholder="Last name" class="form-control"><br>

					<label for="user" class="lead">Username</label>
					<input type="text" name="user" placeholder="Username" class="form-control"><br>

					<label for="pass" class="lead">Password</label>
					<input type="password" name="pass" placeholder="Password" class="form-control"><br>

					<label for="email" class="lead">Email</label>
					<input type="email" name="email" placeholder="example@gmail.com" class="form-control"><br>

					<button type="submit" class="btn btn-success btn-lg btn-block">Continue</button>
				</div>
	    </form>
		</div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
		<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
		<script src="http://ajax.microsoft.com/ajax/jquery.validate/1.11.1/additional-methods.js"></script>
		<script src="form-validation.js"></script>
  </body>
</html>
