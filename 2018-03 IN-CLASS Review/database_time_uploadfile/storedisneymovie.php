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
<title>Disney Movie Collection - Update Records</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>Update a Record in My Movie Collection (MySQL Database Writing)</h1>

<?php
	/* SANITIZING DATA & DEFINING VARIABLES
			Do it for all values written by the user.
			This is just to verify the data is clean.*/
	$studio = mysqli_real_escape_string($connection, $_POST['studio']);
	$title = mysqli_real_escape_string($connection, $_POST['title']);
	$year = mysqli_real_escape_string($connection, $_POST['date']);
	$dvd = mysqli_real_escape_string($connection, $_POST['dvd']);
	$bluray = mysqli_real_escape_string($connection, $_POST['bluray']);
	$bluray3d = mysqli_real_escape_string($connection, $_POST['bluray3d']);
	$digital = mysqli_real_escape_string($connection, $_POST['digital']);

	/*Connect with MySQL to WRITE values into the database
	INSERT INTO the NAMES exactly as they appear in the TABLE IN THE DATABASE*/
	$query = "INSERT INTO disney_animated_movies (studio,title,release_date,dvd,blu_ray,blu_ray_3d,digital) VALUES ('$studio','$title','$year','$dvd','$bluray','$bluray3d','$digital')"; /*Whatever is in the parenthesis, is what's gonna be inserted into the database

	IF the query can run, then write the dat in the table chosen*/
	if(mysqli_query($connection, $query)){
		echo "<p>".$title." has been added successfully to the database!</p>";
	}else{
		echo mysqli_error($connection);
	}

/*UPLOADING A FILE TO THE SERVER
1. Print the file informtaion by using print_r()*/
// print_r($_FILES['userupload']); /* Will show info in an array display */

/*2. Create variables to store the name of the uploaded file (these come from the above array)*/
$name = $_FILES["poster"]["name"];
$size = $_FILES["poster"]["size"];
$type = $_FILES["poster"]["type"];
$tmp = $_FILES["poster"]["tmp_name"];

/* 3. Now rename the file uploaded and save it to the web server. */
$year = mysqli_real_escape_string($connection, $_POST['date']);
$title=strtolower(mysqli_real_escape_string($connection, $_POST['title']));
/*String replace, to edit the name of uploaded image, remove spaces
str_replace(what,withWhat,where);
*/
$year=str_replace(' ','_',$year);
$title=str_replace(' ','_',$title);

/*Build the new name of the file uploaded
a) define components of new named*/

$postername = "$year-$title";
$date = time(); //Number of seconds that have passed since Jan 1st 1970.
$ext = pathinfo($name,PATHINFO_EXTENSION); /* Saves the extension of the file (after the dot) and holds it into the variable $ext the $name variable comes from the array of the image that we printed at the beginning */

/*
b) put them together in a single file name
c) $filename holds the directory where you want to upload the file to.
*/
$newname = "$postername-$date.$ext";
$filename = "uploads/".$newname; /* you must create the directory in the web server for this to work.*/

/*4. Prohibit the user to upload a file that already exists in the web server.*/
if(file_exists($filename)){
	//Don't re-upload
	echo "<p>File already exists, new file not uploaded.</p>";
}else{
	//Actually uploads the files to the webserver
	move_uploaded_file($tmp,$filename);
	echo "<p>Your file was successfully uploaded to the web server.</p>";
	echo "<img src=\"$filename\" alt=\"Your uploaded image\" title=\"Your uploaded image\" />";
}

?>

<p><a href="disneylist.php">View full List of Disney Movies</a></p>
<?php

?>
</body>
</html>
