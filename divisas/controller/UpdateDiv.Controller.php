<?php

include ($_SERVER["DOCUMENT_ROOT"] . '/php/session2.php');
require '../clases/Divisa.class.php';
require '../model/Model_divisas.php';
$fecha = filter_input(INPUT_POST, "fechaEdicion");
$usd_mxn = filter_input(INPUT_POST, "edit_usd_mxn");
$usd_euros = filter_input(INPUT_POST, "edit_usd_euros");
$euro_usd = filter_input(INPUT_POST, "edit_euro_usd");
$yuan_usd = filter_input(INPUT_POST, "edit_yuan_usd");
$aud_usd = filter_input(INPUT_POST, "edit_aud_usd");
$cad_usd = filter_input(INPUT_POST, "edit_cad_usd");
$gbp_usd = filter_input(INPUT_POST, "edit_gbp_usd");
$usd_mxn2 = filter_input(INPUT_POST, "edit_usd_mxn2");
$Divisa = new Divisa();

if (isset($fecha)) {
    $hoy = date('Y-m-d');
    if ($fecha != $hoy) {
        echo '<script language="javascript">alert("Mensaje del Administrador: Solo es posible modificar las divisas del día en curso");</script>';
    } else {
        $Divisa->setUsd_mxn($usd_mxn);
        $Divisa->setUsd_euros($usd_euros);
        $Divisa->setEuros_usd($euro_usd);
        $Divisa->setYuan_usd($yuan_usd);
        $Divisa->setAud_usd($aud_usd);
        $Divisa->setCad_usd($cad_usd);
        $Divisa->setGbp_usd($gbp_usd);
        $Divisa->setUsd_mxn_2($usd_mxn2);

        $data_divisas = array(
            "usd_mxn" => $Divisa->getUsd_mxn(),
            "usd_euros" => $Divisa->getUsd_euros(),
            "euro_usd" => $Divisa->getEuros_usd(),
            "yuan_usd" => $Divisa->getYuan_usd(),
            "aud_usd" => $Divisa->getAud_usd(),
            "cad_usd" => $Divisa->getCad_usd(),
            "gbp_usd" => $Divisa->getGbp_usd(),
            "usd_mxn2" => $Divisa->getUsd_mxn_2()
        );
        if (in_array(null, $data_divisas) > 0) {
            echo '<script language="javascript">alert("Error: Las divisas no se Guardaron. Intena nuevamente por favor");</script>';
        } else {
            $update = new Model_divisas();
            $statusUpdate = $update->updateDivisas($data_divisas, $hoy);
            if (count($update) === 1) {
                echo '<script language="javascript">alert("Tipo de cambio del dia de hoy Almacenado Correctamente.");</script>';
            }
        }
    }
}