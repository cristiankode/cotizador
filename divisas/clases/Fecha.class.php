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
    
     public static function getFechaCompleta($fe) {

        if ($fe != '') {
            $f = explode('-', $fe);
//            var_dump($f);
            if (count($f) == 3 & checkdate($f[1], $f[2], $f[0])) {
                $miFecha = gmmktime(12, 0, 0, $f[1], $f[2], $f[0]);
                $femision = strftime("%A %d de %B del %Y", $miFecha);
                return utf8_encode($femision);
            }
        }else{
            return '';
        }
    }

}
