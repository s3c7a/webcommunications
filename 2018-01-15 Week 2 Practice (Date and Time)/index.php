<?php
// STEP 1. Bring the time of the day using 24HR format
//date('G')
$currentTime = 0;
echo "$currentTime";


// STEP 2. Create a variable depending on the value of the time using if conditionals.
/* 4 - 11 morning
   12 - 16 afternoo
   17 - 20 evening
   21 - 23 or 0-3 night
*/

if ($currentTime>=4&&$currentTime<=11){
	$currentTime = "morning";
} elseif ($currentTime>=12&&$currentTime<=16){
	$currentTime = "afternoon";
} elseif ($currentTime>=17&&$currentTime<=20){
	$currentTime = "evening";
} else {
	$currentTime = "night";
}

echo $currentTime;
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Puerto Vallarta, Mexico</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"  href="styles/<?php echo $currentTime;?>.css">
</head>

<body>

<div>
<header>
<img src="<?php echo $currentTime;?>.jpg" alt="Sculpture titled Triton and Mermaid by Carlos Espino at the malecon in Puerto Vallarta.">
<h1>Puerto Vallarta, Mexico</h1>
</header>

<main>
<h2>Good <?php echo $currentTime;?>!</h2>
<p>Proin tristique tellus lacus, vel aliquet neque luctus quis. Aliquam non urna at diam dictum ultrices. Maecenas elementum nisi vitae nisl molestie sagittis. Cras vel ligula dolor. Quisque feugiat eget augue et ullamcorper. Suspendisse hendrerit urna libero, at vulputate metus bibendum in. Morbi eu laoreet lacus. Nulla molestie rutrum sem sit amet auctor. Nulla feugiat, lacus eget sodales commodo, mauris lacus tincidunt metus, sagittis feugiat felis tellus sit amet est. Mauris euismod sapien at tristique viverra. Fusce ipsum ex, rhoncus sed enim quis, auctor vulputate augue. Pellentesque id elit urna.</p>
<p>Ut consequat vitae nulla sed egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent sed sollicitudin ante, ac condimentum nibh. Phasellus velit augue, sodales sed libero molestie, suscipit mattis nibh. Morbi cursus dui nec maximus vulputate. Mauris rutrum erat orci, et ultricies neque posuere non. In vel lorem sit amet dolor finibus tincidunt.</p>
<p>Nam id libero ac felis consequat pulvinar ut et tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis lacus quis sem suscipit pharetra. Nullam sodales vehicula leo. Cras eu tincidunt leo, sed dignissim velit. In nisi massa, euismod non dolor vel, placerat tempus tortor. Donec vel sapien euismod, dignissim orci a, sollicitudin nulla. Donec lacus quam, vestibulum sit amet ex vitae, blandit tincidunt massa. Fusce id venenatis nibh. Suspendisse arcu sem, pretium vel sagittis et, porta a tortor. Donec vel ultricies erat, at accumsan erat. Fusce sollicitudin bibendum ipsum id feugiat. Quisque quis euismod ex. Nulla vel eros placerat, scelerisque mi id, fringilla magna.</p>
<p>Vivamus at nunc blandit, tristique metus ut, tincidunt metus. Sed in mi eros. Nullam facilisis vitae erat nec ultricies. Morbi porttitor convallis metus, malesuada tempus dui dapibus at. Proin et mi ante. Donec bibendum sapien id sollicitudin tincidunt. Nullam aliquam cursus pulvinar. Vivamus nec volutpat risus. Nunc dictum sollicitudin tortor nec aliquam. Duis eu elit in enim scelerisque pharetra. Etiam at sem varius dolor efficitur convallis in ac magna.</p>
</main>

<footer>
<h3>Attributions</h3>
<p><a href="https://www.puertovallarta.net/espanol/que-hacer/esculturas-00-07-triton-y-la-nereida">Triton and Mermaid</a></p>
</footer>
</div>

</body>
</html>
