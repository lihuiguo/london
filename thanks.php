<?php
$connect = mysqli_connect('66.147.242.186', 'urcscon3_london', 'coffee1N/!', 'urcscon3_london');
if(isset($_POST["first_name"], $_POST["last_name"], $_POST["has_visited"], $_POST["date_visited"], $_POST["email"]))
{
 $first_name = mysqli_real_escape_string($connect, $_POST["first_name"]);
 $last_name = mysqli_real_escape_string($connect, $_POST["last_name"]);
 $has_visited = mysqli_real_escape_string($connect, $_POST["has_visited"]);
 $date_visited = mysqli_real_escape_string($connect, $_POST["date_visited"]);
 $email = mysqli_real_escape_string($connect, $_POST["email"]);

 $query = "INSERT INTO results(first_name, last_name, has_visited, date_visited, email) VALUES('$first_name', '$last_name', '$has_visited', '$date_visited', '$email')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Thanks!</title>
  <link rel="stylesheet" href="css/override.css">

</head>
<header class="persistent">
			<div class="container">
				<h1 class="lead">London Calling!</h1>
			</div>
			
</header>
<body>
	<div>
		Thank you for your input!
	</div>
	<div>
		<a href="index.php"> Home</a>
	</div>
</body>
</html>
