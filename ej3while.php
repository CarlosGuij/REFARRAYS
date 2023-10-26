<!DOCTYPE html>
<html>
<head>
    <title>Par y Impar</title>
</head>
<body>
    <h1>Par y Impar</h1>
<?php
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
$tam = count($numeros);

while ($numeros < $tam){
    if ($numeros[$i] % 2 == 0){
        echo "$numeros[$i] es par <br>";
    }
 else {
    echo "$numeros[$i] es impar <br>";
}
}
