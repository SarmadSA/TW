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

	<!--Including css files-->
	<?php
	/*
	$styleSheets = ["mainStyle.css","headerStyle.css","sliderStyle.css",
	"sliderStyle.css","navigationMenueStyle.css","searchBarStyle.css",
	"contentStyle.css","productProfileStyle.css","footerStyles.css"];

	foreach($styleSheets as $sheet){
	echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/" . $sheet . "\">";
	}
	*/
	?>
</head>
<body>
	<?php include 'header.php';?>
	<?php include 'navigationMenu.php';?>
	<main id="container">   
		<aside>
			<h2>Build of the week</h2>
			<br>
		</aside>

		<section>
			<div class="section-tittle-container">
				<h2 class="top-section-tittle">Siste Artikler:</h2>
			</div>
			<?php include 'slider.php';?>
			<?php include 'section1.php';?>
		</section>

		<!--Product profiles section-->
		<section>
			<?php include 'section2.php';?>
		</section>
		
		<section>
			<h2 class="section-to-tittle-container">CPU comparisons</h2>
			<!--Artikkel 1-->
			<article class="content article-second"> 
				<!--Tittelen øverst på siden (seksjon tittelen)-->	
				<div class="element-tittle-container">
					<h3 class="section-tittle">GTX 1060 vs GTX 1070</h3>
				</div>
				<!--Bilde beholder-->
				<figure class="image-container">
					<img src="images/trondheim.png" alt="trondheim"/>
				</figure> 				
			</article>
		</section>
		
		<br class="clear"/>
		
	</main>
	
	<!--Slutten av "container"-->	
	<?php include 'footer.php';?>
	
</body>
</html>