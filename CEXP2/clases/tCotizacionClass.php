<?php
class tCotizacion{
    
    private $cid_cotizacion;
    private $dFechaCotizacion;
    private $mailFunc_r;
    
    public function __construct() {
    }
    
    public function __destruct() {
        unset($this);
    }
    
    function getCid_cotizacion() {
        return $this->cid_cotizacion;
    }

    function getDFechaCotizacion() {
        return $this->dFechaCotizacion;
    }

    function getMailFunc_r() {
        return $this->mailFunc_r;
    }

    function setCid_cotizacion($cid_cotizacion) {
        $this->cid_cotizacion = $cid_cotizacion;
    }

    function setDFechaCotizacion($dFechaCotizacion) {
        $this->dFechaCotizacion = $dFechaCotizacion;
    }

    function setMailFunc_r($mailFunc_r) {
        $this->mailFunc_r = $mailFunc_r;
    }


}