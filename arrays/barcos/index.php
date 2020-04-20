<?php
include "Flota.php";

// include "Barco.php";

$barco = null;
$tipo = 1;
$flota = new Flota();

// $barco = new Barco(1,3);

// echo $barco->getMensaje();

for ($i=1; $i < 11; $i++) { 
    switch ($i) {
        case 1:
        case 2:
        case 3:
        case 4:
            $tipo = 1;
            break;
        case 5:
        case 6:
        case 7:
            $tipo = 2;
        break;
        case 8:
        case 9:
            $tipo = 3;
            break;
        case 10:
            $tipo = 4;
            break;
        
        default:
            # code...
            break;
        
    }
    $barco = new Barco($i,$tipo);
    $flota->addBarco($barco);
}

$flota->colocarBarcos();
$flota->mostrarFlota();



?>