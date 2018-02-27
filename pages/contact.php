<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact us</title>
	<link rel="stylesheet" type="text/css" href="../styles/contactStyle.css">
	<?php include '../templates/styleSheets.php';?>
</head>

<body>
	
	<?php include '../templates/header.php';?>
	<?php include '../templates/navigationMenu.php';?>
	<main class="container">
		<div class="page-tittle"><h2>Contact us</h2></div>
		<form class="contact-form">
			<label for="name">Name:</label>
			<br>
			<input type="text" id="name" class="form-input input-placeholder focus-style" placeholder="Your name..">
			<br>
			<label for="email">E-mail:</label>
			<br>
			<input type="text" id="email" class="form-input input-placeholder focus-style" placeholder="Your email..">
			<br>
			<label for="subject">Subject:</label>
			<br>
			<input type="text" id="subject" class="form-input input-placeholder focus-style" placeholder="Enter the subject..">
			<br>
			<label for="message">Message:</label>
			<br>
			<textarea id="message" class="contact-message input-placeholder focus-style" placeholder="Write your message.."></textarea>
			<br>
			<input type="submit" class="submit-button focus-style" value="Send">
		</form>
		<br class="clear"/>
	</main>
	<?php include '../templates/footer.php';?>
</body>
</html>