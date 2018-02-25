<?php
	$numberOfElements = 4;
	$imageArray = ["trondheim.png","trondheim.png","trondheim.png","trondheim.png"];
	$directory = "images/";
	$tittles = ["GTX 1060 vs GTX 1070","GTX 1060 vs GTX 1070","GTX 1060 vs GTX 1070","GTX 1060 vs GTX 1070"];
	for($i = 0; $i < $numberOfElements; $i++){
		echo "<article class=\"content article-second\">";
		echo "<div class=\"element-tittle-container\">";
		echo "<h3 class=\"section-tittle\">" . $tittles[$i] . "</h3>";
		echo "</div>";
		echo "<figure class=\"image-container\">";
		echo "<img src=\"" . $directory . $imageArray[$i] . "\" alt=\"trondheim\"/>";
		echo "</figure>";
		echo "</article>";
	}
?>