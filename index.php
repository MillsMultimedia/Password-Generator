<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <?php require 'php/pw.php' ?>
    <title>Project 2: Password Generator</title>
</head>
<body>

<div class="container">
	<div class="col-md-8 col-md-offset-2" id="wrapper">
		<h1 class="text-center">NERDY PASSWORD GENERATOR</h1>
		<h3 class="text-center" id="instructions">Fill out the form to generate a secure password<br>using your favorite movies</h3>

		<form method='POST' action='index.php'>
			<div class="form-group text-center">
				<h4>Pick your favorite</h4>
				<div class="radio">
					<label class="radio-inline"><input type="radio" name="fav" value="wars">Star Wars</label>
					<label class="radio-inline"><input type="radio" name="fav" value="trek">Star Trek</label>
				</div>
			</div>

			<div class="form-group text-center">
				<label>Number of Words (max 5):</label> <input type="text" name="wordCount" style="width: 40px;color:#000;">
			</div>

			<div class="form-group text-center">
				<h4>Does your password require any of the following (check all that apply):</h4>
				<div class="radio">
				  <label><input type="radio" name="caps" value="caps">Capital Letters &nbsp; </label>
				  <label><input type="radio" name="chars" value="chars">Special Characters</label>
				</div>
				<input type="submit" value="Nerd Me" id="submit">
			</div>
		</form>

		<h3 class="text-center col-md-8 col-md-offset-2 col-xs-12" id="password">
			<?php echo $output; ?>
		</h3>
		<div class="clearfix"></div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>