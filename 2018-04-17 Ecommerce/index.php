<?php
	$title = "Welcome";
	require('includes/header.php');
?>
<!-- Content after opening <main> -->
<h1><?php print $title;?></h1>
<p>Pearls are highly valued gemstones because they are rare to find. Our bakery resembles them as our pastries are unique. Give yourself a break and try our family recipes or enjoy our take on old-time favourites.</p>

<p>To start with, we invite you to take a look at the newest pastries on our ever-growing list:</p>

<div class="grid">
<?php
$counter=1;

$query = "SELECT id,thumbnail,product,date,price,alt FROM products ORDER BY date DESC";

$result = mysqli_query($connection,$query);

if(mysqli_num_rows($result)>0){
		//
		while ($row=mysqli_fetch_array($result)){
			echo '<article><a href="product-detail.php?id='
			.$row['id'].
			'">
			<img src="images/thumbs/'
			.$row['thumbnail'].
			'" alt="'
			.$row['alt'].
			'"><h2>'
			.$row['product'].
			'</h2></a><ul><li>CAD $'
			.$row['price'].
			'</li><li>Added on '
			.date('m-d-Y',strtotime($row['date'])).
			'</li></ul></article>';



			$counter++;
			if ($counter == 5){
				break;
			}
		}
}else{
	echo "<p>No products found.</p>";
}
?>
</div>
<!-- Content after closing </main> -->
<?php require('includes/footer.php')?>
