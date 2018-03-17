<?php
	$numberOfElements = 4;
	$imageArray = ["trondheim.png","trondheim.png","trondheim.png","trondheim.png"];
	$directory = "images/";
	$tittles = ["GTX 1060 vs GTX 1070","GTX 1060 vs GTX 1070","GTX 1060 vs GTX 1070","GTX 1060 vs GTX 1070"];
	for($i = 0; $i < $numberOfElements; $i++){
		echo '<article class="content article-second">
				<div class="element-tittle-container">
					<h3 class="section-tittle">' . $tittles[$i] . '</h3>
				</div>
				<figure class="image-container">
					<img src="' . $directory . $imageArray[$i] . '" alt="trondheim"/>
				</figure>
			</article>';
	}
?>