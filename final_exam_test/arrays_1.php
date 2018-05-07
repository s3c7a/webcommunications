<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>PHP Array Examples</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>PHP Array Examples</h1>

<h2>Indexed Arrays</h2>
<p>Define indexed array:<br>
$fruits=<strong><em>array</em></strong>('bananas','grapes','strawberries','oranges','apples');<p>

<p>Define indexed array way 2:<br>
$raro=[1=>'extrano',2=>'diferente',3=>'exotico',4=>'poco comun',5=>'fuera de onda'];<p>

<?php
/*
//INDEXED ARRAY FORMA VIEJA
$fruits=array('bananas','grapes','strawberries','oranges','apples');


//INDEXED SQUARE BRACKETS NO NECESITA ARRAY
$raro=[7=>'extrano',12=>'diferente',5=>'exotico',4=>'poco comun',9=>'fuera de onda'];


print_r($fruits);
echo "<br>";
print_r($raro);



//ASSOCIATIVE ARRAY
$capitalesDelMundo=array(
'Colombia'=>'Bogota',
'Mexico'=>'Ciudad de Mexico',
'Peru'=>'Lima',
'Estados Unidos'=>'Washington DC',
'Canada'=>'Toronto');

var_dump($capitalesDelMundo);

print "<h2>Sorting Arrays</h2>";

print "<h3>Sorting Arrays without caring about the keys</h3>";
print "<p>sort()</p>";

/*
sort($raro);
print_r($raro);
echo "<br>";
sort($capitalesDelMundo);
print_r($capitalesDelMundo);*/

echo "<p>Sort the values without regards to the keys. Por eso mandó a la chigada los keys de ambos casos (números y países).<br>
vamos a hacer lo mismo pero con <em>rsort()</em> o sea en reversa.
</p>";
/*
rsort($raro);
print_r($raro);
echo "<br>";
rsort($capitalesDelMundo);
print_r($capitalesDelMundo);*/

print "<h3>Sorting Arrays <strong>caring</strong> about the keys</h3>";
print "<p>asort()</p>";

/*
asort($raro);
print_r($raro);
echo "<br>";
asort($capitalesDelMundo);
print_r($capitalesDelMundo);
echo "<br>";
echo "<br>";
print "<p>arsort() reverse order</p>";
arsort($raro);
print_r($raro);
echo "<br>";
arsort($capitalesDelMundo);
print_r($capitalesDelMundo);*/

/*
print "<h3>Sort the values according to the<strong>Key</strong> value</h3>";
echo "<br>";
echo "<br>";
print "<p>ksort() natural order</p>";
ksort($raro);
print_r($raro);
echo "<br>";
ksort($capitalesDelMundo);
print_r($capitalesDelMundo);

print "<h3>Sort the values according to the<strong>Reverse Key</strong> value</h3>";
echo "<br>";
echo "<br>";
print "<p>krsort()reverse order</p>";
krsort($raro);
print_r($raro);
echo "<br>";
krsort($capitalesDelMundo);
print_r($capitalesDelMundo);



print "<h3>Shuffle values</h3>";
echo "<br>";
echo "<br>";
print "<p>shuffle()</p>";
shuffle($raro);
print_r($raro);
echo "<br>";
shuffle($capitalesDelMundo);
print_r($capitalesDelMundo);*/

/*print "<h3>Shuffle values</h3>";
echo "<br>";
echo "<br>";
print "<p>shuffle()</p>";
shuffle($raro);
print_r($raro);
echo "<br>";
shuffle($capitalesDelMundo);
print_r($capitalesDelMundo);*/

/*print "<p>FOR EACH<p>";
print "<br>";
foreach($capitalesDelMundo as $capital){
print $capital." ";
}
print "<br>";
print "<br>";
print $capitalesDelMundo['Colombia'];
print "<br>";
print "<br>";
print $raro[12];

*/

foreach ($_GET['colores'] as $tusColores){
  print $tusColores." ";
}

?>

<a href="formita_1.php">Go back</a>


</body>
</html>
