<!DOCTYPE html>
<html>
<head>
    <title> Ejercicio 8 </title>
</head>
<body>
    <h1> Convertir las columnas en filas, y las filas en columnas </h1>
<?php

$num = [
    [1, 5, 8, 5],
    [7, 3, 2, 4],
    [1, 6, 2, 4],
];

echo "Array original filas: <br>";
foreach ($num as $fila) {
    echo implode(",", $fila) . "<br>";
}

echo "Paso de filas a columnas: <br>";

$arrTrans = [];
for ($i = 0; $i < count($num[0]); $i++) {
    array_push($arrTrans, []);
    for ($a = 0; $a < count($num); $a++) {
        array_push($arrTrans[$i], $num[$a][$i]);
    }
}

foreach ($arrTrans as $fila) {
    echo implode(",", $fila) . "<br>";
}
?>
</body>
</html>
