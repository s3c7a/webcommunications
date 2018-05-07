<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Uploaded File</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

	<?php
		echo $_POST['fname'];
		echo " ";
		echo $_POST['lastname'];
		echo "<br><br>";
		print_r($_FILES['userupload']);
	
	//Create variables
		$name = $_FILES["userupload"]["name"];
		$size = $_FILES["userupload"]["size"];
		$type = $_FILES["userupload"]["type"];
		$tmp = $_FILES["userupload"]["tmp_name"];
	
	//Rename our file
	/*WEB SAFE NAMING RULES:
	Lowercase
	No Spaces (Hypen or Underscore)
	Do not start w/number
	No special characters or non-English characters (UTF8 only)*/
	
		$fname=strtolower($_POST['fname']);
		$lastname=strtolower($_POST['lastname']);

		$fname=str_replace(' ','_',$fname); //Replace (what,withWhat,where) you can use it for arrays as well.
		$lastname=str_replace(' ','_',$lastname);
		
		$student = "$fname-$lastname";
		$date = time(); //Number of seconds that have passed since Jan 1st 1970.
		$ext = pathinfo($name,PATHINFO_EXTENSION); //Saves the extension of the file (after the dot) and holds it into the variable $ext
		
		$newname = "$student-$date.$ext";
		$filename = "uploads/".$newname;
		
		//echo "<h1>$newname</h1>";
		//echo "<h1>$filename</h1>";
	
		if(file_exists($filename)){
			//Don't re-upload
			echo "<p>File already exists, new file not uploaded.</p>";
		}else{
			//Upload
			move_uploaded_file($tmp,$filename);
			echo "<p>Your file was successfully uploaded to the web server.</p>";
			echo "<img src=\"$filename\" alt=\"Your uploaded image\" title=\"Your uploaded image\" />";
		}
		
		
		
		
		
	?>
</body>
</html>
