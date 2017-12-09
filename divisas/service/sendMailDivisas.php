<?php
require ('../model/Model_divisas.php');
include ('../includes/mail.php');
//include ($_SERVER["DOCUMENT_ROOT"] . '/php/mail.php');

if(filter_has_var(INPUT_POST, 'optionRadio')){
    
    if(filter_input(INPUT_POST, 'optionRadio') == 'option1'){
        echo 'enviando mail solo USD';
        
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
            . '<td width="100" align="center" style="font-size:18px;">18.89000</td>'
            . '<td width="100" align="center" style="font-size:18px;">MXN</td>'
            . '</tr>'
             . '<tr>'
            . '<td></td>'
            . '<td></td>'
            . '<td></td>'
            . '</tr>'
             . '<tr>'
            . '<td></td>'
            . '<td></td>'
            . '<td></td>'
            . '</tr>'
             . '<tr>'
            . '<td></td>'
            . '<td></td>'
            . '<td></td>'
            . '</tr>'
             . '<tr>'
            . '<td></td>'
            . '<td></td>'
            . '<td></td>'
            . '</tr>'
             . '<tr>'
            . '<td></td>'
            . '<td></td>'
            . '<td></td>'
            . '</tr>'
             . '<tr>'
            . '<td></td>'
            . '<td></td>'
            . '<td></td>'
            . '</tr>'
             . '<tr>'
            . '<td></td>'
            . '<td></td>'
            . '<td></td>'
            . '</tr>'
            . '</table>'
            . '</div>';
        correoBCC_sa('sistemas3@megatravel.com.mx', 'muskafly@hotmail.com', 'pruebas tc', $mensaje, 'sistemas3@megatravel.com.mx', 'varios');
    }else{
        echo 'enviando mail todos los tipos de cambios';
    }
    
}



