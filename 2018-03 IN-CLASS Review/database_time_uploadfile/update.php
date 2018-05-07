<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Disney Movie Collection - Update Records</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>Update a Record in My Movie Collection (MySQL Database Writing)</h1>

<!-- ADD enctype="multipart/form-data to be able to upload files to the server"-->
<form method="post" action="storedisneymovie.php" enctype="multipart/form-data">

<div>
<label for="studio">Studio</label>
<select name="studio" id="studio">
	<option value="Walt Disney Animation Studios">Animation Studios</option>
	<option value="Walt Disney Studios Motion Pictures">Motion Pictures</option>
	<option value="Walt Disney Studios Home Entertainment">Home Entertainment</option>
	<option value="Disney • Pixar">Disney • Pixar</option>
</select>
</div>

<div>
<label for="title">Movie Title</label>
<input type="text" name="title" id="title" maxlength="60" required>
</div>

<div>
<label for="date">Release Year</label>
<input type="number" name="date" id="date" min="1900" maxlength="4" required>
</div>

<div>
	 <input type="checkbox" name="dvd" id="dvd" value="1">
	 <label for="dvd">DVD</label>

	 <input type="checkbox" name="bluray" id="bluray" value="1">
	 <label for="bluray">Blu-Ray</label>

	 <input type="checkbox" name="bluray3d" id="bluray3d" value="1">
	 <label for="bluray3d">Blu-Ray 3D</label>

	 <input type="checkbox" name="digital" id="digital" value="1">
	 <label for="digital">Digital</label>
</div>

<!-- input type set to "file" -->
<div>
	<label for="poster">Upload Movie Poster</label>
	<input type="file" name="poster" id="poster">
</div>

<div>
<input type="submit" name="button" id="button" value="Add to Movie List">
</div>

</form>


<p><a href="disneylist.php">View my List of Disney Movies</a></p>




</body>
</html>
