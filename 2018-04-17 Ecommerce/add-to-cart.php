<?php
$title = "Product Added";
require('includes/header.php');


// Add item to cart
array_push($_SESSION['cart'],$_POST['id']);

?>

<!-- Content after opening <main> -->
<h1>Success!</h1>
<p>
	Your product was successfully added to your cart. Visit <a href="shopping-cart.php">your cart</a> to place your order.
</p>


<!-- Content after closing </main> -->
<?php
//echo "id ".$_POST['id']."<br>";

require('includes/footer.php')?>
