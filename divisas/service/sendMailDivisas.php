<?php

require ('../model/Model_divisas.php');
include ('../includes/mail.php');
include ('../clases/Fecha.class.php');

$tipoCambioHoy = new Model_divisas();

$fecha = date('Y-m-d');
$res = $tipoCambioHoy->buscarPorFecha($fecha);


if (count($res) == 1) {


    for ($n = 0; $n < count($res); $n++) {

        $usd = $res[$n]['m1'];
        $euros = $res[$n]['m2'];
        $euro_usd = $res[$n]['m3'];
        $chinaYuan = $res[$n]['m4'];
        $austAud = $res[$n]['m5'];
        $canCad = $res[$n]['m6'];
        $libEsterlina = $res[$n]['m7'];
        $tcOficial = $res[$n]['m8'];
    }

    $asunto = 'Tipo de Cambio' . ' ' . Fecha::getFechaCompleta($fecha);
    if (filter_has_var(INPUT_POST, 'optionRadio')) {

        $mails = $_POST['mails'];
        $mailsDestino = implode(",", $mails);

        echo $mailsDestino;
        if (filter_input(INPUT_POST, 'optionRadio') == 'option1') {

            $mensaje = '<html>'
                    . '<body style="background-color: #21202e;">'
                    . '<br/>'
                    . '<table width="525" height="50" cellpadding="2" cellspacing="0" align="center" border="0" style="font-size:20;padding:5px;border:1px solid #EAEAEA;background-color: #eaeaea;">'
                    . '<tr> '
                    . '<td width="200" align="left" style="background-color: #142f72;">'
                    . '<img src="http://www.megatravel.com.mx/images/logo-mega-travel-blue.jpg" width="180" height="50">'
                    . '</td >'
                    . '<td width="200" align="center" style="background-color: #142f72;" colspan="2" bordercolor="#142f72">'
                    . '<b style="color:#fff"> TIPO DE CAMBIO PARA EL DIA DE HOY</b>'
                    . '</td>'
                    . '</tr>'
                    . '<tr>'
                    . '<td width="200" align="center" colspan="3" style="font-style:normal;font-size:30px;color: #0B0B61;width:400px;height:100px;padding-top:65x;margin: 0 auto; text-align:center;">'
                    . '<b>' . strtoupper(Fecha::getFechaCompleta($fecha)) . '</b>'
                    . '</td>'
                    . '</tr>'
                    . '<tr>'
                    . '<td width="200" align="center" style="font-size:20px;color: #000099;">USD DOLLAR = </td>'
                    . '<td width="100" align="center" style="font-family: Arial;font-style: normal ;font-weight:bold ;letter-spacing: -1px ;font-size:50px;color:#0B0B61 ;width:200px ;height:155px ;padding-top:8px ;margin:0 auto ;text-align:CENTER ;text-transform: uppercase;">' . $usd . '</td>'
                    . '<td width="100" align="center" style="font-size:20px;color: #142f72;">MXN PESOS</td>'
                    . '</tr>'
                    . '</table>'
                    . '</body>'
                    . '</html>';

            correoBCC_sa($mailsDestino, '', $asunto, $mensaje, 'sistemas3@megatravel.com.mx', '');
        } else {
            $mensaje = '<html>'
                    . '<body style="background-color: #21202e;">'
                    . '<br/>'
                    . '<table cellpadding="2" cellspacing="0" align="center" style="font-size:20;padding:5px;border:1px solid #EAEAEA;background-color: #eaeaea">'
                    . '<tr> '
                    . '<td width="200" align="left" style="background-color: #142f72;">'
                    . '<img src="http://www.megatravel.com.mx/images/logo-mega-travel-blue.jpg" width="180" height="50">'
                    . '</td >'
                    . '<td width="200" align="center" style="background-color: #142f72;" colspan="2" bordercolor="#142f72">'
                    . '<b style="color:#fff"> TIPO DE CAMBIO PARA EL DIA DE HOY</b>'
                    . '</td>'
                    . '</tr>'
                    . '<tr>'
                    . '<td width="100" align="center" colspan="3" style="font-style:normal;font-size:30px;color: #0B0B61;width:100%;height:60px;padding-top:20px;margin;0 auto:text-align;center:text-transform:uppercase;">'
                    . '<b>' . strtoupper(Fecha::getFechaCompleta($fecha)) . '</b>'
                    . '</td>'
                    . '</tr>'
                    . '<tr>'
                    . '<td width="200" align="center" style="font-size:18px;color: #000099;">1 USD</td>'
                    . '<td width="100" align="center" style="font-family:Arial;font-style:normal;font-weight:bold;letter-spacing: -1px; font-size: 20px;color: #0B0B61;width:100px;height:43px;padding-top:3px;margin:0 auto;text-align:center">' . $usd . '</td>'
                    . '<td width="100" align="center" style="font-size:18px;color: #142f72;">MXN</td>'
                    . '</tr>'
                    . '<tr>'
                    . '<td width="200" align="center" style="font-size:18px;color: #000099;">1 USD</td>'
                    . '<td width="100" align="center" style="font-family:Arial;font-style:normal;font-weight:bold;letter-spacing: -1px; font-size: 20px;color: #0B0B61;width:100px;height:43px;padding-top:3px;margin:0 auto;text-align:center">' . $euros . '</td>'
                    . '<td width="100" align="center" style="font-size:18px;color: #000099;">EUROS</td>'
                    . '</tr>'
                    . '<tr>'
                    . '<td width="200" align="center" style="font-size:18px;color: #000099;">1 EURO</td>'
                    . '<td width="100" align="center" style="font-family:Arial;font-style:normal;font-weight:bold;letter-spacing: -1px; font-size: 20px;color: #0B0B61;width:100px;height:43px;padding-top:3px;margin:0 auto;text-align:center">' . $euro_usd . '</td>'
                    . '<td width="100" align="center" style="font-size:18px;color: #000099;">USD</td>'
                    . '</tr>'
                    . '<tr>'
                    . '<td width="200" align="center" style="font-size:18px;color: #000099;">CHINA 1 YUAN</td>'
                    . '<td width="100" align="center" style="font-family:Arial;font-style:normal;font-weight:bold;letter-spacing: -1px; font-size: 20px;color: #0B0B61;width:100px;height:43px;padding-top:3px;margin:0 auto;text-align:center">' . $chinaYuan . '</td>'
                    . '<td width="100" align="center" style="font-size:18px;color: #000099;">USD</td>'
                    . '</tr>'
                    . '<tr>'
                    . '<td width="200" align="center" style="font-size:18px;color: #000099;">AUSTRALIA 1 AUD</td>'
                    . '<td width="100" align="center" style="font-family:Arial;font-style:normal;font-weight:bold;letter-spacing: -1px; font-size: 20px;color: #0B0B61;width:100px;height:43px;padding-top:3px;margin:0 auto;text-align:center">' . $austAud . '</td>'
                    . '<td width="100" align="center" style="font-size:18px;color: #000099;">USD</td>'
                    . '</tr>'
                    . '<tr>'
                    . '<td width="200" align="center" style="font-size:18px;color: #000099;">CANADA 1 CAD</td>'
                    . '<td width="100" align="center" style="font-family:Arial;font-style:normal;font-weight:bold;letter-spacing: -1px; font-size: 20px;color: #0B0B61;width:100px;height:43px;padding-top:3px;margin:0 auto;text-align:center">' . $canCad . '</td>'
                    . '<td width="100" align="center" style="font-size:18px;color: #000099;">USD</td>'
                    . '</tr>'
                    . '<tr>'
                    . '<td width="200" align="center" style="font-size:18px;color: #000099;">LIBRA ESTERLINA</td>'
                    . '<td width="100" align="center" style="font-family:Arial;font-style:normal;font-weight:bold;letter-spacing: -1px; font-size: 20px;color: #0B0B61;width:100px;height:43px;padding-top:3px;margin:0 auto;text-align:center">' . $libEsterlina . '</td>'
                    . '<td width="100" align="center" style="font-size:18px;color: #000099;">USD</td>'
                    . '</tr>'
                    . '<tr>'
                    . '<td width="200" align="center" style="font-size:18px;color: #000099;">TIPO DE CAMBIO OFICIAL 1 USD</td>'
                    . '<td width="100" align="center" style="font-family:Arial;font-style:normal;font-weight:bold;letter-spacing: -1px; font-size: 20px;color: #0B0B61;width:100px;height:43px;padding-top:3px;margin:0 auto;text-align:center">' . $tcOficial . '</td>'
                    . '<td width="100" align="center" style="font-size:18px;color: #000099;">MXN****</td>'
                    . '</tr>'
                    . '</table>'
                    . '</body>'
                    . '</html>';
            correoBCC_sa($mailsDestino, '', $asunto, $mensaje, 'sistemas3@megatravel.com.mx', '');
        }
    }
} else {
    
}

