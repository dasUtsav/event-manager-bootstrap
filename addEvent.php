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
		<link rel="stylesheet" href="addEvent.css">
  </head>
  <body>

		<div class="jumbotron bg-primary text-white jumbotron-fluid">
			<div class="container text-center">
				<h1 class="display-4">Add Event</h1>
				<p class="lead">Add a new event to the fest!</p>
			</div>
		</div>

    <div class="container form">
			<form class="" action="addEventControl.php" method="post">
				<div class="d-flex justify-content-between">
					<h5 class="display-4">Fill this please!</h5>
					<a href="homePage.php">Return to sender</a>
				</div><br>
				<div class="form-group">
					<label for="name" class="lead">What's it called?</label><br>
					<input type="text" name="name" placeholder="Name" class="form-control"><br>

					<label for="genre" class="lead">What's it about?</label>
					<input type="text" name="genre" placeholder="Genre" class="form-control"><br>

					<label for="venue" class="lead">Where is it going to be?</label>
					<input type="text" name="venue" placeholder="Venue" class="form-control"><br>

					<label for="date" class="lead">When mate?</label>
					<input type="date" name="date" class="form-control"><br>

					<label for="summary" class="lead">Tell us something about it!</label>
					<input type="text" name="summary" placeholder="Summary" class="form-control summary"><br>

					<button type="submit" class="btn btn-success btn-lg btn-block">Confirm</button>
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
		<script src="event-validation.js"></script>

  </body>
</html>
