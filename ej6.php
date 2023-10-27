<!DOCTYPE html>
<html>
<head>
    <title> Ejercicio 6 </title>
</head>
<body>
    <h1>10 notas</h1>
<?php

$notas = [5, 7.5, 9, 4, 10, 8, 3.9, 6,];

foreach ($notas as $nota) {
    if (!is_numeric($nota)) {
        echo "Una o más notas no son numéricas. Verifica tus datos.\n";
        exit;
    }
}

$nota_minima = min($notas);
$nota_maxima = max($notas);

$posicion_minima = array_search($nota_minima, $notas);
$posicion_maxima = array_search($nota_maxima, $notas);

unset($notas[$posicion_minima]);
unset($notas[$posicion_maxima]);

$media = array_sum($notas) / count($notas);

echo "Notas originales: " . implode(', ', $notas) . "\n <br>";
echo "Nota más baja: $nota_minima\n <br>";
echo "Nota más alta: $nota_maxima\n <br>";
echo "Notas después de eliminar la más baja y la más alta: " . implode(', ', $notas) . "\n <br>";
echo "Media de las notas restantes: $media\n <br>";
?>
</body>
</html>
