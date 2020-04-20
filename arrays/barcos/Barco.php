<?php

class Barco {
    
    private $_id;

    private $_tipo; // 1,2,3,4

    private $_modulos = array(); // $fila, $columna, $estado

    private $_mensaje;

    public function __construct($id,$tipo) {
        $this->_id = $id;
        $this->_tipo = $tipo;
        for ($i=0; $i < $tipo; $i++) { 
            $this->_modulo[] = array("fila" => -1,"columna" => -1, "estado" => 0); // Se van añadiendo uno detras de otro.  estado==0  es que no esta tocado
        }
        $this->_mensaje = "Barco $tipo creado con el id $id";
    }

    public function getMensaje(){
        return $this->_mensaje;
    }

    public function navega($fila,$columna,$direccion,$flota){


        switch ($direccion) {
            case "N":
                $columnaFinal = $columna;
                $filaFinal = $fila - $this->_tipo-1;
                $saltoFila = -1;
                $saltoColumna = 0;
                $lerror = ($filaFinal < 0) ? true : false; // Si la fila final es menor que cero el error es true
                break;
            
            case "S":
                $columnaFinal = $columna;
                $filaFinal = $fila + $this->_tipo-1;
                $saltoFila = 1;
                $saltoColumna = 0;
                $lerror = ($filaFinal > 9) ? true : false; // Si la fila final es mayor que nueve el error es true
                break;
            
            case "E":
                $columnaFinal = $columna + $this->_tipo-1;
                $filaFinal = $fila;
                $saltoFila = 0;
                $saltoColumna = 1;
                $lerror = ($columnaFinal > 9) ? true : false; // Si la fila final es mayor que nueve el error es true

                break;
            
            case "O":
                $columnaFinal = $columna - $this->_tipo-1;
                $filaFinal = $fila;
                $saltoFila = 0;
                $saltoColumna = -1;
                $lerror = ($columnaFinal < 0) ? true : false; // Si la fila final es mayor que nueve el error es true

                break;
            
            default:
                break;
        }

        if(!$lerror && !$this->objetoEnRadar(min($fila,$filaFinal), min($columna,$columnaFinal),max($filaFinal,$fila), max($columnaFinal,$columna),$flota)){
            
            for ($i=0; $i < $this->_tipo; $i++) { 
                $this->_modulo[$i]["fila"] = $fila;
                $this->_modulo[$i]["columna"] = $columna;

                $flota->ocupaEspacio($fila,$columna,$this->_tipo);

                $fila = $fila + $saltoFila;
                $columna = $columna + $saltoColumna;
            }

            $this->_mensaje = "En posicion $fila / $columna";
            return true;
        }
        else{
            $this->_mensaje = "Barco no colocado";
            return false;
        }
    }

    public function objetoEnRadar($filaInicio,$columnaInicio,$filaFinal,$columnaFinal,$flota){

        $filaInicio = max(0,$filaInicio-1);
        $columnaInicio = max(0,$columnaInicio-1);
        $filaFinal = min(9,$filaFinal+1);
        $columnaFinal = min(9,$columnaFinal+1);

        $lexisteObstaculo = false;
        for($i=$filaInicio;$i<=$filaFinal;$i++){
            for($j=$columnaInicio;$j<=$columnaFinal;$j++){
                if($flota->getEspacio($i,$j)!=0){ 
                    return true;
                }
            }
        }
        return $lexisteObstaculo;
    }
    
}


?>