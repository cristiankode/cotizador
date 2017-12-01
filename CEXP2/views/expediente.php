<?php
include ($_SERVER["DOCUMENT_ROOT"] . '/php/session2.php');
error_reporting(E_ALL);
ini_set('display_errors', '1');
include '../controllers/ExpedienteController.php';
include '../controllers/CotizacionController.php';
include '../controllers/dFiscalesController.php';
include '../controllers/PasajerosController.php';
include '../clases/tExpedienteClass.php';
include '../clases/tCotizacionClass.php';
include '../clases/dFiscalesClass.php';
include '../clases/Fecha.php';

$expedienteController = new ExpedienteController();
$cotizacionController = new CotizacionController();
$dFiscalesController = new dFiscalesController();
$paxController = new PasajerosController();
$expedienteDTO = new tExpediente();
$cotizacionDTO = new tCotizacion();
$dFiscalesDTO = new dFiscales();
$fecha = new Fecha();
if (isset($_GET['idexp'])) {
    $expedienteDTO->setCidExpediente(filter_input(INPUT_GET, "idexp"));
    $result = $expedienteController->get(trim($expedienteDTO->getCidExpediente()));

    for ($n = 0; $n < count($result); $n++) {
        $expedienteDTO->setDFechaSalida($result[$n]['dfechasalida']);
        $expedienteDTO->setCNombreCliente($result[$n]['cnombrecliente']);
        $expedienteDTO->setCDestpack($result[$n]['cdestpack']);
        $expedienteDTO->setPax($result[$n]['pax']);
        $expedienteDTO->setSComisionable($result[$n]['scomisionable']);
        $expedienteDTO->setMoneda($result[$n]['moneda']);
        $expedienteDTO->setComision($result[$n]['comision']);
        $expedienteDTO->setImpComage($result[$n]['impcomage']);
        $expedienteDTO->setComvtas($result[$n]['comvtas']);
        $expedienteDTO->setCidCotizacion($result[$n]['cid_cotizacion']);
        $expedienteDTO->setCidCliente($result[$n]['cid_cliente']);
        $expedienteDTO->setCTipoCliente($result[$n]['ctipocliente']);
        $expedienteDTO->setChora($result[$n]['chora']);
        $expedienteDTO->setMinApagar($result[$n]['minapagar']);
        $expedienteDTO->setFSal($result[$n]['fsal']);
        $expedienteDTO->setDFechaRegreso($result[$n]['dfecharegreso']);
        $expedienteDTO->setEjecutivo($result[$n]['ejecutivo']);
        $expedienteDTO->setCIniciales($result[$n]['ciniciales']);
//        $expedienteDTO->setDeptSup($result[$n]['dept_sup']);
//        $expedienteDTO->setAreaSup($result[$n]['area_sup']);

        $resultCot = $cotizacionController->get($expedienteDTO->getCidCotizacion());
        for ($x = 0; $x < count($resultCot); $x++) {
            $cotizacionDTO->setDFechaCotizacion($resultCot[$x]['dfecha']);
            $cotizacionDTO->setMailFunc_r($resultCot[$x]['mailfunc_r']);
        }

        $resultdFiscales = $dFiscalesController->get($expedienteDTO->getCidCliente());
        for ($y = 0; $y < count($resultdFiscales); $y++) {
            $dFiscalesDTO->setDireccion($resultdFiscales[$y]['direccion']);
        }
    }
}


?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Cache-Control" content="no-cache" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <?php include ($_SERVER["DOCUMENT_ROOT"] . '/php/head_lte.php'); ?>
        <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="../public/css/fileinput.min.css"/>
        <link rel="stylesheet" type="text/css" href="../public/css/styles.css"/>
        <link rel="stylesheet" type="text/css" href="../public/css/jquery.dataTables.min.css"/>
        <link rel="stylesheet" type="text/css" href="../public/css/jquery-ui.css"/>
        <link rel="stylesheet" type="text/css" href="../public/css/stylesMenu.css"/>
    </head>
    <!--
    BODY TAG OPTIONS:
    =================
    Apply one or more of the following classes to get the
    desired effect
    |---------------------------------------------------------|
    | SKINS         | skin-blue                               |
    |               | skin-black                              |
    |               | skin-purple                             |
    |               | skin-yellow                             |
    |               | skin-red                                |
    |               | skin-green                              |
    |---------------------------------------------------------|
    |LAYOUT OPTIONS | fixed                                   |
    |               | layout-boxed                            |
    |               | layout-top-nav                          |
    |               | sidebar-collapse                        |
    |               | sidebar-mini                            |
    |---------------------------------------------------------|
    -->
    <body class="skin-blue sidebar-mini sidebar-collapse fixed">

        <div class="wrapper">
            <!-- Main Header -->
            <?php include ($_SERVER["DOCUMENT_ROOT"] . '/php/header_lte.php'); ?>
            <!-- Left side column. contains the logo and sidebar -->
            <?php include ($_SERVER["DOCUMENT_ROOT"] . '/php/lateral_lte.php'); ?>
            <!-- Content Wrapper. Contains page content -->

            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <!-- 									Antes de esto no borrar 				-->
                <br/>
                <div class="container">
                    <div class="col-md-10">
                        <div class="panel panel-default">
                            <div class="panel-body" id="fondoCabecera">
                                <div class="row">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6 text-right">
                                        <label class="labelColor" for="genericLabel1">Expediente Con Confirmaci&oacute;n De Servicios.</label>
                                    </div>
                                </div>
                                <form class="form-inline">
                                    <div class="form-group">
                                        <label class="labelColor" for="cotizacion">Cotizaci&oacute;n.</label>   
                                        <input type="text" class="form-control input-sm format" name="idCot" id="idCot" style="width: 100px;" value="<?php echo $expedienteDTO->getCidCotizacion(); ?>" readonly/>
                                        <input type="text" class="form-control input-sm format" name="idMC" id="idMC" style="width: 100px;" value="<?php echo $expedienteDTO->getCidCliente(); ?>" readonly /> 
                                        <input type="text" class="form-control input-sm format" name="razonSocial" id="razonSocial" style="width: 326px;" value="<?php echo $expedienteDTO->getCNombreCliente(); ?>" readonly />
                                        <label class="labelColor" for="TipoCte">Tipo Cliente:</label>
                                        <input type="text" class="form-control input-sm format" name="tipoCliente" id="tipoCliente" style="width: 32px;margin-right: 25px;" value="<?php echo $expedienteDTO->getCTipoCliente(); ?>" readonly />
                                        <label class="labelColor" for="EXP">EXP</label>
                                        <input type="text" class="form-control input-sm format" name="expediente" id="expediente" value="<?php echo $expedienteDTO->getCidExpediente(); ?>" readonly />
                                    </div> 
                                    <div class="form-group">
                                        <label class="labelColor" for="fechaCot" style="width: 65px;">Fecha Cot.</label>
                                        <input type="text" class="form-control input-sm format" name="fechaCot" id="fechaCot" style="width: 99px;" value="<?php
                                        if (isset($_GET['idexp'])) {
                                            echo $cotizacionDTO->getDFechaCotizacion();
                                        }
                                        ?>" readonly /> 
                                        <input type="text" class="form-control input-sm format" name="direccion" id="direccion" style="width: 572px;" value="<?php
                                        if (isset($_GET['idexp'])) {
                                            echo $dFiscalesDTO->getDireccion();
                                        }
                                        ?>" readonly />
                                    </div>
                                    <div class="form-group">
                                        <input type="text"  class="form-control input-sm format" name="SPB" id="SPB" style="width: 187px;" value="<?php echo $expedienteDTO->getCIniciales() . ' ' . $expedienteDTO->getEjecutivo(); ?>" readonly />       
                                        <input type="text" class="form-control input-sm format" name="nomRaro" id="nomRaro" style="width: 190px;" value="pendiente" readonly />
                                        <label class="labelColor" for="mailContact">Mail de Contacto:</label>
                                        <input type="text" class="form-control input-sm format" name="contactoMail" id="contactoMail" style="width: 273px;" value="<?php echo $cotizacionDTO->getMailFunc_r(); ?>" readonly />
                                        <label class="labelColor" for="contactEnvio">Contactos de Envio</label>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="labelColor" for="are">Area:</label>
                                                <input type="text" class="form-control input-sm format" name="idArea" id="idArea" style="width: 32px;" value="<?php
                                                       if (isset($_GET['idexp'])) {
                                                           echo $expedienteDTO->getDeptSup();
                                                       }
                                                       ?>" readonly />
                                                <input type="text" class="form-control input-sm format" name="nomArea" id="nomArea" style="width: 119px;" value="<?php
                                                       if (isset($_GET['idexp'])) {
                                                           echo $expedienteDTO->getAreaSup();
                                                       }
                                                       ?>" readonly />
                                                <label class="labelColor" for="apertura">Apertura:</label>
                                                <input type="text" class="form-control input-sm format" name="fechaApertura" id="fechaApertura" style="width: 95px;" value="<?php
                                                       if (isset($_GET['idexp'])) {
                                                           echo $cotizacionDTO->getDFechaCotizacion();
                                                       }
                                                       ?>" readonly />
                                                <input type="text" class="form-control input-sm format" name="horaApertura" id="horaApertura"style="width: 75px;" value="<?php echo $expedienteDTO->getChora(); ?>" readonly />
                                                <label class="labelColor"for="FSalida">F.Salida:</label>
                                                <input type="text" class="form-control input-sm format" name="fSalida" id="fSalida"style="width: 90px;" value="<?php echo $expedienteDTO->getDFechaSalida(); ?>" readonly />
                                                <label class="labelColor"for="moneda">Moneda:</label>
                                                <input type="text" class="form-control input-sm format" name="tipoMoneda" id="tipoMoneda" style="width: 58px;" value="<?php echo $expedienteDTO->getMoneda(); ?>" readonly />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div><!--finPanelBody-->
                        </div><!--Fin Panel-->

                        <!--Implementa Tabs-->
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#resumen">Resumen</a></li>
                            <li><a data-toggle="tab" href="#pasajeros">Pasajeros</a></li>
                            <li><a href="tabSBasico">Serv.Basico</a></li>
                            <li><a href="tabCobranza">Cobranza</a></li>
                            <li><a href="tabMUtilidad">M.Utilidad</a></li>
                            <li><a href="tabBLQ">BLQ</a></li>
                            <li><a href="tabBAereos">B.Aereos</a></li>
                            <li><a href="tabFDePos">F.de Depos</a></li>
                            <li><a href="tabTarjBanc">Tarj. Banc</a></li>
                            <li><a href="tabEfectivo">Efectivo</a></li>
                            <li><a href="tabPDFPWEB">PDF/P WEB</a></li>
                            <li><a href="tabConfirmaciones">Confirmaciones</a></li>
                        </ul>

                        <div class="tab-content">
                            <!--tabResumen-->
                            <div id="resumen" class="tab-pane fade in active">
                                <div class="container">
                                    <br/>
                                    <div class="tab-content">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-inline">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><strong>MT</strong></div>
                                                            <input type="text" class="form-control input-sm" name="numMT" id="numMT" value="" readonly />
                                                        </div>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><strong>Nombre del Paquete</strong></div>
                                                            <input type="text" class="form-control input-sm" name="nomPaquete" id="nomPaquete" value="<?php
                                                       if (isset($_GET['idexp'])) {
                                                           echo $expedienteDTO->getCDestpack();
                                                       }
                                                       ?>" readonly />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-md-offset-2"></div>
                                            <div class="col-md-4 col-md-offset-6">
                                                <!--            <div class="form-group">
                                                                <button type="button" class="btn btn-primary btn-block">
                                                                    <img src="../public/img/padlock24x24.png"/>&nbsp;&nbsp;Cerrar el Expediente
                                                                </button>
                                                
                                                            </div>-->
                                            </div>
                                            <div class="col-md-4 col-md-offset-6">
                                                <label for="minPagar">M&iacute;nimo a Pagar</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control input-sm" name="minApagar" id="minApagar" value="<?php
                                                if (isset($_GET['idexp'])) {
                                                    echo $expedienteDTO->getMinApagar();
                                                }
                                                ?>" style="text-align: right;color: #007fff;font-size: 16px;" />
                                                    <div class="input-group-addon"><strong>USD</strong></div>
                                                </div> 
                                            </div>
                                        </div><!--fin row-->


                                        <div class="col-md-12">
                                            <div class="col-md-4">
                                                <label for="fechSalida">Fecha de Salida:</label>
                                                <input type="text" class="form-control input-sm" name="fechSalida" id="fechSalida" value="<?php
                                                if (isset($_GET['idexp'])) {
                                                    echo $expedienteDTO->getFSal();
                                                }
                                                ?>" style="color: #007fff;" />
                                                <button type="button" class="btn btn-primary btn-block" style="margin-top: 3px;">
                                                    <img src="../public/img/calendarRewind24x24.png"/>&nbsp;&nbsp;Cambiar Fecha Salida
                                                </button> 
                                            </div>
                                            <div class="col-md-6 text-center">
                                                <input type="text" class="form-control input-lg" name="fechSalidalg" id="fechSalidalg" value="<?php
                                                if (isset($_GET['idexp'])) {
                                                    echo $fecha->getFechaCompleta($expedienteDTO->getFSal());
                                                }
                                                ?>" style="line-height: 14px;margin-top: 26px; font-size: 18px;text-align:center;" readonly />
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="col-md-4">
                                                <label for="fechRegreso">Fecha de Regreso:</label>
                                                <input type="text" class="form-control input-sm" name="fechRegreso" id="fechRegreso" value="<?php
                                                       if (isset($_GET['idexp'])) {
                                                           echo $expedienteDTO->getDFechaRegreso();
                                                       }
                                                ?>" style="color: #007fff;" readonly />
                                                <button type="button" class="btn btn-primary btn-block" style="margin-top: 3px;">
                                                    <img src="../public/img/calendarEdit.png"/>&nbsp;&nbsp;Cambiar Fecha Regreso
                                                </button> 
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control input-lg" name="fechRegresolg" id="fechRegresolg" value="<?php
                                                       if (isset($_GET['idexp'])) {
                                                           echo $fecha->getFechaCompleta($expedienteDTO->getDFechaRegreso());
                                                       }
                                                ?>" style="line-height: 14px;margin-top: 27px;" readonly />
                                            </div>
                                        </div>
                                        <br/>
                                    </div>

                                </div><!--Fin Container-->
                            </div>

                            <!--tabPasajeros-->
                            <div id="pasajeros" class="tab-pane fade">
                                <br/>
                                <div class="row">
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-default">Carga Datos Adiciones Assist Card</button>
                                        <button type="button" class="btn btn-default">Solicitud de Assist Card</button>
                                        <button type="button" class="btn btn-default">Pax de Bloq (EU)</button>
                                        <button type="button" class="btn btn-default">Exportar a Excel</button>
                                    </div>
                                </div>
                                <br/>
                                <div id="mensajePaxAjax"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <form id="" class="form-horizontal">
                                            <div class="form-group col-sm-6">
                                                <label for="apeP" class="control-label">Apellido Paterno</label>
                                                <input type="text" class="form-control input-sm" name="apeP" id="apeP" placeholder="Apellido Paterno..." required />
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="apeM" class="control-label">Apellido Materno</label>
                                                <input type="text" class="form-control input-sm" name="apeM" id="apeM" placeholder="Apellido Materno..." required />
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="nombre1" class="control-label">Nombre</label>
                                                <input type="text" class="form-control input-sm" name="nombre1" id="nombre1" placeholder="Nombre..." required />
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="nombre2" class="control-label">Nombre 2</label>
                                                <input type="text" class="form-control input-sm" name="nombre2" id="nombre2" placeholder="Nombre 2..." required />
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="titulo" class="control-label">Titulo</label>
                                                <select class="form-control" name="titulo" id="titulo" required>
                                                    <option value="">Selleciona Titulo</option>
                                                     <?php
                                                    $resultTitulos = $paxController->getTitulos();
                                                    for ($z = 0; $z < count($resultTitulos); $z++) {
                                                        echo '<option value="' . trim($resultTitulos[$z]['titulo']) . '">"' . trim($resultTitulos[$z]['titulo']) . '"</value>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-10">
                                                <label for="paxPrincipal" class="control-label">Pasajero Principal
                                                    <input type="checkbox" name="checkPax" id="checkPax" />
                                                </label>
                                            </div>
                                            <div class="row">
                                                <table class="table compact cell-border" id="tablePasajeros" style="height: 80px; overflow: auto;">
                                                    <thead>
                                                        <tr>
                                                            <th>idPax</th>
                                                            <th>Apellido Paterno</th>
                                                            <th>Apellido Materno</th>
                                                            <th>Nombre</th>
                                                            <th>Nombre 2</th>
                                                            <th>Titulo</th>
                                                            <th>Pax</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $pasajeros = new PasajerosController();
                                                            $resultPax = $pasajeros->getPaxExpediente($expedienteDTO->getCidExpediente());
                                                                for($a = 0; $a < count($resultPax); $a++){
                                                                    if ($resultPax[$a]['principal'] == '1') {
                                                                        $check = "checked";
                                                                    } else {
                                                                      $check = "";
                                                                    }
                                                           
                                                            ?>
                                                            <input type="hidden" name="idPax" value="<?php echo $resultPax[$a]['idpax']?>" />    
                                                            <tr>
                                                                <td><?php echo $resultPax[$a]['idpax']?></td>
                                                                <td><?php echo $resultPax[$a]['apellidop']?></td>
                                                                <td><?php echo $resultPax[$a]['apellidom']?></td>
                                                                <td><?php echo $resultPax[$a]['nombre']?></td>
                                                                <td><?php echo $resultPax[$a]['nombre2']?></td>
                                                                <td><?php echo $resultPax[$a]['titulo']?></td>
                                                                <td>
                                                                    <input type="checkbox" class="paxPrincipal" name="paxPrincipal" id="paxPrincipal"  <?php echo $check ?> >
                                                                </td>
                                                            </tr>
                                                           <?php }?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <button type="button" name="btnAgregaPasajeros" id="btnAgregaPasajeros" class="btn btn-default btn-block">Agregar</button>
                                                </div>
                                                <div class="col-sm-4">
                                                    <button type="button" name="btneditarPasajeros" id="btneditarPasajeros" class="btn btn-default btn-block">Editar</button>
                                                </div>
                                                <div class="col-sm-4">
                                                    <button type="button" name="btneliminarPasajeros" id="btneliminarPasajeros" class="btn btn-default btn-block">Eliminar</button>
                                                </div>
                                            </div>
                                            <br/>
                                        </form>
                                        <div class="row" id="cargaPDF">
                                            <div class="col-sm-6">
                                                <button type="button" class="btn btn-default btn-block" id="addPasaporte" data-toggle="modal" data-target="#uploadPDF">Cargar Pasaporte</button>
                                            </div>
                                            <div class="col-sm-6">
                                                <button type="button" class="btn btn-default btn-block" id="addVisa" data-toggle="modal" data-target="#uploadPDF">Cargar Visa</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="button" id="consultaPasaporte" class="btn btn-default btn-block">Consultar Pasaporte</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="button" id="consultaVisa" class="btn btn-default btn-block">Consultar Visa</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="panel panel-info seccionToggle">
                                            <!-- Default panel contents -->
                                            <div class="panel-heading">Documentos Pasajeros</div>
                                            <div class="panel-body docFrame">
                                                <?php
//                                                $ext = ".pdf";
//                                                $archivo = $mc_id . $ext;
//                                                $filePath = "./archivospdf/$archivo";
//                                                if (file_exists($filePath)) {
//                                                    $archivo_buscar = $filePath;
//                                                } else {
                                                    $archivo_buscar = "http://lax.megatravel.com.mx/expo/img/logo_mt.png";
                                                //                    echo '  <div class="alert alert-danger" role="alert">
                                                //                            <strong>No tenemos Archivo de Cedula Fiscal Registrada.<br>
                                                //                            Agregalo desde el boton Cargar Cedula Fiscal<br></strong> </div>';  
//                                                }
                                                echo "<iframe src='$archivo_buscar' id='iframeid' name='iframe' frameborder='0' embedded='true'>"
                                                 . "</iframe>";
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!--tabContent-->

                        <br/>
                    </div><!--fin row 10-->

                    <!--Menu Opciones-->
                    <div class="col-md-2" style="padding-left: 0px;padding-right: 0px;">
                        <div class="panel panel-default" style="background-color:#e9e9e9; height: 550px; overflow: auto;">
                            <div class="panel-body">
                                <div class="contenedor-menu">
                                    <!--<a href="#" class="btn-menu">Menu<i class="icono fa fa-bars" aria-hidden="true"></i></a>-->
                                    <ul class="menu">
                                        <!--<li><a href="#">Inicio</a></li>-->
                                        <li><a href="#"><i class="icono izquierda fa fa-bar-chart" aria-hidden="true"></i>Control de Venta<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                                            <ul>
                                                <li><a href="#">SubMenu1</a></li>
                                                <li><a href="#">SubMenu2</a></li>
                                                <li><a href="#">SubMenu3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="icono izquierda fa fa-bar-chart" aria-hidden="true"></i>Confirmaci&oacute;n de Servicios<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                                            <ul>
                                                <li><a href="#">Servicio1</a></li>
                                                <li><a href="#">Servicio2</a></li>
                                                <li><a href="#">Servicio3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="icono izquierda fa fa-bar-chart" aria-hidden="true"></i>Visas<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                                            <ul>
                                                <li><a href="#">Visas1</a></li>
                                                <li><a href="#">Visas2</a></li>
                                                <li><a href="#">Visas3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="icono izquierda fa fa-bar-chart" aria-hidden="true"></i>Cambio de Ejecutivo-Supervisores<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                                            <ul>
                                                <li><a href="#">supervision</a></li>
                                                <li><a href="#">supervision</a></li>
                                                <li><a href="#">supervisionas3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="icono izquierda fa fa-bar-chart" aria-hidden="true"></i>Solicitud de Env&iacute;o Paqueteria<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                                            <ul>
                                                <li><a href="#">Paqueteria</a></li>
                                                <li><a href="#">Paqueteria</a></li>
                                                <li><a href="#">Paqueteria</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="icono izquierda fa fa-bar-chart" aria-hidden="true"></i>Cartas de Descuento<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                                            <ul>
                                                <li><a href="#">Cartas</a></li>
                                                <li><a href="#">Cartas</a></li>
                                                <li><a href="#">Cartas</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="icono izquierda fa fa-bar-chart" aria-hidden="true"></i>Carta Garantia<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                                            <ul>
                                                <li><a href="#">Garantia</a></li>
                                                <li><a href="#">Garantia</a></li>
                                                <li><a href="#">Garantia</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="icono izquierda fa fa-bar-chart" aria-hidden="true"></i>Marcar Expediente con MultiClientes<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                                            <ul>
                                                <li><a href="#">MultiClientes</a></li>
                                                <li><a href="#">MultiClientes</a></li>
                                                <li><a href="#">MultiClientes</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="icono izquierda fa fa-bar-chart" aria-hidden="true"></i>Marcar Expediente con Multicomisiones-Agcia<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                                            <ul>
                                                <li><a href="#">Multicomisiones</a></li>
                                                <li><a href="#">Multicomisiones</a></li>
                                                <li><a href="#">Multicomisiones</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="icono izquierda fa fa-bar-chart" aria-hidden="true"></i>Sol. Factura SAT(Operador)<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                                            <ul>
                                                <li><a href="#">Factura SAT</a></li>
                                                <li><a href="#">Factura SAT</a></li>
                                                <li><a href="#">Factura SAT</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="icono izquierda fa fa-bar-chart" aria-hidden="true"></i>Elegir Tipo de Naviera<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                                            <ul>
                                                <li><a href="#">Naviera</a></li>
                                                <li><a href="#">Naviera</a></li>
                                                <li><a href="#">Naviera</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="icono izquierda fa fa-bar-chart" aria-hidden="true"></i>Mod.F.Salida a un d&iacute;a anterior a Hoy<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                                            <ul>
                                                <li><a href="#">Mod.F.Salida</a></li>
                                                <li><a href="#">Mod.F.Salida</a></li>
                                                <li><a href="#">Mod.F.Salida</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="icono izquierda fa fa-bar-chart" aria-hidden="true"></i>Cambio de Moneda<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                                            <ul>
                                                <li><a href="#">Moneda</a></li>
                                                <li><a href="#">Moneda</a></li>
                                                <li><a href="#">Moneda</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="icono izquierda fa fa-bar-chart" aria-hidden="true"></i>Abrir,Bloquear o Cerrar Expediente<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                                            <ul>
                                                <li><a href="#">Expediente</a></li>
                                                <li><a href="#">Expediente</a></li>
                                                <li><a href="#">Expediente</a></li>
                                            </ul>
                                        </li>
                                    </ul> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--modal uploadpdf-->
                    <!--/***************MODAL Upload Archivos***********/-->
                    <form id="uploadFiles" class="formulario_upload"  method="post" enctype="multipart/form-data">
                        <div class="modal fade" id="uploadPDF" tabindex="-1" role="dialog" aria-labelledby="labeluploadModal">
                            <div class="modal-dialog modal-md" id="upPDF" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="labeluploadModal">Agregar Documento (pdf):</h4>
                                    </div>
                                    <div class="modal-body" id="bodyModalUpload">
                                        <div id="messageFiles"></div>
                                        <div id="datos_ajaxUploadpdf"></div>
                                        <div class="row" id="row_fileinput">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                                <input type="file" id="file01" name="file01" class="filestyle" data-buttonBefore="true" data-buttonName="btn-primary">
                                            </div>
                                            <div class="col-md-2"></div>
                                        </div>
                                    </div>
                                    <div id="resp-file"></div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>




                </div><!--fin container-->    




            </div>
                <!-- 									Despues de esto no borrar 				-->
                <!-- /.content -->
                <!-- /.content-wrapper -->
                <!-- Main Footer -->
<?php include ($_SERVER["DOCUMENT_ROOT"] . '/php/footer_lte.php'); ?>
                <!-- Control Sidebar -->
<?php include ($_SERVER["DOCUMENT_ROOT"] . '/php/lateralder_lte.php'); ?>
            </div>
            <!-- ./wrapper -->
<?php include ($_SERVER["DOCUMENT_ROOT"] . '/php/js.php'); ?>


            <!--Scripts /js-->

<!--<script src="../public/js/jquery.js"></script>-->
            <!--<script src="../public/js/bootstrap.min.js"></script>-->
            <script src="../public/js/jquery.dataTables.min.js"></script>
            <script src="../public/js/jquery-ui.js"></script>
            <script type="text/javascript" src="../public/js/fileinput.min.js"></script>
            <script type="text/javascript" src="../public/js/bootstrap-filestyle.min.js"></script>
            <script src="../public/js/funciones.js"></script>

    </body>
</html>