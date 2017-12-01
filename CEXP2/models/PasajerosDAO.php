<?php
require_once ('Model.php');

class PasajerosDAO extends Model {

    public function delete() {
        
    }

    public function edit($status_data = array()) {
        foreach ($status_data as $key => $value) {
            $$key = $value;
        }

        $sql = "UPDATE cupon SET "
                . "apellidop='" . $apellidop . "', apellidom='" . $apellidom . "', "
                . "nombre='" . $nombre . "', nombre2='" . $nombre2 . "', "
                . "titulo='" . $titulo . "', principal='" . $principal . "', "
                . "cid_expediente='" . $cid_expediente . "' "
                . "WHERE idpax ='" . $idpax . "'";
        var_dump($sql);
        $this->query = $sql;
        $this->set_query();
        
    }

    public function get($idPax = '') {
        
        $this->query = ($idPax != '')
                ? "SELECT * FROM pasajeros WHERE idpax=" . "'$idPax'"
              : "SELECT * FROM pasajeros";
        $this->get_query();
        
        $data = [];

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }

    public function set($status_data = array()) {
        foreach ($status_data as $key => $value) {
            //variables variables
            $$key = $value;
        }

        $sql = '';
        $sql = "INSERT INTO pasajeros (apellidop,apellidom,nombre,nombre2,titulo,principal,cid_expediente)
                VALUES('$apellidop','$apellidom','$nombre','$nombre2','$titulo',$principal,'$cid_expediente');";
        $this->query = $sql;
        $this->set_query();
    }
    
    public function pasajerosByCidExpediente($cidExpediente = ''){
        $sql = "SELECT pasajeros.idpax, pasajeros.apellidop, pasajeros.apellidom, 
                        pasajeros.nombre, pasajeros.nombre2, pasajeros.titulo, pasajeros.principal,
                        pasajeros.cid_expediente, t_expediente.cid_expediente
                        FROM pasajeros
                        INNER JOIN t_expediente ON pasajeros.cid_expediente = t_expediente.cid_expediente
                        WHERE pasajeros.cid_expediente = '$cidExpediente'";
        $this->query = $sql;
        $this->get_query();
        
        $data = [];
        
        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }
        return $data;
    }
    
    public function TitulosPax(){
        
        $this->query = "SELECT DISTINCT titulo from pasajeros WHERE titulo NOT LIKE '' ";
        
        $this->get_query();
        
        $data  = [];
        
        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }
        return $data;
    }
    
    /*falta implementarlo*/
    public function cambiaStatusPasajeros($idPax = '',$status = '') {
        $sql = "UPDATE pasajeros SET borrado= $status WHERE idpax= $idPax ";
        $this->query = $sql;

        $this->set_query();
    }

}
