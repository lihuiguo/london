<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>London-Survey</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<link rel="stylesheet" href="css/override.css">
</head>
<header class="persistent">
			<div class="container">
				<h1 class="lead">London Calling!</h1>
			</div>
			<?php $iscurrent ="<a href='survey.php'>Questionnaire</a>"?>
			<?php include 'inc/nav.php';?>
			
</header>
<body>
	<main>
		<form action="thanks.php" method="post">
				<!-- Radio Buttons/Forms here-->
			<div>
				First Name <input type="text" name="first_name">
			</div>

			<div>
				Last Name <input type="text" name="last_name">
			</div>
			<div>
				What aspect of the City of London most interests you?
				<div>
				<input type="radio" name="has_visited" value="food-and-drink"> Food and Drink
				<input type="radio" name="has_visited" value="history"> History
				<input type="radio" name="has_visited" value="cultural-attractions"> Cultural Attractions
				<input type="radio" name="has_visited" value="all"> All of the above
				</div>
			</div>
			<div>
				What type of food and drink are you interested in learning more about? 
				<div>
				<input type="checkbox" name="food" value="Afternoon-Tea"> Afternoon Tea
				<input type="checkbox" name="food" value="Pubs-and-Bars"> Pubs and Bars 
				<input type="checkbox" name="food" value="Fine-Dining"> Fine Dining 
				</div>
			</div>
			<div>
				What type of cultural attractionsare you most interested in? 
				<div>
				<input type="checkbox" name="attractions" value="parks-and-gardens"> Parks and Gardens
				<input type="checkbox" name="attractions" value="amusements"> Family Amusements 
				<input type="checkbox" name="attractions" value="museums-and-galleries"> Museums and Galleries 
				</div>
			</div>
			<div>
				Would you like to visit London?
			</div>

			<div>
				If so, sign up for our newsleter for tourist tips and expert travel advice!
			</div>
			<div>
					Email <input type="text" name="email">
			</div>
			<div>
				<input type="submit" value="Submit">
			</div>


		</form>
	</main>

</body>
</html>
