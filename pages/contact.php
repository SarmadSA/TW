<?php
	$submitted = false;
	$name = "";
	$email = "";
	$subject = "";
	$message = "";

	if(isset($_POST['submit'])){
		$submitted = true;
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
	}
	
	function isValidName($submittedName){
		$isValid = false;
		if((strlen($submittedName) > 0) && (!preg_match('/[^A-Za-z]/', $submittedName))){
			$isValid = true;
		}
		return $isValid;
	}
	
	function printNameErrorMessage($submittedName, $isSubmitted){
		$errorMessage = "";
		if($isSubmitted && (strlen($submittedName) < 1)){
			$errorMessage = "Please enter your name!";
		}
		else if($isSubmitted && preg_match('/[^A-Za-z]/', $submittedName)){
			$errorMessage = "Ivalid name! Please enter your real name.";
		}
		echo $errorMessage;
	}
	
	function isValidEmail(){
		//validate the email input and return true if valid, false otherwise
		return true;
	}

	function printSubmittionMessage($submittedName, $submittedEmail, $isSubmitted){
		$submittionMessage = "";
			if(($isSubmitted) && (isValidName($submittedName)) && (isValidEmail())){
				$submittionMessage = 
				"<p class=\"successfull-submit\">Message was successfully sent " . $submittedName . "!</p>" . 
				"<p class=\"successfull-submit\">Please check your email: " . $submittedEmail . " for verifiction code.</p>" //add more messages here
				. "<br><br>";
			}
			else if(($isSubmitted) && (!isValidName($submittedName) || !isValidEmail())){
				$submittionMessage ="<p class=\"error-message\">Faild to submit message, please try again!</p><br><br>";
			}
		echo $submittionMessage;
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
			<!--Prints a message when submitting, telleing the user whether the submittion was succsessfull or faild-->
			<?php printSubmittionMessage($name,$email,$submitted);?>
			<label for="name">Name:</label>
			<br>
			<input type="text" name="name" id="name" class="form-input input-placeholder focus-style" placeholder="Your name..">
			<!-- Prints an error message when user input is invalid-->
			<span class="error-message"> <?php printNameErrorMessage($name, $submitted);?> </span>
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