<?php
$title = "Product";
	require('includes/header.php');

$id = $_GET['id'];

$query = "SELECT id,product,image,description,size,servings,ingredients,price,date,alt FROM products WHERE id=$id LIMIT 1";
$result = mysqli_query($connection,$query);

if (mysqli_num_rows($result)>0){
	$row = mysqli_fetch_array($result);
	echo '<h1>'
	.$row['product'].
	'</h1>'
	.$row['description'].
	'<div class="product">
	<figure>
	<img src="images/full-res/'
	.$row['image'].
	'" alt="'
	.$row['alt'].
	'">
	<figcaption>'
	.$row['alt'].
	'</figcaption>
	</figure>
	<article>
	<h2>Details</h2>
	<ul>';
		if (!$row['size']==""){
		echo '<li><span class="bold">Size:</span> '
			.$row['size'].
			'</li>';
		}
	echo '<li><span class="bold">Servings:</span> '
		.$row['servings'].
		'</li>
		<li><span class="bold">Price:</span> CAN$'
		.$row['price'].
		'</li>
		<li>'
		.$row['ingredients'].
		'</li>
	</ul>

	<form action="add-to-cart.php?" method="post">
	<input type="hidden" name="id" id="id" value="'.$id.'">
	<input type="submit" value="Add to Cart">
	</form>

	</article>
	</div>';

}else{
	echo '<h1>Sorry the product can\'t be found.</h1>
	<p>Please visit our <a href="products.php">products</a> page.</p>';
}


require('includes/footer.php')?>
