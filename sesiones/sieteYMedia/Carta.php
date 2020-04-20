<?php

class Carta{

    private $_palo;

    private $_figura;

    private $_valor;

    public function __construct($palo,$figura){
        $this->_palo = $palo;
        $this->_figura = $figura;
    }

    public function getPalo(){
        return $this->_palo;
    }

    public function getFigura(){
        return $this->_figura;
    }

    public function getValor(){
        $valor = 0;
        if($this->getFigura() < 8){
            $valor= $this->getFigura();
        }
        else{
            $valor = 0.5;
        }
        return $valor;
    }
}

?>