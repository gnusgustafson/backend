
<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

$title = "Lektion 2 - Exempel 8";

?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
    <title><?=$title?></title> <!-- Notera genvägen! -->
</head>
<body class="container pt-5 pb-5">


<?php

    echo "<h1>Funktioner</h1>" . '<hr>';
   
    function echobr($text){
        echo "$text <br>";
    }

    function print_array($array){
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }

    //Anrop
    
    echobr("Hej");
    echobr("på");
    echobr("dig");
    echobr('');

    print_array($_GET);
    
    

?>

<a href="?Name=Magnus&Age=30&Adress=Bodalsvägen 8">Länk med argument </a>
<br>
<a href="http://localhost/nacka/l2/ex8.php">Återställ</a>



<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
</body>
</html>