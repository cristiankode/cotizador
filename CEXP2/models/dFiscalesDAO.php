<?php
require_once ('Model.php');

class dFiscalesDAO extends Model{
    
    protected function delete() {
        
    }

    protected function edit() {
        
    }

    public function get($cidCliente = '') {
            
        $this->query = ($cidCliente != '')
                ? "SELECT * FROM dfiscales WHERE cid_cliente =" . "'$cidCliente'"
              : "SELECT * FROM dfiscales";
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

