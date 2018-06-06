<!doctype html>
<html lang="nb">
<head>
	<link rel="shortcut icon" href="images/techwizzle-icon.png">
	<meta charset="utf-8">
	<title>TechWizzle - profiles</title>
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
	<link rel="stylesheet" type="text/css" href="styles/profiles.css">
	<link href="https://fonts.googleapis.com/css?family=Abel|Saira+Condensed" rel="stylesheet">
</head>
<body>
	<header><?php include 'templates/navigationMenu.php';?></header>
	<main class="main">

		<form class="search-form">
			<input type="text" class="search2" id="search" placeholder="Search...">
			<button type="button" id="search_button">
				<svg viewBox="0 0 36.02 40.02">
				<defs>
					<symbol id="search_symbol" viewBox="0 0 32.87 36.83">
						<circle class="cls-1" cx="12.5" cy="12.5" r="10"/>
						<line class="cls-1" x1="20.53" y1="19.50" x2="32.5" y2="29.5"/>
					</symbol>
				</defs>
				<use width="20" height="20" transform="translate(6.5 8.5) scale(1.2 1.2)" xlink:href="#search_symbol"/>
				</svg>	
			</button>

			<select name="" id="dropdown-selection">
				<option value="Sort by" selected disabled>Sort by</option>
				<option value="Normal">Normal</option>
				<option value="Trending">Trending</option>
				<option value="Most recent">Most recent</option>
			</select>
		</form>


		
		<section>
			<div class="section-tittle-box">
				<h2 class="profile-section-tittle">Featured Product Profiles</h2>
			</div>
			<?php include 'section2.php';?>
		</section>

		<!--Product profiles section-->
		<section>
			<div class="section-tittle-box">
				<h2 class="profile-section-tittle">Latest Product Profiles</h2>
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