<?php
	if(isset($_POST['submit'])){
		// code (validate and send the data to a database)	
	}
?>

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
		<form class="contact-form" action="contact.php" method="post">
			<?php
				if(isset($_POST['submit'])){
					$name = $_POST['name'];
					$email = $_POST['email'];
					$subject = $_POST['subject'];
					$message = $_POST['message'];
					
					if(strlen($name) < 1){
						echo "<p id=\"Faild-submit\">Faild to send message! Please enter you name.</p><br><br><br>";
					}
					else{
						echo "<p class=\"successfull-submit\">Message was successfully sent " . $name . "!</p><br>";
						echo "<p class=\"successfull-submit\">Please check your email adress: " . $email . " for the verification message.</p><br>";
						echo "<p class=\"successfull-submit\">The subject was: " . $subject . "</p><br>";
						echo "<p class=\"successfull-submit\">Your message was: </p><br>";
						echo "<p class=\"successfull-submit\">" . $message . "</p><br><br><br>";
					}
				}
				else{
					echo "<p class=\"Faild-submit\">Faild to send message! Please try again.</p><br><br><br>";
				}
			?>
			<label for="name">Name:</label>
			<br>
			<input type="text" name="name" id="name" class="form-input input-placeholder focus-style" placeholder="Your name..">
			<br>
			<label for="email">E-mail:</label>
			<br>
			<input type="text" name="email" id="email" class="form-input input-placeholder focus-style" placeholder="Your email..">
			<br>
			<label for="subject">Subject:</label>
			<br>
			<input type="text" name="subject" id="subject" class="form-input input-placeholder focus-style" placeholder="Enter the subject..">
			<br>
			<label for="message">Message:</label>
			<br>
			<textarea id="message" name="message" class="contact-message input-placeholder focus-style" placeholder="Write your message.."></textarea>
			<br>
			<input type="submit" name="submit" class="submit-button focus-style" value="Send">
		</form>
		<br class="clear"/>
	</main>
	<?php include '../templates/footer.php';?>
</body>
</html>