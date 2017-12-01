<?php
include ("../models/CotizacionDAO.php");

class CotizacionController{
    
    private $model;
    
    public function __construct() {
        $this->model = new CotizacionDAO();
    }
    
    public function set($status_data = array()){
        return $this->model->set($status_data);
    }
    
    public function get($cidCotizacion = ''){
        return $this->model->get($cidCotizacion);
    }
    
    public function del($cidCotizacion = ''){
        return $this->model->delete();
    }
    
    public function __destruct() {
        unset($this);
    }
}