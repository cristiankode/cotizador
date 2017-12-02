<?php

/** reportar Errores */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('America/Mexico_City');

if (PHP_SAPI == 'cli')
    die('');

/** Incluir PHPExcel */
//require_once dirname(__FILE__) . '/../Classes/PHPExcel.php';
require_once dirname(__FILE__) . '/../clases/PHPExcel.php';



$objPHPExcel = new PHPExcel();

// Asignar Propiedades
$objPHPExcel->getProperties()->setCreator("Cristian Hurtado (Sistemas_WEB)")
//							 ->setLastModifiedBy("Cristian Hurtado")
        ->setTitle("Reporte de Divisas")
        ->setSubject("Reporte de Divisas")
        ->setDescription("Reporte de Divisas")
        ->setKeywords("reportes excel")
        ->setCategory("reportes excel");

$tituloReporte = "Reporte de Divisas";
$titulosColumnas = array('FECHA', 'USD/MXN', 'USD/EUROS', 'EURO/USD', 'YUAN/UDS', 'AUD/USD', 'CAD/USD', 'GBP/USD', 'USD/MXN****');


// Add some data
$objPHPExcel->setActiveSheetIndex(0)
        ->setCellValue('A1', $tituloReporte)
        ->setCellValue('A3', $titulosColumnas[0])
        ->setCellValue('B3', $titulosColumnas[1])
        ->setCellValue('C3', $titulosColumnas[2])
        ->setCellValue('D3', $titulosColumnas[3])
        ->setCellValue('E3', $titulosColumnas[4])
        ->setCellValue('F3', $titulosColumnas[5])
        ->setCellValue('G3', $titulosColumnas[6])
        ->setCellValue('H3', $titulosColumnas[7])
        ->setCellValue('I3', $titulosColumnas[8]);


require '/../model/Model_divisas.php';
global $status_data;
$statusExcelCli = new Model_divisas();

$deFechaReporte = filter_input(INPUT_POST, "deFechaReporte");
$alFechaReporte = filter_input(INPUT_POST, "alFechaReporte");


$status_data = $statusExcelCli->buscarRangosFechasDivisas($deFechaReporte, $alFechaReporte);
$i = 8;
for ($n = 0; $n < count($status_data); $n++) {
    // Miscellaneous glyphs, UTF-8
    $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A' . $i, $status_data[$n]['fecha'])
            ->setCellValue('B' . $i, $status_data[$n]['m1'])
            ->setCellValue('C' . $i, $status_data[$n]['m2'])
            ->setCellValue('D' . $i, $status_data[$n]['m3'])
            ->setCellValue('E' . $i, $status_data[$n]['m4'])
            ->setCellValue('F' . $i, $status_data[$n]['m5'])
            ->setCellValue('G' . $i, $status_data[$n]['m6'])
            ->setCellValue('H' . $i, $status_data[$n]['m7'])
            ->setCellValue('I' . $i, $status_data[$n]['m8']);
    $i++;
}

$estiloInformacion = new PHPExcel_Style();
$estiloInformacion->applyFromArray(
        array(
            'font' => array(
                'name' => 'Arial',
                'size' => 8,
                'color' => array(
                    'rgb' => '000000'
                )
            ),
            'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('argb' => 'FFd9b7f4')
            ),
            'borders' => array(
                'left' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN,
                    'color' => array(
                        'rgb' => '3a2a47'
                    )
                )
            )
));

$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A4:I" . ($i - 1));


for ($i = 'A'; $i <= 'I'; $i++) {
    $objPHPExcel->setActiveSheetIndex(0)
            ->getColumnDimension($i)->setAutoSize(TRUE);
}

// Renombrar Hoja de trabajo
$objPHPExcel->getActiveSheet()->setTitle('ReporteDivisas');

// Activar la hoja para que sea la que se muestre cuando se abre el archivo
$objPHPExcel->setActiveSheetIndex(0);
// Inmovilizar paneles 
$objPHPExcel->getActiveSheet(0)->freezePane('A4');

// Enviar archivo al navegador web
header('Content-Type: application/vnd.ms-excel');
header("Content-Disposition: attachment;filename=reporteDivisas" . date('YmdHis') . ".xls");
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
