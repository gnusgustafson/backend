
<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

$title = "L1, EX 2 - Arrayer";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title> <!-- Notera genvägen! -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>
<body class="container">
<?php


echo "<h1>$title</h1>";
echo "<h2>Vektorer går också bra att säga</h2>";

$cars = ["Saab", "Volvo", "BWM"];
$bilar = Array("Saab", "Volvo", "BMW");
echo "Jag tycker om $cars[1] <br>";
echo "Jag tycker om ",  print_r($cars),  "<br>";

//skriv ut en array
echo "<h2>Funktionen print_r</h2>";
echo '<pre>';
echo print_r($cars, true);
echo '</pre>';

//Skriv en dump på arrayen
echo "<h2>Funktionen var_dump</h2>";
echo '<pre>';
var_dump($cars);
echo '</pre>';

echo "<h2>Sortera en Array</h2>";

sort($cars);
echo '<pre>';
echo print_r($cars);
echo '</pre>';

echo "<h2>Lägga till nya element</h2>";

$cars[] = 'Opel';

echo '<pre>';
echo print_r($cars);
echo '</pre>';

//Skapa en tom array
$products = []; // En tom array

//Addera innehåll
$products[] = 'PC';
$products[] = 'MAC';

echo '<pre>';
echo print_r($products);
echo '</pre>';

echo "<h2>Associativ Array</h2>";

$flowers = array(
    'ros' => 50,
    'liljor' => 60
);

echo '<pre>';
echo print_r($flowers, true);
echo '</pre>';

echo "<h2>Miljövariabel</h2>";
echo '<pre>';
print_r($_SERVER);
echo '</pre>';

?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  
</body>
</html>