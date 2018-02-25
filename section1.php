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