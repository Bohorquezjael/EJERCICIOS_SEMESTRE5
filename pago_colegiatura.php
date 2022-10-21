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
    $educacion = $_POST['nivel'];
    $beca = $_POST['becado'];
    $desc;
    $precio;
    if($educacion == "B"){
        $precio = 3500;
    }else if($educacion == "M"){
        $precio = 4200;
    }else if($educacion == "MS"){
        $precio = 5000;
    }else if($educacion == "S"){
        $precio = 8300;
    }if($beca == "SI"){
        $desc = $precio - ($precio*.20);
        echo "TOTAL A PAGAR: $" ;
        echo $desc;
    }else if($beca == "NO"){
        echo "TOTAL A PAGAR: $";
        echo $precio;
    }
    ?>
</body>
</html>