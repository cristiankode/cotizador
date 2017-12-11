<?php
require ('../model/Model_divisas.php');
include ('../includes/mail.php');
//include ($_SERVER["DOCUMENT_ROOT"] . '/php/mail.php');

$tipoCambioHoy = new Model_divisas();

$fecha = date('Y-m-d');
$res = $tipoCambioHoy->buscarPorFecha($fecha);

for ($n = 0; $n<count($res); $n++){
    
    $usd = $res[$n]['m1'];
    $euros = $res[$n]['m2'];
    $euro_usd = $res[$n]['m3'];
    $chinaYuan = $res[$n]['m4'];
    $austAud = $res[$n]['m5'];
    $canCad = $res[$n]['m6'];
    $libEsterlina = $res[$n]['m7'];
    $tcOficial = $res[$n]['m8'];
}

if(filter_has_var(INPUT_POST, 'optionRadio')){
    
    if(filter_input(INPUT_POST, 'optionRadio') == 'option1'){
        echo 'enviando mail solo USD';
        
         $destinatarios = filter_input(INPUT_POST, 'mails');
         
         
//        correo("muskafly@hotmail.com", "tipos de cambio", "pruebas correos");
    $mensaje = '<div width="100%" bgcolor="#D5DBDB">'
            . '<table width="515" height="50" align="center" border="0">'
            . '<tr> '
            . '<td width="200" align="left" bgcolor="#142f72">'
            . '<img src="http://www.megatravel.com.mx/images/logo-mega-travel-blue.jpg" width="180" height="50">'
            . '</td >'
            . '<td width="200" align="center" bgcolor="#142f72" colspan="2" bordercolor="#142f72">'
            . '<b style="color:#fff"> TIPO DE CAMBIO PARA EL DIA DE HOY</b>'
            . '</td>'
            . '</tr>'
            . '<tr>'
            . '<td width="100" height="15" align="center" colspan="3">'
            . '<b>VIERNES 8 DE DICIEMBRE, DEL "2017</b>'
            . '</td>'
            . '</tr>'
            . '<tr>'
            . '<td width="200" align="center" style="font-size:18px;">1 USD</td>'
            . '<td width="100" align="center" style="font-size:18px;">'.$usd.'</td>'
            . '<td width="100" align="center" style="font-size:18px;">MXN</td>'
            . '</tr>'
             . '<tr>'
            . '<td width="200" align="center" style="font-size:18px;">1 USD</td>'
            . '<td width="100" align="center" style="font-size:18px;">'.$euros.'</td>'
            . '<td width="100" align="center" style="font-size:18px;">EUROS</td>'
            . '</tr>'
             . '<tr>'
            . '<td width="200" align="center" style="font-size:18px;">1 EURO</td>'
            . '<td width="100" align="center" style="font-size:18px;">'.$euro_usd.'</td>'
            . '<td width="100" align="center" style="font-size:18px;">USD</td>'
            . '</tr>'
             . '<tr>'
            . '<td width="200" align="center" style="font-size:18px;">CHINA 1 YUAN</td>'
            . '<td width="100" align="center" style="font-size:18px;">'.$chinaYuan.'</td>'
            . '<td width="100" align="center" style="font-size:18px;">USD</td>'
            . '</tr>'
             . '<tr>'
            . '<td width="200" align="center" style="font-size:18px;">AUSTRALIA 1 AUD</td>'
            . '<td width="100" align="center" style="font-size:18px;">'.$austAud.'</td>'
            . '<td width="100" align="center" style="font-size:18px;">USD</td>'
            . '</tr>'
             . '<tr>'
            . '<td width="200" align="center" style="font-size:18px;">CANADA 1 CAD</td>'
            . '<td width="100" align="center" style="font-size:18px;">'.$canCad.'</td>'
            . '<td width="100" align="center" style="font-size:18px;">USD</td>'
            . '</tr>'
             . '<tr>'
            . '<td width="200" align="center" style="font-size:18px;">LIBRA ESTERLINA</td>'
            . '<td width="100" align="center" style="font-size:18px;">'.$libEsterlina.'</td>'
            . '<td width="100" align="center" style="font-size:18px;">USD</td>'
            . '</tr>'
             . '<tr>'
            . '<td width="200" align="center" style="font-size:18px;">LIBRA ESTERLINA</td>'
            . '<td width="100" align="center" style="font-size:18px;">'.$tcOficial.'</td>'
            . '<td width="100" align="center" style="font-size:18px;">MXN****</td>'
            . '</tr>'
            . '</table>'
            . '</div>';
        correoBCC_sa('sistemas3@megatravel.com.mx', 'muskafly@hotmail.com', 'pruebas tc', $mensaje, 'sistemas3@megatravel.com.mx', 'varios');
    }else{
        echo 'enviando mail todos los tipos de cambios';
    }
    
}



