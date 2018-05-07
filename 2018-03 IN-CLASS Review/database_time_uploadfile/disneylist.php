<?php
/*Create 4 variables to connect to MySQL
1. database server name
2. credentials username
3. credentials password
4. database name (as named in MySQL)
*/
$server = "localhost";
$username = "harevalo";
$password = "758493";
$db = "disney_movies";

/*Connect to the server*/
$connection= mysqli_connect($server,$username,$password,$db);

/*Show an error if you could not connect to db*/
if (!$connection){
	die("Connection failed: ".mysqli_connect_error());
}
/* we're in*/
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Disney Movie Collection</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>My Disney Movie Collection (MySQL Database Display)</h1>
<ul>
<?php
    	/*THE QUERY (what you want)
      READING DATA (SELECT)
      WRITING DATA (INSERT)*/

    	// $query = "SELECT *";  //star * Displays all data.
    	$query = "SELECT id,studio,title,release_date,dvd,blu_ray,blu_ray_3d,digital,poster FROM disney_animated_movies";
      /* SELECT the info we want & FROM what list within the database you want it.*/

    	$result = mysqli_query($connection,$query);
      /*Variable is used to store the result in (while there's a connection with the server)*/

      /*Printing more than one entry*/
    	if(mysqli_num_rows($result)>0){
    	/*do this to print each field when it is greater than zero movies.*/
    		while($row=mysqli_fetch_array($result)){
          /*$row is the array*/
          echo "<li> In "
					.$row['release_date'].
					", "
					.$row['title'].
					" was released by "
					.$row['studio'].
					". <img src=\"uploads/".$row['poster']."\" height=\"30px\"></li>";
    		}
    	}else{
    		echo "<p>There's no results.</p>";
    	}
?>
</ul>
<p><a href="update.php">Update a Record in My Movie Collection (MySQL Database Writing)</a></p>

<?php
$time = time();
$secsperyear = 86400;
$incredibles2Launch = 1529292449;
$giganticLaunch = 1542770849;

$timetoincredibles2 = $incredibles2Launch-$time;
$timetogigantic = $giganticLaunch-$time;

$daystoincredibles2 = $timetoincredibles2/$secsperyear;
$daystogigantic = $timetogigantic/$secsperyear;

?>
<ul>
	<li> In June 18th 2018, Disney • Pixar will release "The Incredibles II". There's <?php echo $daystoincredibles2;?> days left until it is released. <img src="uploads/2018-the_incredibles_ii-1529292449.jpg" height="30px"></li>
	<li>In November 21st 2018, Walt Disney Animation Studios will release "Gigantic". There's <?php echo $daystogigantic;?> days left until it is released. <img src="uploads/2018-gigantic-1542770849.jpg" height="30px"></li>
</ul>







</body>
</html>
