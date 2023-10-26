<!DOCTYPE html>
<html>
<head>
    <title>Orden Inverso</title>
</head>
<body>
    <h1>Orden inverso</h1>
    
    <?php
    
    $orden=["Ana","Jorge","Maria","Lucia","Ana","Carlos"];
    print_r($orden);
    echo"<br>";
    $tam = count($orden);
    $max = $tam - 1;

    while ($max >= 0) {
        echo $orden[$max], " - ";
        $max--;
    }
    ?>
    