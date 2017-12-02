<?php

include ($_SERVER["DOCUMENT_ROOT"] . '/php/session2.php');
require ('../model/Model_divisas.php');

$statusBuscarFecha = new Model_divisas();

$hoy = date('Y-m-d');
//$hoy = date('2017-09-23');
$result = $statusBuscarFecha->buscarPorFecha($hoy);
if (count($result) > 0) {
    echo json_encode($result);
} else {
    echo '<div class="alert alert-success" id="mensaje" role="alert">
            <strong>Solo es posible modificar las divisas del día en curso.</strong> </div>';
}






