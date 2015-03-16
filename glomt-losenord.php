<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Glömt lösenord - Vad ska jag laga?</title>

		<link rel="icon" type="image/png" href="img/icon.png">

		<!--  Init-file -->
		<?php require_once 'core/init.php'; ?>

		<!-- CSS-links -->
		<?php include 'includes/data/css-links.php'; ?>	
	</head>

<?php

	$user = new User();
	if (!Input::exists('get')) {
		$token = Token::generate();
	}
?>


	<body>
		
		<!-- Navbar -->
		<?php include 'includes/navbar.php'; ?>


		<!-- Main function -->
		<?php include 'includes/modules/glomt-losenord.php'; ?> 

		
		<!-- Footer -->
		<?php include 'includes/footer.php'; ?>


		<!-- Modals -->
			<!-- Login-modal -->
			<?php include 'modals/login.php'; ?>

			<!-- Register-modal -->
			<?php include 'modals/register.php'; ?>


		<!-- JavaScript-links -->
		<?php include 'includes/data/js-links.php'; ?>

	</body>
</html>