<?php
require_once '../model/Model.php';

class Model_divisas extends Model {

    public function __construct() {
        $this->db_name = 'cristian';
    }

    public function __destruct() {
        unset($this);
    }

    public function createDivisas($status_data = array(),$dayWeek ='') {
        foreach ($status_data as $key => $value) {
            //variables variables
            $$key = $value;
        }

        $sql = '';
        $sql = "INSERT INTO camdivis (fecha,m1,m2,m3,m4,m5,m6,m7,m8) VALUES"
                . " ('" . $dayWeek . "', '" . $usd_mxn . "', '" . $usd_euros . "',"
                . " '" . $euro_usd . "', '" . $yuan_usd . "', '" . $aud_usd . "',"
                . " '" . $cad_usd . "', '" . $gbp_usd . "', '" . $usd_mxn2 . "');";
        $this->query = $sql;
        $this->set_query();
    }

    public function createContactExternos($status_data = array()) {
        foreach ($status_data as $key => $value) {
            //variables variables
            $$key = $value;
        }
        $sql = "INSERT INTO contacext (nombre,email) VALUES ('" . $nombre . "', '" . $email . "')";
        $this->query = $sql;
        $this->set_query();
    }

    public function deleteContactExternos($email = '') {

        $sql = '';
        $sql .= "DELETE FROM contacext WHERE email='" . $email . "'";
        $this->query = $sql;
//        $this->query = "DELETE FROM contacext"
//                . " WHERE email='" . $email . "'";

        $this->set_query();
    }

    public function readAllDivisas() {
        $sql = '';
        $sql .= "SELECT * FROM camdivis";
//        $sql .= " ORDER BY cid_cliente ASC";
        $this->query = $sql;

        $this->get_query();

        $num_rows = count($this->rows);

        $data = [];

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }

    public function updateDivisas($nuevo_status = array(), $hoy = '') {
        foreach ($nuevo_status as $key => $value) {
            $$key = $value;
        }

        $sql = "UPDATE camdivis SET "
                . "m1='" . $usd_mxn . "', m2='" . $usd_euros . "', "
                . "m3='" . $euro_usd . "', m4='" . $yuan_usd . "', "
                . "m5='" . $aud_usd . "', m6='" . $cad_usd . "', "
                . "m7='" . $gbp_usd . "', m8='" . $usd_mxn2 . "' "
                . "WHERE fecha ='" . $hoy . "';";
        $this->query = $sql;
        $this->set_query();
    }

    public function updateContactExternos($nuevo_status = array()) {
        foreach ($nuevo_status as $key => $value) {
            $$key = $value;
        }

        $sql = "UPDATE contacext SET "
                . "nombre='" . $nombre . "', email='" . $email . "' "
                . "WHERE email ='" . $email . "';";
        $this->query = $sql;
        $this->set_query();
    }

    public function getContactosExternos() {
        $sql = '';
        $sql .= "SELECT * FROM contacext";
        $this->query = $sql;

        $this->get_query();

//        $num_rows = count($this->rows);

        $data = [];

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }

    public function buscarPorFecha($fecha = '') {

        $sql = '';
        $sql .= "SELECT fecha,m1,m2,m3,m4,m5,m6,m7,m8 FROM camdivis WHERE fecha = '" . $fecha . "' ";
        $this->query = $sql;

        $this->get_query();

        $data = [];

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }

    public function buscarRangosFechasDivisas($fech_in = '', $fech_fin = '') {
        $hoy = date('Ymd');
        $sql = '';
        $sql .= "SELECT fecha,m1,m2,m3,m4,m5,m6,m7,m8 FROM camdivis ";
        if (empty($fech_in) && empty($fech_fin)) {
            $sql .= "WHERE fecha = '" . $hoy . "' ORDER BY cid_cliente";
        } else {
            $sql .= "WHERE fecha BETWEEN '" . $fech_in . "' AND '" . $fech_fin . "' ";
        }
        $this->query = $sql;

        $this->get_query();

//        echo $num_rows = count($this->rows);

        $data = [];

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }

    public function findEmailExternal($email = '') {
        $sql = '';
        $sql .= "SELECT * FROM contacext WHERE email='" . $email . "'";
        $this->query = $sql;

        $this->get_query();

        $data = [];

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }
    
//    public function findCurrencyAverage($dateOne = '', $dateTwo = '') {
//        $sql = '';
//        $sql .= "SELECT fecha,m1,m2,m3,m4,m5,m6,m7,m8"
//                . " FROM camdivis WHERE fecha BETWEEN '".$dateOne."' AND '".$dateTwo."'"
//                . " AND WEEKDAY(fecha) NOT LIKE 5 AND WEEKDAY(fecha) NOT LIKE 6"
//                . " ORDER BY fecha DESC";
//        $this->query = $sql;
//        
//          $this->get_query();
//        
//        $data = [];
//        
//        foreach ($this->rows as $key => $value) {
//            array_push($data, $value);
//        }
//        
//        return $data;
//    }
    
    
    
    

    public function findCurrencyAverage($dateOne = '', $dateTwo = '') {
        $sql = '';
        $sql .= "SELECT AVG(m1) AS M1, AVG(m2) AS M2, AVG(m3) AS M3,"
                . " AVG(m4) AS M4, AVG(m5) AS M5, AVG(m6) AS M6,"
                . " AVG(m7) AS M7, AVG(m8) AS M8"
                . " FROM camdivis WHERE fecha BETWEEN '".$dateOne."' AND '".$dateTwo."'"
                . " AND WEEKDAY(fecha) NOT LIKE 5 AND WEEKDAY(fecha) NOT LIKE 6";
        $this->query = $sql;
        
          $this->get_query();
        
        $data = [];
        
        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }
        
        return $data;
    }

}
