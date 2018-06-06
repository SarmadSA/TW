<?php
	$name = "";
	$email = "";
	$subject = "";
	$message = "";

	//Check for submittion.
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		
		//Remove all spaces at the right and the left of the input.
		$name = ltrim($name);
		$name = rtrim($name);
		$email = ltrim($email);
		$email = rtrim($email);
		$subject = ltrim($subject);
		$subject = rtrim($subject);
		$message = ltrim($message);
		$message = rtrim($message);
	}
	
	function isValidName($submittedName){
		$isValid = false;
		if((strlen($submittedName) > 0) && (!preg_match('/[^A-Za-z ]/', $submittedName))){
			$isValid = true;
		}
		return $isValid;
	}

	function isValidEmail($submittedEmail){
		$isValid = false;
		if((strlen($submittedEmail) > 0) && filter_var($submittedEmail, FILTER_VALIDATE_EMAIL)){
			$isValid = true;
		}
		return $isValid;
	}

	function isValidSubject($submittedSubject){
		$isValid = false;
		if(!preg_match('/[^A-Za-z0-9.#\\-%&$ ]/', $submittedSubject)){
			$isValid = true;
		}
		return $isValid;
	}

	function isValidMessage($submittedMessage){
		$isValid = false;
		if((strlen($submittedMessage) > 0) && (!preg_match('/[^A-Za-z0-9.#\\-%&$ ]/', $submittedMessage))){
			$isValid = true;
		}
		return $isValid;
	}
	
	function printNameError($submittedName){
		$errorMessage = "";
		if(isset($_POST['submit']) && (strlen($submittedName) < 1)){
			$errorMessage = "Please enter your name!";
		}
		else if(isset($_POST['submit']) && preg_match('/[^A-Za-z ]/', $submittedName)){
			$errorMessage = "Ivalid name! Please enter your real name.";
		}
		echo $errorMessage;
	}

	function printEmailError($submittedEmail){
		$errorMessage = "";
		if(isset($_POST['submit']) && (strlen($submittedEmail) < 1)){
			$errorMessage = "Please enter your Email!";
		}
		else if(isset($_POST['submit']) && !filter_var($submittedEmail, FILTER_VALIDATE_EMAIL)){
			$errorMessage = "Ivalid Email! Please enter your real Email!";
		}
		echo $errorMessage;
	}

	function printSubjectError($submittedSubject){
		$errorMessage = "";
		if(isset($_POST['submit']) && preg_match('/[^A-Za-z0-9.#\\-%&$ ]/', $submittedSubject)){
			$errorMessage = "Ivalid Characters in Subject!";
		}
		echo $errorMessage;
	}

	function printMessageError($submittedMessage){
		$errorMessage = "";
		if(isset($_POST['submit']) && (strlen($submittedMessage) < 1)){
			$errorMessage = "Message can not be empty!";
		}   
		else if(isset($_POST['submit']) && preg_match('/[^A-Za-z0-9.#\\-%&$ ]/', $submittedMessage)){
			$errorMessage = "Ivalid Characters in message!";
		}
		echo $errorMessage;
	}

	function printSubmittionMessage($submittedName, $submittedEmail, $submittedSubject, $submittedMessage){
		$submittionMessage = "";
			if((isset($_POST['submit'])) && (isValidName($submittedName)) && (isValidEmail($submittedEmail)) && (isValidSubject($submittedSubject)) && (isValidMessage($submittedMessage))){
				$submittionMessage = 
				"<p class=\"successfull-submit\">Message was successfully sent " . $submittedName . "!</p>" . 
				"<p class=\"successfull-submit\">Please check your email: " . $submittedEmail . " for verifiction code.</p>" //add more messages here
				. "<br><br>";
			}
			else if((isset($_POST['submit'])) && (!isValidName($submittedName) || !isValidEmail($submittedEmail) || !isValidSubject($submittedSubject)|| !isValidMessage($submittedMessage))){
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
	<link rel="stylesheet" type="text/css" href="styles/contactStyle.css">
	<link rel="stylesheet" type="text/css" href="styles/mainStyle.css">
	<link rel="stylesheet" type="text/css" href="styles/footer.css">
	<link rel="stylesheet" type="text/css" href="styles/logo.css">
	<link rel="stylesheet" type="text/css" href="styles/form.css">
	<link rel="stylesheet" type="text/css" href="styles/header.css">
	<link rel="stylesheet" type="text/css" href="styles/sliderStyle.css">
	<link rel="stylesheet" type="text/css" href="styles/navigationMenueStyle.css">
	<link rel="stylesheet" type="text/css" href="styles/searchBarStyle.css">
	<link rel="stylesheet" type="text/css" href="styles/contentStyle.css">
	<link rel="stylesheet" type="text/css" href="styles/productProfileStyle.css">
	<link href="https://fonts.googleapis.com/css?family=Abel|Saira+Condensed" rel="stylesheet">
</head>

<body>
	<?php include 'templates/navigationMenu.php';?>
	<main class="main">
		<div class="page-tittle"><h2>Contact us</h2></div>
		<form class="contact-form" action="contact.php" method="post">
			<!--Prints a message when submitting, telleing the user whether the submittion was succsessfull or faild-->
			<?php printSubmittionMessage($name,$email,$subject,$message);?>
			<label for="name">Name:</label>
			<br>
			<input type="text" name="name" id="name" class="form-input input-placeholder focus-style" placeholder="Your name..">
			<!-- Prints an error message when user input is invalid-->
			<span class="error-message"> * <?php printNameError($name);?> </span>
			<br>
			<label for="email">E-mail:</label>
			<br>
			<input type="text" name="email" id="email" class="form-input input-placeholder focus-style" placeholder="Your email..">
			<span class="error-message"> * <?php printEmailError($email);?></span>
			<br>
			<label for="subject">Subject:</label>
			<br>
			<input type="text" name="subject" id="subject" class="form-input input-placeholder focus-style" placeholder="Enter the subject.."> 
			<span class="error-message"> <?php printSubjectError($subject);?></span>
			<br>
			<label for="message">Message:</label>
			<span class="error-message"> * <?php printMessageError($message);?></span>
			<br>
			<textarea id="message" name="message" class="contact-message input-placeholder focus-style" placeholder="Write your message.."></textarea>
			<br>
			<input type="submit" name="submit" class="submit-button focus-style" value="Send">
		</form>
		<br class="clear"/>
	</main>
	<?php include 'templates/footer.php';?>
</body>
</html>