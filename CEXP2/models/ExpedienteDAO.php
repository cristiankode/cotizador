<?php
require_once ('Model.php');

class ExpedienteDAO extends Model {

    public function delete() {
        
    }

    public function edit() {
        
    }

    public function get($idExpediente = '') {
        
        $this->query = ($idExpediente != '')
                ? "SELECT * FROM t_expediente WHERE cid_expediente =" . "'$idExpediente'"
              : "SELECT * FROM t_expediente";
        $this->get_query();
        
        $data = [];

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }

    public function set() {
        
    }
    
    public function getRangeDatesExpedientes($statusFiltro = '', $fIni = '',$FFin = ''){
        
        $sql = "SELECT * FROM t_expediente ";
        if($statusFiltro == 0){
            $sql .= "WHERE dfecha";
        } else {
            $sql .= "WHERE fsal";
        }
        
        $sql .= " BETWEEN $fIni AND $FFin";
        var_dump($sql);
        $this->query = $sql;
        
        $this->get_query();
        
        $data = [];
        
        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
        
    }

}
