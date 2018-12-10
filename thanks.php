<?php
$connect = mysqli_connect('66.147.242.186', 'urcscon3_london', 'coffee1N/!', 'urcscon3_london');
if(isset($_POST["first_name"], $_POST["last_name"], $_POST["has_visited"], $_POST["food"], $_POST["attractions"], $_POST["email"]))
{
 $first_name = mysqli_real_escape_string($connect, $_POST["first_name"]);
 $last_name = mysqli_real_escape_string($connect, $_POST["last_name"]);
 $has_visited = mysqli_real_escape_string($connect, $_POST["has_visited"]);
 $food = mysqli_real_escape_string($connect, $_POST["food"]);
 $attractions = mysqli_real_escape_string($connect, $_POST["attractions"]);
 $email = mysqli_real_escape_string($connect, $_POST["email"]);

 $query = "INSERT INTO results(first_name, last_name, has_visited, food, attractions, email) VALUES('$first_name', '$last_name', '$has_visited', '$food', '$attractions', '$email')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>

<?php include 'inc/html-top.php';?>

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
