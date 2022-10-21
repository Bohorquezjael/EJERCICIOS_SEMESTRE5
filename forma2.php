<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>f2</title>
</head>
<body>
    <?php
    $psswrd = $_POST['contra'];
    $name = $_POST['name'];
    $sexxo = $_POST['sexo'];
    if ($sexxo == "H"){
        echo "TU ERES UN CABALLERO";
    }else if($sexxo == "M"){
        echo "TU ERES UNA DAMA";
    }else if($sexxo == "ND"){
        echo "TIENES UN SEXO NO DEFINIDO";
    }
    ?>
</body>
</html>