<?php
require ('../model/Model_divisas.php');
//include ('../includes/mail.php');
include ($_SERVER["DOCUMENT_ROOT"] . '/php/mail.php');

if(filter_has_var(INPUT_POST, 'optionRadio')){
    
    if(filter_input(INPUT_POST, 'optionRadio') == 'option1'){
        echo 'enviando mail solo USD';
        
//        correo("muskafly@hotmail.com", "tipos de cambio", "pruebas correos");
        correoBCC_sa('sistemas3@megatravel.com.mx', 'muskafly@hotmail.com', 'pruebas tc', 'enviando Divisas', 'sistemas3@megatravel.com.mx', 'varios');
    }else{
        echo 'enviando mail todos los tipos de cambios';
    }
    
}



