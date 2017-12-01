<?php

class tExpediente{
    
    private $aceptar;
    private $cidExpediente;
    private $dFechaSalida;
    private $cNombreCliente;
    private $cDestpack;
    private $pax;
    private $sComisionable;
    private $moneda = 0;
    private $comision;
    private $impComage;
    private $nStatus;
    private $fSal;
    private $cNombreCliente2;
    private $cTipoCliente;
    private $suplCom;
    private $suplNCom;
    private $impuestos;
    private $visas;
    private $otros;
    private $minApagar;
    private $cobranza;
    private $ctototope;
    private $utilidad;
    private $ejecutivo;
    private $cIniciales;
    private $cidCotizacion;
    private $difComi;
    private $comEAcepto;
    private $cartaDesc;
    private $cuentaUtil;
    private $cuentaBono;
    private $cuentaOver;
    private $tieneSeg;
    private $tipoSeg;
    private $impSeg;
    private $comSeg;
    private $idSeg;
    private $deptSup;
    private $areaSup;
    private $idSup;
    private $nomDep;
    private $nomSup;
    private $overBase;
    private $overSup;
    private $monedaOver;
    private $cidCliente;
    private $comvtas;
    private $chora;
    private $dFechaRegreso;
    
    public function __construct() {
        
    }
    
    public function __destruct() {
        unset($this);
    }
    
    function getAceptar() {
        return $this->aceptar;
    }

    function getCidExpediente() {
        return $this->cidExpediente;
    }

    function getDFechaSalida() {
        return $this->dFechaSalida;
    }

    function getCNombreCliente() {
        return $this->cNombreCliente;
    }

    function getCDestpack() {
        return $this->cDestpack;
    }

    function getPax() {
        return $this->pax;
    }

    function getSComisionable() {
        return $this->sComisionable;
    }

    function getMoneda() {
        return $this->moneda;
    }

    function getComision() {
        return $this->comision;
    }

    function getImpComage() {
        return $this->impComage;
    }

    function getNStatus() {
        return $this->nStatus;
    }

    function getFSal() {
        return $this->fSal;
    }

    function getCNombreCliente2() {
        return $this->cNombreCliente2;
    }

    function getCTipoCliente() {
        return $this->cTipoCliente;
    }

    function getSuplCom() {
        return $this->suplCom;
    }

    function getSuplNCom() {
        return $this->suplNCom;
    }

    function getImpuestos() {
        return $this->impuestos;
    }

    function getVisas() {
        return $this->visas;
    }

    function getOtros() {
        return $this->otros;
    }

    function getMinApagar() {
        return $this->minApagar;
    }

    function getCobranza() {
        return $this->cobranza;
    }

    function getCtototope() {
        return $this->ctototope;
    }

    function getUtilidad() {
        return $this->utilidad;
    }

    function getEjecutivo() {
        return $this->ejecutivo;
    }

    function getCIniciales() {
        return $this->cIniciales;
    }

    function getCidCotizacion() {
        return $this->cidCotizacion;
    }

    function getDifComi() {
        return $this->difComi;
    }

    function getComEAcepto() {
        return $this->comEAcepto;
    }

    function getCartaDesc() {
        return $this->cartaDesc;
    }

    function getCuentaUtil() {
        return $this->cuentaUtil;
    }

    function getCuentaBono() {
        return $this->cuentaBono;
    }

    function getCuentaOver() {
        return $this->cuentaOver;
    }

    function getTieneSeg() {
        return $this->tieneSeg;
    }

    function getTipoSeg() {
        return $this->tipoSeg;
    }

    function getImpSeg() {
        return $this->impSeg;
    }

    function getComSeg() {
        return $this->comSeg;
    }

    function getIdSeg() {
        return $this->idSeg;
    }

    function getDeptSup() {
        return $this->deptSup;
    }

    function getAreaSup() {
        return $this->areaSup;
    }

    function getIdSup() {
        return $this->idSup;
    }

    function getNomDep() {
        return $this->nomDep;
    }

    function getNomSup() {
        return $this->nomSup;
    }

    function getOverBase() {
        return $this->overBase;
    }

    function getOverSup() {
        return $this->overSup;
    }

    function getMonedaOver() {
        return $this->monedaOver;
    }

    function getCidCliente() {
        return $this->cidCliente;
    }

    function setAceptar($aceptar) {
        $this->aceptar = $aceptar;
    }

    function setCidExpediente($cidExpediente) {
        $this->cidExpediente = $cidExpediente;
    }

    function setDFechaSalida($dFechaSalida) {
        $this->dFechaSalida = $dFechaSalida;
    }

    function setCNombreCliente($cNombreCliente) {
        $this->cNombreCliente = $cNombreCliente;
    }

    function setCDestpack($cDestpack) {
        $this->cDestpack = $cDestpack;
    }

    function setPax($pax) {
        $this->pax = $pax;
    }

    function setSComisionable($sComisionable) {
        $this->sComisionable = $sComisionable;
    }

    function setMoneda($moneda) {
        $this->moneda = $moneda;
    }

    function setComision($comision) {
        $this->comision = $comision;
    }

    function setImpComage($impComage) {
        $this->impComage = $impComage;
    }

    function setNStatus($nStatus) {
        $this->nStatus = $nStatus;
    }

    function setFSal($fSal) {
        $this->fSal = $fSal;
    }

    function setCNombreCliente2($cNombreCliente2) {
        $this->cNombreCliente2 = $cNombreCliente2;
    }

    function setCTipoCliente($cTipoCliente) {
        $this->cTipoCliente = $cTipoCliente;
    }

    function setSuplCom($suplCom) {
        $this->suplCom = $suplCom;
    }

    function setSuplNCom($suplNCom) {
        $this->suplNCom = $suplNCom;
    }

    function setImpuestos($impuestos) {
        $this->impuestos = $impuestos;
    }

    function setVisas($visas) {
        $this->visas = $visas;
    }

    function setOtros($otros) {
        $this->otros = $otros;
    }

    function setMinApagar($minApagar) {
        $this->minApagar = $minApagar;
    }

    function setCobranza($cobranza) {
        $this->cobranza = $cobranza;
    }

    function setCtototope($ctototope) {
        $this->ctototope = $ctototope;
    }

    function setUtilidad($utilidad) {
        $this->utilidad = $utilidad;
    }

    function setEjecutivo($ejecutivo) {
        $this->ejecutivo = $ejecutivo;
    }

    function setCIniciales($cIniciales) {
        $this->cIniciales = $cIniciales;
    }

    function setCidCotizacion($cidCotizacion) {
        $this->cidCotizacion = $cidCotizacion;
    }

    function setDifComi($difComi) {
        $this->difComi = $difComi;
    }

    function setComEAcepto($comEAcepto) {
        $this->comEAcepto = $comEAcepto;
    }

    function setCartaDesc($cartaDesc) {
        $this->cartaDesc = $cartaDesc;
    }

    function setCuentaUtil($cuentaUtil) {
        $this->cuentaUtil = $cuentaUtil;
    }

    function setCuentaBono($cuentaBono) {
        $this->cuentaBono = $cuentaBono;
    }

    function setCuentaOver($cuentaOver) {
        $this->cuentaOver = $cuentaOver;
    }

    function setTieneSeg($tieneSeg) {
        $this->tieneSeg = $tieneSeg;
    }

    function setTipoSeg($tipoSeg) {
        $this->tipoSeg = $tipoSeg;
    }

    function setImpSeg($impSeg) {
        $this->impSeg = $impSeg;
    }

    function setComSeg($comSeg) {
        $this->comSeg = $comSeg;
    }

    function setIdSeg($idSeg) {
        $this->idSeg = $idSeg;
    }

    function setDeptSup($deptSup) {
        $this->deptSup = $deptSup;
    }

    function setAreaSup($areaSup) {
        $this->areaSup = $areaSup;
    }

    function setIdSup($idSup) {
        $this->idSup = $idSup;
    }

    function setNomDep($nomDep) {
        $this->nomDep = $nomDep;
    }

    function setNomSup($nomSup) {
        $this->nomSup = $nomSup;
    }

    function setOverBase($overBase) {
        $this->overBase = $overBase;
    }

    function setOverSup($overSup) {
        $this->overSup = $overSup;
    }

    function setMonedaOver($monedaOver) {
        $this->monedaOver = $monedaOver;
    }

    function setCidCliente($cidCliente) {
        $this->cidCliente = $cidCliente;
    }

    function getComvtas() {
        return $this->comvtas;
    }

    function setComvtas($comvtas) {
        $this->comvtas = $comvtas;
    }

    function getChora() {
        return $this->chora;
    }

    function setChora($chora) {
        $this->chora = $chora;
    }

    function getDFechaRegreso() {
        return $this->dFechaRegreso;
    }

    function setDFechaRegreso($dFechaRegreso) {
        $this->dFechaRegreso = $dFechaRegreso;
    }


    
}