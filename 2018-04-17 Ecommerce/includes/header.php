<?php
session_start();

$pearl = " - Pearl Bakery";
$pagetitle= $title.$pearl;

if (!isset($_SESSION['cart'])){
$_SESSION['cart'] = array();
}

$server = "localhost";
$username = "harevalo";
$password = "758493";
$db = "harevalo_mmda225_final";

$connection= mysqli_connect($server,$username,$password,$db);
// Error message shown in case a connection with the DB cant be established.
if (!$connection){
	die("Connection failed: ".mysqli_connect_error());}

?>


<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $pagetitle;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">
<link rel="shortcut icon" href="favicon.ico">
</head>

<body>

	<header>
		<figure>
			<a href="index.php"><img id="logo" src="images/pearl-bakery-logo.svg" alt="Pearl Bakery"></a>
		</figure>

		<div class="fullwidthlight">
				<nav>
					<a href="#">&#9776; Menu</a>
					<a href="index.php">Home</a>
					<a href="products.php">All Products</a>
					<a href="products.php?category=cake">Cakes</a>
					<a href="products.php?category=cheesecake">Cheesecakes</a>
					<a href="products.php?category=viennoiserie">Viennoiserie</a>
					<a href="shopping-cart.php">My Cart</a>
				</nav>
		</div>
	</header>

<main class="content">
