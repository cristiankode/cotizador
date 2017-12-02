<?php
//date_default_timezone_set('America/Mexico_City');
require '../model/Model_divisas.php';
require '../clases/Util.class.php';
$dateIntervalOne = filter_input(INPUT_POST, "dateFirst");
$dateIntervalTwo = filter_input(INPUT_POST, "dateLast");

$statusAverage = new Model_divisas();

$resultAverage = $statusAverage->findCurrencyAverage($dateIntervalOne, $dateIntervalTwo);

$arrayHeaders = [
    'USD/MXN',
    'USD/EUROS',
    'EURO/USD',
    'YUAN/UDS',
    'AUD/USD',
    'CAD/USD',
    'GBP/USD',
    'USD/MXN****'
];

$arrayData = [
    "M1" => round($resultAverage[0]['M1'],2),
    "M2" => round($resultAverage[0]['M2'],5),
    "M3" => round($resultAverage[0]['M3'],5),
    "M4" => round($resultAverage[0]['M4'],5),
    "M5" => round($resultAverage[0]['M5'],5),
    "M6" => round($resultAverage[0]['M6'],5),
    "M7" => round($resultAverage[0]['M7'],5),
    "M8" => round($resultAverage[0]['M8'],5)
];

Util::createTable($arrayHeaders,$arrayData, $idTable = 'tableAverage');
