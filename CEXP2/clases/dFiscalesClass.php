<?php
class dFiscales{
    
    private $cid_cliente;
    private $nombre;
    private $apellidop;
    private $apellidom;
    private $rfc;
    private $direccion;
    private $colonia;
    private $munidel;
    private $estado;
    private $codigop;
    private $status;
    private $cedula;
    private $fecha_alta;
    private $quienIngresa;
    private $fhcdbancarios;
    private $quiencdbancarios;
    private $cvecdbancarios;
    
    public function __construct() {
        
    }
    
    public function __destruct() {
        unset($this);
    }
    
    function getCid_cliente() {
        return $this->cid_cliente;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellidop() {
        return $this->apellidop;
    }

    function getApellidom() {
        return $this->apellidom;
    }

    function getRfc() {
        return $this->rfc;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getColonia() {
        return $this->colonia;
    }

    function getMunidel() {
        return $this->munidel;
    }

    function getEstado() {
        return $this->estado;
    }

    function getCodigop() {
        return $this->codigop;
    }

    function getStatus() {
        return $this->status;
    }

    function getCedula() {
        return $this->cedula;
    }

    function getFecha_alta() {
        return $this->fecha_alta;
    }

    function getQuienIngresa() {
        return $this->quienIngresa;
    }

    function getFhcdbancarios() {
        return $this->fhcdbancarios;
    }

    function getQuiencdbancarios() {
        return $this->quiencdbancarios;
    }

    function getCvecdbancarios() {
        return $this->cvecdbancarios;
    }

    function setCid_cliente($cid_cliente) {
        $this->cid_cliente = $cid_cliente;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellidop($apellidop) {
        $this->apellidop = $apellidop;
    }

    function setApellidom($apellidom) {
        $this->apellidom = $apellidom;
    }

    function setRfc($rfc) {
        $this->rfc = $rfc;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setColonia($colonia) {
        $this->colonia = $colonia;
    }

    function setMunidel($munidel) {
        $this->munidel = $munidel;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setCodigop($codigop) {
        $this->codigop = $codigop;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    function setFecha_alta($fecha_alta) {
        $this->fecha_alta = $fecha_alta;
    }

    function setQuienIngresa($quienIngresa) {
        $this->quienIngresa = $quienIngresa;
    }

    function setFhcdbancarios($fhcdbancarios) {
        $this->fhcdbancarios = $fhcdbancarios;
    }

    function setQuiencdbancarios($quiencdbancarios) {
        $this->quiencdbancarios = $quiencdbancarios;
    }

    function setCvecdbancarios($cvecdbancarios) {
        $this->cvecdbancarios = $cvecdbancarios;
    }


}
