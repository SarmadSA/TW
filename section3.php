<?php
	$numberOfElements = 4;
	$imageArray = ["trondheim.png","trondheim.png","trondheim.png","trondheim.png"];
	$directory = "images/";
	$tittles = ["GTX 1060 vs GTX 1070","GTX 1060 vs GTX 1070","GTX 1060 vs GTX 1070","GTX 1060 vs GTX 1070"];
	for($i = 0; $i < $numberOfElements; $i++){
?>
		<article class="content article-second">
			<div class="element-tittle-container">
				<h3 class="section-tittle"><?php echo $tittles[$i] ?></h3>
			</div>
			<figure class="image-container">
				<img src="<?php echo $directory . $imageArray[$i] ?>" alt="trsondheim"/>
			</figure>
		</article>
<?php
	}
?>