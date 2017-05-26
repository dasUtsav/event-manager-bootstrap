<?php
	session_start();

	$user = $_SESSION["user"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>

	<!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

	<script src="https://use.fontawesome.com/1334479139.js"></script>
	<link rel="stylesheet" href="homepage.css">

</head>
<body>

<div class="jumbotron jumbotron-fluid bg-primary text-white">
	<div class="container text-center">
		<h1 class="display-3">Event Manager</h1>
		<p class="lead">Manage your events with ease...</p>
	</div>
</div>

<div class = "container">
<div class="row">
<div class="col-6">

<a href="addEvent.php" class="add bg-primary text-white"><i class="fa fa-plus" aria-hidden="true"></i>  Add Event</a>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eventmanager";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM events";
$result = $conn->query($sql);

if($result->num_rows > 0){
	//output of each row
	while($row = $result->fetch_assoc()){?>
	<div class="card">
		<div class="card-block">


		<h3 class="card-title"><?php echo $row["name"]?></h3><?php echo " Genre: ".$row["genre"]."<br> Venue: ".$row["venue"]."<br> Date: ".$row["date"]."<br> Summary: ".$row["summary"]."<br>";

?>
		<form action="registerControl.php" method="POST">
		<input type="hidden" name="name"
		 value="<?php echo $row["name"]; ?>" >
		<button type="submit" class="bg-primary text-white">Register</button>
		</form>
		</div>
		</div>
		<br><br>
<?php

	}
}

else{
	echo "The table is empty brah.";
}

?>

</div>

<div class = "col-6">
<div class="registered">

<div class = "welcome bg-primary text-white d-flex justify-content-around"><?php echo "Welcome,  ".$_SESSION["user"]; ?>
<a href="logOutControl.php" class="out text-white">Log Out</a>
</div>

<h2 class="display-5 text-center">Your Events</h2>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eventmanager";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT* FROM attending WHERE username = '$user'";
$result = $conn->query($sql);

if($result->num_rows > 0){
	//output of each row
	while($row = $result->fetch_assoc()){?>
	<div class = "unsubscribe d-flex justify-content-around">
	<?php
		echo $row["name"];

	?>

<form action = "unsubscribe.php" method = "POST">
<input type="hidden" name = "name" value = "<?php echo $row["name"]; ?>">
<span data-toggle="tooltip" title="Unsubscribe" data-placement="right"><button type="submit" id = "trash"<i class="fa fa-trash" aria-hidden="true"></i></button></span>
</form>
</div>

<?php
	}
 }
?>
</div>
</div>
</div>
</div>
</div>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
 <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<script>
	$(function(){
		$('[data-toggle="tooltip"]').tooltip();
	});
</script>

</body>
</html>
