<?php
		//Define <title> and <h1> of the page
		if(isset($_GET['sort'])){
			$url=$_GET['sort'];
			$title="Products";
		}else if (isset($_GET['category'])){
			$url=$_GET['category'];
			if($url=="cake"){
				$title="Cakes";
			}else if($url=="cheesecake"){
				$title="Cheesecakes";
			}else if($url=="viennoiserie"){
				$title="Viennoiserie";
			}else{
				header("Location: products.php?sort=name"); //in case somebody inserts variables manually
			}
		}else{
			header("Location: products.php?sort=name"); //in case somebody inserts variables manually
		}
	require('includes/header.php');




	$sortParagraph = "<h1>".$title."</h1>
	<p>We offer a variety of baked goods, from delicious cakes to flaky croissants, we have the ideal pastry for special moments or just to satisfy your sweet craving.</p>
	<p>Uncertain of what kind of pastry do you want? Select one of the following sorting options:
		<a href=\"products.php?sort=price\">Price</a>,
		<a href=\"products.php?sort=name\">name</a>, or
		<a href=\"products.php?sort=date\">date added</a>.</p>

<div class=\"grid\">";
/*==== sorting coding begins here ====*/
if($url=="price"){
			//Sort code, package #1 (price) begins here.
			echo $sortParagraph;
			$query = "SELECT id,thumbnail,product,date,price,alt FROM products ORDER BY price ASC";
			$result = mysqli_query($connection,$query);

			if(mysqli_num_rows($result)>0){
				while ($row=mysqli_fetch_array($result)){
					echo '<article><a href="product-detail.php?id='
					.$row['id'].
					'"><img src="images/thumbs/'
					.$row['thumbnail'].
					'" alt="'
					.$row['alt'].
					'"><h2>'
					.$row['product'].
					'</h2></a><ul><li>CAD $'
					.$row['price'].
					'</li><li>Added on '
					.date('m-d-Y',strtotime($row['date'])).
					'</li></ul></article>';}
			}else{
				echo "<p>No products found.</p>";
			}
			//Sort code, package #1 (price) ends here.
}else if($url=="date"){
			//Sort code, package #2 (date) begins here.
			echo $sortParagraph;
			$query = "SELECT id,thumbnail,product,date,price,alt FROM products ORDER BY date DESC";
			$result = mysqli_query($connection,$query);

			if(mysqli_num_rows($result)>0){
				while ($row=mysqli_fetch_array($result)){
					echo '<article><a href="product-detail.php?id='
					.$row['id'].
					'"><img src="images/thumbs/'
					.$row['thumbnail'].
					'" alt="'
					.$row['alt'].
					'"><h2>'
					.$row['product'].
					'</h2></a><ul><li>CAD $'
					.$row['price'].
					'</li><li>Added on '
					.date('m-d-Y',strtotime($row['date'])).
					'</li></ul></article>';}
			}else{
				echo "<p>No products found.</p>";
			}
			//Sort code, package #2 (date) ends here.
}else if($url=="name"){
			//Sort code, package #3 (name) begins here.
			echo $sortParagraph;
			$query = "SELECT id,thumbnail,product,date,price,alt FROM products ORDER BY product ASC";
			$result = mysqli_query($connection,$query);

			if(mysqli_num_rows($result)>0){
				while ($row=mysqli_fetch_array($result)){
					echo '<article><a href="product-detail.php?id='
					.$row['id'].
					'"><img src="images/thumbs/'
					.$row['thumbnail'].
					'" alt="'
					.$row['alt'].
					'"><h2>'
					.$row['product'].
					'</h2></a><ul><li>CAD $'
					.$row['price'].
					'</li><li>Added on '
					.date('m-d-Y',strtotime($row['date'])).
					'</li></ul></article>';}
			}else{
				echo "<p>No products found.</p>";
			}
			//Sort code, package #3 (name) ends here.
/*==== category coding begins here ====*/
}else if($url=="cake"){
			//Category code, package #1 (cake) begins here.
			echo "<h1>".$title."</h1>";
			echo "<p>Our sweet, soft and delicious baked stars! You will find a wide variety of flavours, textures, and colours to enjoy with your favourite beverage.</p>";
			echo "<div class=\"grid\">";

			$query = "SELECT id,thumbnail,product,date,price,alt FROM products WHERE category='Cake' ORDER BY product ASC";
			$result = mysqli_query($connection,$query);

			if(mysqli_num_rows($result)>0){
				while ($row=mysqli_fetch_array($result)){
					echo '<article><a href="product-detail.php?id='
					.$row['id'].
					'"><img src="images/thumbs/'
					.$row['thumbnail'].
					'" alt="'
					.$row['alt'].
					'"><h2>'
					.$row['product'].
					'</h2></a><ul><li>CAD $'
					.$row['price'].
					'</li><li>Added on '
					.date('m-d-Y',strtotime($row['date'])).
					'</li></ul></article>';}
			}else{
				echo "<p>No products found.</p>";
			}
			//Category code, package #1 (cake) ends here.
}else if($url=="cheesecake"){
			//Category code, package #2 (cheesecake) begins here.
			echo "<h1>".$title."</h1>";
			echo "<p>A rich and soft cake made with cream and cheese on a cracker crust made with original homemade recipes, it preserves the classic taste of the foot grandmother prepared.</p>";
			echo "<div class=\"grid\">";

			$query = "SELECT id,thumbnail,product,date,price,alt FROM products WHERE category='Cheesecake' ORDER BY product ASC";
			$result = mysqli_query($connection,$query);

			if(mysqli_num_rows($result)>0){
				while ($row=mysqli_fetch_array($result)){
					echo '<article><a href="product-detail.php?id='
					.$row['id'].
					'"><img src="images/thumbs/'
					.$row['thumbnail'].
					'" alt="'
					.$row['alt'].
					'"><h2>'
					.$row['product'].
					'</h2></a><ul><li>CAD $'
					.$row['price'].
					'</li><li>Added on '
					.date('m-d-Y',strtotime($row['date'])).
					'</li></ul></article>';}
			}else{
				echo "<p>No products found.</p>";
			}
			//Category code, package #2 (cheesecake) ends here.
}else if($url=="viennoiserie"){
			//Category code, package #3 (viennoiserie) begins here.
			echo "<h1>".$title."</h1>";
			echo "<p>French pastries made from yeast-leavened dough. Its production resembles that of bread or puff pastries but it results in a richer flavour and sweeter character.</p>";
			echo "<div class=\"grid\">";

			$query = "SELECT id,thumbnail,product,date,price,alt FROM products WHERE category='Viennoiserie' ORDER BY product ASC";
			$result = mysqli_query($connection,$query);

			if(mysqli_num_rows($result)>0){
				while ($row=mysqli_fetch_array($result)){
					echo '<article><a href="product-detail.php?id='
					.$row['id'].
					'"><img src="images/thumbs/'
					.$row['thumbnail'].
					'" alt="'
					.$row['alt'].
					'"><h2>'
					.$row['product'].
					'</h2></a><ul><li>CAD $'
					.$row['price'].
					'</li><li>Added on '
					.date('m-d-Y',strtotime($row['date'])).
					'</li></ul></article>';}
			}else{
				echo "<p>No products were found.</p>";
			}
			//Category code, package #3 (viennoiserie) ends here.


}else{
	//Sort code, package #4 (default sort=name) begins here.
	header("Location: products.php?sort=name");
	//Sort code, package #4 (default sort=name) ends here.
}

echo "</div>";

require('includes/footer.php')
?>
