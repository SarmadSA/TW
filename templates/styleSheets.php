<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
<?php
	$directory = "../styles/";
	$styleSheets = ["mainStyle.css","headerStyle.css","sliderStyle.css",
	"sliderStyle.css","navigationMenueStyle.css","searchBarStyle.css",
	"contentStyle.css","productProfileStyle.css","footerStyles.css"];

	foreach($styleSheets as $sheet){
		echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"" . $directory . $sheet . "\">";
	}
?>