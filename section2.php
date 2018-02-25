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
	<?php
		$numberOfGameTests = 3;
		$gameSettings = "Max settings - 1080p";
		$gameNames = ["Grand theft auto V", "Counter-Strike GO", "Battlefield 1"];
		$avrageFpsArray = [70, 100, 90];
		$imagesArray = ["gtav.png","csgo.png","bf1.png"];
		$imageAlts = ["","",""];
		$directory = "images/";	
	
		for($i = 0; $i< $numberOfGameTests; $i++){
			echo "<div class=\"game-showcase\">";
			//figure
			echo "<figure class=\"game-image-container\">";
			echo "<img src=\"" . $directory . $imagesArray[$i] . "\" alt=\"trondheim\"/>";
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
	?>
	<p class="more-gameresults">More</p>
</article>