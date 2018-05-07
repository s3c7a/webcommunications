<!doctype html>
<head>
<meta charset=utf-8">
<title>Reservation Details</title>
</head>

<body>

<?php
// Bringing variables
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$city = $_POST['city'];
$size = $_POST['size'];
$date = $_POST['date'];
$time = $_POST['time'];
$hours = $_POST['hours'];
$demand = 0;
$discount = 0;

int $decimals = 0;

// reservation cost

if ($size=='Small'){
	$costRoom=100.00;
} elseif ($size=='Medium'){
	$costRoom=75.00;
  } else {
	$costRoom=100.00;
	}

$totalCost=$hours*$costRoom;

?>


<h1>Reservation Details</h1>

<?php
echo "<p>Thanks. Your reservation has been approved. We look forward to seeing you on $date.</p>

<h2>Transaction Receipt</h2>
<h3>Name</h3>
<p>Reserved to: $name $lastname</p>
<h3>Room cost</h3>
<p>Room Size: $size</p>
<p>Day Time: $time</p>
<p>Total Time: $hours hrs.</p>
<p>Total Cost: $ $totalCost</p>";
?>

<?php
if ($hours>3){
	$discount=$totalCost*0.25;
	echo "<p>-25% (discount for booking more than 3 hours).</p>";
	echo "<p>Discount: $ $discount</p>";
	}

if (($time=="Morning")||($time=="Afternoon")){
	$demand=$totalCost*0.1;
	echo "<p>+10% (additional cost for booking on high demand hours).</p>";
	echo "<p>Extra charges: $ $demand</p>";
	}


// total cost different.

$totalCost1=$totalCost-$discount+$demand;

if ($totalCost!=$totalCost1){
	echo "<h3>Total Cost: $ $totalCost1</h3>";
	}

?>

<p>
<a href="practice.php">Go to reservaton page</a>
</p>

</body>
</html>