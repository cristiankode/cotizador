<?php
//date_default_timezone_set('America/Mexico_City');
include ($_SERVER["DOCUMENT_ROOT"] . '/php/session2.php');
include '../includes/constants.php'; 
require '../model/Model_divisas.php';
include ('../clases/Divisa.class.php');
include ('../clases/Util.class.php');



$data_divisas = array();
$fecha = filter_input(INPUT_POST, "fecha");
$usd_mxn = filter_input(INPUT_POST, "usd_mxn");
$usd_euros = filter_input(INPUT_POST, "usd_euros");
$euro_usd = filter_input(INPUT_POST, "euro_usd");
$yuan_usd = filter_input(INPUT_POST, "yuan_usd");
$aud_usd = filter_input(INPUT_POST, "aud_usd");
$cad_usd = filter_input(INPUT_POST, "cad_usd");
$gbp_usd = filter_input(INPUT_POST, "gbp_usd");
$usd_mxn2 = filter_input(INPUT_POST, "usd_mxn2");

$Divisa = new Divisa();
$hoy = date('Y-m-d');

if (isset($fecha) && !empty($fecha)) {


    $Divisa->setFecha($fecha);

    if (Util::validaDivisas($usd_mxn)) {
        $Divisa->setUsd_mxn($usd_mxn);
        if (Util::validaDivisas($usd_euros)) {
            $Divisa->setUsd_euros($usd_euros);
            if (Util::validaDivisas($euro_usd)) {
                $Divisa->setEuros_usd($euro_usd);
                if (Util::validaDivisas($yuan_usd)) {
                    $Divisa->setYuan_usd($yuan_usd);
                    if (Util::validaDivisas($aud_usd)) {
                        $Divisa->setAud_usd($aud_usd);
                        if (Util::validaDivisas($cad_usd)) {
                            $Divisa->setCad_usd($cad_usd);
                            if (Util::validaDivisas($gbp_usd)) {
                                $Divisa->setGbp_usd($gbp_usd);
                                if (Util::validaDivisas($usd_mxn2)) {
                                    $Divisa->setUsd_mxn_2($usd_mxn2);
                                    if ($fecha == $hoy) {
                                        $array_divisas = array(
                                            "fecha" => $Divisa->getFecha(),
                                            "usd_mxn" => $Divisa->getUsd_mxn(),
                                            "usd_euros" => $Divisa->getUsd_euros(),
                                            "euro_usd" => $Divisa->getEuros_usd(),
                                            "yuan_usd" => $Divisa->getYuan_usd(),
                                            "aud_usd" => $Divisa->getAud_usd(),
                                            "cad_usd" => $Divisa->getCad_usd(),
                                            "gbp_usd" => $Divisa->getGbp_usd(),
                                            "usd_mxn2" => $Divisa->getUsd_mxn_2()
                                        );
                                        $model = new Model_divisas();
                                        $statusDiv = $model->buscarPorFecha($fecha);
                                        if (count($statusDiv) == UPDATE_NOT_NULL) {
                                            if (Util::getDayWeek($fecha) == DAY_OF_WEEK_FRIDAY) {
                                                /* Update friday */
                                                $model->updateDivisas($array_divisas, $hoy);
                                                /* Update saturday */
                                                $saturday = Util::getDaySaturday($fecha);
                                                $model->updateDivisas($array_divisas, $saturday);
                                                /* Update sunday */
                                                $sunday = Util::getDaySunday($fecha);
                                                $model->updateDivisas($array_divisas, $sunday);
                                                echo '<script language="javascript">alert("SUCCESS: Excelente trabajo. Se actualizarón las divisas correctamente.");</script>';
                                            } else {
                                                $model->updateDivisas($array_divisas, $hoy);
                                                echo '<script language="javascript">alert("SUCCESS: Excelente trabajo. Se actualizarón las divisas correctamente.");</script>';
                                            }
                                        } else {
                                            if (Util::getDayWeek($fecha) == DAY_OF_WEEK_FRIDAY) {
                                                /* Insert friday */
                                                $model1 = new Model_divisas();
                                                $model1->createDivisas($array_divisas, $hoy);
                                                /* Insert saturday */
                                                $saturday = Util::getDaySaturday($fecha);
                                                $model->createDivisas($array_divisas, $saturday);
                                                /* Insert sunday */
                                                $model3 = new Model_divisas();
                                                $sunday = Util::getDaySunday($fecha);
                                                $model3->createDivisas($array_divisas, $sunday);
                                                echo '<script language="javascript">alert("SUCCESS: Excelente trabajo. Se han agregado las divisas del dia de hoy correctamente.");</script>';
                                            } else {
                                                $model->createDivisas($array_divisas, $hoy);
                                                echo '<script language="javascript">alert("SUCCESS: Excelente trabajo. Se han agregado las divisas del dia de hoy correctamente.");</script>';
                                            }
                                        }
                                    } else {
                                        echo '<script language="javascript">alert("ERROR: Solo es posible modificar las Divisas del dia en curso. Intenta nuevamente por favor.");</script>';
                                    }
                                } else {
                                    echo '<script language="javascript">alert("ERROR: Divisa USD / MXN**** = ' . $usd_mxn2 . ' No Es Valida." );</script>';
                                }
                            } else {
                                echo '<script language="javascript">alert("ERROR: Divisa GBP / USD = ' . $gbp_usd . ' No Es Valida." );</script>';
                            }
                        } else {
                            echo '<script language="javascript">alert("ERROR: Divisa CAD / USD = ' . $cad_usd . ' No Es Valida." );</script>';
                        }
                    } else {
                        echo '<script language="javascript">alert("ERROR: Divisa AUD / USD = ' . $aud_usd . ' No Es Valida." );</script>';
                    }
                } else {
                    echo '<script language="javascript">alert("ERROR: Divisa YUAN / USD = ' . $yuan_usd . ' No Es Valida." );</script>';
                }
            } else {
                echo '<script language="javascript">alert("ERROR: Divisa EUROS / USD = ' . $euro_usd . ' No Es Valida." );</script>';
            }
        } else {
            echo '<script language="javascript">alert("ERROR: Divisa USD / EUROS = ' . $usd_euros . ' No Es Valida." );</script>';
        }
    } else {
        echo '<script language="javascript">alert("ERROR: Divisa USD / MXN = ' . $usd_mxn . ' No Es Valida. ");</script>';
    }
} else {
    echo '<script language="javascript">alert("ERROR: La Fecha no puede estar vacia. Intenta nuevamente por favor.");</script>';
}






















//if (isset($fecha) && !empty($fecha)) {
//
//    $Divisa->setFecha($fecha);
//    
//    $Divisa->setUsd_euros($usd_mxn);
//    $Divisa->setUsd_euros($usd_euros);
//    $Divisa->setEuros_usd($euro_usd);
//    $Divisa->setYuan_usd($yuan_usd);
//    $Divisa->setAud_usd($aud_usd);
//    $Divisa->setCad_usd($cad_usd);
//    $Divisa->setGbp_usd($gbp_usd);
//    $Divisa->setUsd_mxn_2($usd_mxn2);
//
//    $array_divisas = array(
//        "fecha" => $Divisa->getFecha(),
//        "usd_mxn" => $Divisa->getUsd_mxn(),
//        "usd_euros" => $Divisa->getUsd_euros(),
//        "euro_usd" => $Divisa->getEuros_usd(),
//        "yuan_usd" => $Divisa->getYuan_usd(),
//        "aud_usd" => $Divisa->getAud_usd(),
//        "cad_usd" => $Divisa->getCad_usd(),
//        "gbp_usd" => $Divisa->getGbp_usd(),
//        "usd_mxn2" => $Divisa->getUsd_mxn_2()
//    );
//    $model = new Model_divisas();
//    $hoy = date('Y-m-d');
//    $statusDiv = $model->buscarPorFecha($fecha);
//    if (count($statusDiv) == 1) {
//        if ($fecha != $hoy) {
//            echo '<script language="javascript">alert("ERROR: Solo es posible modificar las Divisas del dia en curso. Intenta nuevamente por favor.");</script>';
//        } else {
//            $status = $model->updateDivisas($array_divisas, $hoy);
//            echo '<script language="javascript">alert("SUCCESS: Excelente trabajo. Se actualizarón las divisas correctamente.");</script>';
//        }
//    } else {
//        if ($fecha != $hoy) {
//            echo '<script language="javascript">alert("ERROR: Solo es posible capturar las Divisas del dia en curso. Intenta nuevamente por favor.");</script>';
//        } else {
//            $status = $model->createDivisas($array_divisas);
//            echo '<script language="javascript">alert("SUCCESS: Excelente trabajo. Se han agregado las divisas del dia de hoy correctamente.");</script>';
//        }
//    }
//} else {
//    echo '<script language="javascript">alert("ERROR: La Fecha no puede estar vacia. Intenta nuevamente por favor.");</script>';
//}