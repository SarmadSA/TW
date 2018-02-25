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
	<?php include 'header.php'?>
	<?php include 'navigationMenu.php'?>

	<main id="container">   
		<!--innhold som ligger på høyre siden-->				
		<aside>
			<h2>Build of the week</h2>
			<br>
		</aside>

		<section>
			<!--Tittelen øverst på siden (seksjon tittelen)-->	
			<div class="section-tittle-container">
				<h2 class="top-section-tittle">Siste Artikler:</h2>
			</div>
			<?php include 'slider.php'?>
			
			<!--Section one-->
			<?php
				$numberOfElements = 3;
				$tittleArray = ["Tittle 1","Tittle 2","Tittle 3"];
				$imageDirectory = "images/";
				$imageArray = ["trondheim.png","trondheim.png","trondheim.png"];
				$imageAlt = ["","",""];
	
				for($i = 0; $i < $numberOfElements; $i++){				
					echo "<article class=\"content article-first\">";
					//Tittle 
					echo "<div class=\"element-tittle-container\">";
					echo "<h3 class=\"section-tittle\">" . $tittleArray[$i] . "</h3>";
					echo "</div>";
					//Image container
					echo "<figure class=\"image-container\"/>";
					echo "<img src=\"" . $imageDirectory . $imageArray[$i] . "\" alt=\"" . $imageAlt[$i] . "\"/>";
					echo "</figure>";
					echo "</article>";
				}
			?>


			<!--Product profiles section-->
			<!--Artikkel 1-->
			<h2 class="section-to-tittle-container">Featured Product Profiles</h2>
			<article class="product-profile"> 
				<!--Bilde beholder-->
				<div class="profile-header-container">
					<figure class="profile-image-container">
						<img src="images/trondheim.png" alt="trondheim"/>
					</figure> 
					<div class="product-info-container">
						<h3 class="profile-tittle">MSI GTX 1060 GAMING X</h3>
						<p> Date of release: 15.05.2016 </p>
						<p> AVG price: 230 USD</p>
						<p>Product link</p>
						<p class="view-profile">View full profile</p>
					</div>
				</div>
				<h4 class="profile-content-tittle">Preformance in games:</h4>
				<div class="game-showcase">
					<figure class="game-image-container">
						<img src="images/gtav.png" alt="trondheim"/>
					</figure>
					<div class="game-results-container">
						<p class="game-results">Grand theft auto V</p>
						<p class="game-results">Max settings - 1080p</p>
					</div>
					<div class="hexagon">
						<div class="hexagon-score">
							<p>70+</p>
							<p>FPS</p>
						</div>
					</div>
				</div>
				<div class="game-showcase">
					<figure class="game-image-container">
						<img src="images/bf1.png" alt="trondheim"/>
					</figure>
					<div class="game-results-container">
						<p class="game-results">Battlefiled 1</p>
						<p class="game-results">Max settings - 1080p</p>
					</div>
					<div class="hexagon">
						<div class="hexagon-score">
							<p>90+</p>
							<p>FPS</p>
						</div>
					</div>
				</div>
				<div class="game-showcase">
					<figure class="game-image-container">
						<img src="images/csgo.png" alt="trondheim"/>
					</figure>
					<div class="game-results-container">
						<p class="game-results">Counter Strike GO</p>
						<p class="game-results">Max settings - 1080p</p>
					</div>
					<div class="hexagon">
						<div class="hexagon-score">
							<p>220+</p>
							<p>FPS</p>
						</div>
					</div>
				</div>
				<p class="more-gameresults">More</p>
				<!-- 
				<div class="profile-view-more">
					 <p>View Product Profile</p>
				 </div>
				-->
			</article>
			<article class="product-profile"> 
				<!--Bilde beholder-->
				<div class="profile-header-container">
					<figure class="profile-image-container">
						<img src="images/trondheim.png" alt="trondheim"/>
					</figure> 
					<div class="product-info-container">
						<h3 class="profile-tittle">MSI GTX 1060 GAMING X</h3>
						<p> Date of release: 15.05.2016 </p>
						<p> AVG price: 230 USD</p>
						<p>Product link</p>
						<p class="view-profile">View full profile</p>
					</div>
				</div>
				<h4 class="profile-content-tittle">Preformance in games:</h4>
				<div class="game-showcase">
					<figure class="game-image-container">
						<img src="images/gtav.png" alt="trondheim"/>
					</figure>
					<div class="game-results-container">
						<p class="game-results">Grand theft auto V</p>
						<p class="game-results">Max settings - 1080p</p>
					</div>
					<div class="hexagon">
						<div class="hexagon-score">
							<p>70+</p>
							<p>FPS</p>
						</div>
					</div>
				</div>
				<div class="game-showcase">
					<figure class="game-image-container">
						<img src="images/bf1.png" alt="trondheim"/>
					</figure>
					<div class="game-results-container">
						<p class="game-results">Battlefiled 1</p>
						<p class="game-results">Max settings - 1080p</p>
					</div>
					<div class="hexagon">
						<div class="hexagon-score">
							<p>90+</p>
							<p>FPS</p>
						</div>
					</div>
				</div>
				<div class="game-showcase">
					<figure class="game-image-container">
						<img src="images/csgo.png" alt="trondheim"/>
					</figure>
					<div class="game-results-container">
						<p class="game-results">Counter Strike GO</p>
						<p class="game-results">Max settings - 1080p</p>
					</div>
					<div class="hexagon">
						<div class="hexagon-score">
							<p>220+</p>
							<p>FPS</p>
						</div>
					</div>
				</div>
				<p class="more-gameresults">More</p>
				<!-- 
				<div class="profile-view-more">
					 <p>View Product Profile</p>
				 </div>
				-->
			</article>
			<article class="product-profile"> 
				<!--Bilde beholder-->
				<div class="profile-header-container">
					<figure class="profile-image-container">
						<img src="images/trondheim.png" alt="trondheim"/>
					</figure> 
					<div class="product-info-container">
						<h3 class="profile-tittle">MSI GTX 1060 GAMING X</h3>
						<p> Date of release: 15.05.2016 </p>
						<p> AVG price: 230 USD</p>
						<p>Product link</p>
						<p class="view-profile">View full profile</p>
					</div>
				</div>
				<h4 class="profile-content-tittle">Preformance in games:</h4>
				<div class="game-showcase">
					<figure class="game-image-container">
						<img src="images/gtav.png" alt="trondheim"/>
					</figure>
					<div class="game-results-container">
						<p class="game-results">Grand theft auto V</p>
						<p class="game-results">Max settings - 1080p</p>
					</div>
					<div class="hexagon">
						<div class="hexagon-score">
							<p>70+</p>
							<p>FPS</p>
						</div>
					</div>
				</div>
				<div class="game-showcase">
					<figure class="game-image-container">
						<img src="images/bf1.png" alt="trondheim"/>
					</figure>
					<div class="game-results-container">
						<p class="game-results">Battlefiled 1</p>
						<p class="game-results">Max settings - 1080p</p>
					</div>
					<div class="hexagon">
						<div class="hexagon-score">
							<p>90+</p>
							<p>FPS</p>
						</div>
					</div>
				</div>
				<div class="game-showcase">
					<figure class="game-image-container">
						<img src="images/csgo.png" alt="trondheim"/>
					</figure>
					<div class="game-results-container">
						<p class="game-results">Counter Strike GO</p>
						<p class="game-results">Max settings - 1080p</p>
					</div>
					<div class="hexagon">
						<div class="hexagon-score">
							<p>220+</p>
							<p>FPS</p>
						</div>
					</div>
				</div>
				<p class="more-gameresults">More</p>
				<!-- 
				<div class="profile-view-more">
					 <p>View Product Profile</p>
				 </div>
				-->
			</article>


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
			<article class="content article-second"> 
				<!--Tittelen øverst på siden (seksjon tittelen)-->	
				<div class="element-tittle-container">
					<h3 class="section-tittle">GTX 1060 vs GTX 1070</h3>
				</div>

				<!--Bilde beholder-->
				<figure class="image-container">
					<img src="images/cpu.png" alt="trondheim"/>
				</figure> 				
			</article>
			<article class="content article-second"> 
				<!--Tittelen øverst på siden (seksjon tittelen)-->	
				<div class="element-tittle-container">
					<h3 class="section-tittle">GTX 1060 vs GTX 1070</h3>
				</div>

				<!--Bilde beholder-->
				<figure class="image-container">
					<img src="images/cpu.png" alt="trondheim"/>
				</figure> 				
			</article>
			<!--This is the last section-->

			<h2 class="section-to-tittle-container">Produckt profiles</h2>
			<!--Artikkel 1-->
			<article class="content article-second"> 
				<!--Tittelen øverst på siden (seksjon tittelen)-->	
				<div class="element-tittle-container">
					<h3 class="section-tittle">GTX 1060</h3>
				</div>

				<!--Bilde beholder-->
				<figure class="image-container">
					<img src="images/trondheim.png" alt="trondheim"/>
				</figure> 				
			</article>
			<!--Artikkel 1-->
			<article class="content article-second"> 
				<!--Tittelen øverst på siden (seksjon tittelen)-->	
				<div class="element-tittle-container">
					<h3 class="section-tittle">ASUSE GTX 1080 STRIX</h3>
				</div>

				<!--Bilde beholder-->
				<figure class="image-container">
					<img src="images/trondheim.png" alt="trondheim"/>
				</figure> 				
			</article>
			<article class="content article-second"> 
				<!--Tittelen øverst på siden (seksjon tittelen)-->	
				<div class="element-tittle-container">
					<h3 class="section-tittle">MSI GTX 1060 torbu</h3>
				</div>

				<!--Bilde beholder-->
				<figure class="image-container">
					<img src="images/cpu.png" alt="trondheim"/>
				</figure> 				
			</article>
			<article class="content article-second"> 
				<!--Tittelen øverst på siden (seksjon tittelen)-->	
				<div class="element-tittle-container">
					<h3 class="section-tittle">MSI GAMING X GTX 1060</h3>
				</div>

				<!--Bilde beholder-->
				<figure class="image-container">
					<img src="images/cpu.png" alt="trondheim"/>
				</figure> 				
			</article>

			<br class="clear"/>
		</section>
	</main>
	<!--Slutten av "container"-->	
	<?php include 'footer.php';?>
</body>
</html>