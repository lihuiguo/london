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
			<section class="strong-follow">

				<nav>
					<ul>
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="survey.php">Questionnaire</a>
						</li>
					</ul>
				</nav>
			</section>
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
				Have you ever visited London before?
				<input type="radio" name="has_visited" value="yes"> Yes
				<input type="radio" name="has_visited" value="no"> No
			</div>
			<div>
				If so, when?
				<input type="text" name="date_visited">
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
