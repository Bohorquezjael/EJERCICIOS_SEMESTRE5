<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
</head>
<body>
    <?php
    $p_sabor = $_POST['sabores'];
    $cantidad = $_POST['cantidad'];
    $restos; 
    $ingres = array(5.0,.500,.250,.020,.350,.150,.300);
    $tingres = ($cantidad/30);
    $ingrez = [7];
    #ESTO SOLO ES UN COMENTARIO **IGNORAR** son pruebas para revisar los valores de las variables 
    #este bloque estara destinado a pruebas 
    //echo $p_sabor;
    
    /*
        5 huevos 
        .500 harina
        .250 azucar
        .20 levadura
        .350 mantequilla
        .150 leche
        .300 saborizante
    */
    #aqui terminan las pruebas
    if($cantidad == 150){
        $resu_des = ($p_sabor * $cantidad) * .85;
        for($i = 0; $i < 7;$i++){
            $ingrez = $ingres[$i] * $tingres;
        }
         echo $ingrez[1];
    }else {
        $resu_des = ($p_sabor * $cantidad);
    }
    /*echo "EL TOTAL A PAGAR ES: $".$resu_des."<br>";
    echo "LA CANTIDAD DE INGREDIENTES A USAR ES:".$ingres." KG Y EL SOBRANTE ES DE:".$restos." GRAMOS";*/
    ?>
</body>
</html>
