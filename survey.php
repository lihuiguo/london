<!DOCTYPE html>
<html>
<head>
	<title>London-Survey</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>
<body>
	<main>
		<form action="thanks.php">
				<!-- Radio Buttons/Forms here-->
			<div>
				First Name <input type="text" name="firstname">
			</div>

			<div>
				Last Name <input type="text" name="lastname">
			</div>
			<div>
				Have you ever visited London before? 
				<input type="radio" name="have-visited" value="yes"> Yes
				<input type="radio" name="have-visited" value="no"> No
			</div>
			<div>
				If so, when? 
				<input type="text" name="date-visited">
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