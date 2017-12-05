<?php
require_once 'IHotel.php';
/**
 * Description of HabitacionClass
 *
 * @author sistemasweb1
 */

class HabitacionSencillaClass implements IHotel{
    
    private $nHabitaciones;
    private $tipHabitacion;
    private $adultos;
    private $junior;
    private $menor;


    public function __construct($nHabitacion = '', $tipHabitacion = '', $adultos = '', $junior = '', $menor = '') {
        $this->nHabitaciones = $nHabitacion;
        $this->tipHabitacion = $tipHabitacion;
        $this->adultos = $adultos;
        $this->junior = $junior;
        $this->menor = $menor;
    }
    
    public function __destruct() {
        unset($this);
    }
    
    public function getCombinacionHabitaciones() {
        
    }

    public function getHabitaciones() {
        
    }

    public function setHabitaciones($habitaciones = '') {
        
    }

    public function getTipHabitacion() {
        
    }

    public function setTipHabitacion($tipoHabitacion) {
        
    }
    
    
    
    function getNHabitaciones() {
        return $this->nHabitaciones;
    }

    function getAdultos() {
        return $this->adultos;
    }

    function getJunior() {
        return $this->junior;
    }

    function getMenor() {
        return $this->menor;
    }

    function setNHabitaciones($nHabitaciones) {
        $this->nHabitaciones = $nHabitaciones;
    }

    function setAdultos($adultos) {
        $this->adultos = $adultos;
    }

    function setJunior($junior) {
        $this->junior = $junior;
    }

    function setMenor($menor) {
        $this->menor = $menor;
    }

 

}
