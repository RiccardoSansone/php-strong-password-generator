<?php 
    // recupero il valore dell'input solo se viene inserito
    if(isset($_GET['passLength'])){
        // salvo il valore in una variabile
        $length = $_GET['passLength'];
        var_dump($length);

    }
    $car = 'abcdefghilmnopqrst';

    for($i = 0; $i <$passLength; $i++){
        $pass = [];
        $carachters = $car[rand(0,strlen($car))];
        $pass[] = $carachters;
        var_dump($pass);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>phpPasswordGenerator</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;500;700&family=PT+Sans:wght@400;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body class="bg-blu">

    <h1 class="color-gray text-center mt-4">Strong Password Generator</h1>
    <h2 class="color-white text-center mt-2">Genera una password sicura</h2>
    <h6 class="text-center mt-2">Indica in basso la lunghezza che desideri per la tua password</h6>
    <!-- container for center all -->
    <div class="container d-flex justify-center">
        <!-- form for password length -->
        <form action="" method="$_GET" class="mt-1">
            <input type="number" name="passLength" placeholder="type your number">
            <button type="submit">GENERA</button>
        </form>
        <!-- /form -->
    </div>
    <!-- /container -->

</body>
</html>