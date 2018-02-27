<?php
	$numberOfElements = 3;
	$directory = "images/";
	$priceArray = [230,100,330];
	$productReleaseDate = "15.05.2016";
	$productsNames = ["MSI GTX 1060 GAMING X","ASUS GAMING GTX 1070","MSI GTX 1060 GAMING X"];
	$productImageArray = ["trondheim.png","trondheim.png","trondheim.png"];
	
	for($j = 0; $j< $numberOfElements; $j++){
		echo "<article class=\"product-profile\">"; 
		echo "<div class=\"profile-header-container\">";
		echo " <figure class=\"profile-image-container\">";
		echo "<img src=\"" . $directory . $productImageArray[$j] ."\" alt=\"trondheim\"/>"; 
		echo "</figure>";
		echo "<div class=\"product-info-container\">";
		echo "<h3 class=\"profile-tittle\">". $productsNames[$j] . "</h3>";
		echo "<p> Date of release: " . $productReleaseDate . " </p>";
		echo "<p> AVG price: " . $priceArray[$j] . " USD</p>";
		echo "<p>Product link</p>";
		echo "<p class=\"view-profile\">View full profile</p>";
		echo "</div>";
		echo "</div>";
		echo "<h4 class=\"profile-content-tittle\">Preformance in games:</h4>";

		$numberOfDisplayedGameTests = 3;
		$gameSettings = "Max settings - 1080p";
		$gameNames = ["Grand theft auto V", "Counter-Strike GO", "Battlefield 1"];
		$avrageFpsArray = [70, 100, 90];
		$imagesArray = ["gtav.png","csgo.png","bf1.png"];
		$gameImageAlts = ["","",""];	

		for($i = 0; $i< $numberOfDisplayedGameTests; $i++){
			echo "<div class=\"game-showcase\">";
			//figure
			echo "<figure class=\"game-image-container\">";
			echo "<img src=\"" . $directory . $imagesArray[$i] . "\" alt=\"" . $gameImageAlts[$i]. "\"/>";
			echo "</figure>";
			//div 1
			echo "<div class=\"game-results-container\">";
			echo "<p class=\"game-results\">" . $gameNames[$i] . "</p>";
			echo "<p class=\"game-results\">" . $gameSettings . "</p>";
			echo "</div>";
			//div 2
			echo "<div class=\"hexagon\">";
			echo "<div class=\"hexagon-score\">";
			echo "<p>" . $avrageFpsArray[$i] . "+</p>";
			echo "<p>FPS</p>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
		}
		echo "<div class=\"more-gameresults\">";
		echo "<p>More</p>";
		echo "</div>";
		echo "</article>";	
	}
?>