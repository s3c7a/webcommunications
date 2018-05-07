<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>National Popcorn Day</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<header>
	<p>Place a banner here</p>
</header>

<main>
<?php
	
$userDay = $_GET['day'];
$daysLeft = 19-$userDay;
	
//echo "<p>$userDay</p>";
	if ($userDay<19){
		echo "<p>There are $daysLeft until National Popcorn Day.</p>";
	}elseif($userDay>19){
		echo "<p>National Popcorn Day has passed</p>";
	}else{
		echo "<p>Today is National Popcorn Day!</p>";}
?>

<p><a href="index.php">Go back!</a></p></main>

<footer>Footer goes here</footer>

</body>
</html>