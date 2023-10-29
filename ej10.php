<!DOCTYPE html>
<html>
<head>
    <title> Ejercicio 10 </title>
</head>
<body>
    <h1> Script para encontrar y mostrar el array dividido en otros dos </h1>
<?php

    $num = [1, 3, 3, 8, 4, 3, 2, 3, 3];
    $count = count($num);
    $i = 0;

    while ($i < $count) {
        $leftSide = 0;
        $rightSide = 0;
        $j = 0;
        
        while ($j <= $i) {
            $leftSide += $num[$j];
            $j++;
        }
    
        $j = $i + 1;
        
        while ($j < $count) {
            $rightSide += $num[$j];
            $j++;
        }
        
        if ($rightSide == $leftSide) {
            echo "[" . implode(",", array_slice($num, 0, $i + 1)) . "]=" . $leftSide . "\n[" . implode(",", array_slice($num, $i + 1)) . "]=" . $rightSide . "\n";
        }
        
        $i++;
    }
    
?>
</body>
</html>
