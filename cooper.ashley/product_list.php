<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Wine Cellar</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="css/storetheme.css">
</head>
<body>

	<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
	
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
			<h2>Wine Cellar</h2>

			<!-- ul>li*4>a[href="product_item.php"]>{Wine Name $} -->
			<ul>
				<li><a href="product_item.php">Wine Name 1</a></li>
				<li><a href="product_item.php">Wine Name 2</a></li>
				<li><a href="product_item.php">Wine Name 3</a></li>
				<li><a href="product_item.php">Wine Name 4</a></li>
			</ul>
		</div>
	</div>


</body>
</html>