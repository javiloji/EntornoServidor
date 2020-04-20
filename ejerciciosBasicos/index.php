<?php


/*
1. Crear una clase dni. Utiliza un método para su correcta validación.
2. Escribe una función que determine si un número es primo.
3. Untilizando la funcion anterior crea un array que almacene los primeros 5 números primos

Javier Lopera Jiménez

*/


include "Dni.php";


$dni = new Dni("57679244M");

$dni2 = new Dni("57679244L");


echo "Dni a probar: 57679244M <br><br>";

echo $dni->getMensaje();


echo "<br><br>Dni a probar: 57679244L <br><br>";

echo $dni2->getMensaje();

echo "<br><br>";
// 2. Funcion esPrimo

function esPrimo($numero){

    $esPrimo = false;
    $contador = 0;

    for ($i=1; $i <= $numero; $i++) { 
        if($numero % $i == 0){
            $contador++;
        }
    }
    if($contador == 2){
        $esPrimo = true;
    }

    return $esPrimo;
}

$numeroIntroducido = 257;

echo "<br><br>2. Funcion esPrimo, que devuelve si un numero es primo o no: <br><br>";


if($numeroIntroducido == 1 || esPrimo($numeroIntroducido)){
    echo "el numero $numeroIntroducido es primo<br><br><br>";
}
else{
    echo "el numero $numeroIntroducido no es primo<br><br><br>";
}

// 3. Array que almacena los 5 primeros numeros primos

$numeroInicial = 0;
$contador = 0;
$arrayPrimos = [];

echo "<br>3. Array que muestra los 5 primeros números primos: <br><br>";

while ($contador < 5) {
    $numeroInicial++;


    if(esPrimo($numeroInicial) || $numeroInicial==1){
        $contador++;
        array_push($arrayPrimos, $numeroInicial);
    }
}

print_r($arrayPrimos);


?>