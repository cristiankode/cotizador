<?php
include ("../models/ExpedienteDAO.php");

class ExpedienteController{
    
    private $model;
    
    public function __construct() {
        $this->model = new ExpedienteDAO();
    }
    
    public function set($status_data = array()){
        return $this->model->set($status_data);
    }
    
    public function get($idExpediente = ''){
        return $this->model->get($idExpediente);
    }
    
    public function del($idExpdiente = ''){
        return $this->model->delete();
    }
    
    public function getRangeDatesExpedientes($statusFiltro, $fIni, $FFin){
        return $this->model->getRangeDatesExpedientes($statusFiltro,$fIni, $FFin);
    }
    
    public function __destruct() {
        unset($this);
    }
}