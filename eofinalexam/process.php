<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Energizing Option</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">
</head>

<body>
<?php
//Declaring Variables
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$issue = $_POST['issue'];
$positive = $_POST['positive'];
$eo = $_POST['eo'];
$feelings = " ";
/* Verification that variables are transferred correctly.

echo $name." ".$lastname." ".$issue." ".$positive." ".$eo;
print_r($_POST['feelings']);
*/

?>
<h1>Your Energizing Option</h1>
<p>Hello <?php echo $name." ".$lastname; ?>, yo are on your way to being a better version of yourself!</p>
<p>Instead of
<?php //Conditional for Problem
  if ($issue==1){
    echo "feeling off";
  } elseif ($issue==2){
    echo "your current problem";
  } elseif ($issue==3){
    echo "not making a point of choice";
  } elseif ($issue==4){
    echo "having a bad day";
  } elseif ($issue==5){
    echo "having negative feelings";
  } elseif ($issue==6){
    echo "your three negative attitudes";
  } elseif ($issue==7){
    echo "of rejection";
  } elseif ($issue==8){
    echo "feeling overwhelmed with life";
  } elseif ($issue==9){
    echo "not having an intention";
  } elseif ($issue==10){
    echo "having negative beliefs";
  } else {
    echo "feeling out of sync with positive beliefs";
  }
?>, you chose to resonate with the statement
"<?php //Print text entered
echo $positive." ";
?>" and the positive feelings of
<?php //Print each selected value
foreach ($_POST['feelings'] as $feelings){
  print $feelings.", ";
}
?>.</p>
<p>You chose to heal by practicing <?php //Conditional for Problem
    if ($eo==1){
      echo  "\"process";
    } elseif ($eo==2){
      echo "\"sound";
    } elseif ($eo==3){
      echo "\"colour and light";
    } elseif ($eo==4){
      echo "\"movement";
    } elseif ($eo==5){
      echo "\"breath";
    } elseif ($eo==6){
      echo "\"energy contact";
    } else {
      echo "\"essential oils";
    }
  ?>" enrgizing option number
  <?php //Conditional for option number
  if ($eo==1){
    $number = rand(1,9);
    echo  $number;
  } elseif ($eo==2){
    $number = rand(1,17);
    echo  $number;
  } elseif ($eo==3){
    $number = rand(1,13);
    echo  $number;
  } elseif ($eo==4){
    $number = rand(1,27);
    echo  $number;
  } elseif ($eo==5){
    $number = rand(1,27);
    echo  $number;
  } elseif ($eo==6){
    $number = rand(1,16);
    echo  $number;
  } else {
    $number = rand(1,18);
    echo  $number;
  }
  ?>. Please refer to the book <cite><a href="https://www.amazon.ca/Spiral-Up-Energizing-Options-right/dp/1937710033/ref=sr_1_fkmr0_3?ie=UTF8&qid=1513054221&sr=8-3-fkmr0&keywords=clohe+faith+wordsworth">Spiral Up!: 127 Energizing Options</a></cite> to get the details and instructions of your healing selection.</p>
  <p>Namaste!</p>
  <p>&#x1F549;</p>
<p><a href="index.html">Go back</a></p>

</body>
</html>
