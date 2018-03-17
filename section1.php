<?php
	$numberOfElements = 3;
	$tittleArray = ["Tittle 1","Tittle 2","Tittle 3"];
	$imageDirectory = "images/";
	$imageArray = ["trondheim.png","trondheim.png","trondheim.png"];
	$imageAlt = ["","",""];

	for($i = 0; $i < $numberOfElements; $i++){
?>		
		<article class="content article-first">
			<div class="element-tittle-container">
				<h3 class="section-tittle"><?php echo $tittleArray[$i];?></h3>
			</div>
			<figure class="image-container">
				<img src= "<?php echo $imageDirectory . $imageArray[$i];?>" alt= "<?php echo $imageAlt[$i];?>"/>
			</figure>
		</article>
<?php	
	}
?>