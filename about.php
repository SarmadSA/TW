<!doctype html>
<html lang="nb">
<head>
	<link rel="shortcut icon" href="images/techwizzle-icon.png">
	<meta charset="utf-8">
	<title>TechWizzle</title>
	<link rel="stylesheet" type="text/css" href="styles/mainStyle.css">
	<link rel="stylesheet" type="text/css" href="styles/footer.css">
	<link rel="stylesheet" type="text/css" href="styles/logo.css">
	<link rel="stylesheet" type="text/css" href="styles/form.css">
	<link rel="stylesheet" type="text/css" href="styles/header.css">
	<link rel="stylesheet" type="text/css" href="styles/sliderStyle.css">
	<link rel="stylesheet" type="text/css" href="styles/navigationMenueStyle.css">
	<link rel="stylesheet" type="text/css" href="styles/searchBarStyle.css">
	<link rel="stylesheet" type="text/css" href="styles/contentStyle.css">
	<link rel="stylesheet" type="text/css" href="styles/productProfileStyle.css">
	<link href="https://fonts.googleapis.com/css?family=Abel|Saira+Condensed" rel="stylesheet">
</head>
<body>
	<header><?php include 'templates/navigationMenu.php';?></header>
	<main class="main">
    <section class="about-section">
            <h1>About</h1>
            <br>
            <p>TechWizzle.com is a website that can help you choose the right hardware for your next PC build.</p>
            <p>By looking up hardware profiles you will be able to determine how many FPS you are going to get</p>
            <p>with that build. Finding the right hardware for the right price can be challanging, and require</p>
            <p>alot of research, knowladge and time. Looking up different youtube videos about different GPUs and</p>
            <p>searching the web for different hardware is not an easy task, and requires a lot of time. By using</p>
            <p>our Service you will easily be able to compare multiple GPUs, CPUs and other hardware that will be</p>
            <p>added in the future. You will be able to see how many FPS you can get, from that Harware in different</p>
            <p>games without having to watch hours and hours of youtube videos.</p>
		</section>
        
        <aside>
			<h2>Get the latest updates</h2>
			<br>
			<?php include 'templates/subscribeForm.php';?>  
		</aside>
		
		<br class="clear"/>
	</main>
	
	<!--Slutten av "container"-->	
	<?php include 'templates/footer.php';?>
	
</body>
</html>