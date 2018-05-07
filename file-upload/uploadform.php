<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>File Upload</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<h1>File Upload</h1>

<form method="post" action="upload.php" enctype="multipart/form-data">
	<label for="fname">First Name</label>
	<input type="text" name="fname" id="fname" required>
	<br>
	<br>
	<label for="lastname">Last Name</label>
	<input type="text" name="lastname" id="lastname" required>
	<br>
	<br>
	<!--UPLOAD FILE-->
	<label for="userupload">Uploa a file</label>
	<input type="file" name="userupload" id="userupload" required>
	<br>
	<br>
	<input type="submit" name="upload" id="upload" value="Upload">
	
</form>

</body>
</html>
