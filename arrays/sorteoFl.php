<?php

$array= [];

for ($i=0; $i < 100; $i++) { 
        array_push($array,rand(15,90));
}

$array2 = [];

$cont=0;

        $maximo = max(array_count_values($array));

     foreach ($array as $key => $value) {
             
        if($key = $maximo){
                echo $maximo;
        }

     } 

?>