<?php
include ('../controllers/ExpedienteController.php');
$expedientesController = new ExpedienteController();
 $exp = $expedientesController->get();
 
$json_data = [
    "data" => $exp
];
echo json_encode($json_data);
        
        