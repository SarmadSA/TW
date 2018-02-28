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
				$submitted = false;
				if(isset($_POST['submit'])){
					$submitted = true;
					$name = $_POST['name'];
					$email = $_POST['email'];
					$subject = $_POST['subject'];
					$message = $_POST['message'];
					
					function validateName($submittedName){
						if((strlen($submittedName) > 0) && (!preg_match('/[^A-Za-z0-9.#\\-$]/', $submittedName)) && (!is_numeric($submittedName))){
							$isValid = true;
						}
						return $isValid;
					}
					
					if(validateName($name)){
						echo "<p class=\"successfull-submit\">Message was successfully sent " . $name . "!</p><br>";
						echo "<p class=\"successfull-submit\">Please check your email adress: " . $email . " for the verification message.</p><br>";
					}
				}
			?>
			<label for="name">Name:</label>
			<br>
			<input type="text" name="name" id="name" class="form-input input-placeholder focus-style" placeholder="Your name..">
			<span class="error-message">
				<?php 
					if($submitted && (strlen($name) > 0)){
						if(preg_match('/[^A-Za-z0-9.#\\-$]/', $name) || is_numeric($name)){
							echo "Ivalid name! Please enter your real name";
						}
						else{
							$validName = true;
							//Valid! send to database or do whatever you want 
						}
					}
					else if($submitted && (strlen($name) < 1)){
						echo "Please enter your name!";
					}
				?>
			</span>
			<br>
			<label for="email">E-mail:</label>
			<br>
			<input type="text" name="email" id="email" class="form-input input-placeholder focus-style" placeholder="Your email..">
			<span class="error-message"><?php echo "Invaild Name"?></span>
			<br>
			<label for="subject">Subject:</label>
			<br>
			<input type="text" name="subject" id="subject" class="form-input input-placeholder focus-style" placeholder="Enter the subject.."> 
			<span class="error-message"><?php echo "Invaild Name"?></span>
			<br>
			<label for="message">Message:</label>
			<span class="error-message"><?php echo "Message can not be empty!"?></span>
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