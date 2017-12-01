<?php
require_once ('Model.php');

class CotizacionDAO extends Model{
    
    protected function delete() {
        
    }

    protected function edit() {
        
    }

    public function get($cid_cotizacion = '') {
        $this->query = ($cid_cotizacion != '')
                ? "SELECT * FROM tcotizacion WHERE cid_cotizacion =" . "'$cid_cotizacion'"
              : "SELECT * FROM tcotizacion";
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
