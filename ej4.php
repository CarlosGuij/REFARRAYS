<!DOCTYPE html>
<html>
<head>
    <title> Ejercicio 4 </title>
</head>
<body>
    <h1> Repeticiones de cada valor </h1>
<?php

$paroimpar = [1, 2, 3, 4, 3, 3, 4, 1, 5];
$tam = count($paroimpar);
$bidi = [[]] ;
$pospar = 0;
$posimpar = 0;

for ($i = 0; $i < $tam; $i++) {
    $elem = $paroimpar[$i];
    if ($elem % 2 == 0) {
        $bidi[0][$pospar] = $elem;
        $pospar++;
    } else {
        $bidi[1][$posimpar] = $elem;
        $posimpar++;
    }
}

    echo "Array par del array: ";
    echo implode("-", $bidi[0]);
    echo "<br>";

    echo "Array par del array: ";
    echo implode("-", $bidi[1]);
    echo "<br>";
    ?>
