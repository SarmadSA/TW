<?php
	$numberOfElements = 3;
	$directory = "images/";
	$priceArray = [230,100,330];
	$productReleaseDate = "15.05.2016";
	$productsNames = ["MSI GTX 1060 GAMING X","ASUS GAMING GTX 1070","MSI GTX 1060 GAMING X"];
	$productImageArray = ["trondheim.png","trondheim.png","trondheim.png"];
	
	// game result variables
	$numberOfDisplayedGameTests = 3;
	$gameSettings = "Max settings - 1080p";
	$gameNames = ["Grand theft auto V", "Counter-Strike GO", "Battlefield 1"];
	$avrageFpsArray = [70, 100, 90];
	$imagesArray = ["gtav.png","csgo.png","bf1.png"];
	$gameImageAlts = ["","",""];
	
	for($j = 0; $j< $numberOfElements; $j++){
?>
		<article class="product-profile"> 
				<div class="profile-header-container">
					<figure class="profile-image-container">
						<img src="<?php echo $directory . $productImageArray[$j];?>" alt="trondheim"/> 
					</figure>
					<div class="product-info-container">
						<h3 class="profile-tittle"><?php echo $productsNames[$j]; ?></h3>
						<p>Date of release: <?php echo $productReleaseDate; ?></p>
						<p>AVG price: <?php echo $priceArray[$j]; ?> USD</p>
						<p>Product link</p>
						<p class="view-profile">View full profile</p>
					</div>
				</div>
				<h4 class="profile-content-tittle">Preformance in games:</h4>

	<?php for($i = 0; $i< $numberOfDisplayedGameTests; $i++){?>
				<div class="game-showcase">
					<figure class="game-image-container">
						<img src="<?php echo $directory . $imagesArray[$i];?>" alt= "<?php echo $gameImageAlts[$i]; ?>"/>
					</figure>

					<div class="game-results-container">
						<p class="game-results"><?php echo $gameNames[$i];?></p>
						<p class="game-results"><?php echo $gameSettings;?></p>
					</div>

					<div class="hexagon">
						<div class="hexagon-score">
							<p><?php echo $avrageFpsArray[$i];?>+</p>
							<p>FPS</p>
						</div>
					</div>
				</div>
		<?php } ?>
			<div class="more-gameresults">
				<p>More</p>
			</div>
		</article>	
	<?php } ?>