<?php
session_start();

// If session cart is empty create an array out of it so we can stack values on it.
if (!isset($_SESSION['cart'])){
$_SESSION['cart'] = array();
}

array_push($_SESSION['cart'],$_GET['id']);

?>

<h1>Title</h1>
<p>
	Product was successfully added to your cart.
	<a href="test_shopping-cart.php">View Shopping Cart</a>
</p>
