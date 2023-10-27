<!DOCTYPE html>
<html>
<head>
    <title> Ejercicio 5 </title>
</head>
<body>
    <h1> Repeticiones de cada valor </h1>
<?php

$num = [1, 1, 2, 2, 2, 2, 3, 3, 4, 4, 4, 5, 5, 5, 5, 5, 5];
$arrRep = [];

foreach ($num as $valor) {
    if (!in_array($valor, $arrRep)) {
        $cuantas = array_count_values($num)[$valor];
        
        array_push($arrRep, $valor);
        echo "El número " . $valor . " Aparece " . $cuantas ." veces. <br>";
    }
}

?>
</body>
</html>


