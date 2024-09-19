<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Web</title>
</head>
<body>
    <?php
    $texto1="Juan";
    $texto2="Maria";
    $a=8;
    $b=10;   

    echo "<h1>Mi Primera Web PHP</h1>";
    echo "<p>El se llama ". $texto1." y ella se llama ".$texto2."</p>";
    echo "<p>El resultado de sumar ".$a." + ".$b." = ".($a+ $b)."</p>";

    if ($a+$b>10) {
        echo "<p>La suma de a + b es mayor que 10</p>";
    }else{
        echo "<p>La suma de a+b NO es mayor que 10</p>";
    }

    for ($i=0; $i < 5 ; $i++) { 
        echo"<p>".$i."</p>";
    }
    echo"<p>Despues de bucle for la i vale: ".$i."</p>";

    $i=0;
    while ($i<5) {
        echo"<p>".$i."</p>";
        echo $i++;
    }

    ?>

        
</body>
</html>