
<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

$title = "Exempel 1";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title> <!-- Notera genvägen! -->
</head>
<body>
<?php


echo "<h1>Hello, World</h1>";

$namn = "Magnus";

echo $namn;
echo '<br>';
var_dump($namn);

echo '<br>';

$lname = "Berglind";

echo "$namn $lname <br>";

echo '$namn $lname <br>';

?>
</body>
</html>