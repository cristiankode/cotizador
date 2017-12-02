<?php

include ('../controllers/PasajerosController.php');
include '../clases/Util.class.php';
//require '../clases/PasajerosClass.php';
$paxService = new PasajerosController();
$paxClass = new Pasajeros();



if (isset($_POST['apeP'])) {
    echo 'desde el boton agrega pasajeros';
    echo $_POST['btnAgregaPasajeros'];
    $paxClass->setCidExpediente(filter_input(INPUT_POST, "expediente"));

    $paxClass->setApellidoP(filter_input(INPUT_POST, "apeP"));
    $paxClass->setApellidoM(filter_input(INPUT_POST, "apeM"));
    $paxClass->setNombre(filter_input(INPUT_POST, "nombre1"));
    $paxClass->setNombre2(filter_input(INPUT_POST, "nombre2"));
    $paxClass->setTitulo(filter_input(INPUT_POST, "titulo"));
    $paxClass->setPrincipal(filter_input(INPUT_POST, "checkPax"));

    if (Util::validaStringVacio($paxClass->getApellidoP()) && Util::validaStringVacio($paxClass->getApellidoM()) &&
            Util::validaStringVacio($paxClass->getNombre()) && Util::validaStringVacio($paxClass->getTitulo())) {

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

if (isset($_POST['ibButtonPasaporte'])) {

    $paxClass->setIdPax(filter_input(INPUT_POST, "idPasajero"));
    if (!$paxClass->getIdPax() == '') {
        $ext = ".pdf";
        $archivo = $paxClass->getIdPax() . $ext;
        $filePath = "../pasaportesFiles/$archivo";
        if (file_exists($filePath)) {
            echo "<iframe src='$filePath' id='iframeid' name='iframe' frameborder='0' embedded='true'></iframe>";
        } else {
            echo '<script language="javascript">alert("ERROR: El Pasajero no tiene Pasaporte Registrado da Click en Boton Cargar Pasaporte para agregar un pasaporte.\n Intenta nuevamente por favor.");</script>';
            echo "<iframe src='http://lax.megatravel.com.mx/expo/img/logo_mt.png' id='iframeid' name='iframe' frameborder='0' embedded='true'></iframe>";
        }
    } else {
        echo '<script language="javascript">alert("ERROR: Para Consultar Pasaporte es necesario seleccionar un Pasajero.\n Intenta nuevamente por favor.");</script>';
    }
}

if (isset($_POST['ibButtonVisas'])) {
    $paxClass->setIdPax(filter_input(INPUT_POST, "idPasajero"));
    if (!$paxClass->getIdPax() == '') {
        $ext = ".pdf";
        $archivo = $paxClass->getIdPax() . $ext;
        $filePath = "../visasFiles/$archivo";
        if (file_exists($filePath)) {
            echo "<iframe src='$filePath' id='iframeid' name='iframe' frameborder='0' embedded='true'></iframe>";
        } else {
            echo '<script language="javascript">alert("ERROR: El Pasajero no tiene Visa Registrada da Click en Boton Cargar Visa para agregarla.\n Intenta nuevamente por favor.");</script>';
            echo "<iframe src='http://lax.megatravel.com.mx/expo/img/logo_mt.png' id='iframeid' name='iframe' frameborder='0' embedded='true'></iframe>";
        }
    } else {
        echo '<script language="javascript">alert("ERROR: Para Consultar visa es necesario seleccionar un Pasajero.\n Intenta nuevamente por favor.");</script>';
    }
}


if (isset($_POST['btnAddDattosAssistCard'])) {
    $paxClass->setIdPax(filter_input(INPUT_POST, "idPasajero"));
    $rsPax = $paxService->get($paxClass->getIdPax());

    echo json_encode($rsPax);
}




 
