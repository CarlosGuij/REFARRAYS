<!DOCTYPE html>
<html>
<head>
    <title>Orden Inverso</title>
</head>
<body>
    <h1>Orden inverso</h1>
    
    <?php

$orden=[1,2,3,6,4,5,6,3,7,8];
print_r($orden);
echo"<br>";
$tam = count($orden);

for ($i = 0; $i < $tam-1; $i++) {
    $dupli = 0;
    for ($j = $i+1; $j < $tam; $j++) {
        if ($orden[$i] == $orden[$j]) {
            $dupli++;
        }
    }
        if ($dupli > 0){
            echo "El $orden[$i] se repite</br>";
        }
        
}     
    ?>

        

    
    
    
</body>
</html>