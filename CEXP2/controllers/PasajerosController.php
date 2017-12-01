<?php
include '../clases/DocumentoPDF.php';
include ("../models/PasajerosDAO.php");
$docPDF = new DocumentoPDF();

class PasajerosController{
    
    private $model;
    
    public function __construct() {
        $this->model = new PasajerosDAO();
    }
    
    public function set($status_data = array()){
        return $this->model->set($status_data);
    }
    
    public function get($idPax = ''){
        return $this->model->get($idPax);
    }
    
    public function del(){
    }
    
    public function editarPasajeros($status_data = array()){
        return $this->model->edit($status_data);
    }
    
    public function getTitulos(){
        return $this->model->TitulosPax();
    }
    
    public function getPaxExpediente($cidExpediente = ''){
        return $this->model->pasajerosByCidExpediente($cidExpediente);
    }
    
    public function setStatus($status = '',$idPax = ''){
        return $this->model->cambiaStatusPasajeros($idPax, $status);
    }
    
    public function __destruct() {
        unset($this);
    }
}

if(isset($_FILES['file01']['name'])){
    
    $idbutton = filter_input(INPUT_POST, 'idButtonUpload');
    if($idbutton === 'addPasaporte'){
        $path = $docPDF->getDirectorioSavePasaportes();
        echo $path;
    }else{
        $path = $docPDF->getDirectorioSaveVisas();
        echo $path;
    }
   
    $docPDF->uploadFilePDF($_FILES['file01']['name'], $_FILES['file01']['type'], $_FILES['file01']['size'], $_FILES['file01']['tmp_name'], $path, filter_input(INPUT_POST, "idPasajero"));
}