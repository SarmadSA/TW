<!doctype html>
<html lang="nb">
<head>
	<link rel="shortcut icon" href="images/techwizzle-icon.png">
	<meta charset="utf-8">
	<title>Profile name</title>
	<link rel="stylesheet" type="text/css" href="../styles/mainStyle.css">
	<link rel="stylesheet" type="text/css" href="../styles/footer.css">
	<link rel="stylesheet" type="text/css" href="../styles/logo.css">
	<link rel="stylesheet" type="text/css" href="../styles/form.css">
	<link rel="stylesheet" type="text/css" href="../styles/header.css">
	<link rel="stylesheet" type="text/css" href="../styles/sliderStyle.css">
	<link rel="stylesheet" type="text/css" href="../styles/searchBarStyle.css">
	<link rel="stylesheet" type="text/css" href="../styles/contentStyle.css">
	<link rel="stylesheet" type="text/css" href="../styles/productProfileStyle.css">
	<link rel="stylesheet" type="text/css" href="../styles/profilepage.css">
	<link href="https://fonts.googleapis.com/css?family=Abel|Saira+Condensed" rel="stylesheet">
</head>
<body>
	<header><?php include 'navigationMenu.php';?></header>
	<main class="main">

        <section class="profile-section">

            <div class="profile-header-container">
                <figure class="profile-image-container">
                    <img src="<?php echo $directory . $productImageArray[$j];?>" alt="GPU name image"/> 
                </figure>
                <div class="product-info-container">
                    <h1 class="profile-tittle"><?php echo "product name"; ?></h1>
                    <p>Date of release: <?php echo "date of release"; ?></p>
                    <p>AVG price: <?php echo "price" ?> USD</p>
                    <a>Product link</a>
                    <a herf="#" class="view-profile">Product link</a>
                </div>
            </div>

            <div class="technical-info-box">
                <h3>Technical information:</h3>
                <br>
                <ul>
                    <p>CUDA Cores: </p>
                    <p>Graphics Clock (MHz): </p>
                    <p>Processor Clock (MHz): </p>
                    <p>Standard Memory Config: </p>
                    <p>Memory Interface: </p>
                    <p>Memory Interface Width: </p>
                    <p>Memory Bandwidth (GB/sec): </p>
                </ul>
            </div>

        </section>

		<aside>
			<h2>Get the latest updates</h2>
			<br>
			<?php include 'subscribeForm.php';?>  
		</aside>
		
		<br class="clear"/>
	</main>
	
	<!--Slutten av "container"-->	
	<?php include 'footer.php';?>
	
</body>
</html>