<?php
require_once ('./models/Model.php');
class EmpleadoDAO extends Model{
    
    protected function delete() {
        
    }

    protected function edit() {
        
    }

    public function get($idDepto = '') {
        $sql = "SELECT CONCAT(cnombre, ' ', capellidop, ' ', capellidom) AS nombre,"
                . " cid_empleado FROM templeados WHERE nid_depto = $idDepto AND bactivo = 1";
//        var_dump($sql);
        $this->query = $sql;
        
        $this->get_query();
        
        $data = [];

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
        
    }

    protected function set() {
        
    }

}