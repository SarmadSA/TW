<!doctype html>
<html lang="nb">
<head>
	<meta charset="utf-8">
	<title>Sarmad Abbas</title>
	<link rel="stylesheet" type="text/css" href="styles/mainStyle.css">
	<link rel="stylesheet" type="text/css" href="styles/headerStyle.css">
	<link rel="stylesheet" type="text/css" href="styles/sliderStyle.css">
	<link rel="stylesheet" type="text/css" href="styles/navigationMenueStyle.css">
	<link rel="stylesheet" type="text/css" href="styles/searchBarStyle.css">
	<link rel="stylesheet" type="text/css" href="styles/contentStyle.css">
	<link rel="stylesheet" type="text/css" href="styles/productProfileStyle.css">
	<link rel="stylesheet" type="text/css" href="styles/footerStyles.css">
</head>
<body>
	<?php include 'templates/header.php';?>
	<?php include 'templates/navigationMenu.php';?>
	<main id="container">   
		<aside>
			<h2>Build of the week</h2>
			<br>
		</aside>

		<section>
			<div class="section-tittle-container">
				<h2 class="top-section-tittle">Siste Artikler:</h2>
			</div>
			<?php include 'templates/slider.php';?>
			<?php include 'section1.php';?>
		</section>

		<!--Product profiles section-->
		<section>
			<h2 class="section-to-tittle-container">Featured Product Profiles</h2>
			<?php include 'section2.php';?>
		</section>
		
		<!--add section name here-->
		<section>
			<h2 class="section-to-tittle-container">CPU comparisons</h2>
			<?php include 'section3.php'?>
		</section>
		
		<br class="clear"/>
	</main>
	
	<!--Slutten av "container"-->	
	<?php include 'templates/footer.php';?>
	
</body>
</html>