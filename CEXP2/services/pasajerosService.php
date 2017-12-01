<?php
include ('../controllers/PasajerosController.php');
include '../clases/Util.class.php';
//require '../clases/PasajerosClass.php';
$paxService = new PasajerosController();
$paxClass = new Pasajeros();



if (isset($_POST['apeP'])) {
    $paxClass->setCidExpediente(filter_input(INPUT_POST, "expediente"));
    
    $paxClass->setApellidoP(filter_input(INPUT_POST, "apeP"));
    $paxClass->setApellidoM(filter_input(INPUT_POST, "apeM"));
    $paxClass->setNombre(filter_input(INPUT_POST, "nombre1"));
    $paxClass->setNombre2(filter_input(INPUT_POST, "nombre2"));
    $paxClass->setTitulo(filter_input(INPUT_POST, "titulo"));
    $paxClass->setPrincipal(filter_input(INPUT_POST, "checkPax"));

    if (Util::validaStringVacio($paxClass->getApellidoP()) && Util::validaStringVacio($paxClass->getApellidoM()) &&
            Util::validaStringVacio($paxClass->getNombre()) && Util::validaStringVacio($paxClass->getTitulo())){
        
        $arrPax = [
        "apellidop" => $paxClass->getApellidoP(),
        "apellidom" => $paxClass->getApellidoM(),
        "nombre" => $paxClass->getNombre(),
        "nombre2" => $paxClass->getNombre2(),
        "titulo" => $paxClass->getTitulo(),
        "principal" => $paxClass->getPrincipal(),
        "cid_expediente" => $paxClass->getCidExpediente()
    ];
    
    $resultSet = $paxService->set($arrPax);
    echo count($resultSet);
    } else {
        echo '<script language="javascript">alert("ERROR: Para Agregar un Pasajero es necesario llenar todos los datos.\n Intenta nuevamente por favor.");</script>';
    }
    
}




 
