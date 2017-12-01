<?php

include ('../controllers/ExpedienteController.php');

if (isset($_POST)) {

    $statusFiltro = $_POST['filtro'];
    $fIni = $_POST['fechIni'];
    $FFin = $_POST['fechFin'];

    $expedientesController = new ExpedienteController();

    $exp = $expedientesController->getRangeDatesExpedientes($statusFiltro, $fIni, $FFin);

    for ($x = 0; $x < count($exp); $x++) {

        echo '<tr>
                   <td>' . $exp[$x]['cid_cotizacion'] . '</td> 
                   <td>' . $exp[$x]['cid_expediente'] . '</td> 
                   <td>' . $exp[$x]['dfecha'] . '</td> 
                   <td>' . $exp[$x]['chora'] . '</td>
                   <td>' . $exp[$x]['cdestpack'] . '</td>
                   <td>' . $exp[$x]['cid_cliente'] . '</td>
                   <td>' . $exp[$x]['cnombrecliente'] . '</td>
                   <td>' . $exp[$x]['ciniciales'] . '</td>
                   <td>' . $exp[$x]['cid_empleado'] . '</td>
                   <td>' . $exp[$x]['pax'] . '</td>
                   <td>' . $exp[$x]['dfechasalida'] . '</td>
                   <td>' . $exp[$x]['dfecharegreso'] . '</td>
                   <td>' . $exp[$x]['totopeaer'] . '</td>
                   <td>' . $exp[$x]['totopeter'] . '</td>
            </tr>  ';
    }
}



        
        