<?php
date_default_timezone_set('America/Mexico_City');
setlocale(LC_TIME, "spanish");
class Fecha {

    private $fechaInicio;
    private $fechaFinal;
    
    public function __construct() {
    }
    
    public function __destruct() {
        unset($this);
    }

    function getFechaInicio() {
        return $this->fechaInicio;
    }

    function getFechaFinal() {
        return $this->fechaFinal;
    }

    function setFechaInicio($fechaInicio) {
        $this->fechaInicio = $fechaInicio;
    }

    function setFechaFinal($fechaFinal) {
        $this->fechaFinal = $fechaFinal;
    }
    
    public static function getFechaEnCurso(){
        echo date("Y-m-d");
    }

}
