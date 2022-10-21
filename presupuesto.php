<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
*{
        background-color: aquamarine;
        text-align:center;
}
</style>
<body>
<?php
$meses = $_POST['meses'];
$artis = $_POST['artiklos'];
$cant = $_POST['canti'];
$total;
$x = $_POST['cont'];
if($x == "no"){
    $total = $artis * $cant;
    echo "<h2>el total de los articulos es ".$total."</h2><br>";
}else if($x == "si"){
$total = $artis * $cant;
echo "<h2>el total de los articulos es ".$total."</h2><br>";
    $total = $total / $meses;
    echo "<h2>el total de los articulos es ".$total."</h2>";
}
?>
</body>
</html>