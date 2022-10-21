<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pago</title>
    <link rel="stylesheet" type="text/css" href="style_cbx.css">
</head>
<body class="bkgn-img">
    <?php
    $arselecs = [$_POST['arti1'],$_POST['arti2'],$_POST['arti3'],$_POST['arti4']];
    foreach($arselecs as $car){
            echo "<ul>";
            echo "<li>".$car."</li>";
            }
    // function comprobar($carrito){
    //     for($i = 0; $i <= 3; $i++){
    //         if($carrito[$i] == null){
    //             unset($arselecs[$i]);
    //             $arcs = array_merge($carrito);
    //             return $arcs;
    //         }
    //     }
    // }
    // foreach($arcs as $precioss){
    //     $total = $precioss*2;
    // }
    // foreach($arselecs as  $precio){
    //     if(empty($precio)) 
    //     $carrito = array_merge($arselecs);
    //     foreach($carrito as $car){
    //     echo "<ul>";
    //     echo "<li>".$car."</li>";
    //     }
    //      if(isset($precio)){
            
    //      }
    // }
    // for ($i = 0; $i <= 3; $i++){
    //     echo $arselecs[$i];
    // }
    //  foreach ($arselecs as  $precio) {
    //     if(isset($precio)){

    //     }
    //  }
    // function seleccionado($arselecs){
    //      foreach ($arselecs as  $precio) {
    //     if(isset($precio) == true){
    //         return
    //     }
    //  }
    // }
    ?>
</body>
</html>