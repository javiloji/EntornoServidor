<?php

class Baraja{

    private $baraja = array();

    private $_carta;


    public function __construct(){

        for ($i=1; $i < 5; $i++) { 
            for ($j=1; $j < 11; $j++) { 
                $this->baraja[$i][$j] = $j;
            }
        }
    }

    public function getBaraja(){
        return $this->baraja;
    }

    // public function getFigura(){
    //     return $this->_figura;
    // }
}

?>