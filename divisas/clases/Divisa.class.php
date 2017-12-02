<?php
//namespace Divisas\Clases;

class Divisa {

    private $fecha = NULL;
    private $usd_mxn;
    private $usd_euros;
    private $euros_usd;
    private $yuan_usd;
    private $aud_usd;
    private $cad_usd;
    private $gbp_usd;
    private $usd_mxn_2;

    public function __construct() {
        
    }

    public function __destruct() {
        unset($this);
    }

    function getFecha() {
        return $this->fecha;
    }

    function getUsd_mxn() {
        return $this->usd_mxn;
    }

    function getUsd_euros() {
        return $this->usd_euros;
    }

    function getEuros_usd() {
        return $this->euros_usd;
    }

    function getYuan_usd() {
        return $this->yuan_usd;
    }

    function getAud_usd() {
        return $this->aud_usd;
    }

    function getCad_usd() {
        return $this->cad_usd;
    }

    function getGbp_usd() {
        return $this->gbp_usd;
    }

    function getUsd_mxn_2() {
        return $this->usd_mxn_2;
    }

    function setFecha($fecha) {

        if (empty($fecha)) {
            echo '<script language="javascript">alert("Error: Indica la fecha por favor (dd/mm/aaaa)");</script>';
            $this->fecha = '';
        } else {
            if (Util::fechaCorrecta($fecha)) {
                $this->fecha = $fecha;
            }
        }
    }

    function setUsd_mxn($usd_mxn) {

            $this->usd_mxn = trim($usd_mxn);
    }

    function setUsd_euros($usd_euros) {

            $this->usd_euros = trim($usd_euros);
    }

    function setEuros_usd($euros_usd) {
            $this->euros_usd = trim($euros_usd);
    }

    function setYuan_usd($yuan_usd) {
            $this->yuan_usd = trim($yuan_usd);
    }

    function setAud_usd($aud_usd) {
            $this->aud_usd = trim($aud_usd);
    }

    function setCad_usd($cad_usd) {
            $this->cad_usd = trim($cad_usd);
    }

    function setGbp_usd($gbp_usd) {
            $this->gbp_usd = trim($gbp_usd);
    }

    function setUsd_mxn_2($usd_mxn_2) {
            $this->usd_mxn_2 = trim($usd_mxn_2);
    }

}
