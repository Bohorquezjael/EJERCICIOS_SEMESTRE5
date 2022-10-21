<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculador de edad</title>
</head>
<body>
    <?php 
        echo "CALCULA LA EDAD EN BASE AL AÑO DE NACIMIENTO ";
        $año_nac = $_POST ['edad'];
        $edad = 2021 - $año_nac;
        echo "tu tienes " .$edad. " años de edad ";
        if($edad >= 18){
            echo "tu eres mayor de edad y tienes derecho a votar";
        }else if ($edad <= 17){
            echo "tu eres todavia un bebe";
        }
        ?>
</body>
</html>