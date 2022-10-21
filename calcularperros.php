<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultados</title>
</head>
<body>
    <h1 position="center"> CANTIDAD DE BULTOS A COMPRAR </h1>
    <?php
    $nperros = $_POST['perros'];
    $ndias = $_POST['dias'];
    $nkilos = ($nperros * .750) * $ndias; 
    $ttal = $nkilos/25;
    $ncostal = ceil($ttal);
    //$nsobrante = $nkilos % 25;
    //$ntotal = $nkilos + $nsobrante;
    $ntotal = ($ncostal*25) - $nkilos;
    echo "LA CANTIDAD DE KILOS SON: ".$nkilos." Y SOBRAN ".$ntotal." kilos";
    echo "<br>";
    echo "SE USARAN ".$ncostal." BULTOS DE ALIMENTO PARA LOS ".$ndias." DIAS";
    ?>
</body>
</html>