<!doctype html>
<html lang="nb">
<head>
	<link rel="shortcut icon" href="images/techwizzle-icon.png">
	<meta charset="utf-8">
	<title>TechWizzle</title>
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
	<header><?php include 'templates/navigationMenu.php';?></header>
	<main class="main">
		<?php include 'templates/slider.php';?>  
		<aside>
			<h2>Get the latest updates</h2>
			<br>
			<?php include 'templates/subscribeForm.php';?>  
		</aside>

		<section>
			<div class="section-tittle-box">
				<h2 class="profile-section-tittle">Featured Product Profiles</h2>
			</div>
			<?php include 'section2.php';?>
		</section>

		<!--Product profiles section-->
		<section>
			<div class="section-tittle-box">
				<h2 class="profile-section-tittle">New Product Profiles</h2>
			</div>
			<?php include 'section2.php';?>
			<?php include 'section2.php';?>
		</section>
		
		<br class="clear"/>
	</main>
	
	<!--Slutten av "container"-->	
	<?php include 'templates/footer.php';?>
	
</body>
</html>