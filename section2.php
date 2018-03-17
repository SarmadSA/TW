<?php
	$numberOfElements = 3;
	$directory = "images/";
	$priceArray = [230,100,330];
	$productReleaseDate = "15.05.2016";
	$productsNames = ["MSI GTX 1060 GAMING X","ASUS GAMING GTX 1070","MSI GTX 1060 GAMING X"];
	$productImageArray = ["trondheim.png","trondheim.png","trondheim.png"];
	
	for($j = 0; $j< $numberOfElements; $j++){
		echo '<article class="product-profile"> 
				<div class="profile-header-container">
					<figure class="profile-image-container">
						<img src="' . $directory . $productImageArray[$j] . '" alt="trondheim"/> 
					</figure>
					<div class="product-info-container">
						<h3 class="profile-tittle">'. $productsNames[$j] . '</h3>
						<p> Date of release: ' . $productReleaseDate . ' </p>
						<p> AVG price: ' . $priceArray[$j] . ' USD</p>
						<p>Product link</p>
						<p class="view-profile">View full profile</p>
					</div>
				</div>
				<h4 class="profile-content-tittle">Preformance in games:</h4>';

		$numberOfDisplayedGameTests = 3;
		$gameSettings = "Max settings - 1080p";
		$gameNames = ["Grand theft auto V", "Counter-Strike GO", "Battlefield 1"];
		$avrageFpsArray = [70, 100, 90];
		$imagesArray = ["gtav.png","csgo.png","bf1.png"];
		$gameImageAlts = ["","",""];	

		for($i = 0; $i< $numberOfDisplayedGameTests; $i++){
			echo '<div class="game-showcase">
						<figure class="game-image-container">
							<img src="' . $directory . $imagesArray[$i] . '" alt= "' . $gameImageAlts[$i]. '"/>
						</figure>

						<div class="game-results-container">
							<p class="game-results">' . $gameNames[$i] . '</p>
							<p class="game-results">' . $gameSettings . '</p>
						</div>

						<div class="hexagon">
							<div class="hexagon-score">
								<p>' . $avrageFpsArray[$i] . '+</p>
								<p>FPS</p>
							</div>
						</div>
					</div>';
		}
		echo '<div class="more-gameresults">
				<p>More</p>
			</div>
		</article>';	
	}
?>