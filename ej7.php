<!DOCTYPE html>
<html>
<head>
    <title> Ejercicio 7 </title>
</head>
<body>
    <h1> Desplazamientos de 0 al final del array </h1>
<?php

$num = [4, 3, 0, 8, 9, 7, 6, 0, 8, 0];

echo "Array original: ";
echo implode(",", $num) . "<br>";

for ($i = 0; $i < count($num); $i++) {
    if ($num[$i] == 0) {
        array_splice($num,$i, 1);
        array_push($num,0);
    }
}

echo "Array modificado desplazando los 0 al final: ";
echo implode(",", $num) , "<br>";

?>
</body>
</html>