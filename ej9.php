<!DOCTYPE html>
<html>
<head>
    <title> Ejercicio 9 </title>
</head>
<body>
    <h1> Script para encontrar pares de números que tienen un diferencia pasada por teclado </h1>
<?php


$num = [1, 15, 39, 75, 92];
$diferencia = 60;

for ($i = 0; $i < count($num); $i++) {
    for ($j = $i + 1; $j < count($num); $j++) {

        $diferencia_actual = abs ($num[$i] - $num[$j]);

        if ($diferencia_actual == $diferencia) {
            
            echo "Par encontrado: (" . $num[$i] . ", " . $num[$j] . ")\n";
        }
    }
}
?>

</body>
</html>