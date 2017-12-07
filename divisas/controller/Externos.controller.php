<?php

include '../clases/Util.class.php';
include '../model/Model_divisas.php';

$statusExternal = new Model_divisas();
$externoNom = filter_input(INPUT_POST, "externoNom");
$externoEmail = filter_input(INPUT_POST, "externoEmail");

if (isset($externoNom)) {

    if (Util::validaStringVacio($externoNom) && Util::validaStringLong($externoNom)) {

        if (Util::validaEmail($externoEmail)) {
            $valid = array(
                'nombre' => trim($externoNom),
                'email' => trim($externoEmail)
            );
            $getStatusExternal = $statusExternal->findEmailExternal($valid['email']);
            if (count($getStatusExternal) === 1) {
                $statusUpdateExternal = $statusExternal->updateContactExternos($valid);
                echo '<script language="javascript">alert("Excelente Trabajo!!. Contacto actualizado.");</script>';
                unset($getStatusExternal);
            } else {
                $statusCreateExternal = $statusExternal->createContactExternos($valid);
                echo '<script language="javascript">alert("Excelente Trabajo!!. Nuevo Contacto Agregado.");</script>';
                unset($getStatusExternal);
            }
        } else {
            echo '<script language="javascript">alert("ERROR: Correo no valido.");</script>';
        }
    }
}

$eraseMail = filter_input(INPUT_POST, "extEmail");
if (isset($eraseMail)) {
    $status = $statusExternal->deleteContactExternos($eraseMail);
    echo '<script language="javascript">alert("SUCCESS: Contacto Eliminado con Exito.");</script>';
}



//   echo '<div class="alert alert-success" role="alert">
//            <strong>Excelente Trabajo!!.</strong> Nuevo Contacto Agregado. </div>';
//}else{
//  echo '  <div class="alert alert-danger" role="alert">
//					<strong>Error!<br>
//                                        "Lo siento algo ha salido mal intenta nuevamente. Correo No Es Valido</div>';  
//}
//
