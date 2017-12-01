<?php
include ("../models/dFiscalesDAO.php");

class dFiscalesController{
    
    private $model;
    
    public function __construct() {
        $this->model = new dFiscalesDAO();
    }
    
    public function set($status_data = array()){
        return $this->model->set($status_data);
    }
    
    public function get($cidCliente = ''){
        return $this->model->get($cidCliente);
    }
    
    public function del($cidCliente = ''){
        return $this->model->delete();
    }
    
    public function __destruct() {
        unset($this);
    }
}